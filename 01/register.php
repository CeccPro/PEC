<?php
/**
 * Página de registro de nuevos usuarios
 * Guarda usuarios en archivo JSON con contraseñas hasheadas
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

// Procesar formulario de registro
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = sanitize($_POST['username'] ?? '');
    $email = sanitize($_POST['email'] ?? '');
    $full_name = sanitize($_POST['full_name'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';
    
    // Validaciones
    if (empty($username) || empty($email) || empty($full_name) || empty($password) || empty($confirm_password)) {
        $error = $_SESSION['lang'] == 'es' 
            ? 'Por favor complete todos los campos'
            : 'Please fill in all fields';
    } elseif ($password !== $confirm_password) {
        $error = t('password_mismatch');
    } elseif (strlen($password) < 6) {
        $error = $_SESSION['lang'] == 'es'
            ? 'La contraseña debe tener al menos 6 caracteres'
            : 'Password must be at least 6 characters';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = $_SESSION['lang'] == 'es'
            ? 'Correo electrónico inválido'
            : 'Invalid email address';
    } else {
        // Verificar si el usuario ya existe
        $users = getUsers();
        $userExists = false;
        
        foreach ($users as $user) {
            if ($user['username'] === $username) {
                $userExists = true;
                break;
            }
        }
        
        if ($userExists) {
            $error = t('user_exists');
        } else {
            // Crear nuevo usuario
            $newUser = [
                'id' => uniqid(),
                'username' => $username,
                'email' => $email,
                'full_name' => $full_name,
                'password' => hashPassword($password),
                'created_at' => date('Y-m-d H:i:s')
            ];
            
            $users[] = $newUser;
            
            if (saveUsers($users)) {
                $success = t('register_success');
                header('refresh:2;url=login.php');
            } else {
                $error = t('register_error');
            }
        }
    }
}

includeHeader(t('register_title'), 'register');
?>

<div class="container">
    <div class="auth-container">
        <div class="card auth-card fade-in">
            <div class="card-header">
                <i class="bi bi-person-plus"></i> <?php echo t('register_title'); ?>
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
                        <label for="full_name" class="form-label">
                            <i class="bi bi-person-badge"></i> <?php echo t('full_name'); ?>
                        </label>
                        <input type="text" class="form-control" id="full_name" name="full_name" 
                               required value="<?php echo htmlspecialchars($full_name ?? ''); ?>">
                    </div>
                    
                    <div class="mb-3">
                        <label for="username" class="form-label">
                            <i class="bi bi-person"></i> <?php echo t('username'); ?>
                        </label>
                        <input type="text" class="form-control" id="username" name="username" 
                               required value="<?php echo htmlspecialchars($username ?? ''); ?>">
                        <small class="text-muted">
                            <?php echo $_SESSION['lang'] == 'es' 
                                ? 'Solo letras, números y guiones bajos' 
                                : 'Only letters, numbers and underscores'; ?>
                        </small>
                    </div>
                    
                    <div class="mb-3">
                        <label for="email" class="form-label">
                            <i class="bi bi-envelope"></i> <?php echo t('email'); ?>
                        </label>
                        <input type="email" class="form-control" id="email" name="email" 
                               required value="<?php echo htmlspecialchars($email ?? ''); ?>">
                    </div>
                    
                    <div class="mb-3">
                        <label for="password" class="form-label">
                            <i class="bi bi-lock"></i> <?php echo t('password'); ?>
                        </label>
                        <input type="password" class="form-control" id="password" name="password" 
                               required minlength="6">
                        <small class="text-muted">
                            <?php echo $_SESSION['lang'] == 'es' 
                                ? 'Mínimo 6 caracteres' 
                                : 'Minimum 6 characters'; ?>
                        </small>
                    </div>
                    
                    <div class="mb-3">
                        <label for="confirm_password" class="form-label">
                            <i class="bi bi-lock-fill"></i> <?php echo t('confirm_password'); ?>
                        </label>
                        <input type="password" class="form-control" id="confirm_password" 
                               name="confirm_password" required minlength="6">
                    </div>
                    
                    <button type="submit" class="btn btn-forest w-100 mb-3">
                        <i class="bi bi-person-plus"></i> <?php echo t('register_button'); ?>
                    </button>
                </form>
                
                <hr>
                
                <div class="text-center">
                    <p class="mb-0">
                        <?php echo t('have_account'); ?>
                        <a href="login.php" class="text-success fw-bold"><?php echo t('login_here'); ?></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php includeFooter(); ?>
