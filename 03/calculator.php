<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/i18n.php';

// Simple calculadora de reforestación: cuántos árboles caben en un área
// Fórmula: árboles por hectárea = (10000) / (espaciamiento^2)
// Ajustes: tipo de árbol y tipo de suelo afectan la tasa de supervivencia y eficiencia

$result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $area = floatval($_POST['area'] ?? 0); // en hectáreas
    $spacing = floatval($_POST['spacing'] ?? 2); // en metros
    $treeType = $_POST['tree_type'] ?? 'native';
    $soilType = $_POST['soil_type'] ?? 'loam';

    // Validaciones básicas
    if ($area <= 0 || $spacing <= 0) {
        $result = ['error' => t('error') . ': parámetros inválidos'];
    } else {
        // Cálculo básico
        $treesPerHectare = floor(10000 / ($spacing * $spacing));
        $totalTrees = intval($treesPerHectare * $area);

        // Ajuste por tipo de árbol
        $typeEfficiency = 1.0;
        $expectedSurvival = 0.75; // tasa base
        switch ($treeType) {
            case 'fast_growing':
                $typeEfficiency = 1.05;
                $expectedSurvival = 0.65;
                break;
            case 'fruit':
                $typeEfficiency = 0.9;
                $expectedSurvival = 0.7;
                break;
            default:
                // native
                $typeEfficiency = 1.0;
                $expectedSurvival = 0.8;
        }

        // Ajuste por tipo de suelo
        $soilMultiplier = 1.0;
        switch ($soilType) {
            case 'sandy':
                $soilMultiplier = 0.85;
                $expectedSurvival -= 0.05;
                break;
            case 'clay':
                $soilMultiplier = 0.9;
                $expectedSurvival -= 0.03;
                break;
            default:
                // loam
                $soilMultiplier = 1.0;
        }

        $adjustedTrees = floor($totalTrees * $typeEfficiency * $soilMultiplier);
        $estimatedSurvivors = floor($adjustedTrees * max(0, min(1, $expectedSurvival)));

        $result = [
            'trees_per_hectare' => $treesPerHectare,
            'total_trees' => $totalTrees,
            'adjusted_trees' => $adjustedTrees,
            'estimated_survivors' => $estimatedSurvivors,
            'expected_survival' => $expectedSurvival
        ];
    }
}

?>
<!doctype html>
<html lang="<?php echo getCurrentLanguage(); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo t('calculator_title'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container py-5">
    <h1><?php echo t('calculator_title'); ?></h1>
    <a href="index.php" class="btn btn-link">&larr; <?php echo t('back'); ?></a>
    
    <?php if ($result === null): ?>
        <div class="alert alert-info"><?php echo t('info'); ?>: <?php echo t('calc_area_label'); ?> <?php echo t('calc_spacing_label'); ?></div>
    <?php elseif (isset($result['error'])): ?>
        <div class="alert alert-danger"><?php echo htmlspecialchars($result['error']); ?></div>
    <?php else: ?>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><?php echo t('calc_results_title'); ?></h5>
                <p class="card-text"><?php echo t('calc_trees_per_area'); ?> <strong><?php echo number_format($result['trees_per_hectare']); ?></strong></p>
                <p class="card-text"><?php echo t('calc_trees_per_area'); ?> (<?php echo t('calc_area_label'); ?>) <strong><?php echo number_format($result['total_trees']); ?></strong></p>
                <p class="card-text"><?php echo t('calc_efficiency'); ?> <strong><?php echo round(($result['adjusted_trees']/$result['total_trees'])*100,2); ?>%</strong></p>
                <p class="card-text"><?php echo t('calc_survival_rate'); ?> <strong><?php echo round($result['expected_survival']*100,1); ?>%</strong></p>
                <p class="card-text"><?php echo t('calc_efficiency'); ?> (ajustada): <strong><?php echo number_format($result['adjusted_trees']); ?></strong></p>
                <p class="card-text"><?php echo t('calc_trees_per_area'); ?> (estimados sobrevivientes): <strong><?php echo number_format($result['estimated_survivors']); ?></strong></p>
            </div>
        </div>
    <?php endif; ?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>