<?php
session_start();
require_once '../includes/config.php';
require_once '../includes/auth.php';
require_once '../includes/language.php';

// Manejar cambio de idioma
if (isset($_GET['lang']) && in_array($_GET['lang'], SUPPORTED_LANGUAGES)) {
    $language = new Language();
    $language->setLanguage($_GET['lang']);
}

// Inicializar sistema de idiomas
$language = new Language();
$lang = $language->getCurrentLanguage();
$translations = $language->getTranslations($lang);

// Verificar si el usuario está logueado
$auth = new Auth();
$isLoggedIn = $auth->isLoggedIn();
$user = $isLoggedIn ? $auth->getCurrentUser() : null;

// Configurar página actual
$currentPage = 'calculator';
$pageTitle = $translations['calculator_title'] . ' - ' . $translations['app_title'];

// Procesar cálculo si se envió el formulario
$calculationResult = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['calculate'])) {
    $area = floatval($_POST['area'] ?? 0);
    $treeType = $_POST['tree_type'] ?? '';
    $soilType = $_POST['soil_type'] ?? '';
    
    if ($area > 0 && $treeType && $soilType && isset(TREE_TYPES[$treeType])) {
        $treeData = TREE_TYPES[$treeType];
        
        // Calcular número de árboles
        $spacing = $treeData['spacing'];
        $treesPerHectare = 10000 / ($spacing * $spacing); // 10000 m² = 1 hectárea
        $totalTrees = round($treesPerHectare * $area);
        
        // Aplicar eficiencia según tipo de suelo
        $efficiency = $treeData['soil_efficiency'][$soilType] ?? 1;
        $adjustedTrees = round($totalTrees * $efficiency);
        
        // Calcular captura de CO2 anual
        $co2Capture = round($adjustedTrees * $treeData['co2_absorption']);
        
        // Calcular crecimiento esperado
        $growthRate = $treeData['growth_rate'];
        
        $calculationResult = [
            'area' => $area,
            'tree_type' => $treeType,
            'tree_name' => $treeData['name'][$lang],
            'soil_type' => $soilType,
            'trees_per_hectare' => $treesPerHectare,
            'total_trees' => $totalTrees,
            'efficiency' => $efficiency * 100,
            'adjusted_trees' => $adjustedTrees,
            'co2_capture' => $co2Capture,
            'growth_rate' => $growthRate,
            'spacing' => $spacing,
            'cost_estimate' => $adjustedTrees * 2.5, // Estimación de $2.5 USD por árbol
            'maintenance_years' => 5,
            'survival_rate' => 85 // Estimación del 85% de supervivencia
        ];
    }
}

include '../includes/header.php';
?>

<!-- Page Header -->
<section class="py-5 bg-success text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold mb-3">
                    <i class="bi bi-calculator-fill me-3"></i>
                    <?php echo $translations['calculator_title']; ?>
                </h1>
                <p class="lead mb-0">
                    <?php echo $translations['calculator_description']; ?>
                </p>
            </div>
            <div class="col-lg-4 text-center">
                <i class="bi bi-tree display-1"></i>
            </div>
        </div>
    </div>
</section>

<!-- Calculator Form -->
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="calculator-container">
                    <h3 class="text-center mb-4 text-primary-green">
                        <i class="bi bi-gear-fill me-2"></i>
                        Parámetros de Cálculo
                    </h3>
                    
                    <form method="POST" id="calculatorForm">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <label for="area" class="form-label fw-bold">
                                    <i class="bi bi-rulers me-2"></i>
                                    <?php echo $translations['calculator_area_label']; ?>
                                </label>
                                <input type="number" class="form-control form-control-lg" 
                                       id="area" name="area" 
                                       min="0.01" max="1000" step="0.01" 
                                       value="<?php echo $_POST['area'] ?? ''; ?>" 
                                       placeholder="Ej: 2.5" required>
                                <div class="form-text">
                                    Ingresa el área en hectáreas (1 hectárea = 10,000 m²)
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <label for="tree_type" class="form-label fw-bold">
                                    <i class="bi bi-tree me-2"></i>
                                    <?php echo $translations['calculator_tree_type_label']; ?>
                                </label>
                                <select class="form-select form-select-lg" id="tree_type" name="tree_type" required>
                                    <option value="">Selecciona un tipo de árbol...</option>
                                    <?php foreach (TREE_TYPES as $key => $treeData): ?>
                                        <option value="<?php echo $key; ?>" 
                                                <?php echo (isset($_POST['tree_type']) && $_POST['tree_type'] === $key) ? 'selected' : ''; ?>>
                                            <?php echo $treeData['name'][$lang]; ?>
                                            (Espaciamiento: <?php echo $treeData['spacing']; ?>m)
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            
                            <div class="col-md-6">
                                <label for="soil_type" class="form-label fw-bold">
                                    <i class="bi bi-moisture me-2"></i>
                                    <?php echo $translations['calculator_soil_type_label']; ?>
                                </label>
                                <select class="form-select form-select-lg" id="soil_type" name="soil_type" required>
                                    <option value="">Selecciona el tipo de suelo...</option>
                                    <option value="arcilloso" 
                                            <?php echo (isset($_POST['soil_type']) && $_POST['soil_type'] === 'arcilloso') ? 'selected' : ''; ?>>
                                        <?php echo $translations['calculator_soil_arcilloso']; ?>
                                    </option>
                                    <option value="arenoso" 
                                            <?php echo (isset($_POST['soil_type']) && $_POST['soil_type'] === 'arenoso') ? 'selected' : ''; ?>>
                                        <?php echo $translations['calculator_soil_arenoso']; ?>
                                    </option>
                                    <option value="limoso" 
                                            <?php echo (isset($_POST['soil_type']) && $_POST['soil_type'] === 'limoso') ? 'selected' : ''; ?>>
                                        <?php echo $translations['calculator_soil_limoso']; ?>
                                    </option>
                                    <option value="franco" 
                                            <?php echo (isset($_POST['soil_type']) && $_POST['soil_type'] === 'franco') ? 'selected' : ''; ?>>
                                        <?php echo $translations['calculator_soil_franco']; ?>
                                    </option>
                                </select>
                            </div>
                            
                            <div class="col-md-6 d-flex align-items-end">
                                <button type="submit" name="calculate" class="btn btn-success btn-lg w-100">
                                    <i class="bi bi-calculator me-2"></i>
                                    <?php echo $translations['calculator_calculate_btn']; ?>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Results Section -->
<?php if ($calculationResult): ?>
<section class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="results-section">
                    <h3 class="text-center mb-4 text-success">
                        <i class="bi bi-check-circle-fill me-2"></i>
                        <?php echo $translations['calculator_results_title']; ?>
                    </h3>
                    
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-4">
                            <div class="result-item text-center">
                                <i class="bi bi-tree-fill display-4 text-success mb-3"></i>
                                <h4 class="text-primary-green"><?php echo number_format($calculationResult['adjusted_trees']); ?></h4>
                                <p class="mb-0"><?php echo $translations['calculator_trees_needed']; ?></p>
                                <small class="text-muted">
                                    (<?php echo number_format($calculationResult['trees_per_hectare']); ?> árboles/hectárea)
                                </small>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4">
                            <div class="result-item text-center">
                                <i class="bi bi-speedometer2 display-4 text-warning mb-3"></i>
                                <h4 class="text-primary-green"><?php echo $calculationResult['efficiency']; ?>%</h4>
                                <p class="mb-0"><?php echo $translations['calculator_efficiency']; ?></p>
                                <small class="text-muted">
                                    Suelo <?php echo ucfirst($calculationResult['soil_type']); ?>
                                </small>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4">
                            <div class="result-item text-center">
                                <i class="bi bi-cloud-fill display-4 text-info mb-3"></i>
                                <h4 class="text-primary-green"><?php echo number_format($calculationResult['co2_capture']); ?> kg</h4>
                                <p class="mb-0"><?php echo $translations['calculator_co2_annual']; ?></p>
                                <small class="text-muted">
                                    CO₂ por año cuando maduren
                                </small>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4">
                            <div class="result-item text-center">
                                <i class="bi bi-graph-up-arrow display-4 text-primary mb-3"></i>
                                <h4 class="text-primary-green"><?php echo $calculationResult['growth_rate']; ?> m/año</h4>
                                <p class="mb-0"><?php echo $translations['calculator_growth_rate']; ?></p>
                                <small class="text-muted">
                                    <?php echo $calculationResult['tree_name']; ?>
                                </small>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4">
                            <div class="result-item text-center">
                                <i class="bi bi-rulers display-4 text-secondary mb-3"></i>
                                <h4 class="text-primary-green"><?php echo $calculationResult['spacing']; ?>m x <?php echo $calculationResult['spacing']; ?>m</h4>
                                <p class="mb-0"><?php echo $translations['calculator_spacing']; ?></p>
                                <small class="text-muted">
                                    Distancia entre árboles
                                </small>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4">
                            <div class="result-item text-center">
                                <i class="bi bi-currency-dollar display-4 text-success mb-3"></i>
                                <h4 class="text-primary-green">$<?php echo number_format($calculationResult['cost_estimate'], 2); ?> USD</h4>
                                <p class="mb-0">Costo estimado</p>
                                <small class="text-muted">
                                    Incluye plántulas y plantación
                                </small>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Additional Information -->
                    <div class="mt-5 p-4 bg-white rounded">
                        <h5 class="text-primary-green mb-3">
                            <i class="bi bi-info-circle-fill me-2"></i>
                            Información Adicional del Proyecto
                        </h5>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="list-unstyled">
                                    <li class="mb-2">
                                        <i class="bi bi-check2 text-success me-2"></i>
                                        <strong>Supervivencia estimada:</strong> <?php echo $calculationResult['survival_rate']; ?>%
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-check2 text-success me-2"></i>
                                        <strong>Mantenimiento requerido:</strong> <?php echo $calculationResult['maintenance_years']; ?> años
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-check2 text-success me-2"></i>
                                        <strong>Área total:</strong> <?php echo $calculationResult['area']; ?> hectáreas
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-unstyled">
                                    <li class="mb-2">
                                        <i class="bi bi-check2 text-success me-2"></i>
                                        <strong>Tipo de árbol:</strong> <?php echo $calculationResult['tree_name']; ?>
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-check2 text-success me-2"></i>
                                        <strong>Tipo de suelo:</strong> <?php echo ucfirst($calculationResult['soil_type']); ?>
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-check2 text-success me-2"></i>
                                        <strong>Impacto en 10 años:</strong> <?php echo number_format($calculationResult['co2_capture'] * 10); ?> kg CO₂
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="text-center mt-4">
                        <button class="btn btn-success btn-lg me-3" onclick="window.print()">
                            <i class="bi bi-printer me-2"></i>
                            Imprimir Resultados
                        </button>
                        <a href="../cbta_project.php" class="btn btn-primary btn-lg">
                            <i class="bi bi-geo-alt me-2"></i>
                            Ver Proyecto CBTA 35
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- Information Section -->
<section class="py-5 <?php echo $calculationResult ? '' : 'bg-light'; ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h3 class="text-primary-green mb-4">
                    <i class="bi bi-lightbulb-fill me-2"></i>
                    ¿Cómo Funciona la Calculadora?
                </h3>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="p-3">
                            <i class="bi bi-1-circle-fill display-4 text-primary mb-3"></i>
                            <h5>Densidad de Plantación</h5>
                            <p class="text-muted">
                                Calculamos el número óptimo de árboles basado en el espaciamiento 
                                requerido por cada especie.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-3">
                            <i class="bi bi-2-circle-fill display-4 text-success mb-3"></i>
                            <h5>Eficiencia del Suelo</h5>
                            <p class="text-muted">
                                Ajustamos los cálculos según la compatibilidad entre 
                                el tipo de árbol y las características del suelo.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-3">
                            <i class="bi bi-3-circle-fill display-4 text-info mb-3"></i>
                            <h5>Impacto Ambiental</h5>
                            <p class="text-muted">
                                Estimamos la captura de CO₂ y otros beneficios 
                                ecosistémicos del proyecto de reforestación.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>

<!-- TODO: Agregar gráficos interactivos de los resultados -->
<!-- TODO: Implementar comparación entre diferentes especies -->
<!-- TODO: Agregar mapa de ubicación para el proyecto -->
<!-- TODO: Incluir costos detallados de mantenimiento -->
<!-- TODO: Agregar calculadora de servicios ecosistémicos -->