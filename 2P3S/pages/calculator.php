<main class="site-content">
<!-- Hero Section Calculadora -->
<section class="hero-section bg-success text-white py-5 page-section">
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

<!-- Calculadora Principal -->
<section class="py-5 page-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card shadow-lg border-0">
                    <div class="card-header bg-success text-white">
                        <h3 class="mb-0">
                            <i class="bi bi-calculator me-2"></i>
                            <?php echo $translations['carbon_calculator_title']; ?>
                        </h3>
                    </div>
                    <div class="card-body p-4">
                        <form id="carbonCalculator">
                            <div class="row g-3">
                                <!-- Transporte -->
                                <div class="col-md-6">
                                    <h5 class="text-success mb-3">
                                        <i class="bi bi-car-front me-2"></i><?php echo $translations['label_transport']; ?>
                                    </h5>
                                    <div class="mb-3">
                                        <label class="form-label"><?php echo $translations['label_km_car_week']; ?></label>
                                        <input type="number" class="form-control" id="carKm" min="0" value="0">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label"><?php echo $translations['label_flight_hours']; ?></label>
                                        <input type="number" class="form-control" id="flightHours" min="0" value="0">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label"><?php echo $translations['label_public_transport']; ?></label>
                                        <input type="number" class="form-control" id="publicTransport" min="0" value="0">
                                    </div>
                                </div>
                                
                                <!-- Energía -->
                                <div class="col-md-6">
                                    <h5 class="text-success mb-3">
                                        <i class="bi bi-lightning me-2"></i><?php echo $translations['label_energy_title']; ?>
                                    </h5>
                                    <div class="mb-3">
                                        <label class="form-label"><?php echo $translations['label_electricity_monthly']; ?></label>
                                        <input type="number" class="form-control" id="electricity" min="0" value="0">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label"><?php echo $translations['label_gas_monthly']; ?></label>
                                        <input type="number" class="form-control" id="gas" min="0" value="0">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label"><?php echo $translations['label_household_size']; ?></label>
                                        <input type="number" class="form-control" id="householdSize" min="1" value="1">
                                    </div>
                                </div>
                                
                                <!-- Consumo -->
                                <div class="col-md-6">
                                    <h5 class="text-success mb-3">
                                        <i class="bi bi-basket me-2"></i><?php echo $translations['label_consumption_title']; ?>
                                    </h5>
                                    <div class="mb-3">
                                        <label class="form-label"><?php echo $translations['label_meat_meals_week']; ?></label>
                                        <input type="number" class="form-control" id="meatMeals" min="0" value="0">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label"><?php echo $translations['label_new_products_month']; ?></label>
                                        <input type="number" class="form-control" id="newProducts" min="0" value="0">
                                    </div>
                                </div>
                                
                                <!-- Residuos -->
                                <div class="col-md-6">
                                    <h5 class="text-success mb-3">
                                        <i class="bi bi-trash me-2"></i><?php echo $translations['label_waste_title']; ?>
                                    </h5>
                                    <div class="mb-3">
                                        <label class="form-label"><?php echo $translations['label_recycling_rate']; ?></label>
                                        <input type="range" class="form-range" id="recyclingRate" min="0" max="100" value="50">
                                        <span id="recyclingValue" class="text-muted">50%</span>
                                    </div>                                    <div class="mb-3">
                                        <label class="form-label"><?php echo $translations['label_waste_bags_week']; ?></label>
                                        <input type="number" class="form-control" id="wasteBags" min="0" value="0">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="text-center mt-4">
                                <button type="button" class="btn btn-success btn-lg px-5" onclick="calculateCarbon()">
                                    <i class="bi bi-calculator me-2"></i>
                                    <?php echo $translations['calc_button_calculate_carbon']; ?>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Resultados -->
<section class="py-5 bg-light page-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div id="results" class="d-none">
                    <h2 class="display-6 fw-bold text-center mb-5"><?php echo $translations['results_title']; ?></h2>
                    
                    <div class="row g-4 mb-5">
                        <div class="col-md-4">
                            <div class="card h-100 border-0 shadow-sm text-center">
                                <div class="card-body">
                                    <div class="bg-danger rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                                        <i class="bi bi-cloud text-white fs-2"></i>
                                    </div>
                                    <h3 id="totalCarbon" class="text-danger fw-bold">0 kg</h3>
                                    <p class="text-muted"><?php echo $translations['results_co2_annual']; ?></p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="card h-100 border-0 shadow-sm text-center">
                                <div class="card-body">
                                    <div class="bg-success rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                                        <i class="bi bi-tree text-white fs-2"></i>
                                    </div>
                                    <h3 id="treesNeeded" class="text-success fw-bold">0</h3>
                                    <p class="text-muted"><?php echo $translations['results_trees_needed']; ?></p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="card h-100 border-0 shadow-sm text-center">
                                <div class="card-body">
                                    <div class="bg-info rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                                        <i class="bi bi-calendar text-white fs-2"></i>
                                    </div>
                                    <h3 id="yearsToNeutralize" class="text-info fw-bold">0</h3>
                                    <p class="text-muted"><?php echo $translations['results_years_to_neutralize']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                      <!-- Gráficos de análisis -->
                    <div class="row g-4 mb-4">
                        <div class="col-lg-6">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-body">
                                    <h5 class="text-success mb-4">
                                        <i class="bi bi-pie-chart me-2"></i>
                                        <?php echo $translations['chart_distribution_title']; ?>
                                    </h5>                                    <div style="position: relative; height: 300px;">
                                        <canvas id="emissionsChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-6">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-body">
                                    <h5 class="text-success mb-4">
                                        <i class="bi bi-bar-chart me-2"></i>
                                        <?php echo $translations['chart_comparison_title']; ?>
                                    </h5>
                                    <div style="position: relative; height: 300px;">
                                        <canvas id="comparisonChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Gráfico de proyección temporal -->
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body">                            <h5 class="text-success mb-4">
                                <i class="bi bi-graph-up me-2"></i>
                                <?php echo $translations['chart_projection_title']; ?>
                            </h5>
                            <div style="position: relative; height: 400px;">
                                <canvas id="projectionChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Calculadora de Impacto de Reforestación -->
<section class="py-5 page-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card border-0 shadow-lg">
                    <div class="card-header bg-info text-white">
                        <h3 class="mb-0">
                            <i class="bi bi-tree-fill me-2"></i>
                            <?php echo $translations['reforestation_calc_title']; ?>
                        </h3>
                    </div>
                    <div class="card-body p-4">
                        <form id="reforestationCalculator">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label"><?php echo $translations['label_trees_to_plant']; ?></label>
                                    <input type="number" class="form-control" id="treesToPlant" min="1" value="1">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label"><?php echo $translations['label_tree_type']; ?></label>
                                    <select class="form-select" id="treeType">
                                        <option value="pine"><?php echo $translations['tree_type_pine']; ?></option>
                                        <option value="oak"><?php echo $translations['tree_type_oak']; ?></option>
                                        <option value="eucalyptus"><?php echo $translations['tree_type_eucalyptus']; ?></option>
                                        <option value="generic"><?php echo $translations['tree_type_generic']; ?></option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label"><?php echo $translations['label_area_size']; ?></label>
                                    <input type="number" class="form-control" id="areaSize" min="0.01" step="0.01" value="1">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label"><?php echo $translations['label_analysis_years']; ?></label>
                                    <input type="number" class="form-control" id="analysisYears" min="1" value="20">
                                </div>
                            </div>
                            
                            <div class="text-center mt-4">
                                <button type="button" class="btn btn-info btn-lg px-5" onclick="calculateReforestation()">
                                    <i class="bi bi-tree me-2"></i>
                                    <?php echo $translations['calc_button_calculate_reforestation']; ?>
                                </button>
                            </div>
                        </form>
                        
                        <div id="reforestationResults" class="mt-4 d-none">
                            <hr>
                            <div class="row g-3">                        <div class="col-md-3 text-center">
                            <div class="p-3 bg-light rounded">
                                <div class="mb-2">
                                    <i class="bi bi-cloud-minus text-success fs-3"></i>
                                </div>
                                <h4 id="co2Absorbed" class="text-success mb-1">0 kg</h4>
                                <small class="text-muted">CO₂ absorbido anualmente</small>
                            </div>
                        </div>
                        <div class="col-md-3 text-center">
                            <div class="p-3 bg-light rounded">
                                <div class="mb-2">
                                    <i class="bi bi-wind text-info fs-3"></i>
                                </div>
                                <h4 id="oxygenProduced" class="text-info mb-1">0 kg</h4>
                                <small class="text-muted">Oxígeno producido anualmente</small>
                            </div>
                        </div>
                        <div class="col-md-3 text-center">
                            <div class="p-3 bg-light rounded">
                                <div class="mb-2">
                                    <i class="bi bi-graph-up text-success fs-3"></i>
                                </div>
                                <h4 id="totalCo2" class="text-success mb-1">0 ton</h4>
                                <small class="text-muted">CO₂ total en el período</small>
                            </div>
                        </div>
                        <div class="col-md-3 text-center">
                            <div class="p-3 bg-light rounded">
                                <div class="mb-2">
                                    <i class="bi bi-car-front text-warning fs-3"></i>
                                </div>
                                <h4 id="equivalentCars" class="text-warning mb-1">0</h4>
                                <small class="text-muted">Autos compensados</small>
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
<section class="py-5 bg-light page-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h2 class="display-6 fw-bold text-center mb-5"><?php echo $translations['math_fundamentals_title']; ?></h2>
                
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body">
                                <h5 class="text-success mb-3">
                                    <i class="bi bi-calculator me-2"></i>
                                    <?php echo $translations['math_formulas_title']; ?>
                                </h5>
                                <div class="bg-light p-3 rounded mb-3">
                                    <strong>Huella de Carbono:</strong><br>
                                    <code>CO₂ = Σ(Actividad × Factor de Emisión)</code>
                                </div>
                                <div class="bg-light p-3 rounded mb-3">
                                    <strong>Absorción de CO₂:</strong><br>
                                    <code>Absorción = Árboles × Factor × Años</code>
                                </div>
                                <div class="bg-light p-3 rounded">
                                    <strong>Compensación:</strong><br>
                                    <code>Árboles = CO₂_total ÷ Absorción_promedio</code>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body">
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

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
// Verificar que Chart.js se haya cargado
if (typeof Chart === 'undefined') {
    console.error('Chart.js no se ha cargado correctamente');
}

// Actualizar valor del slider de reciclaje
document.getElementById('recyclingRate').addEventListener('input', function() {
    document.getElementById('recyclingValue').textContent = this.value + '%';
});

function calculateCarbon() {
    // Obtener valores del formulario
    const carKm = parseFloat(document.getElementById('carKm').value) || 0;
    const flightHours = parseFloat(document.getElementById('flightHours').value) || 0;
    const publicTransport = parseFloat(document.getElementById('publicTransport').value) || 0;
    const electricity = parseFloat(document.getElementById('electricity').value) || 0;
    const gas = parseFloat(document.getElementById('gas').value) || 0;
    const householdSize = parseFloat(document.getElementById('householdSize').value) || 1;
    const meatMeals = parseFloat(document.getElementById('meatMeals').value) || 0;
    const newProducts = parseFloat(document.getElementById('newProducts').value) || 0;
    const recyclingRate = parseFloat(document.getElementById('recyclingRate').value) || 0;
    const wasteBags = parseFloat(document.getElementById('wasteBags').value) || 0;

    // Factores de emisión (kg CO2)
    const factors = {
        car: 0.21, // kg CO2 por km
        flight: 90, // kg CO2 por hora de vuelo
        publicTransport: 0.05, // kg CO2 por km
        electricity: 0.5, // kg CO2 por kWh
        gas: 2.0, // kg CO2 por m³
        meat: 3.3, // kg CO2 por comida con carne
        products: 15, // kg CO2 por producto nuevo
        waste: 0.5 // kg CO2 por bolsa de basura
    };

    // Cálculos anuales
    const transportEmissions = (carKm * 52 * factors.car) + 
                              (flightHours * factors.flight) + 
                              (publicTransport * 52 * factors.publicTransport);
    
    const energyEmissions = ((electricity * 12 * factors.electricity) + 
                            (gas * 12 * factors.gas)) / householdSize;
    
    const consumptionEmissions = (meatMeals * 52 * factors.meat) + 
                                (newProducts * 12 * factors.products);
    
    const wasteEmissions = (wasteBags * 52 * factors.waste) * (1 - (recyclingRate / 100));

    const totalEmissions = transportEmissions + energyEmissions + consumptionEmissions + wasteEmissions;

    // Cálculos de compensación
    const treesNeeded = Math.ceil(totalEmissions / 25); // 25 kg CO2 por árbol por año
    const yearsToNeutralize = Math.ceil(totalEmissions / (treesNeeded * 25));

    // Mostrar resultados    document.getElementById('totalCarbon').textContent = Math.round(totalEmissions).toLocaleString() + ' kg';
    document.getElementById('treesNeeded').textContent = treesNeeded.toLocaleString();
    if (yearsToNeutralize === Infinity) {
        document.getElementById('yearsToNeutralize').textContent = '∞';
    } else if (isNaN(yearsToNeutralize)) {
        document.getElementById('yearsToNeutralize').textContent = '0';
    } else {
        document.getElementById('yearsToNeutralize').textContent = yearsToNeutralize;
    }

    // Mostrar sección de resultados
    document.getElementById('results').classList.remove('d-none');
    
    // Crear gráficos
    const emissionsData = {
        transport: Math.round(transportEmissions),
        energy: Math.round(energyEmissions),
        consumption: Math.round(consumptionEmissions),
        waste: Math.round(wasteEmissions)    };
    
    // Esperar un momento para que el DOM se actualice antes de crear los gráficos
    setTimeout(() => {
        try {
            createEmissionsChart(emissionsData);
            createComparisonChart(emissionsData);
            createProjectionChart(totalEmissions, treesNeeded);
        } catch (error) {
            console.error('Error al crear los gráficos:', error);
        }
    }, 100);

    // Scroll a resultados
    document.getElementById('results').scrollIntoView({ behavior: 'smooth' });
}

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

// Gráfico circular de distribución de emisiones
function createEmissionsChart(data) {
    const ctx = document.getElementById('emissionsChart').getContext('2d');
    
    if (window.emissionsChart && typeof window.emissionsChart.destroy === 'function') {
        window.emissionsChart.destroy();
    }

    const total = data.transport + data.energy + data.consumption + data.waste;
    
    window.emissionsChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: <?php echo json_encode([$translations['chart_label_transport'],$translations['chart_label_energy'],$translations['chart_label_consumption'],$translations['chart_label_waste']]); ?>,
            datasets: [{
                data: [data.transport, data.energy, data.consumption, data.waste],
                backgroundColor: [
                    'rgba(220, 53, 69, 0.8)',   // Rojo
                    'rgba(255, 193, 7, 0.8)',   // Amarillo
                    'rgba(23, 162, 184, 0.8)',  // Azul
                    'rgba(108, 117, 125, 0.8)'  // Gris
                ],
                borderColor: [
                    'rgba(220, 53, 69, 1)',
                    'rgba(255, 193, 7, 1)',
                    'rgba(23, 162, 184, 1)',
                    'rgba(108, 117, 125, 1)'
                ],
                borderWidth: 2,
                hoverOffset: 10
            }]
        },        options: {
            responsive: true,
            maintainAspectRatio: false,
            layout: {
                padding: {
                    top: 10,
                    bottom: 10,
                    left: 10,
                    right: 10
                }
            },
            plugins: {
                legend: {
                    position: 'bottom',
                    labels: {
                        padding: 15,
                        usePointStyle: true,
                        font: {
                            size: 11
                        },
                        boxWidth: 12
                    }
                },
                tooltip: {
                    backgroundColor: 'rgba(0, 0, 0, 0.8)',
                    titleColor: 'white',
                    bodyColor: 'white',
                    callbacks: {
                        label: function(context) {
                            const percentage = ((context.parsed / total) * 100).toFixed(1);
                            return context.label + ': ' + context.parsed.toLocaleString() + ' kg CO₂ (' + percentage + '%)';
                        }
                    }
                }
            },
            animation: {
                animateRotate: true,
                duration: 1000
            }
        }
    });
}

// Gráfico de barras comparativo
function createComparisonChart(data) {
    const ctx = document.getElementById('comparisonChart').getContext('2d');
    
    if (window.comparisonChart && typeof window.comparisonChart.destroy === 'function') {
        window.comparisonChart.destroy();
    }

    // Promedios nacionales para comparación (en kg CO2/año)
    const nationalAverages = {
        transport: 2300,
        energy: 1800,
        consumption: 1200,
        waste: 400
    };

    window.comparisonChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode([$translations['chart_label_transport'],$translations['chart_label_energy'],$translations['chart_label_consumption'],$translations['chart_label_waste']]); ?>,
                datasets: [
                {
                    label: '<?php echo $translations['chart_label_your_footprint']; ?>',
                    data: [data.transport, data.energy, data.consumption, data.waste],
                    backgroundColor: 'rgba(220, 53, 69, 0.7)',
                    borderColor: 'rgba(220, 53, 69, 1)',
                    borderWidth: 2
                },
                {
                    label: '<?php echo $translations['chart_label_national_avg']; ?>',
                    data: [nationalAverages.transport, nationalAverages.energy, nationalAverages.consumption, nationalAverages.waste],
                    backgroundColor: 'rgba(40, 167, 69, 0.7)',
                    borderColor: 'rgba(40, 167, 69, 1)',
                    borderWidth: 2
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'kg CO₂/año'
                    },
                    ticks: {
                        callback: function(value) {
                            return value.toLocaleString() + ' kg';
                        }
                    }
                }
            },
            plugins: {
                legend: {
                    position: 'top',
                    labels: {
                        usePointStyle: true,
                        padding: 20
                    }
                },
                tooltip: {
                    backgroundColor: 'rgba(0, 0, 0, 0.8)',
                    callbacks: {
                        label: function(context) {
                            return context.dataset.label + ': ' + context.parsed.y.toLocaleString() + ' kg CO₂';
                        }
                    }
                }
            },
            animation: {
                duration: 1500,
                easing: 'easeInOutQuart'
            }
        }
    });
}

// Gráfico de línea de proyección temporal
function createProjectionChart(totalEmissions, treesNeeded) {
    const ctx = document.getElementById('projectionChart').getContext('2d');
    
    if (window.projectionChart && typeof window.projectionChart.destroy === 'function') {
        window.projectionChart.destroy();
    }

    // Generar datos de proyección para 20 años
    const years = [];
    const emissionsData = [];
    const absorptionData = [];
    const netEmissionsData = [];
    
    const annualAbsorption = treesNeeded * 25; // 25 kg CO2 por árbol por año
    
    for (let i = 0; i <= 20; i++) {
        years.push(2024 + i);
        emissionsData.push(totalEmissions);
        
        // La absorción aumenta gradualmente conforme los árboles crecen
        const growthFactor = Math.min(i / 5, 1); // Máxima absorción después de 5 años
        const currentAbsorption = annualAbsorption * growthFactor;
        absorptionData.push(currentAbsorption);
        
        // Emisiones netas (positivo = emisiones, negativo = absorción neta)
        netEmissionsData.push(totalEmissions - currentAbsorption);
    }

    window.projectionChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: years,
            datasets: [
                {
                    label: '<?php echo $translations['chart_label_annual_emissions']; ?>',
                    data: emissionsData,
                    borderColor: 'rgba(220, 53, 69, 1)',
                    backgroundColor: 'rgba(220, 53, 69, 0.1)',
                    borderWidth: 3,
                    fill: false,
                    tension: 0.1
                },
                {
                    label: '<?php echo $translations['chart_label_absorption']; ?>',
                    data: absorptionData,
                    borderColor: 'rgba(40, 167, 69, 1)',
                    backgroundColor: 'rgba(40, 167, 69, 0.1)',
                    borderWidth: 3,
                    fill: false,
                    tension: 0.4
                },
                {
                    label: '<?php echo $translations['chart_label_net_emissions']; ?>',
                    data: netEmissionsData,
                    borderColor: 'rgba(255, 193, 7, 1)',
                    backgroundColor: 'rgba(255, 193, 7, 0.1)',
                    borderWidth: 3,
                    fill: true,
                    tension: 0.2
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                        x: {
                    title: {
                        display: true,
                        text: '<?php echo $translations['chart_axis_year']; ?>'
                    }
                },
                y: {
                    title: {
                        display: true,
                        text: '<?php echo $translations['chart_axis_kg_co2']; ?>'
                    },
                    ticks: {
                        callback: function(value) {
                            return value.toLocaleString() + ' kg';
                        }
                    }
                }
            },
            plugins: {
                legend: {
                    position: 'top',
                    labels: {
                        usePointStyle: true,
                        padding: 20
                    }
                },
                tooltip: {
                    backgroundColor: 'rgba(0, 0, 0, 0.8)',
                    callbacks: {
                        label: function(context) {
                            return context.dataset.label + ': ' + context.parsed.y.toLocaleString() + ' kg CO₂';
                        }
                    }
                }
            },
            animation: {
                duration: 2000,
                easing: 'easeInOutCubic'
            },
            interaction: {
                intersect: false,
                mode: 'index'
            }
        }
    });
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
    background-color: #f8f9fa;
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
.container-fluid, .container {
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
.card-body {
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
    
    .card-body {
        padding: 0.75rem;
    }
}
</style>