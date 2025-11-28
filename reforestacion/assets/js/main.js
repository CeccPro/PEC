/**
 * JavaScript principal para el Sistema de Reforestación CBTA 35
 * Maneja interacciones, animaciones y funcionalidad dinámica
 */

// Configuración de tipos de árboles (sincronizada con PHP)
const TREE_TYPES = {
    pino: {
        name: { es: 'Pino', en: 'Pine' },
        spacing: 3,
        soil_efficiency: { arcilloso: 0.7, arenoso: 0.9, limoso: 0.8, franco: 0.95 },
        growth_rate: 0.5,
        co2_absorption: 22
    },
    encino: {
        name: { es: 'Encino', en: 'Oak' },
        spacing: 4,
        soil_efficiency: { arcilloso: 0.9, arenoso: 0.6, limoso: 0.9, franco: 1.0 },
        growth_rate: 0.3,
        co2_absorption: 18
    },
    cedro: {
        name: { es: 'Cedro', en: 'Cedar' },
        spacing: 5,
        soil_efficiency: { arcilloso: 0.8, arenoso: 0.7, limoso: 0.95, franco: 0.9 },
        growth_rate: 0.4,
        co2_absorption: 25
    },
    eucalipto: {
        name: { es: 'Eucalipto', en: 'Eucalyptus' },
        spacing: 3.5,
        soil_efficiency: { arcilloso: 0.6, arenoso: 0.8, limoso: 0.7, franco: 0.8 },
        growth_rate: 1.2,
        co2_absorption: 35
    }
};

// Variables globales
let currentLanguage = 'es';

/**
 * Inicialización cuando el DOM está listo
 */
document.addEventListener('DOMContentLoaded', function() {
    initializeApp();
});

/**
 * Función principal de inicialización
 */
function initializeApp() {
    // Detectar idioma actual
    currentLanguage = document.documentElement.lang || 'es';
    
    // Inicializar componentes
    initializeAnimations();
    initializeReforestationCalculator();
    initializeForms();
    initializeTooltips();
    initializeScrollEffects();
    
    // Configurar eventos
    setupEventListeners();
    
    console.log('🌲 Sistema de Reforestación CBTA 35 iniciado correctamente');
}

/**
 * Inicializar animaciones de scroll
 */
function initializeAnimations() {
    // Configurar Intersection Observer para animaciones
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(handleIntersection, observerOptions);
    
    // Observar elementos con clase animate-on-scroll
    document.querySelectorAll('.animate-on-scroll').forEach(element => {
        observer.observe(element);
    });
}

/**
 * Manejar intersecciones para animaciones
 */
function handleIntersection(entries, observer) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('fade-in');
            observer.unobserve(entry.target);
        }
    });
}

/**
 * Inicializar calculadora de reforestación
 */
function initializeReforestationCalculator() {
    const calculatorForm = document.getElementById('reforestationCalculator');
    if (!calculatorForm) return;
    
    const inputs = calculatorForm.querySelectorAll('input, select');
    
    // Agregar listeners para cálculo en tiempo real
    inputs.forEach(input => {
        input.addEventListener('input', debounce(calculateReforestation, 500));
        input.addEventListener('change', calculateReforestation);
    });
}

/**
 * Calcular reforestación (versión JavaScript para vista previa)
 */
function calculateReforestation() {
    const form = document.getElementById('reforestationCalculator');
    if (!form) return;
    
    const area = parseFloat(form.querySelector('[name="area"]').value) || 0;
    const treeType = form.querySelector('[name="tree_type"]').value;
    const soilType = form.querySelector('[name="soil_type"]').value;
    
    const resultsContainer = document.getElementById('calculatorResults');
    if (!resultsContainer) return;
    
    // Validar datos
    if (area <= 0 || !treeType || !soilType || !TREE_TYPES[treeType]) {
        resultsContainer.style.display = 'none';
        return;
    }
    
    // Realizar cálculos
    const treeData = TREE_TYPES[treeType];
    const spacing = treeData.spacing;
    const treesPerHectare = 10000 / (spacing * spacing);
    const totalTrees = Math.round(treesPerHectare * area);
    const efficiency = treeData.soil_efficiency[soilType] || 1;
    const adjustedTrees = Math.round(totalTrees * efficiency);
    const co2Capture = Math.round(adjustedTrees * treeData.co2_absorption);
    
    // Mostrar resultados
    resultsContainer.innerHTML = `
        <div class="results-preview mt-4 p-3 bg-light rounded">
            <h6 class="text-success mb-3">
                <i class="bi bi-calculator me-2"></i>
                Vista Previa de Resultados
            </h6>
            <div class="row text-center">
                <div class="col-md-3">
                    <div class="fw-bold text-success">${adjustedTrees.toLocaleString()}</div>
                    <small class="text-muted">Árboles necesarios</small>
                </div>
                <div class="col-md-3">
                    <div class="fw-bold text-primary">${(efficiency * 100).toFixed(0)}%</div>
                    <small class="text-muted">Eficiencia</small>
                </div>
                <div class="col-md-3">
                    <div class="fw-bold text-info">${co2Capture.toLocaleString()} kg</div>
                    <small class="text-muted">CO₂ anual</small>
                </div>
                <div class="col-md-3">
                    <div class="fw-bold text-warning">${treeData.growth_rate} m/año</div>
                    <small class="text-muted">Crecimiento</small>
                </div>
            </div>
            <div class="text-center mt-3">
                <small class="text-muted">
                    💡 Para cálculos detallados, usa la 
                    <a href="pages/calculator.php">calculadora completa</a>
                </small>
            </div>
        </div>
    `;
    resultsContainer.style.display = 'block';
}

/**
 * Configurar event listeners globales
 */
function setupEventListeners() {
    // Cambio de idioma
    document.querySelectorAll('a[onclick*="changeLanguage"]').forEach(element => {
        element.addEventListener('click', function(e) {
            e.preventDefault();
            const lang = this.href.includes('lang=en') ? 'en' : 'es';
            changeLanguage(lang);
        });
    });
}

/**
 * Cambiar idioma
 */
function changeLanguage(lang) {
    if (!['es', 'en'].includes(lang)) return;
    
    // Construir URL con parámetro de idioma
    const url = new URL(window.location);
    url.searchParams.set('lang', lang);
    
    // Redireccionar
    window.location.href = url.toString();
}

/**
 * Inicializar formularios con validación
 */
function initializeForms() {
    // Validación de contraseñas en registro
    const registerForm = document.querySelector('form[action*="register_process"]');
    if (registerForm) {
        const password = registerForm.querySelector('[name="password"]');
        const confirmPassword = registerForm.querySelector('[name="confirm_password"]');
        
        if (password && confirmPassword) {
            confirmPassword.addEventListener('input', function() {
                if (password.value !== confirmPassword.value) {
                    confirmPassword.setCustomValidity('Las contraseñas no coinciden');
                } else {
                    confirmPassword.setCustomValidity('');
                }
            });
        }
    }
}

/**
 * Inicializar tooltips de Bootstrap
 */
function initializeTooltips() {
    // Inicializar tooltips si existen
    const tooltipElements = document.querySelectorAll('[data-bs-toggle="tooltip"]');
    if (tooltipElements.length > 0 && typeof bootstrap !== 'undefined') {
        tooltipElements.forEach(element => {
            new bootstrap.Tooltip(element);
        });
    }
}

/**
 * Inicializar efectos de scroll
 */
function initializeScrollEffects() {
    // Crear botón "volver arriba"
    createScrollToTopButton();
}

/**
 * Crear botón para volver arriba
 */
function createScrollToTopButton() {
    const button = document.createElement('button');
    button.innerHTML = '<i class="bi bi-arrow-up"></i>';
    button.className = 'btn btn-success position-fixed bottom-0 end-0 m-4 rounded-circle';
    button.style.cssText = `
        width: 50px;
        height: 50px;
        display: none;
        z-index: 1000;
        box-shadow: 0 4px 12px rgba(0,0,0,0.3);
    `;
    button.onclick = () => window.scrollTo({ top: 0, behavior: 'smooth' });
    
    document.body.appendChild(button);
    
    // Mostrar/ocultar según scroll
    window.addEventListener('scroll', function() {
        if (window.scrollY > 500) {
            button.style.display = 'block';
        } else {
            button.style.display = 'none';
        }
    });
}

/**
 * Función utilitaria: debounce
 */
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

// Exportar funciones para uso global
window.ReforestationApp = {
    calculateReforestation,
    changeLanguage
};

// Configuración global
const ReforestationApp = {
    init() {
        this.initLanguageSwitcher();
        this.initCalculator();
        this.initAnimations();
        this.initFormValidation();
        this.initScrollEffects();
    },

    /**
     * Inicializar cambio de idioma
     */
    initLanguageSwitcher() {
        // Manejar cambio de idioma
        window.changeLanguage = function(lang) {
            // Guardar preferencia en localStorage
            localStorage.setItem('preferred_language', lang);
            
            // Obtener URL actual
            const url = new URL(window.location);
            url.searchParams.set('lang', lang);
            
            // Redirigir con nuevo idioma
            window.location.href = url.toString();
        };
    },

    /**
     * Inicializar calculadora de reforestación
     */
    initCalculator() {
        const calculatorForm = document.getElementById('reforestationCalculator');
        const resultsContainer = document.getElementById('calculatorResults');

        if (!calculatorForm || !resultsContainer) return;

        calculatorForm.addEventListener('submit', (e) => {
            e.preventDefault();
            this.calculateReforestation();
        });

        // Actualizar cálculos en tiempo real
        const inputs = calculatorForm.querySelectorAll('input, select');
        inputs.forEach(input => {
            input.addEventListener('input', () => {
                this.calculateReforestation();
            });
        });
    },

    /**
     * Realizar cálculos de reforestación
     */
    calculateReforestation() {
        const form = document.getElementById('reforestationCalculator');
        const results = document.getElementById('calculatorResults');
        
        if (!form || !results) return;

        const formData = new FormData(form);
        const area = parseFloat(formData.get('area')) || 0;
        const treeType = formData.get('tree_type');
        const soilType = formData.get('soil_type');

        if (area <= 0 || !treeType || !soilType) {
            results.style.display = 'none';
            return;
        }

        // Configuración de tipos de árboles (debe coincidir con config.php)
        const treeTypes = {
            pino: {
                spacing: 3,
                soilEfficiency: { arcilloso: 0.7, arenoso: 0.9, limoso: 0.8, franco: 0.95 },
                growthRate: 0.5,
                co2Absorption: 22
            },
            encino: {
                spacing: 4,
                soilEfficiency: { arcilloso: 0.9, arenoso: 0.6, limoso: 0.9, franco: 1.0 },
                growthRate: 0.3,
                co2Absorption: 18
            },
            cedro: {
                spacing: 5,
                soilEfficiency: { arcilloso: 0.8, arenoso: 0.7, limoso: 0.95, franco: 0.9 },
                growthRate: 0.4,
                co2Absorption: 25
            },
            eucalipto: {
                spacing: 3.5,
                soilEfficiency: { arcilloso: 0.6, arenoso: 0.8, limoso: 0.7, franco: 0.8 },
                growthRate: 1.2,
                co2Absorption: 35
            }
        };

        const tree = treeTypes[treeType];
        if (!tree) return;

        // Cálculos
        const areaM2 = area * 10000; // Convertir hectáreas a m²
        const spacingM2 = tree.spacing * tree.spacing;
        const maxTrees = Math.floor(areaM2 / spacingM2);
        const efficiency = tree.soilEfficiency[soilType] || 1;
        const treesNeeded = Math.round(maxTrees * efficiency);
        const co2Annual = treesNeeded * tree.co2Absorption;
        const growthRate = tree.growthRate;
        const spacing = tree.spacing;

        // Mostrar resultados
        this.displayResults({
            treesNeeded,
            efficiency: Math.round(efficiency * 100),
            co2Annual,
            growthRate,
            spacing
        });
    },

    /**
     * Mostrar resultados de la calculadora
     */
    displayResults(data) {
        const results = document.getElementById('calculatorResults');
        if (!results) return;

        // Obtener textos según idioma actual
        const lang = document.documentElement.lang || 'es';
        
        results.innerHTML = `
            <div class="results-section fade-in">
                <h4 class="text-success mb-4">
                    <i class="bi bi-check-circle-fill me-2"></i>
                    ${lang === 'es' ? 'Resultados del Cálculo:' : 'Calculation Results:'}
                </h4>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="result-item">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-tree text-success fs-3 me-3"></i>
                                <div>
                                    <h6 class="mb-1">${lang === 'es' ? 'Árboles necesarios:' : 'Trees needed:'}</h6>
                                    <span class="h5 text-success">${data.treesNeeded.toLocaleString()}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="result-item">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-speedometer2 text-primary fs-3 me-3"></i>
                                <div>
                                    <h6 class="mb-1">${lang === 'es' ? 'Eficiencia en este suelo:' : 'Efficiency in this soil:'}</h6>
                                    <span class="h5 text-primary">${data.efficiency}%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="result-item">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-cloud text-info fs-3 me-3"></i>
                                <div>
                                    <h6 class="mb-1">${lang === 'es' ? 'Captura de CO₂ anual estimada:' : 'Estimated annual CO₂ capture:'}</h6>
                                    <span class="h5 text-info">${data.co2Annual.toLocaleString()} kg</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="result-item">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-arrow-up-circle text-warning fs-3 me-3"></i>
                                <div>
                                    <h6 class="mb-1">${lang === 'es' ? 'Crecimiento anual:' : 'Annual growth:'}</h6>
                                    <span class="h5 text-warning">${data.growthRate}m</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="alert alert-info mt-3">
                    <i class="bi bi-info-circle me-2"></i>
                    <strong>${lang === 'es' ? 'Espaciamiento recomendado:' : 'Recommended spacing:'}</strong> 
                    ${data.spacing}m x ${data.spacing}m ${lang === 'es' ? 'entre árboles' : 'between trees'}
                </div>
            </div>
        `;

        results.style.display = 'block';
        
        // Animar la aparición
        setTimeout(() => {
            results.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        }, 300);
    },

    /**
     * Inicializar animaciones
     */
    initAnimations() {
        // Animar elementos cuando entren en vista
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('fade-in');
                }
            });
        }, observerOptions);

        // Observar elementos con clase animate-on-scroll
        document.querySelectorAll('.animate-on-scroll').forEach(el => {
            observer.observe(el);
        });
    },

    /**
     * Inicializar validación de formularios
     */
    initFormValidation() {
        // Validación en tiempo real de contraseñas
        const passwordConfirm = document.getElementById('registerConfirmPassword');
        const password = document.getElementById('registerPassword');

        if (password && passwordConfirm) {
            passwordConfirm.addEventListener('input', () => {
                if (password.value !== passwordConfirm.value) {
                    passwordConfirm.setCustomValidity('Las contraseñas no coinciden');
                } else {
                    passwordConfirm.setCustomValidity('');
                }
            });
        }

        // Validación Bootstrap
        const forms = document.querySelectorAll('.needs-validation');
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            });
        });
    },

    /**
     * Inicializar efectos de scroll
     */
    initScrollEffects() {
        let ticking = false;

        function updateScrollEffect() {
            const scrolled = window.pageYOffset;
            const navbar = document.querySelector('.navbar');
            
            if (navbar) {
                if (scrolled > 100) {
                    navbar.classList.add('navbar-scrolled');
                } else {
                    navbar.classList.remove('navbar-scrolled');
                }
            }
            
            ticking = false;
        }

        window.addEventListener('scroll', () => {
            if (!ticking) {
                requestAnimationFrame(updateScrollEffect);
                ticking = true;
            }
        });

        // Smooth scroll para enlaces internos
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
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
    },

    /**
     * Utilidades
     */
    utils: {
        // Formatear números
        formatNumber(num, locale = 'es-MX') {
            return new Intl.NumberFormat(locale).format(num);
        },

        // Mostrar loading
        showLoading(element) {
            if (element) {
                element.innerHTML = '<div class="loading"></div>';
            }
        },

        // Ocultar loading
        hideLoading(element, content) {
            if (element) {
                element.innerHTML = content;
            }
        },

        // Mostrar notificación
        showNotification(message, type = 'info') {
            const notification = document.createElement('div');
            notification.className = `alert alert-${type} alert-dismissible fade show position-fixed`;
            notification.style.cssText = 'top: 20px; right: 20px; z-index: 9999; min-width: 300px;';
            notification.innerHTML = `
                ${message}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            `;
            document.body.appendChild(notification);

            // Auto-remove después de 5 segundos
            setTimeout(() => {
                notification.remove();
            }, 5000);
        }
    }
};

// Inicializar cuando el DOM esté listo
document.addEventListener('DOMContentLoaded', () => {
    ReforestationApp.init();
});

// Funciones globales para compatibilidad
window.ReforestationApp = ReforestationApp;

// TODO: Agregar funcionalidad de PWA
// TODO: Implementar cache de datos offline
// TODO: Agregar análisis de rendimiento
// TODO: Implementar tests automatizados