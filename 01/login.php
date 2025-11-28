<?php
/**
 * Página de inicio de sesión
 * Maneja autenticación con cookies y sesiones
 */

require_once 'config.php';
require_once 'functions.php';
require_once 'translations.php';

$error = '';
$success = '';

// Redireccionar si ya está logueado
if (isLoggedIn()) {
    header('Location: index.php');
    exit;
}

// Procesar formulario de login
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = sanitize($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';
    $remember = isset($_POST['remember']);
    
    if (empty($username) || empty($password)) {
        $error = $_SESSION['lang'] == 'es' 
            ? 'Por favor complete todos los campos'
            : 'Please fill in all fields';
    } else {
        $users = getUsers();
        $userFound = false;
        
        foreach ($users as $user) {
            if ($user['username'] === $username) {
                $userFound = true;
                if (verifyPassword($password, $user['password'])) {
                    // Login exitoso
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['username'] = $user['username'];
                    $_SESSION['full_name'] = $user['full_name'];
                    $_SESSION['email'] = $user['email'];
                    
                    // Establecer cookie si se marcó "recordarme"
                    if ($remember) {
                        $token = bin2hex(random_bytes(32));
                        setcookie('remember_token', $token, time() + (86400 * 30), '/'); // 30 días
                        // TODO: Guardar token en base de datos para mayor seguridad
                    }
                    
                    $success = t('login_success');
                    header('refresh:2;url=index.php');
                } else {
                    $error = t('login_error');
                }
                break;
            }
        }
        
        if (!$userFound) {
            $error = t('login_error');
        }
    }
}

includeHeader(t('login_title'), 'login');
?>

<div class="container">
    <div class="auth-container">
        <div class="card auth-card fade-in">
            <div class="card-header">
                <i class="bi bi-box-arrow-in-right"></i> <?php echo t('login_title'); ?>
            </div>
            <div class="card-body p-4">
                <?php if ($error): ?>
                    <div class="alert alert-danger" role="alert">
                        <i class="bi bi-exclamation-triangle"></i> <?php echo htmlspecialchars($error); ?>
                    </div>
                <?php endif; ?>
                
                <?php if ($success): ?>
                    <div class="alert alert-success" role="alert">
                        <i class="bi bi-check-circle"></i> <?php echo htmlspecialchars($success); ?>
                    </div>
                <?php endif; ?>
                
                <form method="POST" action="">
                    <div class="mb-3">
                        <label for="username" class="form-label">
                            <i class="bi bi-person"></i> <?php echo t('username'); ?>
                        </label>
                        <input type="text" class="form-control" id="username" name="username" 
                               required value="<?php echo htmlspecialchars($username ?? ''); ?>">
                    </div>
                    
                    <div class="mb-3">
                        <label for="password" class="form-label">
                            <i class="bi bi-lock"></i> <?php echo t('password'); ?>
                        </label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="remember" name="remember">
                        <label class="form-check-label" for="remember">
                            <?php echo $_SESSION['lang'] == 'es' ? 'Recordarme' : 'Remember me'; ?>
                        </label>
                    </div>
                    
                    <button type="submit" class="btn btn-forest w-100 mb-3">
                        <i class="bi bi-box-arrow-in-right"></i> <?php echo t('login_button'); ?>
                    </button>
                </form>
                
                <hr>
                
                <div class="text-center">
                    <p class="mb-0">
                        <?php echo t('no_account'); ?>
                        <a href="register.php" class="text-success fw-bold"><?php echo t('register_here'); ?></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php includeFooter(); ?>
