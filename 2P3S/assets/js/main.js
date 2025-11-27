// Ecoblog - JavaScript Principal
document.addEventListener('DOMContentLoaded', function() {
    // Inicializar componentes
    initializeLoginForm();
    initializeRegisterForm();
    initializeAnimations();
    initializeTooltips();
    // Animar el panel de pestaña activo al cargar la página
    const activePane = document.querySelector('.tab-pane.show.active');
    if (activePane) {
        activePane.classList.add('fade-in-up');
        setTimeout(() => activePane.classList.remove('fade-in-up'), 700);
    }
    
    console.log('🌱 Ecoblog iniciada correctamente');
    // Close mobile offcanvas menu when a nav link is clicked
    const mobileNav = document.getElementById('mobileNav');
    if (mobileNav) {
        mobileNav.querySelectorAll('a.nav-link').forEach(link => {
            link.addEventListener('click', () => {
                const off = bootstrap.Offcanvas.getOrCreateInstance(mobileNav);
                off.hide();
            });
        });
    }
});

// Manejo del formulario de login
function initializeLoginForm() {
    const loginForm = document.getElementById('loginForm');
    const loginError = document.getElementById('loginError');
    
    if (loginForm) {
        loginForm.addEventListener('submit', async function(e) {
            e.preventDefault();
            
            const formData = new FormData(loginForm);
            const submitBtn = loginForm.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            
            // Mostrar loading
            submitBtn.innerHTML = `<span class="spinner-border spinner-border-sm me-2"></span>${window.translations?.login_loading || 'Loading...'}`;
            submitBtn.disabled = true;
            
            // Ocultar errores previos
            loginError.classList.add('d-none');
            
            try {
                const response = await fetch('login_process.php', {
                    method: 'POST',
                    body: formData
                });
                
                const result = await response.json();
                
                if (result.success) {
                    // Login exitoso
                    showAlert('success', result.message);
                    setTimeout(() => {
                        window.location.href = result.redirect || 'index.php';
                    }, 1000);
                } else {
                    // Error en login
                    loginError.textContent = result.message;
                    loginError.classList.remove('d-none');
                    
                    // Shake animation para el modal
                    const modal = document.getElementById('loginModal');
                    modal.classList.add('shake');
                    setTimeout(() => modal.classList.remove('shake'), 600);
                }
            } catch (error) {
                console.error('Error en login:', error);
                loginError.textContent = window.translations?.error_connection || 'Connection error. Please try again.';
                loginError.classList.remove('d-none');
            } finally {
                // Restaurar botón
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
            }
        });
    }
}

// Manejo del formulario de registro
function initializeRegisterForm() {
    const registerForm = document.getElementById('registerForm');
    const registerError = document.getElementById('registerError');
    const registerSuccess = document.getElementById('registerSuccess');

    if (registerForm) {
        registerForm.addEventListener('submit', async function(e) {
            e.preventDefault();

            if (!ReforestacionUtils.validateForm(registerForm)) {
                registerError.textContent = window.translations?.required_fields_message || 'Please complete the required fields.';
                registerError.classList.remove('d-none');
                return;
            }

            const password = registerForm.querySelector('#register_password').value;
            const confirm = registerForm.querySelector('#register_confirm_password').value;

            if (password !== confirm) {
                registerError.textContent = window.translations?.passwords_not_match || 'Passwords do not match.';
                registerError.classList.remove('d-none');
                return;
            }

            const formData = new FormData(registerForm);
            const submitBtn = registerForm.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;

            // Mostrar loading
            submitBtn.innerHTML = `<span class="spinner-border spinner-border-sm me-2"></span>${window.translations?.register_loading || 'Registering...'}`;
            submitBtn.disabled = true;

            // Ocultar mensajes previos
            registerError.classList.add('d-none');
            registerSuccess.classList.add('d-none');

            try {
                const response = await fetch('register_process.php', {
                    method: 'POST',
                    body: formData
                });

                const result = await response.json();

                if (result.success) {
                    registerSuccess.textContent = result.message;
                    registerSuccess.classList.remove('d-none');
                    showAlert('success', result.message);
                    setTimeout(() => {
                        window.location.href = result.redirect || 'index.php';
                    }, 1000);
                } else {
                    registerError.textContent = result.message;
                    registerError.classList.remove('d-none');
                }
            } catch (error) {
                console.error('Error en registro:', error);
                registerError.textContent = window.translations?.error_connection || 'Connection error. Please try again.';
                registerError.classList.remove('d-none');
            } finally {
                // Restaurar botón
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
            }
        });
    }
}

// Inicializar animaciones
function initializeAnimations() {
    // Animación de entrada para elementos
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-in-up');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);
    
    // Observar elementos con clase 'animate-on-scroll' y las pestañas del proyecto
    document.querySelectorAll('.card, .hero-section h2, .hero-section p, .hero-section-modern h2, .hero-section-modern p, .page-section, .tab-pane').forEach(el => {
        observer.observe(el);
    });
}

// Animación al mostrar una pestaña: agregar clase fade-in-up al nuevo contenido visible
document.addEventListener('shown.bs.tab', function(e) {
    const targetSelector = e.relatedTarget ? e.relatedTarget.getAttribute('data-bs-target') : null;
    const shownSelector = e.target ? e.target.getAttribute('data-bs-target') : null;
    if (shownSelector) {
        const pane = document.querySelector(shownSelector);
        if (pane) {
            pane.classList.add('fade-in-up');
            // Remover la clase después de la animación para permitir reusarla
            setTimeout(() => pane.classList.remove('fade-in-up'), 700);
        }
    }
});

// Inicializar tooltips de Bootstrap
function initializeTooltips() {
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
}

// Función para mostrar alertas
function showAlert(type, message, duration = 3000) {
    const alertContainer = document.createElement('div');
    alertContainer.className = `alert alert-${type} alert-dismissible fade show position-fixed`;
    alertContainer.style.cssText = 'top: 20px; right: 20px; z-index: 9999; min-width: 300px;';
    
    alertContainer.innerHTML = `
        ${message}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    `;
    
    document.body.appendChild(alertContainer);
    
    // Auto-remover después del tiempo especificado
    setTimeout(() => {
        if (alertContainer.parentNode) {
            alertContainer.remove();
        }
    }, duration);
}

// Smooth scroll para enlaces internos
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// Función para cambiar idioma
function changeLanguage(lang) {
    const currentUrl = new URL(window.location);
    currentUrl.searchParams.set('lang', lang);
    window.location.href = currentUrl.toString();
}

// Manejo de cookies (GDPR compliance placeholder)
function initializeCookieConsent() {
    // TODO: Implementar aviso de cookies si es necesario
    if (!localStorage.getItem('cookieConsent')) {
        console.log('🍪 Implementar aviso de cookies aquí');
    }
}

// Utilidades para desarrollo
const ReforestacionUtils = {
    // Función para debug
    log: function(message, type = 'info') {
        if (window.location.hostname === 'localhost' || window.location.hostname === '127.0.0.1') {
            console.log(`🌱 [${type.toUpperCase()}] ${message}`);
        }
    },
    
    // Validar formularios
    validateForm: function(form) {
        const inputs = form.querySelectorAll('input[required], select[required], textarea[required]');
        let isValid = true;
        
        inputs.forEach(input => {
            if (!input.value.trim()) {
                input.classList.add('is-invalid');
                isValid = false;
            } else {
                input.classList.remove('is-invalid');
            }
        });
        
        return isValid;
    },
    
    // Formatear números
    formatNumber: function(num) {
        return new Intl.NumberFormat().format(num);
    }
};

// Hacer disponible globalmente para debugging
window.ReforestacionUtils = ReforestacionUtils;

// Agregar clase shake para animaciones de error
const style = document.createElement('style');
style.textContent = `
    .shake {
        animation: shake 0.6s cubic-bezier(0.36, 0.07, 0.19, 0.97) both;
    }
    
    @keyframes shake {
        10%, 90% { transform: translate3d(-1px, 0, 0); }
        20%, 80% { transform: translate3d(2px, 0, 0); }
        30%, 50%, 70% { transform: translate3d(-4px, 0, 0); }
        40%, 60% { transform: translate3d(4px, 0, 0); }
    }
`;
document.head.appendChild(style);