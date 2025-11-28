<?php
/**
 * Funciones auxiliares del proyecto
 * Contiene funciones reutilizables en toda la aplicación
 */

require_once 'config.php';

/**
 * Leer usuarios del archivo JSON
 */
function getUsers() {
    if (file_exists(USERS_FILE)) {
        $content = file_get_contents(USERS_FILE);
        return json_decode($content, true) ?? [];
    }
    return [];
}

/**
 * Guardar usuarios en archivo JSON
 */
function saveUsers($users) {
    return file_put_contents(USERS_FILE, json_encode($users, JSON_PRETTY_PRINT));
}

/**
 * Verificar si un usuario está logueado
 */
function isLoggedIn() {
    return isset($_SESSION['user_id']) && isset($_SESSION['username']);
}

/**
 * Obtener usuario actual
 */
function getCurrentUser() {
    if (isLoggedIn()) {
        return [
            'id' => $_SESSION['user_id'],
            'username' => $_SESSION['username'],
            'full_name' => $_SESSION['full_name'] ?? '',
            'email' => $_SESSION['email'] ?? ''
        ];
    }
    return null;
}

/**
 * Sanitizar entrada de usuario
 */
function sanitize($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

/**
 * Hashear contraseña
 */
function hashPassword($password) {
    return password_hash($password, PASSWORD_BCRYPT);
}

/**
 * Verificar contraseña
 */
function verifyPassword($password, $hash) {
    return password_verify($password, $hash);
}

/**
 * Calcular número de árboles por área
 * @param float $area Área en hectáreas
 * @param string $treeType Tipo de árbol
 * @return array Resultados del cálculo
 */
function calculateTreesPerArea($area, $treeType) {
    // Espaciamiento recomendado por tipo de árbol (metros)
    $spacings = [
        'pine' => 3.0,      // Pino: 3x3 metros
        'oak' => 4.0,       // Encino: 4x4 metros
        'cedar' => 3.5,     // Cedro: 3.5x3.5 metros
        'mesquite' => 4.5,  // Mezquite: 4.5x4.5 metros
        'ahuehuete' => 5.0  // Ahuehuete: 5x5 metros
    ];
    
    $spacing = $spacings[$treeType] ?? 3.0;
    
    // Calcular árboles por hectárea
    // 1 hectárea = 10,000 m²
    $areaPerTree = $spacing * $spacing;
    $treesPerHectare = 10000 / $areaPerTree;
    $totalTrees = $treesPerHectare * $area;
    
    // Captura de carbono por tipo de árbol (toneladas CO₂/árbol/año)
    $carbonCapture = [
        'pine' => 0.025,
        'oak' => 0.028,
        'cedar' => 0.030,
        'mesquite' => 0.020,
        'ahuehuete' => 0.035
    ];
    
    $carbonPerTree = $carbonCapture[$treeType] ?? 0.025;
    $totalCarbon = $totalTrees * $carbonPerTree;
    
    return [
        'tree_count' => round($totalTrees),
        'spacing' => $spacing,
        'trees_per_hectare' => round($treesPerHectare),
        'carbon_capture' => round($totalCarbon, 2)
    ];
}

/**
 * Calcular eficiencia de árbol según tipo de suelo
 * @param string $treeType Tipo de árbol
 * @param string $soilType Tipo de suelo
 * @return array Eficiencia y recomendaciones
 */
function calculateSoilEfficiency($treeType, $soilType) {
    // Matriz de eficiencia (0-100%)
    $efficiencyMatrix = [
        'pine' => [
            'clay' => 65,
            'sandy' => 70,
            'loamy' => 90,
            'rocky' => 60,
            'humid' => 75
        ],
        'oak' => [
            'clay' => 75,
            'sandy' => 60,
            'loamy' => 95,
            'rocky' => 70,
            'humid' => 65
        ],
        'cedar' => [
            'clay' => 70,
            'sandy' => 65,
            'loamy' => 90,
            'rocky' => 55,
            'humid' => 85
        ],
        'mesquite' => [
            'clay' => 80,
            'sandy' => 85,
            'loamy' => 75,
            'rocky' => 90,
            'humid' => 60
        ],
        'ahuehuete' => [
            'clay' => 70,
            'sandy' => 50,
            'loamy' => 85,
            'rocky' => 45,
            'humid' => 95
        ]
    ];
    
    $efficiency = $efficiencyMatrix[$treeType][$soilType] ?? 70;
    
    // Recomendaciones basadas en eficiencia
    $recommendation = '';
    if ($efficiency >= 85) {
        $recommendation = $_SESSION['lang'] == 'es' 
            ? 'Excelente combinación. Altamente recomendado.'
            : 'Excellent combination. Highly recommended.';
    } elseif ($efficiency >= 70) {
        $recommendation = $_SESSION['lang'] == 'es'
            ? 'Buena combinación. Resultados satisfactorios esperados.'
            : 'Good combination. Satisfactory results expected.';
    } elseif ($efficiency >= 60) {
        $recommendation = $_SESSION['lang'] == 'es'
            ? 'Combinación aceptable. Requiere cuidados adicionales.'
            : 'Acceptable combination. Requires additional care.';
    } else {
        $recommendation = $_SESSION['lang'] == 'es'
            ? 'Combinación no óptima. Considere otras especies o mejoras al suelo.'
            : 'Non-optimal combination. Consider other species or soil improvements.';
    }
    
    return [
        'efficiency' => $efficiency,
        'recommendation' => $recommendation
    ];
}

/**
 * Generar color para badge de eficiencia
 */
function getEfficiencyColor($efficiency) {
    if ($efficiency >= 85) return 'success';
    if ($efficiency >= 70) return 'primary';
    if ($efficiency >= 60) return 'warning';
    return 'danger';
}

/**
 * Incluir header HTML
 */
function includeHeader($title = 'Proyecto de Reforestación', $activePage = '') {
    require_once 'translations.php';
    ?>
    <!DOCTYPE html>
    <html lang="<?php echo $_SESSION['lang']; ?>">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo htmlspecialchars($title); ?></title>
        
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
        
        <!-- Custom CSS -->
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-success">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <i class="bi bi-tree"></i> <?php echo t('hero_title'); ?>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link <?php echo $activePage === 'home' ? 'active' : ''; ?>" href="index.php">
                                <?php echo t('nav_home'); ?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $activePage === 'disciplines' ? 'active' : ''; ?>" href="disciplines.php">
                                <?php echo t('nav_disciplines'); ?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $activePage === 'cbta' ? 'active' : ''; ?>" href="cbta_project.php">
                                <?php echo t('nav_cbta_project'); ?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $activePage === 'calculator' ? 'active' : ''; ?>" href="calculator.php">
                                <?php echo t('nav_calculator'); ?>
                            </a>
                        </li>
                        
                        <?php if (isLoggedIn()): ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                    <i class="bi bi-person-circle"></i> <?php echo htmlspecialchars($_SESSION['username']); ?>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="logout.php"><?php echo t('nav_logout'); ?></a></li>
                                </ul>
                            </li>
                        <?php else: ?>
                            <li class="nav-item">
                                <a class="nav-link" href="login.php"><?php echo t('nav_login'); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="register.php"><?php echo t('nav_register'); ?></a>
                            </li>
                        <?php endif; ?>
                        
                        <!-- Language Switcher -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                <i class="bi bi-translate"></i> <?php echo strtoupper($_SESSION['lang']); ?>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="?lang=es">Español</a></li>
                                <li><a class="dropdown-item" href="?lang=en">English</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    <?php
}

/**
 * Incluir footer HTML
 */
function includeFooter() {
    ?>
        <footer class="bg-dark text-white mt-5 py-4">
            <div class="container text-center">
                <p class="mb-0">
                    <i class="bi bi-tree-fill text-success"></i> 
                    <?php echo t('footer_text'); ?> &copy; <?php echo t('footer_year'); ?>
                </p>
                <p class="text-muted mb-0">
                    <small>CBTA 35 - Proyecto Escolar Multidisciplinario</small>
                </p>
            </div>
        </footer>
        
        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>
    <?php
}

?>
