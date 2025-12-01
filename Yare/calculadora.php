<?php
/**
 * Calculadora de Reforestación
 * Herramienta interactiva para planificación de proyectos
 */

require_once 'config.php';

includeHeader(t('nav_calculator'), 'calculator');
?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <h1 class="display-4 fw-bold mb-4"><?php echo t('calc_title'); ?></h1>
        <p class="lead"><?php echo t('calc_subtitle'); ?></p>
    </div>
</section>

<!-- Calculadora Principal -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-info">
                    <i class="bi bi-info-circle-fill"></i> 
                    <strong>Acerca de esta calculadora:</strong> Esta herramienta te permite estimar parámetros clave para tu proyecto de reforestación, incluyendo densidad de plantación, compatibilidad de especies con tipos de suelo, y estimación de captura de carbono.
                </div>
            </div>
        </div>
        
        <!-- Calculadora 1: Densidad de Plantación -->
        <div class="row mb-5">
            <div class="col-md-12">
                <div class="card border-primary">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">
                            <i class="bi bi-grid-3x3-gap-fill"></i> <?php echo t('calc_area_title'); ?>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Parámetros de Entrada</h5>
                                
                                <div class="mb-3">
                                    <label for="area" class="form-label"><?php echo t('area_hectares'); ?>:</label>
                                    <input type="number" class="form-control" id="area" min="0.1" step="0.1" value="1.0">
                                    <small class="form-text text-muted">1 hectárea = 10,000 m²</small>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="treeType" class="form-label"><?php echo t('tree_type'); ?>:</label>
                                    <select class="form-select" id="treeType">
                                        <option value="small">Árboles pequeños (3-5m altura adulta)</option>
                                        <option value="medium" selected>Árboles medianos (5-15m altura adulta)</option>
                                        <option value="large">Árboles grandes (>15m altura adulta)</option>
                                    </select>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="spacingX" class="form-label">Espaciamiento entre filas (metros):</label>
                                    <input type="number" class="form-control" id="spacingX" min="1" max="10" step="0.5" value="3.0">
                                </div>
                                
                                <div class="mb-3">
                                    <label for="spacingY" class="form-label">Espaciamiento entre plantas (metros):</label>
                                    <input type="number" class="form-control" id="spacingY" min="1" max="10" step="0.5" value="3.0">
                                </div>
                                
                                <button class="btn btn-primary btn-lg w-100" onclick="calculateDensity()">
                                    <i class="bi bi-calculator"></i> <?php echo t('calculate'); ?>
                                </button>
                            </div>
                            
                            <div class="col-md-6">
                                <h5><?php echo t('results'); ?>:</h5>
                                <div id="densityResults" class="alert alert-secondary">
                                    <p class="text-center"><em>Ingresa los datos y haz clic en calcular</em></p>
                                </div>
                                
                                <div class="card bg-light mt-3">
                                    <div class="card-body">
                                        <h6>Espaciamientos Recomendados:</h6>
                                        <ul class="small mb-0">
                                            <li><strong>Árboles pequeños:</strong> 2m × 2m (2,500 árboles/ha)</li>
                                            <li><strong>Árboles medianos:</strong> 3m × 3m (1,111 árboles/ha)</li>
                                            <li><strong>Árboles grandes:</strong> 4m × 4m (625 árboles/ha) a 5m × 5m (400 árboles/ha)</li>
                                            <li><strong>Sistemas mixtos:</strong> 3m × 4m (833 árboles/ha)</li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <!-- TODO: Agregar visualización gráfica del espaciamiento -->
                                <div class="mt-3 text-center">
                                    <img id="spacingVisualization" src="https://placehold.co/400x300/5a7c3e/ffffff?text=Visualizacion+Espaciamiento" 
                                         class="img-fluid rounded" 
                                         alt="Visualización del espaciamiento">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Calculadora 2: Análisis de Eficiencia por Tipo de Suelo -->
        <div class="row mb-5">
            <div class="col-md-12">
                <div class="card border-success">
                    <div class="card-header bg-success text-white">
                        <h4 class="mb-0">
                            <i class="bi bi-layers-fill"></i> <?php echo t('calc_soil_title'); ?>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Parámetros de Entrada</h5>
                                
                                <div class="mb-3">
                                    <label for="soilType" class="form-label"><?php echo t('soil_type'); ?>:</label>
                                    <select class="form-select" id="soilType">
                                        <option value="clay">Arcilloso</option>
                                        <option value="loam" selected>Franco (ideal)</option>
                                        <option value="sandy">Arenoso</option>
                                        <option value="rocky">Pedregoso</option>
                                        <option value="organic">Alto contenido orgánico</option>
                                    </select>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="speciesSelect" class="form-label">Especie a evaluar:</label>
                                    <select class="form-select" id="speciesSelect">
                                        <option value="fraxinus">Fraxinus uhdei (Fresno)</option>
                                        <option value="schinus">Schinus molle (Pirul)</option>
                                        <option value="quercus">Quercus rugosa (Encino)</option>
                                        <option value="pinus">Pinus spp. (Pino)</option>
                                        <option value="acacia">Acacia farnesiana (Huizache)</option>
                                        <option value="prosopis">Prosopis laevigata (Mezquite)</option>
                                    </select>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="ph" class="form-label">pH del suelo:</label>
                                    <input type="number" class="form-control" id="ph" min="4" max="9" step="0.1" value="6.5">
                                    <small class="form-text text-muted">Rango típico: 4.0 (muy ácido) a 9.0 (muy alcalino)</small>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="drainage" class="form-label">Drenaje:</label>
                                    <select class="form-select" id="drainage">
                                        <option value="poor">Pobre (encharcamiento frecuente)</option>
                                        <option value="moderate" selected>Moderado</option>
                                        <option value="good">Bueno</option>
                                        <option value="excessive">Excesivo (muy seco)</option>
                                    </select>
                                </div>
                                
                                <button class="btn btn-success btn-lg w-100" onclick="calculateSoilEfficiency()">
                                    <i class="bi bi-calculator"></i> Evaluar Compatibilidad
                                </button>
                            </div>
                            
                            <div class="col-md-6">
                                <h5>Resultado de Evaluación:</h5>
                                <div id="soilResults" class="alert alert-secondary">
                                    <p class="text-center"><em>Ingresa los datos y haz clic en evaluar</em></p>
                                </div>
                                
                                <div class="card bg-light mt-3">
                                    <div class="card-body">
                                        <h6>Características de Tipos de Suelo:</h6>
                                        <ul class="small mb-0">
                                            <li><strong>Arcilloso:</strong> Alta retención de agua, pobre drenaje, puede compactarse. Bueno para: Sauce, Fresno.</li>
                                            <li><strong>Franco:</strong> Balance ideal entre retención y drenaje. Bueno para: Mayoría de especies.</li>
                                            <li><strong>Arenoso:</strong> Excelente drenaje, baja retención. Bueno para: Pino, Pirul, Mezquite.</li>
                                            <li><strong>Pedregoso:</strong> Drenaje variable, anclaje limitado. Bueno para: Especies nativas adaptadas.</li>
                                            <li><strong>Orgánico:</strong> Alta fertilidad y retención. Excelente para casi todas las especies.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!-- Información Adicional -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="section-title text-center">Consideraciones para Planificación</h2>
        
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title text-primary">
                            <i class="bi bi-exclamation-triangle-fill"></i> Factores Limitantes
                        </h5>
                        <ul class="small">
                            <li>Disponibilidad de agua (precipitación y riego)</li>
                            <li>Calidad del suelo (nutrientes, pH, textura)</li>
                            <li>Pendiente del terreno (>30% requiere terrazas)</li>
                            <li>Acceso para mantenimiento</li>
                            <li>Presencia de plagas y enfermedades</li>
                            <li>Presión de herbivoría (ganado, fauna silvestre)</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title text-success">
                            <i class="bi bi-lightbulb-fill"></i> Mejores Prácticas
                        </h5>
                        <ul class="small">
                            <li>Usar especies nativas adaptadas al sitio</li>
                            <li>Plantar mezcla de especies (diversidad)</li>
                            <li>Considerar diferentes estratos (pioneras + clímax)</li>
                            <li>Plantar al inicio de temporada de lluvias</li>
                            <li>Usar plántulas de calidad certificada</li>
                            <li>Garantizar mantenimiento primeros 3 años</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title text-warning">
                            <i class="bi bi-bar-chart-fill"></i> Monitoreo
                        </h5>
                        <ul class="small">
                            <li>Medir supervivencia cada 3-6 meses</li>
                            <li>Registrar altura y diámetro semestralmente</li>
                            <li>Documentar plagas, enfermedades, daños</li>
                            <li>Evaluar regeneración natural</li>
                            <li>Monitorear fauna asociada</li>
                            <li>Analizar suelo cada 2 años</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- JavaScript para Calculadoras -->
<script>
// Base de datos de características de especies
const speciesData = {
    fraxinus: {
        name: 'Fraxinus uhdei (Fresno)',
        soilPreference: {clay: 90, loam: 95, sandy: 60, rocky: 50, organic: 100},
        phRange: [6.0, 7.5],
        drainagePreference: {poor: 70, moderate: 90, good: 95, excessive: 40},
        carbonRate: 8 // ton CO2/ha/año
    },
    schinus: {
        name: 'Schinus molle (Pirul)',
        soilPreference: {clay: 60, loam: 85, sandy: 90, rocky: 80, organic: 75},
        phRange: [6.5, 8.5],
        drainagePreference: {poor: 40, moderate: 80, good: 95, excessive: 85},
        carbonRate: 6
    },
    quercus: {
        name: 'Quercus rugosa (Encino)',
        soilPreference: {clay: 70, loam: 95, sandy: 65, rocky: 75, organic: 90},
        phRange: [5.5, 7.0],
        drainagePreference: {poor: 50, moderate: 90, good: 95, excessive: 60},
        carbonRate: 7
    },
    pinus: {
        name: 'Pinus spp. (Pino)',
        soilPreference: {clay: 50, loam: 85, sandy: 90, rocky: 85, organic: 80},
        phRange: [5.0, 7.0],
        drainagePreference: {poor: 30, moderate: 75, good: 95, excessive: 80},
        carbonRate: 9
    },
    acacia: {
        name: 'Acacia farnesiana (Huizache)',
        soilPreference: {clay: 75, loam: 90, sandy: 85, rocky: 70, organic: 80},
        phRange: [6.0, 8.0],
        drainagePreference: {poor: 60, moderate: 85, good: 90, excessive: 75},
        carbonRate: 7
    },
    prosopis: {
        name: 'Prosopis laevigata (Mezquite)',
        soilPreference: {clay: 70, loam: 85, sandy: 95, rocky: 80, organic: 75},
        phRange: [6.5, 8.5],
        drainagePreference: {poor: 50, moderate: 80, good: 90, excessive: 95},
        carbonRate: 6
    }
};

// Función para calcular densidad de plantación
function calculateDensity() {
    const area = parseFloat(document.getElementById('area').value);
    const spacingX = parseFloat(document.getElementById('spacingX').value);
    const spacingY = parseFloat(document.getElementById('spacingY').value);
    const treeType = document.getElementById('treeType').value;
    
    // Cálculo básico
    const treesPerHa = 10000 / (spacingX * spacingY);
    const totalTrees = Math.round(treesPerHa * area);
    const areaPerTree = spacingX * spacingY;
    
    // Recomendaciones según tipo de árbol
    let recommendation = '';
    let alertClass = 'alert-success';
    
    if (treeType === 'small') {
        if (treesPerHa < 1500) {
            recommendation = '<strong>⚠ Advertencia:</strong> La densidad es baja para árboles pequeños. Considera reducir el espaciamiento a 2-2.5m.';
            alertClass = 'alert-warning';
        } else {
            recommendation = '<strong>✓ Correcto:</strong> Densidad adecuada para árboles pequeños.';
        }
    } else if (treeType === 'medium') {
        if (treesPerHa > 1500) {
            recommendation = '<strong>⚠ Advertencia:</strong> La densidad es alta para árboles medianos. Considera incrementar el espaciamiento a 3-4m.';
            alertClass = 'alert-warning';
        } else if (treesPerHa < 600) {
            recommendation = '<strong>⚠ Advertencia:</strong> La densidad es baja para árboles medianos. Considera reducir el espaciamiento a 3-4m.';
            alertClass = 'alert-warning';
        } else {
            recommendation = '<strong>✓ Correcto:</strong> Densidad adecuada para árboles medianos.';
        }
    } else if (treeType === 'large') {
        if (treesPerHa > 800) {
            recommendation = '<strong>⚠ Advertencia:</strong> La densidad es alta para árboles grandes. Considera incrementar el espaciamiento a 4-6m.';
            alertClass = 'alert-warning';
        } else {
            recommendation = '<strong>✓ Correcto:</strong> Densidad adecuada para árboles grandes.';
        }
    }
    
    // Mostrar resultados
    const resultsHTML = `
        <h5 class="text-center mb-3">Resultados del Cálculo</h5>
        <div class="row text-center mb-3">
            <div class="col-6">
                <div class="p-3 bg-white rounded">
                    <h2 class="text-primary mb-0">${treesPerHa.toFixed(0)}</h2>
                    <small>árboles/hectárea</small>
                </div>
            </div>
            <div class="col-6">
                <div class="p-3 bg-white rounded">
                    <h2 class="text-success mb-0">${totalTrees.toLocaleString()}</h2>
                    <small>árboles totales</small>
                </div>
            </div>
        </div>
        <hr>
        <p><strong>Área por árbol:</strong> ${areaPerTree.toFixed(2)} m²</p>
        <p><strong>Espaciamiento:</strong> ${spacingX}m × ${spacingY}m</p>
        <p><strong>Área total:</strong> ${area.toFixed(2)} hectáreas (${(area * 10000).toLocaleString()} m²)</p>
        <hr>
        <div class="${alertClass}">
            ${recommendation}
        </div>
        <hr>
        <h6>Costos Estimados:</h6>
        <ul class="small mb-0">
            <li>Plántulas (@ $5 c/u): <strong>$${(totalTrees * 5).toLocaleString()} MXN</strong></li>
            <li>Plantación (@ $8 c/u): <strong>$${(totalTrees * 8).toLocaleString()} MXN</strong></li>
            <li>Mantenimiento 3 años (@ $7 c/u): <strong>$${(totalTrees * 7).toLocaleString()} MXN</strong></li>
            <li><strong>Total aproximado: $${(totalTrees * 20).toLocaleString()} MXN</strong></li>
        </ul>
    `;
    
    document.getElementById('densityResults').innerHTML = resultsHTML;
}

// Función para calcular eficiencia por tipo de suelo
function calculateSoilEfficiency() {
    const soilType = document.getElementById('soilType').value;
    const species = document.getElementById('speciesSelect').value;
    const ph = parseFloat(document.getElementById('ph').value);
    const drainage = document.getElementById('drainage').value;
    
    const speciesInfo = speciesData[species];
    
    // Calcular compatibilidad de suelo
    const soilScore = speciesInfo.soilPreference[soilType];
    
    // Calcular compatibilidad de pH
    let phScore = 0;
    if (ph >= speciesInfo.phRange[0] && ph <= speciesInfo.phRange[1]) {
        phScore = 100;
    } else {
        const distance = Math.min(Math.abs(ph - speciesInfo.phRange[0]), Math.abs(ph - speciesInfo.phRange[1]));
        phScore = Math.max(0, 100 - (distance * 30));
    }
    
    // Calcular compatibilidad de drenaje
    const drainageScore = speciesInfo.drainagePreference[drainage];
    
    // Promedio ponderado
    const totalScore = (soilScore * 0.4 + phScore * 0.3 + drainageScore * 0.3);
    
    // Determinar categoría
    let category, alertClass, recommendation;
    if (totalScore >= 85) {
        category = 'EXCELENTE';
        alertClass = 'alert-success';
        recommendation = 'Las condiciones son óptimas para esta especie. Se espera excelente crecimiento y supervivencia.';
    } else if (totalScore >= 70) {
        category = 'BUENA';
        alertClass = 'alert-info';
        recommendation = 'Las condiciones son adecuadas para esta especie. Se espera buen desarrollo con manejo apropiado.';
    } else if (totalScore >= 55) {
        category = 'REGULAR';
        alertClass = 'alert-warning';
        recommendation = 'Las condiciones son marginales. La especie puede establecerse pero requerirá cuidados adicionales y enmiendas de suelo.';
    } else {
        category = 'POBRE';
        alertClass = 'alert-danger';
        recommendation = 'Las condiciones no son adecuadas para esta especie. Se recomienda enmendar el suelo significativamente o seleccionar otra especie más compatible.';
    }
    
    // Recomendaciones específicas
    let specificRecs = '<h6>Recomendaciones específicas:</h6><ul>';
    
    if (soilScore < 70) {
        specificRecs += '<li>Considera mejorar el suelo con materia orgánica y enmiendas específicas.</li>';
    }
    
    if (phScore < 70) {
        if (ph < speciesInfo.phRange[0]) {
            specificRecs += '<li>El suelo es demasiado ácido. Aplica cal dolomita para elevar el pH.</li>';
        } else {
            specificRecs += '<li>El suelo es demasiado alcalino. Aplica azufre elemental o materia orgánica para reducir el pH.</li>';
        }
    }
    
    if (drainageScore < 70) {
        if (drainage === 'poor') {
            specificRecs += '<li>El drenaje deficiente puede causar problemas. Considera construir zanjas de drenaje o camellones elevados.</li>';
        } else if (drainage === 'excessive') {
            specificRecs += '<li>El drenaje excesivo puede causar sequía. Incorpora materia orgánica y considera sistemas de riego.</li>';
        }
    }
    
    specificRecs += '</ul>';
    
    // Mostrar resultados
    const resultsHTML = `
        <h5 class="text-center mb-3">Evaluación de Compatibilidad</h5>
        <h6><strong>Especie:</strong> ${speciesInfo.name}</h6>
        <hr>
        <div class="text-center mb-3">
            <h1 class="display-4 mb-0">${totalScore.toFixed(0)}%</h1>
            <h5 class="text-muted">Compatibilidad ${category}</h5>
        </div>
        <hr>
        <h6>Desglose de Evaluación:</h6>
        <div class="mb-2">
            <div class="d-flex justify-content-between">
                <span>Tipo de suelo:</span>
                <strong>${soilScore}%</strong>
            </div>
            <div class="progress" style="height: 10px;">
                <div class="progress-bar bg-primary" style="width: ${soilScore}%"></div>
            </div>
        </div>
        <div class="mb-2">
            <div class="d-flex justify-content-between">
                <span>pH del suelo:</span>
                <strong>${phScore.toFixed(0)}%</strong>
            </div>
            <div class="progress" style="height: 10px;">
                <div class="progress-bar bg-info" style="width: ${phScore}%"></div>
            </div>
        </div>
        <div class="mb-3">
            <div class="d-flex justify-content-between">
                <span>Drenaje:</span>
                <strong>${drainageScore}%</strong>
            </div>
            <div class="progress" style="height: 10px;">
                <div class="progress-bar bg-success" style="width: ${drainageScore}%"></div>
            </div>
        </div>
        <hr>
        <div class="${alertClass}">
            <strong>${category}:</strong> ${recommendation}
        </div>
        ${totalScore < 85 ? specificRecs : ''}
    `;
    
    document.getElementById('soilResults').innerHTML = resultsHTML;
}

// Función para calcular captura de carbono
function calculateCarbon() {
    const area = parseFloat(document.getElementById('carbonArea').value);
    const species = document.getElementById('carbonSpecies').value;
    const density = parseFloat(document.getElementById('treeDensity').value);
    const years = parseFloat(document.getElementById('projectYears').value);
    const survival = parseFloat(document.getElementById('survivalRate').value) / 100;
    
    // Tasas de captura por tipo (ton CO2/ha/año)
    const carbonRates = {
        fast: 15,
        medium: 8,
        slow: 4,
        mixed: 10
    };
    
    const annualRate = carbonRates[species];
    const effectiveTrees = density * survival;
    
    // Cálculo con curva de crecimiento (sigmoidea simplificada)
    let totalCarbon = 0;
    let carbonByYear = [];
    
    for (let year = 1; year <= years; year++) {
        // Factor de crecimiento (comienza lento, acelera, luego se estabiliza)
        const growthFactor = (1 / (1 + Math.exp(-0.3 * (year - years/2))));
        const yearlyCarbon = annualRate * area * growthFactor;
        totalCarbon += yearlyCarbon;
        carbonByYear.push({year: year, carbon: yearlyCarbon.toFixed(2), accumulated: totalCarbon.toFixed(2)});
    }
    
    // Equivalencias
    const carsEquivalent = (totalCarbon / 4.6).toFixed(1); // 1 auto ≈ 4.6 ton CO2/año
    const treesEquivalent = (totalCarbon / 0.022).toFixed(0); // 1 árbol maduro ≈ 22 kg CO2/año
    const housesEquivalent = (totalCarbon / 8.8).toFixed(1); // 1 casa ≈ 8.8 ton CO2/año
    
    // Beneficios económicos (mercado voluntario de carbono ≈ $10-15 USD/ton CO2)
    const economicValue = (totalCarbon * 12).toFixed(2); // $12 USD/ton promedio
    
    // Crear tabla de progresión anual
    let yearlyTable = '<h6 class="mt-3">Progresión Anual:</h6><div class="table-responsive" style="max-height: 200px; overflow-y: auto;"><table class="table table-sm table-striped"><thead><tr><th>Año</th><th>Captura Anual</th><th>Acumulado</th></tr></thead><tbody>';
    for (let i = 0; i < Math.min(carbonByYear.length, 10); i++) {
        yearlyTable += `<tr><td>${carbonByYear[i].year}</td><td>${carbonByYear[i].carbon} ton CO₂</td><td>${carbonByYear[i].accumulated} ton CO₂</td></tr>`;
    }
    if (carbonByYear.length > 10) {
        yearlyTable += `<tr><td colspan="3" class="text-center"><em>... ver más años ...</em></td></tr>`;
    }
    yearlyTable += '</tbody></table></div>';
    
    // Mostrar resultados
    const resultsHTML = `
        <h5 class="text-center mb-3">Estimación de Captura de CO₂</h5>
        <div class="text-center mb-3">
            <h1 class="display-4 mb-0 text-success">${totalCarbon.toFixed(2)}</h1>
            <p class="mb-0">toneladas de CO₂ capturadas</p>
            <small class="text-muted">en ${years} años</small>
        </div>
        <hr>
        <h6>Detalles del Proyecto:</h6>
        <ul class="small">
            <li><strong>Área:</strong> ${area} ha</li>
            <li><strong>Densidad efectiva:</strong> ${effectiveTrees.toFixed(0)} árboles/ha (${(effectiveTrees * area).toFixed(0)} totales)</li>
            <li><strong>Tasa anual promedio:</strong> ${annualRate} ton CO₂/ha/año</li>
            <li><strong>Captura promedio por árbol:</strong> ${(totalCarbon / (effectiveTrees * area * years)).toFixed(3)} ton CO₂/año</li>
        </ul>
        <hr>
        <h6>Equivalencias:</h6>
        <ul class="small">
            <li><i class="bi bi-car-front-fill"></i> Emisiones anuales de <strong>${carsEquivalent}</strong> automóviles</li>
            <li><i class="bi bi-tree-fill"></i> Equivalente a <strong>${treesEquivalent}</strong> árboles maduros por 1 año</li>
            <li><i class="bi bi-house-fill"></i> Emisiones anuales de <strong>${housesEquivalent}</strong> hogares</li>
        </ul>
        <hr>
        <h6>Valoración Económica (Mercado Voluntario):</h6>
        <div class="alert alert-success mb-0">
            <strong>Valor estimado: $${economicValue} USD</strong><br>
            <small>(≈ $${(economicValue * 17).toLocaleString()} MXN a tipo de cambio promedio)</small>
        </div>
        ${yearlyTable}
    `;
    
    document.getElementById('carbonResults').innerHTML = resultsHTML;
}
</script>

<?php includeFooter(); ?>
