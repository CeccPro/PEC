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
$currentPage = 'subjects';
$pageTitle = $translations['subject_matematicas_title'] . ' - ' . $translations['app_title'];

include '../includes/header.php';
?>

<!-- Page Header -->
<section class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold mb-3">
                    <i class="bi bi-calculator-fill me-3"></i>
                    <?php echo $translations['subject_matematicas_title']; ?> y Reforestación
                </h1>
                <p class="lead mb-0">
                    <?php echo $translations['subject_matematicas_details']; ?>
                </p>
            </div>
            <div class="col-lg-4 text-center">
                <i class="bi bi-graph-up display-1"></i>
            </div>
        </div>
    </div>
</section>

<!-- Role and Methodology -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card border-0 shadow-lg">
                    <div class="card-body p-5">
                        <h3 class="text-primary mb-4">
                            <i class="bi bi-bullseye me-2"></i>
                            <?php echo $translations['subject_matematicas_role']; ?>
                        </h3>
                        <p class="lead mb-4">
                            <?php echo $translations['subject_matematicas_details']; ?>
                        </p>
                        
                        <!-- Mathematical Applications -->
                        <div class="row g-4 mt-4">
                            <div class="col-md-6">
                                <div class="d-flex">
                                    <i class="bi bi-calculator text-primary fs-1 me-3 mt-2"></i>
                                    <div>
                                        <h5>Cálculo de Densidades</h5>
                                        <p class="text-muted">
                                            Determinar la cantidad óptima de árboles por hectárea 
                                            utilizando fórmulas de área y espaciamiento.
                                        </p>
                                        <div class="bg-light p-3 rounded">
                                            <code>Árboles/ha = 10,000 ÷ (espaciamiento²)</code>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex">
                                    <i class="bi bi-bar-chart text-success fs-1 me-3 mt-2"></i>
                                    <div>
                                        <h5>Análisis Estadístico</h5>
                                        <p class="text-muted">
                                            Evaluar tasas de supervivencia y crecimiento 
                                            mediante análisis de tendencias y correlaciones.
                                        </p>
                                        <div class="bg-light p-3 rounded">
                                            <code>σ = √(Σ(x - μ)² / N)</code>
                                        </div>
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

<!-- Mathematical Models -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold text-primary">
                Modelos Matemáticos en Reforestación
            </h2>
            <p class="lead text-muted">
                Aplicaciones específicas de las matemáticas en proyectos forestales
            </p>
        </div>
        
        <div class="row g-4">
            <!-- Modelo de Crecimiento -->
            <div class="col-lg-6">
                <div class="card h-100 border-0 shadow">
                    <div class="card-header bg-success text-white">
                        <h4 class="mb-0">
                            <i class="bi bi-graph-up-arrow me-2"></i>
                            Modelo de Crecimiento Exponencial
                        </h4>
                    </div>
                    <div class="card-body">
                        <img src="https://placehold.co/400x200/28a745/ffffff?text=Grafico+Crecimiento+Exponencial" 
                             alt="Crecimiento Exponencial" class="img-fluid rounded mb-3">
                        <h5>Fórmula: h(t) = h₀ × e^(rt)</h5>
                        <p>
                            Donde:
                        </p>
                        <ul>
                            <li><strong>h(t)</strong>: Altura en el tiempo t</li>
                            <li><strong>h₀</strong>: Altura inicial</li>
                            <li><strong>r</strong>: Tasa de crecimiento</li>
                            <li><strong>t</strong>: Tiempo en años</li>
                        </ul>
                        <div class="alert alert-info">
                            <i class="bi bi-info-circle me-2"></i>
                            <strong>Aplicación:</strong> Predecir la altura de los árboles 
                            después de varios años de crecimiento.
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Modelo de Captura de CO2 -->
            <div class="col-lg-6">
                <div class="card h-100 border-0 shadow">
                    <div class="card-header bg-info text-white">
                        <h4 class="mb-0">
                            <i class="bi bi-cloud-fill me-2"></i>
                            Modelo de Captura de CO₂
                        </h4>
                    </div>
                    <div class="card-body">
                        <img src="https://placehold.co/400x200/17a2b8/ffffff?text=Captura+CO2+vs+Tiempo" 
                             alt="Captura de CO2" class="img-fluid rounded mb-3">
                        <h5>Fórmula: CO₂(t) = B(t) × 0.47 × 3.67</h5>
                        <p>
                            Donde:
                        </p>
                        <ul>
                            <li><strong>B(t)</strong>: Biomasa seca en el tiempo t</li>
                            <li><strong>0.47</strong>: Fracción de carbono en biomasa</li>
                            <li><strong>3.67</strong>: Conversión C a CO₂</li>
                        </ul>
                        <div class="alert alert-success">
                            <i class="bi bi-leaf me-2"></i>
                            <strong>Impacto:</strong> Un árbol maduro puede capturar 
                            entre 15-50 kg de CO₂ por año.
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Optimización de Recursos -->
            <div class="col-lg-6">
                <div class="card h-100 border-0 shadow">
                    <div class="card-header bg-warning text-dark">
                        <h4 class="mb-0">
                            <i class="bi bi-gear-fill me-2"></i>
                            Optimización de Recursos
                        </h4>
                    </div>
                    <div class="card-body">
                        <img src="https://placehold.co/400x200/ffc107/000000?text=Optimizacion+Lineal" 
                             alt="Optimización" class="img-fluid rounded mb-3">
                        <h5>Programación Lineal</h5>
                        <p><strong>Minimizar:</strong> C = c₁x₁ + c₂x₂ + ... + cₙxₙ</p>
                        <p><strong>Sujeto a:</strong></p>
                        <ul>
                            <li>a₁₁x₁ + a₁₂x₂ ≤ b₁ (restricción de área)</li>
                            <li>a₂₁x₁ + a₂₂x₂ ≤ b₂ (restricción de presupuesto)</li>
                            <li>x₁, x₂ ≥ 0 (no negatividad)</li>
                        </ul>
                        <div class="alert alert-warning">
                            <i class="bi bi-exclamation-triangle me-2"></i>
                            <strong>Objetivo:</strong> Minimizar costos maximizando 
                            la supervivencia de árboles.
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Análisis de Probabilidad -->
            <div class="col-lg-6">
                <div class="card h-100 border-0 shadow">
                    <div class="card-header bg-danger text-white">
                        <h4 class="mb-0">
                            <i class="bi bi-dice-3 me-2"></i>
                            Análisis de Supervivencia
                        </h4>
                    </div>
                    <div class="card-body">
                        <img src="https://placehold.co/400x200/dc3545/ffffff?text=Curva+Supervivencia" 
                             alt="Supervivencia" class="img-fluid rounded mb-3">
                        <h5>Distribución de Weibull</h5>
                        <p><strong>S(t) = e^(-(t/λ)^k)</strong></p>
                        <p>
                            Parámetros:
                        </p>
                        <ul>
                            <li><strong>λ</strong>: Parámetro de escala</li>
                            <li><strong>k</strong>: Parámetro de forma</li>
                            <li><strong>t</strong>: Tiempo</li>
                        </ul>
                        <div class="alert alert-danger">
                            <i class="bi bi-graph-down me-2"></i>
                            <strong>Análisis:</strong> Predecir la probabilidad de 
                            supervivencia de plántulas en diferentes condiciones.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Practical Applications -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h2 class="display-6 fw-bold text-primary mb-4">
                    Aplicaciones Prácticas
                </h2>
                <div class="accordion" id="practicalApplications">
                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" 
                                    data-bs-target="#collapse1">
                                <i class="bi bi-1-circle-fill text-primary me-3"></i>
                                Planificación del Espaciamiento
                            </button>
                        </h3>
                        <div id="collapse1" class="accordion-collapse collapse show" 
                             data-bs-parent="#practicalApplications">
                            <div class="accordion-body">
                                <p>Utilizamos geometría para determinar el espaciamiento óptimo:</p>
                                <ul>
                                    <li><strong>Plantación cuadrada:</strong> 3x3, 4x4 metros</li>
                                    <li><strong>Plantación triangular:</strong> Mayor densidad, 15% más árboles</li>
                                    <li><strong>Plantación en curvas de nivel:</strong> Para terrenos inclinados</li>
                                </ul>
                                <div class="bg-light p-3 rounded mt-3">
                                    <strong>Ejemplo:</strong> En 1 hectárea con espaciamiento 3x3m:
                                    <br>10,000 ÷ 9 = 1,111 árboles
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" 
                                    data-bs-target="#collapse2">
                                <i class="bi bi-2-circle-fill text-success me-3"></i>
                                Cálculo de Costos
                            </button>
                        </h3>
                        <div id="collapse2" class="accordion-collapse collapse" 
                             data-bs-parent="#practicalApplications">
                            <div class="accordion-body">
                                <p>Análisis económico integral del proyecto:</p>
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Concepto</th>
                                            <th>Costo Unitario</th>
                                            <th>Por Hectárea</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Plántulas</td>
                                            <td>$2.50 USD</td>
                                            <td>$2,775 USD</td>
                                        </tr>
                                        <tr>
                                            <td>Preparación sitio</td>
                                            <td>-</td>
                                            <td>$800 USD</td>
                                        </tr>
                                        <tr>
                                            <td>Plantación</td>
                                            <td>$0.75 USD</td>
                                            <td>$833 USD</td>
                                        </tr>
                                        <tr class="table-success">
                                            <td><strong>Total</strong></td>
                                            <td>-</td>
                                            <td><strong>$4,408 USD</strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" 
                                    data-bs-target="#collapse3">
                                <i class="bi bi-3-circle-fill text-info me-3"></i>
                                Monitoreo Estadístico
                            </button>
                        </h3>
                        <div id="collapse3" class="accordion-collapse collapse" 
                             data-bs-parent="#practicalApplications">
                            <div class="accordion-body">
                                <p>Seguimiento cuantitativo del crecimiento forestal:</p>
                                <ul>
                                    <li><strong>Media aritmética:</strong> Altura promedio de árboles</li>
                                    <li><strong>Desviación estándar:</strong> Variabilidad en crecimiento</li>
                                    <li><strong>Coeficiente de variación:</strong> Homogeneidad del lote</li>
                                    <li><strong>Regresión lineal:</strong> Tendencias de crecimiento</li>
                                </ul>
                                <div class="bg-info bg-opacity-10 p-3 rounded">
                                    <strong>📊 Ejemplo de seguimiento:</strong>
                                    <br>Medición mensual de altura y diámetro
                                    <br>Análisis de correlación con factores climáticos
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="https://placehold.co/500x400/0066cc/ffffff?text=Aplicaciones+Matematicas" 
                     alt="Aplicaciones Matemáticas" class="img-fluid rounded shadow-lg">
                <!-- TODO: Reemplazar con infografía de aplicaciones matemáticas -->
            </div>
        </div>
    </div>
</section>

<!-- Interactive Calculator Preview -->
<section class="py-5 bg-primary text-white">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2 class="display-5 fw-bold mb-4">
                    <i class="bi bi-calculator me-3"></i>
                    Pon en Práctica las Matemáticas
                </h2>
                <p class="lead mb-4">
                    Utiliza nuestra calculadora para aplicar los conceptos matemáticos 
                    en un proyecto real de reforestación.
                </p>
                <a href="../pages/calculator.php" class="btn btn-light btn-lg">
                    <i class="bi bi-arrow-right me-2"></i>
                    Usar Calculadora
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Tasks and Deliverables -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3 class="text-primary mb-4">
                    <i class="bi bi-list-check me-2"></i>
                    Tareas Específicas
                </h3>
                <div class="list-group">
                    <?php foreach($translations['subject_matematicas_tasks'] as $index => $task): ?>
                    <div class="list-group-item d-flex align-items-start">
                        <span class="badge bg-primary rounded-pill me-3 mt-1"><?php echo $index + 1; ?></span>
                        <div>
                            <p class="mb-1"><?php echo $task; ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            
            <div class="col-lg-6">
                <h3 class="text-success mb-4">
                    <i class="bi bi-trophy me-2"></i>
                    Objetivos de Aprendizaje
                </h3>
                <div class="card border-0 bg-white shadow">
                    <div class="card-body">
                        <p><strong>Objetivo General:</strong></p>
                        <p class="text-muted"><?php echo $translations['subject_matematicas_objectives']; ?></p>
                        
                        <p class="mt-4"><strong>Metodología:</strong></p>
                        <p class="text-muted"><?php echo $translations['subject_matematicas_methodology']; ?></p>
                        
                        <p class="mt-4"><strong>Entregables:</strong></p>
                        <p class="text-muted"><?php echo $translations['subject_matematicas_deliverables']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>

<!-- TODO: Agregar gráficos interactivos con Chart.js -->
<!-- TODO: Implementar ejercicios matemáticos interactivos -->
<!-- TODO: Agregar simulador de crecimiento de árboles -->
<!-- TODO: Incluir calculadora de análisis de supervivencia -->