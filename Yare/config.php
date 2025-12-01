<?php
/**
 * Archivo de configuración principal del proyecto de reforestación
 * Maneja sesiones, cookies, autenticación y funciones globales
 */

// Iniciar sesión si no está iniciada
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Configuración de la base de datos JSON
define('USERS_FILE', __DIR__ . '/users.json');

// Configuración de idioma
$lang = isset($_COOKIE['lang']) ? $_COOKIE['lang'] : 'es';
if (isset($_GET['lang']) && in_array($_GET['lang'], ['es', 'en'])) {
    $lang = $_GET['lang'];
    setcookie('lang', $lang, time() + (86400 * 365), '/'); // Cookie por 1 año
    $_COOKIE['lang'] = $lang;
}

// Cargar archivo de idioma
$translations = include(__DIR__ . '/lang/' . $lang . '.php');

/**
 * Función para obtener traducciones
 * @param string $key - Clave de traducción
 * @return string - Texto traducido
 */
function t($key) {
    global $translations;
    return isset($translations[$key]) ? $translations[$key] : $key;
}

/**
 * Cargar usuarios desde archivo JSON
 * @return array - Array de usuarios
 */
function loadUsers() {
    if (!file_exists(USERS_FILE)) {
        file_put_contents(USERS_FILE, json_encode([]));
        return [];
    }
    $content = file_get_contents(USERS_FILE);
    return json_decode($content, true) ?: [];
}

/**
 * Guardar usuarios en archivo JSON
 * @param array $users - Array de usuarios
 * @return bool - Éxito de la operación
 */
function saveUsers($users) {
    return file_put_contents(USERS_FILE, json_encode($users, JSON_PRETTY_PRINT)) !== false;
}

/**
 * Registrar nuevo usuario
 * @param string $username - Nombre de usuario
 * @param string $email - Correo electrónico
 * @param string $password - Contraseña
 * @return array - Resultado con status y mensaje
 */
function registerUser($username, $email, $password) {
    $users = loadUsers();
    
    // Validar que el usuario no exista
    foreach ($users as $user) {
        if ($user['username'] === $username) {
            return ['success' => false, 'message' => 'El usuario ya existe'];
        }
        if ($user['email'] === $email) {
            return ['success' => false, 'message' => 'El correo ya está registrado'];
        }
    }
    
    // Crear nuevo usuario con password hasheada
    $newUser = [
        'id' => uniqid(),
        'username' => $username,
        'email' => $email,
        'password' => password_hash($password, PASSWORD_BCRYPT),
        'created_at' => date('Y-m-d H:i:s')
    ];
    
    $users[] = $newUser;
    
    if (saveUsers($users)) {
        return ['success' => true, 'message' => 'Usuario registrado exitosamente'];
    }
    
    return ['success' => false, 'message' => 'Error al guardar usuario'];
}

/**
 * Autenticar usuario
 * @param string $username - Nombre de usuario
 * @param string $password - Contraseña
 * @return array - Resultado con status y datos del usuario
 */
function loginUser($username, $password) {
    $users = loadUsers();
    
    foreach ($users as $user) {
        if ($user['username'] === $username && password_verify($password, $user['password'])) {
            // Iniciar sesión
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['email'] = $user['email'];
            
            return ['success' => true, 'user' => $user];
        }
    }
    
    return ['success' => false, 'message' => 'Usuario o contraseña incorrectos'];
}

/**
 * Verificar si el usuario está autenticado
 * @return bool - true si está autenticado
 */
function isLoggedIn() {
    return isset($_SESSION['user_id']);
}

/**
 * Obtener usuario actual
 * @return array|null - Datos del usuario o null
 */
function getCurrentUser() {
    if (!isLoggedIn()) {
        return null;
    }
    
    return [
        'id' => $_SESSION['user_id'],
        'username' => $_SESSION['username'],
        'email' => $_SESSION['email']
    ];
}

/**
 * Cerrar sesión
 */
function logout() {
    session_destroy();
    header('Location: index.php');
    exit;
}

/**
 * Función para incluir el header HTML
 * @param string $title - Título de la página
 * @param string $activePage - Página activa para el menú
 */
function includeHeader($title, $activePage = 'home') {
    global $lang;
    ?>
    <!DOCTYPE html>
    <html lang="<?php echo $lang; ?>">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $title; ?> - <?php echo t('site_title'); ?></title>
        
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Bootstrap Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
        
        <!-- Custom CSS -->
        <style>
            :root {
                --primary-green: #2d5016;
                --secondary-green: #5a7c3e;
                --light-green: #a8c686;
                --earth-brown: #8b6f47;
            }
            
            body {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                background-color: #f8f9fa;
            }
            
            .navbar {
                background: linear-gradient(135deg, var(--primary-green), var(--secondary-green));
                box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            }
            
            .navbar-brand {
                font-weight: bold;
                font-size: 1.5rem;
            }
            
            .hero-section {
                background: linear-gradient(rgba(45, 80, 22, 0.7), rgba(90, 124, 62, 0.7)), 
                            url('https://placehold.co/1920x600/2d5016/ffffff?text=Reforestacion');
                background-size: cover;
                background-position: center;
                color: white;
                padding: 100px 0;
                text-align: center;
            }
            
            .card {
                border: none;
                box-shadow: 0 4px 6px rgba(0,0,0,0.1);
                transition: transform 0.3s;
                margin-bottom: 20px;
            }
            
            .card:hover {
                transform: translateY(-5px);
            }
            
            .btn-primary {
                background-color: var(--primary-green);
                border-color: var(--primary-green);
            }
            
            .btn-primary:hover {
                background-color: var(--secondary-green);
                border-color: var(--secondary-green);
            }
            
            .section-title {
                color: var(--primary-green);
                font-weight: bold;
                margin-bottom: 30px;
                position: relative;
                padding-bottom: 15px;
            }
            
            .section-title::after {
                content: '';
                position: absolute;
                bottom: 0;
                left: 50%;
                transform: translateX(-50%);
                width: 100px;
                height: 3px;
                background-color: var(--light-green);
            }
            
            footer {
                background-color: var(--primary-green);
                color: white;
                padding: 40px 0;
                margin-top: 60px;
            }
            
            .lang-switcher {
                display: flex;
                gap: 10px;
            }
            
            .lang-btn {
                padding: 5px 10px;
                border-radius: 5px;
                text-decoration: none;
                color: white;
                background-color: rgba(255,255,255,0.2);
                transition: background-color 0.3s;
            }
            
            .lang-btn:hover, .lang-btn.active {
                background-color: rgba(255,255,255,0.3);
                color: white;
            }
        </style>
    </head>
    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <i class="bi bi-tree-fill"></i> <?php echo t('site_title'); ?>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link <?php echo $activePage === 'home' ? 'active' : ''; ?>" href="index.php">
                                <?php echo t('nav_home'); ?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $activePage === 'areas' ? 'active' : ''; ?>" href="areas_academicas.php">
                                <?php echo t('nav_academic_areas'); ?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $activePage === 'project' ? 'active' : ''; ?>" href="proyecto_cbta.php">
                                <?php echo t('nav_cbta_project'); ?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $activePage === 'calculator' ? 'active' : ''; ?>" href="calculadora.php">
                                <?php echo t('nav_calculator'); ?>
                            </a>
                        </li>
                    </ul>
                    
                    <!-- Language Switcher -->
                    <div class="lang-switcher me-3">
                        <a href="?lang=es" class="lang-btn <?php echo $lang === 'es' ? 'active' : ''; ?>">ES</a>
                        <a href="?lang=en" class="lang-btn <?php echo $lang === 'en' ? 'active' : ''; ?>">EN</a>
                    </div>
                    
                    <!-- User Menu -->
                    <ul class="navbar-nav">
                        <?php if (isLoggedIn()): ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                    <i class="bi bi-person-circle"></i> <?php echo $_SESSION['username']; ?>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="logout.php"><?php echo t('logout'); ?></a></li>
                                </ul>
                            </li>
                        <?php else: ?>
                            <li class="nav-item">
                                <a class="nav-link" href="auth.php">
                                    <i class="bi bi-box-arrow-in-right"></i> <?php echo t('login'); ?>
                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
    <?php
}

/**
 * Función para incluir el footer HTML
 */
function includeFooter() {
    ?>
        <!-- Footer -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h5><i class="bi bi-tree-fill"></i> <?php echo t('site_title'); ?></h5>
                        <p><?php echo t('footer_description'); ?></p>
                    </div>
                    <div class="col-md-4">
                        <h5><?php echo t('footer_links'); ?></h5>
                        <ul class="list-unstyled">
                            <li><a href="index.php" class="text-white-50"><?php echo t('nav_home'); ?></a></li>
                            <li><a href="areas_academicas.php" class="text-white-50"><?php echo t('nav_academic_areas'); ?></a></li>
                            <li><a href="proyecto_cbta.php" class="text-white-50"><?php echo t('nav_cbta_project'); ?></a></li>
                            <li><a href="calculadora.php" class="text-white-50"><?php echo t('nav_calculator'); ?></a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h5><?php echo t('footer_contact'); ?></h5>
                        <p>
                            <i class="bi bi-geo-alt-fill"></i> CBTA 35<br>
                            <i class="bi bi-envelope-fill"></i> lorem_ipsum@dolor-sit-amet.com<br> <!-- Ufff, tremendo correo electrónico xD -->
                            <!-- TODO: Agregar información de contacto real -->
                        </p>
                    </div>
                </div>
                <hr class="bg-light">
                <div class="text-center">
                    <p>&copy; <?php echo date('Y'); ?> <?php echo t('site_title'); ?>. <?php echo t('footer_rights'); ?></p>
                    <p><small><?php echo t('footer_academic'); ?></small></p>
                </div>
            </div>
        </footer>
        
        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>
    <?php
}
?>
