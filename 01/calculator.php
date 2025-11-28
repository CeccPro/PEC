<?php
/**
 * Calculadora de Reforestación
 * Calcula árboles por área y eficiencia según tipo de suelo
 */

require_once 'config.php';
require_once 'functions.php';
require_once 'translations.php';

$results = null;
$area = '';
$treeType = '';
$soilType = '';

// Procesar cálculo
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $area = floatval($_POST['area'] ?? 0);
    $treeType = sanitize($_POST['tree_type'] ?? '');
    $soilType = sanitize($_POST['soil_type'] ?? '');
    
    if ($area > 0 && $treeType && $soilType) {
        $treeCalc = calculateTreesPerArea($area, $treeType);
        $soilEff = calculateSoilEfficiency($treeType, $soilType);
        
        $results = array_merge($treeCalc, $soilEff);
        $results['area'] = $area;
        $results['tree_type'] = $treeType;
        $results['soil_type'] = $soilType;
    }
}

includeHeader(t('calculator_title'), 'calculator');
?>

<div class="hero-section">
    <div class="container text-center">
        <h1><i class="bi bi-calculator"></i> <?php echo t('calculator_title'); ?></h1>
        <p class="lead"><?php echo t('calculator_subtitle'); ?></p>
    </div>
</div>

<div class="container mb-5">
    <div class="row">
        <div class="col-lg-6">
            <div class="calculator-container">
                <h3 class="text-success mb-4">
                    <i class="bi bi-sliders"></i> 
                    <?php echo $_SESSION['lang'] == 'es' ? 'Parámetros' : 'Parameters'; ?>
                </h3>
                
                <form method="POST" action="">
                    <div class="mb-4">
                        <label for="area" class="form-label fw-bold">
                            <i class="bi bi-rulers"></i> <?php echo t('calc_area'); ?>
                        </label>
                        <div class="input-group">
                            <input type="number" class="form-control" id="area" name="area" 
                                   step="0.01" min="0.01" required 
                                   value="<?php echo htmlspecialchars($area); ?>">
                            <span class="input-group-text"><?php echo t('calc_area_unit'); ?></span>
                        </div>
                        <small class="text-muted">
                            <?php echo $_SESSION['lang'] == 'es' 
                                ? '1 hectárea = 10,000 m²' 
                                : '1 hectare = 10,000 m²'; ?>
                        </small>
                    </div>
                    
                    <div class="mb-4">
                        <label for="tree_type" class="form-label fw-bold">
                            <i class="bi bi-tree"></i> <?php echo t('calc_tree_type'); ?>
                        </label>
                        <select class="form-select" id="tree_type" name="tree_type" required>
                            <option value="">
                                <?php echo $_SESSION['lang'] == 'es' ? 'Seleccione...' : 'Select...'; ?>
                            </option>
                            <option value="pine" <?php echo $treeType === 'pine' ? 'selected' : ''; ?>>
                                <?php echo t('tree_pine'); ?> (Pinus spp.)
                            </option>
                            <option value="oak" <?php echo $treeType === 'oak' ? 'selected' : ''; ?>>
                                <?php echo t('tree_oak'); ?> (Quercus spp.)
                            </option>
                            <option value="cedar" <?php echo $treeType === 'cedar' ? 'selected' : ''; ?>>
                                <?php echo t('tree_cedar'); ?> (Cedrela odorata)
                            </option>
                            <option value="mesquite" <?php echo $treeType === 'mesquite' ? 'selected' : ''; ?>>
                                <?php echo t('tree_mesquite'); ?> (Prosopis spp.)
                            </option>
                            <option value="ahuehuete" <?php echo $treeType === 'ahuehuete' ? 'selected' : ''; ?>>
                                <?php echo t('tree_ahuehuete'); ?> (Taxodium mucronatum)
                            </option>
                        </select>
                    </div>
                    
                    <div class="mb-4">
                        <label for="soil_type" class="form-label fw-bold">
                            <i class="bi bi-layers"></i> <?php echo t('calc_soil_type'); ?>
                        </label>
                        <select class="form-select" id="soil_type" name="soil_type" required>
                            <option value="">
                                <?php echo $_SESSION['lang'] == 'es' ? 'Seleccione...' : 'Select...'; ?>
                            </option>
                            <option value="clay" <?php echo $soilType === 'clay' ? 'selected' : ''; ?>>
                                <?php echo t('soil_clay'); ?>
                            </option>
                            <option value="sandy" <?php echo $soilType === 'sandy' ? 'selected' : ''; ?>>
                                <?php echo t('soil_sandy'); ?>
                            </option>
                            <option value="loamy" <?php echo $soilType === 'loamy' ? 'selected' : ''; ?>>
                                <?php echo t('soil_loamy'); ?>
                            </option>
                            <option value="rocky" <?php echo $soilType === 'rocky' ? 'selected' : ''; ?>>
                                <?php echo t('soil_rocky'); ?>
                            </option>
                            <option value="humid" <?php echo $soilType === 'humid' ? 'selected' : ''; ?>>
                                <?php echo t('soil_humid'); ?>
                            </option>
                        </select>
                    </div>
                    
                    <button type="submit" class="btn btn-forest w-100 btn-lg">
                        <i class="bi bi-calculator-fill"></i> <?php echo t('calc_button'); ?>
                    </button>
                </form>
            </div>
        </div>
        
        <div class="col-lg-6">
            <?php if ($results): ?>
                <div class="calculator-container fade-in">
                    <h3 class="text-success mb-4">
                        <i class="bi bi-graph-up"></i> <?php echo t('calc_results'); ?>
                    </h3>
                    
                    <div class="result-box">
                        <h5>
                            <i class="bi bi-tree-fill"></i> <?php echo t('calc_tree_count'); ?>
                        </h5>
                        <h2 class="text-success mb-0">
                            <?php echo number_format($results['tree_count']); ?>
                            <?php echo $_SESSION['lang'] == 'es' ? 'árboles' : 'trees'; ?>
                        </h2>
                        <small class="text-muted">
                            (<?php echo number_format($results['trees_per_hectare']); ?> 
                            <?php echo $_SESSION['lang'] == 'es' ? 'por hectárea' : 'per hectare'; ?>)
                        </small>
                    </div>
                    
                    <div class="result-box">
                        <h5>
                            <i class="bi bi-rulers"></i> <?php echo t('calc_spacing'); ?>
                        </h5>
                        <h3 class="text-success mb-0">
                            <?php echo $results['spacing']; ?> × <?php echo $results['spacing']; ?> m
                        </h3>
                    </div>
                    
                    <div class="result-box">
                        <h5>
                            <i class="bi bi-speedometer2"></i> <?php echo t('calc_efficiency'); ?>
                        </h5>
                        <div>
                            <span class="badge efficiency-badge bg-<?php echo getEfficiencyColor($results['efficiency']); ?>">
                                <?php echo $results['efficiency']; ?>%
                            </span>
                        </div>
                        <p class="mt-3 mb-0">
                            <small><?php echo htmlspecialchars($results['recommendation']); ?></small>
                        </p>
                    </div>
                    
                    <div class="result-box">
                        <h5>
                            <i class="bi bi-cloud"></i> <?php echo t('calc_carbon'); ?>
                        </h5>
                        <h3 class="text-success mb-0">
                            <?php echo number_format($results['carbon_capture'], 2); ?> 
                            <?php echo t('calc_carbon_unit'); ?>
                        </h3>
                        <small class="text-muted">
                            <?php echo $_SESSION['lang'] == 'es' 
                                ? 'Captura estimada anual después de 5 años' 
                                : 'Estimated annual capture after 5 years'; ?>
                        </small>
                    </div>
                </div>
            <?php else: ?>
                <div class="calculator-container text-center">
                    <i class="bi bi-calculator big-icon"></i>
                    <h4 class="text-muted">
                        <?php echo $_SESSION['lang'] == 'es' 
                            ? 'Complete el formulario para ver los resultados' 
                            : 'Fill the form to see results'; ?>
                    </h4>
                </div>
            <?php endif; ?>
        </div>
    </div>
    
    <!-- Información adicional -->
    <div class="row mt-5">
        <div class="col-12">
            <div class="info-box">
                <h4>
                    <i class="bi bi-info-circle"></i> 
                    <?php echo $_SESSION['lang'] == 'es' 
                        ? '¿Cómo funciona esta calculadora?' 
                        : 'How does this calculator work?'; ?>
                </h4>
                <p>
                    <?php if ($_SESSION['lang'] == 'es'): ?>
                        Esta calculadora utiliza principios dasométricos y ecológicos para estimar el número óptimo 
                        de árboles por hectárea, considerando el espaciamiento recomendado para cada especie. 
                        La eficiencia del suelo se basa en investigaciones sobre adaptabilidad de especies nativas 
                        mexicanas a diferentes tipos de suelo, mientras que las estimaciones de captura de carbono 
                        se fundamentan en estudios de Pan et al. (2011) y datos de la FAO (2020).
                    <?php else: ?>
                        This calculator uses dasometric and ecological principles to estimate the optimal number 
                        of trees per hectare, considering the recommended spacing for each species. Soil efficiency 
                        is based on research about adaptability of Mexican native species to different soil types, 
                        while carbon capture estimates are based on studies by Pan et al. (2011) and FAO data (2020).
                    <?php endif; ?>
                </p>
                
                <!-- TODO: Añadir gráficos interactivos con Chart.js para visualizar resultados -->
                <!-- TODO: Implementar comparación entre diferentes especies -->
                <!-- TODO: Agregar cálculo de costos estimados de implementación -->
            </div>
        </div>
    </div>
</div>

<?php includeFooter(); ?>
