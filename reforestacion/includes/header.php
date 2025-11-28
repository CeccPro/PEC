<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle ?? $translations['app_title']; ?></title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
    
    <meta name="description" content="<?php echo $translations['home_description']; ?>">
    <meta name="keywords" content="reforestación, CBTA 35, proyecto escolar, ecosistemas, matemáticas, humanidades">
    <meta name="author" content="CBTA 35 Students">
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">
                <i class="bi bi-tree-fill me-2"></i>
                <?php echo $translations['app_title']; ?>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($currentPage ?? '') == 'home' ? 'active' : ''; ?>" href="index.php">
                            <i class="bi bi-house me-1"></i>
                            <?php echo $translations['nav_home']; ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($currentPage ?? '') == 'about' ? 'active' : ''; ?>" href="pages/about.php">
                            <i class="bi bi-info-circle me-1"></i>
                            <?php echo $translations['nav_about']; ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($currentPage ?? '') == 'calculator' ? 'active' : ''; ?>" href="pages/calculator.php">
                            <i class="bi bi-calculator me-1"></i>
                            <?php echo $translations['nav_calculator']; ?>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            <i class="bi bi-book me-1"></i>
                            <?php echo $translations['nav_subjects']; ?>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="pages/matematicas.php">
                                <i class="bi bi-calculator-fill me-2"></i>
                                <?php echo $translations['subject_matematicas_title']; ?>
                            </a></li>
                            <li><a class="dropdown-item" href="pages/humanidades.php">
                                <i class="bi bi-people-fill me-2"></i>
                                <?php echo $translations['subject_humanidades_title']; ?>
                            </a></li>
                            <li><a class="dropdown-item" href="pages/programacion.php">
                                <i class="bi bi-code-slash me-2"></i>
                                <?php echo $translations['subject_programacion_title']; ?>
                            </a></li>
                            <li><a class="dropdown-item" href="pages/ecosistemas.php">
                                <i class="bi bi-tree me-2"></i>
                                <?php echo $translations['subject_ecosistemas_title']; ?>
                            </a></li>
                            <li><a class="dropdown-item" href="pages/comunicacion.php">
                                <i class="bi bi-chat-dots me-2"></i>
                                <?php echo $translations['subject_comunicacion_title']; ?>
                            </a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($currentPage ?? '') == 'cbta_project' ? 'active' : ''; ?>" href="pages/cbta_project.php">
                            <i class="bi bi-geo-alt me-1"></i>
                            <?php echo $translations['nav_cbta_project']; ?>
                        </a>
                    </li>
                </ul>
                
                <!-- Language Selector and User Menu -->
                <ul class="navbar-nav">
                    <!-- Language Selector -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            <i class="bi bi-globe me-1"></i>
                            <?php echo strtoupper($lang); ?>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item <?php echo $lang == 'es' ? 'active' : ''; ?>" 
                                   href="?lang=es" onclick="changeLanguage('es')">
                                    <i class="bi bi-flag me-2"></i>
                                    <?php echo $translations['language_spanish']; ?>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item <?php echo $lang == 'en' ? 'active' : ''; ?>" 
                                   href="?lang=en" onclick="changeLanguage('en')">
                                    <i class="bi bi-flag me-2"></i>
                                    <?php echo $translations['language_english']; ?>
                                </a>
                            </li>
                        </ul>
                    </li>
                    
                    <?php if ($isLoggedIn): ?>
                        <!-- User Menu -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                <i class="bi bi-person-circle me-1"></i>
                                <?php echo htmlspecialchars($user['name']); ?>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="pages/profile.php">
                                    <i class="bi bi-person me-2"></i>
                                    <?php echo $translations['nav_profile']; ?>
                                </a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item text-danger" href="logout.php">
                                    <i class="bi bi-box-arrow-right me-2"></i>
                                    <?php echo $translations['nav_logout']; ?>
                                </a></li>
                            </ul>
                        </li>
                    <?php else: ?>
                        <!-- Login/Register Buttons -->
                        <li class="nav-item">
                            <button class="btn btn-outline-light me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
                                <i class="bi bi-box-arrow-in-right me-1"></i>
                                <?php echo $translations['nav_login']; ?>
                            </button>
                        </li>
                        <li class="nav-item">
                            <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#registerModal">
                                <i class="bi bi-person-plus me-1"></i>
                                <?php echo $translations['nav_register']; ?>
                            </button>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Alert Messages -->
    <?php if (isset($_SESSION['message'])): ?>
        <div class="alert alert-<?php echo $_SESSION['message_type'] ?? 'info'; ?> alert-dismissible fade show m-3" role="alert">
            <i class="bi bi-check-circle-fill me-2"></i>
            <?php echo htmlspecialchars($_SESSION['message']); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        <?php unset($_SESSION['message'], $_SESSION['message_type']); ?>
    <?php endif; ?>

    <?php if (isset($_SESSION['error'])): ?>
        <div class="alert alert-<?php echo $_SESSION['error_type'] ?? 'danger'; ?> alert-dismissible fade show m-3" role="alert">
            <i class="bi bi-exclamation-triangle-fill me-2"></i>
            <?php echo htmlspecialchars($_SESSION['error']); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        <?php unset($_SESSION['error'], $_SESSION['error_type']); ?>
    <?php endif; ?>

    <!-- TODO: Agregar breadcrumbs para navegación -->
    <!-- TODO: Implementar notificaciones push -->
    <!-- TODO: Agregar modo oscuro/claro -->