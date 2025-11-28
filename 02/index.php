<?php
/**
 * Proyecto Escolar: Portal de Reforestación
 * Integración multidisciplinaria de matemáticas, humanidades, programación,
 * estudio de ecosistemas y lengua y comunicación aplicado a la reforestación
 * 
 * @author: Estudiante CBTA 35
 * @date: November 2025
 * @version: 1.0
 */

session_start();

// Cargar configuración y dependencias
require_once 'config/database.php';
require_once 'lang/translations.php';

// Configurar idioma por defecto
$current_lang = $_SESSION['language'] ?? $_COOKIE['preferred_lang'] ?? 'es';

// Cambiar idioma si se solicita
if (isset($_GET['lang']) && in_array($_GET['lang'], ['es', 'en'])) {
    $current_lang = $_GET['lang'];
    $_SESSION['language'] = $current_lang;
    setcookie('preferred_lang', $current_lang, time() + (30 * 24 * 60 * 60), "/"); // 30 días
}

$t = $translations[$current_lang];

// Procesar acciones de login/logout
if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'login':
            $result = loginUser($_POST['username'], $_POST['password']);
            if ($result['success']) {
                $_SESSION['user'] = $result['user'];
                setcookie('remember_user', $result['user']['username'], time() + (7 * 24 * 60 * 60), "/");
            } else {
                $login_error = $result['message'];
            }
            break;
        
        case 'register':
            $result = registerUser($_POST['username'], $_POST['email'], $_POST['password']);
            if ($result['success']) {
                $register_success = $result['message'];
            } else {
                $register_error = $result['message'];
            }
            break;
        
        case 'logout':
            session_destroy();
            setcookie('remember_user', '', time() - 3600, "/");
            header('Location: index.php');
            exit;
    }
}

// TODO: Implementar sistema de recuperación de contraseña
// TODO: Añadir validación adicional del lado del servidor
// TODO: Implementar sistema de roles de usuario
?>

<!DOCTYPE html>
<html lang="<?php echo $current_lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $t['site_title']; ?></title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- CSS personalizado -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
    <!-- Navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#inicio">
                <i class="fas fa-seedling me-2"></i>
                <?php echo $t['site_title']; ?>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#inicio"><?php echo $t['home']; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#investigacion"><?php echo $t['research']; ?></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            <?php echo $t['subjects']; ?>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#matematicas"><?php echo $t['mathematics']; ?></a></li>
                            <li><a class="dropdown-item" href="#humanidades"><?php echo $t['humanities']; ?></a></li>
                            <li><a class="dropdown-item" href="#programacion"><?php echo $t['programming']; ?></a></li>
                            <li><a class="dropdown-item" href="#ecosistemas"><?php echo $t['ecosystems']; ?></a></li>
                            <li><a class="dropdown-item" href="#comunicacion"><?php echo $t['communication']; ?></a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#cbta35"><?php echo $t['cbta_case']; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#calculadora"><?php echo $t['calculator']; ?></a>
                    </li>
                </ul>
                
                <div class="d-flex align-items-center">
                    <!-- Selector de idioma -->
                    <div class="dropdown me-3">
                        <button class="btn btn-outline-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown">
                            <i class="fas fa-globe me-1"></i>
                            <?php echo strtoupper($current_lang); ?>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="?lang=es"><i class="flag-icon flag-icon-mx me-2"></i>Español</a></li>
                            <li><a class="dropdown-item" href="?lang=en"><i class="flag-icon flag-icon-us me-2"></i>English</a></li>
                        </ul>
                    </div>
                    
                    <!-- Usuario logueado o botón de login -->
                    <?php if (isset($_SESSION['user'])): ?>
                        <div class="dropdown">
                            <button class="btn btn-outline-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                <i class="fas fa-user me-1"></i>
                                <?php echo htmlspecialchars($_SESSION['user']['username']); ?>
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <form method="POST" class="mb-0">
                                        <button type="submit" name="action" value="logout" class="dropdown-item">
                                            <i class="fas fa-sign-out-alt me-1"></i>
                                            <?php echo $t['logout']; ?>
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    <?php else: ?>
                        <button class="btn btn-outline-light btn-sm" data-bs-toggle="modal" data-bs-target="#loginModal">
                            <i class="fas fa-sign-in-alt me-1"></i>
                            <?php echo $t['login']; ?>
                        </button>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>

    <!-- Sección Hero -->
    <section id="inicio" class="hero-section">
        <div class="container">
            <div class="row align-items-center min-vh-100">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold text-white mb-4">
                        <?php echo $t['hero_title']; ?>
                    </h1>
                    <p class="lead text-white mb-4">
                        <?php echo $t['hero_subtitle']; ?>
                    </p>
                    <div class="d-flex gap-3">
                        <a href="#investigacion" class="btn btn-light btn-lg">
                            <?php echo $t['start_exploration']; ?>
                        </a>
                        <a href="#calculadora" class="btn btn-outline-light btn-lg">
                            <?php echo $t['use_calculator']; ?>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="https://placehold.co/600x400/228B22/FFFFFF?text=Reforestación+Hero" 
                         alt="<?php echo $t['reforestation_hero']; ?>" 
                         class="img-fluid rounded shadow-lg">
                    <!-- TODO: Reemplazar con imagen real de reforestación -->
                </div>
            </div>
        </div>
    </section>

    <!-- Estadísticas rápidas -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3 mb-4">
                    <div class="card border-0 h-100">
                        <div class="card-body">
                            <i class="fas fa-tree text-success fa-3x mb-3"></i>
                            <h3 class="text-success">31%</h3>
                            <p class="mb-0"><?php echo $t['forest_coverage']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card border-0 h-100">
                        <div class="card-body">
                            <i class="fas fa-cloud text-primary fa-3x mb-3"></i>
                            <h3 class="text-primary">861 Pg</h3>
                            <p class="mb-0"><?php echo $t['carbon_storage']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card border-0 h-100">
                        <div class="card-body">
                            <i class="fas fa-users text-warning fa-3x mb-3"></i>
                            <h3 class="text-warning">1.6B</h3>
                            <p class="mb-0"><?php echo $t['people_depend']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card border-0 h-100">
                        <div class="card-body">
                            <i class="fas fa-exclamation-triangle text-danger fa-3x mb-3"></i>
                            <h3 class="text-danger">10-15M</h3>
                            <p class="mb-0"><?php echo $t['annual_loss']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Investigación -->
    <section id="investigacion" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center mb-5"><?php echo $t['research_section']; ?></h2>
                </div>
            </div>
            
            <!-- Introducción a la Reforestación -->
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto">
                    <div class="card shadow">
                        <div class="card-body">
                            <h3 class="card-title text-center text-success mb-4"><?php echo $t['introduction']; ?></h3>
                            <img src="https://placehold.co/800x300/228B22/FFFFFF?text=Bosques+Tropicales" 
                                 alt="<?php echo $t['tropical_forests']; ?>" 
                                 class="img-fluid rounded mb-4">
                            <!-- TODO: Usar imagen real de vista aérea de bosques tropicales -->
                            
                            <p class="lead">
                                <?php echo $t['reforestation_intro']; ?>
                            </p>
                            <p>
                                <?php echo $t['global_forest_data']; ?>
                            </p>
                            <p>
                                <?php echo $t['deforestation_crisis']; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Fundamentos Ecológicos -->
            <div class="row mb-5">
                <div class="col-12">
                    <h3 class="text-center mb-4"><?php echo $t['ecological_foundations']; ?></h3>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card h-100">
                        <img src="https://placehold.co/400x200/32CD32/FFFFFF?text=Sucesión+Forestal" 
                             class="card-img-top" 
                             alt="<?php echo $t['forest_succession']; ?>">
                        <!-- TODO: Usar imagen real del proceso de sucesión forestal -->
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $t['forest_succession']; ?></h5>
                            <p class="card-text"><?php echo $t['succession_description']; ?></p>
                            
                            <h6 class="text-success"><?php echo $t['pioneer_species']; ?></h6>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-success me-2"></i><?php echo $t['rapid_growth']; ?></li>
                                <li><i class="fas fa-check text-success me-2"></i><?php echo $t['high_light_tolerance']; ?></li>
                                <li><i class="fas fa-check text-success me-2"></i><?php echo $t['degraded_soil_tolerance']; ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card h-100">
                        <img src="https://placehold.co/400x200/228B22/FFFFFF?text=Interacciones+Ecológicas" 
                             class="card-img-top" 
                             alt="<?php echo $t['ecological_interactions']; ?>">
                        <!-- TODO: Usar imagen real de interacciones ecológicas -->
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $t['ecological_interactions']; ?></h5>
                            <p class="card-text"><?php echo $t['interactions_description']; ?></p>
                            
                            <h6 class="text-primary"><?php echo $t['symbiosis']; ?></h6>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-arrow-right text-primary me-2"></i><?php echo $t['mycorrhizae']; ?></li>
                                <li><i class="fas fa-arrow-right text-primary me-2"></i><?php echo $t['nitrogen_fixation']; ?></li>
                                <li><i class="fas fa-arrow-right text-primary me-2"></i><?php echo $t['specialized_pollinators']; ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Secciones de Materias -->
    <?php include 'includes/subjects.php'; ?>

    <!-- Caso de Estudio CBTA 35 -->
    <?php include 'includes/cbta_case.php'; ?>

    <!-- Calculadora de Reforestación -->
    <?php include 'includes/calculator.php'; ?>

    <!-- Footer -->
    <footer class="bg-dark text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5><i class="fas fa-seedling me-2"></i><?php echo $t['site_title']; ?></h5>
                    <p><?php echo $t['footer_description']; ?></p>
                </div>
                <div class="col-md-6">
                    <h6><?php echo $t['references']; ?></h6>
                    <ul class="list-unstyled small">
                        <li>Pan, Y., et al. (2011). A large and persistent carbon sink in the world's forests. <em>Science</em>, 333(6045), 988-993.</li>
                        <li>FAO. (2020). Global Forest Resources Assessment 2020. Food and Agriculture Organization.</li>
                        <li>Chazdon, R. L. (2008). Second growth: the promise of tropical forest regeneration. University of Chicago Press.</li>
                        <!-- TODO: Añadir más referencias del archivo de investigación -->
                    </ul>
                </div>
            </div>
            <hr class="my-4">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="mb-0">&copy; 2025 CBTA 35 - <?php echo $t['school_project']; ?></p>
                </div>
                <div class="col-md-6 text-end">
                    <small><?php echo $t['made_with']; ?> <i class="fas fa-heart text-danger"></i> <?php echo $t['for_environment']; ?></small>
                </div>
            </div>
        </div>
    </footer>

    <!-- Modal de Login/Registro -->
    <div class="modal fade" id="loginModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <ul class="nav nav-pills" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="pill" href="#login-tab"><?php echo $t['login']; ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="pill" href="#register-tab"><?php echo $t['register']; ?></a>
                        </li>
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="tab-content">
                        <!-- Login Tab -->
                        <div class="tab-pane fade show active" id="login-tab">
                            <?php if (isset($login_error)): ?>
                                <div class="alert alert-danger"><?php echo $login_error; ?></div>
                            <?php endif; ?>
                            <form method="POST">
                                <input type="hidden" name="action" value="login">
                                <div class="mb-3">
                                    <label class="form-label"><?php echo $t['username']; ?></label>
                                    <input type="text" name="username" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label"><?php echo $t['password']; ?></label>
                                    <input type="password" name="password" class="form-control" required>
                                </div>
                                <button type="submit" class="btn btn-success w-100"><?php echo $t['login']; ?></button>
                            </form>
                        </div>
                        
                        <!-- Register Tab -->
                        <div class="tab-pane fade" id="register-tab">
                            <?php if (isset($register_error)): ?>
                                <div class="alert alert-danger"><?php echo $register_error; ?></div>
                            <?php endif; ?>
                            <?php if (isset($register_success)): ?>
                                <div class="alert alert-success"><?php echo $register_success; ?></div>
                            <?php endif; ?>
                            <form method="POST">
                                <input type="hidden" name="action" value="register">
                                <div class="mb-3">
                                    <label class="form-label"><?php echo $t['username']; ?></label>
                                    <input type="text" name="username" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label"><?php echo $t['email']; ?></label>
                                    <input type="email" name="email" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label"><?php echo $t['password']; ?></label>
                                    <input type="password" name="password" class="form-control" minlength="6" required>
                                </div>
                                <button type="submit" class="btn btn-primary w-100"><?php echo $t['register']; ?></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>