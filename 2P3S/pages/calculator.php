<main class="site-content">
<!-- Hero Section Calculadora -->
<section class="hero-section bg-success text-white py-5 ">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h2 class="display-4 fw-bold mb-3">
                    <i class="bi bi-calculator me-3"></i>
                    <?php echo $translations['calculator_title']; ?>
                </h2>
                <p class="lead mb-4">
                    <?php echo $translations['calculator_subtitle']; ?>
                </p>
            </div>
            <div class="col-lg-4">
                <div class="bg-white rounded shadow-lg p-4 text-center">
                    <img src="https://www.esagua.es/wp-content/uploads/2022/01/Calculo-de-huella-ambiental.png" alt="Calculadora de Huella Ambiental" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Calculadora de Impacto de Reforestación -->
<section class="py-5 ">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card border-0 shadow-lg">
                    <div class="card-header bg-success text-white">
                        <h3 class="mb-0">
                            <i class="bi bi-tree-fill me-2"></i>
                            <?php echo $translations['reforestation_calc_title']; ?>
                        </h3>
                    </div>
                    <div class="card-body card-dark p-4">
                        <form id="reforestationCalculator">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label"><?php echo $translations['label_trees_to_plant']; ?></label>
                                    <input type="number" class="form-control text-light bg-dark" id="treesToPlant" min="1" value="1">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label"><?php echo $translations['label_tree_type']; ?></label>
                                    <select class="form-select text-light bg-dark" id="treeType">
                                        <option value="pine"><?php echo $translations['tree_type_pine']; ?></option>
                                        <option value="oak"><?php echo $translations['tree_type_oak']; ?></option>
                                        <option value="eucalyptus"><?php echo $translations['tree_type_eucalyptus']; ?></option>
                                        <option value="generic"><?php echo $translations['tree_type_generic']; ?></option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label"><?php echo $translations['label_area_size']; ?></label>
                                    <input type="number" class="form-control text-light bg-dark" id="areaSize" min="0.01" step="0.01" value="1">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label"><?php echo $translations['label_analysis_years']; ?></label>
                                    <input type="number" class="form-control text-light bg-dark" id="analysisYears" min="1" value="20">
                                </div>
                            </div>
                            
                            <div class="text-center mt-4">
                                <button type="button" class="btn btn-success btn-lg px-5" onclick="calculateReforestation()">
                                    <i class="bi bi-tree me-2"></i>
                                    <?php echo $translations['calc_button_calculate_reforestation']; ?>
                                </button>
                            </div>
                        </form>
                        
                        <div id="reforestationResults" class="mt-4 d-none">
                            <hr>
                            <div class="row g-3">
                        <div class="col-md-3 text-center">
                            <div class="p-3 bg-dark rounded">
                                <div class="mb-2">
                                    <i class="bi bi-cloud-minus text-success fs-3"></i>
                                </div>
                                <h4 id="co2Absorbed" class="text-success mb-1">0 kg</h4>
                                <small class="text-light">CO₂ absorbido anualmente</small>
                            </div>
                        </div>
                        <div class="col-md-3 text-center">
                            <div class="p-3 bg-dark rounded">
                                <div class="mb-2">
                                    <i class="bi bi-wind text-success fs-3"></i>
                                </div>
                                <h4 id="oxygenProduced" class="text-success mb-1">0 kg</h4>
                                <small class="text-light">Oxígeno producido anualmente</small>
                            </div>
                        </div>
                        <div class="col-md-3 text-center" style="padding-bottom: 2rem;">
                            <div class="p-3 bg-dark rounded">
                                <div class="mb-2">
                                    <i class="bi bi-graph-up text-success fs-3"></i>
                                </div>
                                <h4 id="totalCo2" class="text-success mb-1">0 ton</h4>
                                <small class="text-light">CO₂ total en el período</small><br><br>
                            </div>
                        </div>
                        <div class="col-md-3 text-center">
                            <div class="p-3 bg-dark rounded">
                                <div class="mb-2">
                                    <i class="bi bi-car-front text-success fs-3"></i>
                                </div>
                                <h4 id="equivalentCars" class="text-success mb-1">0</h4>
                                <small class="text-light">Autos compensados</small><br><br>
                            </div>
                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Matemáticas del Proyecto -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h2 class="display-6 fw-bold text-center mb-5"><?php echo $translations['math_fundamentals_title']; ?></h2>
                
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body card-dark">
                                <h5 class="text-success mb-3">
                                    <i class="bi bi-calculator me-2"></i>
                                    <?php echo $translations['math_formulas_title']; ?>
                                </h5>
                                <div class="bg-dark p-3 rounded mb-3">
                                    <strong>Absorción de CO₂:</strong><br>
                                    <code>Absorción = Árboles × Factor × Años</code>
                                </div>
                                <div class="bg-dark p-3 rounded">
                                    <strong>Compensación:</strong><br>
                                    <code>Árboles = CO₂_total ÷ Absorción_promedio</code>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body card-dark">
                                <h5 class="text-success mb-3">
                                    <i class="bi bi-graph-up me-2"></i>
                                    <?php echo $translations['math_conversion_title']; ?>
                                </h5>
                                <ul class="list-unstyled">
                                    <li class="mb-2">
                                        <strong>Auto:</strong> 0.21 kg CO₂/km
                                    </li>
                                    <li class="mb-2">
                                        <strong>Electricidad:</strong> 0.5 kg CO₂/kWh
                                    </li>
                                    <li class="mb-2">
                                        <strong>Vuelo:</strong> 90 kg CO₂/hora
                                    </li>
                                    <li class="mb-2">
                                        <strong>Árbol promedio:</strong> 25 kg CO₂/año
                                    </li>
                                    <li class="mb-2">
                                        <strong>Oxígeno:</strong> 1.5 × CO₂ absorbido
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
function calculateReforestation() {
    const trees = parseFloat(document.getElementById('treesToPlant').value) || 0;
    const treeType = document.getElementById('treeType').value;
    const area = parseFloat(document.getElementById('areaSize').value) || 0;
    const years = parseFloat(document.getElementById('analysisYears').value) || 1;

    // Factores de absorción por tipo de árbol (kg CO2/año)
    const absorptionRates = {
        pine: 22,
        oak: 30,
        eucalyptus: 35,
        generic: 25
    };

    const annualAbsorption = trees * absorptionRates[treeType];
    const oxygenProduced = annualAbsorption * 1.5; // 1.5 kg O2 por kg CO2
    const totalCo2 = (annualAbsorption * years) / 1000; // en toneladas
    const equivalentCars = Math.floor(annualAbsorption / 4600); // auto promedio emite 4.6 ton/año

    // Mostrar resultados
    document.getElementById('co2Absorbed').textContent = Math.round(annualAbsorption).toLocaleString() + ' kg';
    document.getElementById('oxygenProduced').textContent = Math.round(oxygenProduced).toLocaleString() + ' kg';
    document.getElementById('totalCo2').textContent = totalCo2.toFixed(1) + ' ton';
    document.getElementById('equivalentCars').textContent = equivalentCars;

    document.getElementById('reforestationResults').classList.remove('d-none');
}
</script>

</main>

<style>
.hero-section {
    background: linear-gradient(135deg, var(--brand) 0%, var(--brand-dark) 100%);
}

.card {
    transition: transform 0.3s ease;
}

.card:hover {
    transform: translateY(-2px);
}

.form-range {
    accent-color: #28a745;
}

code {
    color: #f8f9fa;
    background-color:rgb(58, 62, 66);
    padding: 2px 4px;
    border-radius: 3px;
    font-size: 0.9em;
}

/* Estilos para los gráficos responsivos */
.chart-container {
    position: relative;
    width: 100%;
    height: 300px;
    margin: 0 auto;
}

.chart-container canvas {
    max-width: 100% !important;
    height: auto !important;
}

/* Evitar desbordamiento en dispositivos móviles */
@media (max-width: 768px) {
    .chart-container {
        height: 250px;
    }
    
    .row.g-4 .col-lg-6 {
        margin-bottom: 1rem;
    }
}

/* Prevenir scroll horizontal */
.site-content .container-fluid, .site-content .container {
    overflow-x: hidden;
}

/* Ajustar tablas si las hay */
.table-responsive {
    overflow-x: auto;
}

/* Limitar el ancho máximo de los canvas */
canvas {
    max-width: 100% !important;
    width: auto !important;
}

/* Asegurar que los gráficos no rompan el layout */
.card-body card-dark {
    padding: 1rem;
    overflow: hidden;
}

/* Mejorar espaciado en móviles */
@media (max-width: 576px) {
    .display-4 {
        font-size: 2rem;
    }
    
    .btn-lg {
        padding: 0.5rem 1rem;
        font-size: 1rem;
    }
    
    .card-body card-dark {
        padding: 0.75rem;
    }
}
</style>