<?php
/**
 * Página de Autenticación (Login y Registro)
 * Maneja login y registro de usuarios con sesiones y cookies
 */

require_once 'config.php';

$message = '';
$messageType = '';

// Procesar formulario de login
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'login') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';
    $remember = isset($_POST['remember']);
    
    if (empty($username) || empty($password)) {
        $message = $lang === 'es' ? 'Por favor completa todos los campos' : 'Please fill in all fields';
        $messageType = 'danger';
    } else {
        $result = loginUser($username, $password);
        
        if ($result['success']) {
            // Configurar cookie de "recordar" si está marcado
            if ($remember) {
                setcookie('remembered_user', $username, time() + (86400 * 30), '/'); // 30 días
            }
            
            // Redirigir a la página principal
            header('Location: index.php');
            exit;
        } else {
            $message = $result['message'];
            $messageType = 'danger';
        }
    }
}

// Procesar formulario de registro
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'register') {
    $username = trim($_POST['reg_username'] ?? '');
    $email = trim($_POST['reg_email'] ?? '');
    $password = $_POST['reg_password'] ?? '';
    $confirmPassword = $_POST['reg_confirm_password'] ?? '';
    
    if (empty($username) || empty($email) || empty($password) || empty($confirmPassword)) {
        $message = $lang === 'es' ? 'Por favor completa todos los campos' : 'Please fill in all fields';
        $messageType = 'danger';
    } elseif ($password !== $confirmPassword) {
        $message = $lang === 'es' ? 'Las contraseñas no coinciden' : 'Passwords do not match';
        $messageType = 'danger';
    } elseif (strlen($password) < 6) {
        $message = $lang === 'es' ? 'La contraseña debe tener al menos 6 caracteres' : 'Password must be at least 6 characters';
        $messageType = 'danger';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = $lang === 'es' ? 'Correo electrónico inválido' : 'Invalid email address';
        $messageType = 'danger';
    } else {
        $result = registerUser($username, $email, $password);
        
        if ($result['success']) {
            $message = $result['message'];
            $messageType = 'success';
            
            // Auto-login después del registro
            loginUser($username, $password);
            
            // Pequeño delay y redirect
            echo "<script>setTimeout(function(){ window.location.href = 'index.php'; }, 2000);</script>";
        } else {
            $message = $result['message'];
            $messageType = 'danger';
        }
    }
}

// Si ya está logueado, redirigir
if (isLoggedIn()) {
    header('Location: index.php');
    exit;
}

includeHeader(t('login'), 'auth');
?>

<!-- Hero Section -->
<section class="hero-section" style="padding: 60px 0;">
    <div class="container">
        <h1 class="display-5 fw-bold mb-3"><?php echo t('login'); ?> / <?php echo t('register'); ?></h1>
        <p class="lead">Accede a funcionalidades adicionales del proyecto</p>
    </div>
</section>

<!-- Auth Forms -->
<section class="py-5">
    <div class="container">
        <?php if ($message): ?>
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="alert alert-<?php echo $messageType; ?> alert-dismissible fade show" role="alert">
                    <?php echo $message; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            </div>
        </div>
        <?php endif; ?>
        
        <div class="row">
            <!-- Login Form -->
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">
                            <i class="bi bi-box-arrow-in-right"></i> <?php echo t('login'); ?>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="">
                            <input type="hidden" name="action" value="login">
                            
                            <div class="mb-3">
                                <label for="username" class="form-label"><?php echo t('username'); ?>:</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                                    <input type="text" class="form-control" id="username" name="username" 
                                           value="<?php echo isset($_COOKIE['remembered_user']) ? htmlspecialchars($_COOKIE['remembered_user']) : ''; ?>"
                                           required autofocus>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="password" class="form-label"><?php echo t('password'); ?>:</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>
                            </div>
                            
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="remember" name="remember" 
                                       <?php echo isset($_COOKIE['remembered_user']) ? 'checked' : ''; ?>>
                                <label class="form-check-label" for="remember">
                                    <?php echo t('remember_me'); ?>
                                </label>
                            </div>
                            
                            <button type="submit" class="btn btn-primary w-100">
                                <i class="bi bi-box-arrow-in-right"></i> <?php echo t('login'); ?>
                            </button>
                        </form>
                        
                        <hr>
                        
                        <p class="text-center mb-0">
                            <small class="text-muted">
                                <?php echo t('no_account'); ?> 
                                <a href="#" onclick="document.getElementById('register-tab').click(); return false;">
                                    <?php echo t('register'); ?>
                                </a>
                            </small>
                        </p>
                    </div>
                </div>
                
                <!-- Demo Credentials -->
                <div class="card mt-3 border-info">
                    <div class="card-body">
                        <h6 class="card-title text-info">
                            <i class="bi bi-info-circle-fill"></i> Credenciales de demostración
                        </h6>
                        <p class="small mb-2">Para probar el sistema, puedes registrar un usuario o usar estas credenciales de ejemplo:</p>
                        <div class="bg-light p-2 rounded">
                            <code class="small">
                                <strong>Usuario:</strong> demo<br>
                                <strong>Password:</strong> demo123
                            </code>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Register Form -->
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-success text-white">
                        <h4 class="mb-0" id="register-tab">
                            <i class="bi bi-person-plus-fill"></i> <?php echo t('register'); ?>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="">
                            <input type="hidden" name="action" value="register">
                            
                            <div class="mb-3">
                                <label for="reg_username" class="form-label"><?php echo t('username'); ?>:</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                                    <input type="text" class="form-control" id="reg_username" name="reg_username" 
                                           minlength="3" required>
                                </div>
                                <small class="form-text text-muted">Mínimo 3 caracteres</small>
                            </div>
                            
                            <div class="mb-3">
                                <label for="reg_email" class="form-label"><?php echo t('email'); ?>:</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
                                    <input type="email" class="form-control" id="reg_email" name="reg_email" required>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="reg_password" class="form-label"><?php echo t('password'); ?>:</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
                                    <input type="password" class="form-control" id="reg_password" name="reg_password" 
                                           minlength="6" required>
                                </div>
                                <small class="form-text text-muted">Mínimo 6 caracteres</small>
                            </div>
                            
                            <div class="mb-3">
                                <label for="reg_confirm_password" class="form-label"><?php echo t('confirm_password'); ?>:</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
                                    <input type="password" class="form-control" id="reg_confirm_password" 
                                           name="reg_confirm_password" minlength="6" required>
                                </div>
                            </div>
                            
                            <button type="submit" class="btn btn-success w-100">
                                <i class="bi bi-person-plus-fill"></i> <?php echo t('register'); ?>
                            </button>
                        </form>
                        
                        <hr>
                        
                        <p class="text-center mb-0">
                            <small class="text-muted">
                                <?php echo t('have_account'); ?> 
                                <a href="#" onclick="document.getElementById('username').focus(); return false;">
                                    <?php echo t('login'); ?>
                                </a>
                            </small>
                        </p>
                    </div>
                </div>
                
                <!-- Security Notice -->
                <div class="card mt-3 border-warning">
                    <div class="card-body">
                        <h6 class="card-title text-warning">
                            <i class="bi bi-shield-lock-fill"></i> Seguridad
                        </h6>
                        <ul class="small mb-0">
                            <li>Las contraseñas se almacenan hasheadas con bcrypt</li>
                            <li>Sesiones seguras con PHP sessions</li>
                            <li>Base de datos JSON (no-SQL) para demo</li>
                            <li>Cookies con configuración de expiración</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Beneficios de Registro -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="section-title text-center">Beneficios de Registrarte</h2>
        
        <div class="row g-4">
            <div class="col-md-3">
                <div class="card h-100 text-center border-primary">
                    <div class="card-body">
                        <i class="bi bi-save-fill display-3 text-primary mb-3"></i>
                        <h5>Guardar Cálculos</h5>
                        <p class="small">Guarda tus proyectos de reforestación y resultados de calculadoras</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="card h-100 text-center border-success">
                    <div class="card-body">
                        <i class="bi bi-journal-bookmark-fill display-3 text-success mb-3"></i>
                        <h5>Recursos Adicionales</h5>
                        <p class="small">Accede a guías descargables, plantillas y materiales educativos</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="card h-100 text-center border-info">
                    <div class="card-body">
                        <i class="bi bi-chat-dots-fill display-3 text-info mb-3"></i>
                        <h5>Comunidad</h5>
                        <p class="small">Conecta con otros estudiantes y proyectos de reforestación</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="card h-100 text-center border-warning">
                    <div class="card-body">
                        <i class="bi bi-bell-fill display-3 text-warning mb-3"></i>
                        <h5>Notificaciones</h5>
                        <p class="small">Recibe actualizaciones sobre eventos y noticias ambientales</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-4">
            <p class="text-muted">
                <small>
                    <!-- TODO: Agregar enlaces a términos de servicio y política de privacidad -->
                    Al registrarte, aceptas nuestros términos de servicio y política de privacidad
                </small>
            </p>
        </div>
    </div>
</section>

<!-- JavaScript para validación -->
<script>
// Validar que las contraseñas coincidan en tiempo real
document.getElementById('reg_confirm_password')?.addEventListener('input', function() {
    const password = document.getElementById('reg_password').value;
    const confirm = this.value;
    
    if (password !== confirm) {
        this.setCustomValidity('<?php echo $lang === 'es' ? 'Las contraseñas no coinciden' : 'Passwords do not match'; ?>');
    } else {
        this.setCustomValidity('');
    }
});

// Mostrar/ocultar contraseña (opcional - enhancement)
// TODO: Agregar botones de toggle para mostrar/ocultar contraseñas
</script>

<?php includeFooter(); ?>
