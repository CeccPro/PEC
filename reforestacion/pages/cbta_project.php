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
$currentPage = 'cbta_project';
$pageTitle = $translations['cbta_project_title'] . ' - ' . $translations['app_title'];

// Datos del proyecto CBTA 35
$projectData = [
    'area_total' => 2.0, // hectáreas
    'area_degradada' => 1.5, // hectáreas a reforestar
    'ubicacion' => 'Estado de México, México',
    'altitud' => '2,240 metros sobre el nivel del mar',
    'clima' => 'Templado subhúmedo',
    'precipitacion' => '800-1,200 mm anuales',
    'temperatura' => '12-18°C promedio anual',
    'estudiantes_participantes' => 45,
    'profesores_involucrados' => 8,
    'tiempo_estimado' => '2 años académicos'
];

include '../includes/header.php';
?>

<!-- Hero Section -->
<section class="py-5 bg-success text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold mb-3">
                    <i class="bi bi-geo-alt-fill me-3"></i>
                    <?php echo $translations['cbta_project_title']; ?>
                </h1>
                <p class="lead mb-4">
                    <?php echo $translations['cbta_situation_description']; ?>
                </p>
                <div class="d-flex flex-wrap gap-2">
                    <span class="badge bg-light text-success fs-6">
                        <i class="bi bi-rulers me-1"></i>
                        <?php echo $projectData['area_degradada']; ?> hectáreas
                    </span>
                    <span class="badge bg-light text-success fs-6">
                        <i class="bi bi-people me-1"></i>
                        <?php echo $projectData['estudiantes_participantes']; ?> estudiantes
                    </span>
                    <span class="badge bg-light text-success fs-6">
                        <i class="bi bi-calendar me-1"></i>
                        <?php echo $projectData['tiempo_estimado']; ?>
                    </span>
                </div>
            </div>
            <div class="col-lg-4 text-center">
                <img src="https://placehold.co/300x200/28a745/ffffff?text=CBTA+35+Campus" 
                     alt="CBTA 35" class="img-fluid rounded shadow">
                <!-- TODO: Reemplazar con foto real del CBTA 35 -->
            </div>
        </div>
    </div>
</section>

<!-- Project Overview -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center mb-5">
                <h2 class="display-5 fw-bold text-primary mb-4">
                    Situación Actual del Terreno
                </h2>
                <p class="lead text-muted">
                    El CBTA 35 cuenta con un área de terreno que presenta signos de degradación 
                    debido al uso intensivo agrícola previo y la erosión natural.
                </p>
            </div>
        </div>
        
        <div class="row g-4">
            <!-- Características del Terreno -->
            <div class="col-lg-6">
                <div class="card h-100 border-0 shadow">
                    <div class="card-header bg-info text-white">
                        <h4 class="mb-0">
                            <i class="bi bi-map me-2"></i>
                            Características del Sitio
                        </h4>
                    </div>
                    <div class="card-body">
                        <img src="https://placehold.co/400x200/17a2b8/ffffff?text=Mapa+Topografico" 
                             alt="Mapa del terreno" class="img-fluid rounded mb-3">
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <strong>📍 Ubicación:</strong>
                                <p class="text-muted small"><?php echo $projectData['ubicacion']; ?></p>
                            </div>
                            <div class="col-sm-6">
                                <strong>🏔️ Altitud:</strong>
                                <p class="text-muted small"><?php echo $projectData['altitud']; ?></p>
                            </div>
                            <div class="col-sm-6">
                                <strong>🌡️ Clima:</strong>
                                <p class="text-muted small"><?php echo $projectData['clima']; ?></p>
                            </div>
                            <div class="col-sm-6">
                                <strong>🌧️ Precipitación:</strong>
                                <p class="text-muted small"><?php echo $projectData['precipitacion']; ?></p>
                            </div>
                            <div class="col-sm-6">
                                <strong>🌡️ Temperatura:</strong>
                                <p class="text-muted small"><?php echo $projectData['temperatura']; ?></p>
                            </div>
                            <div class="col-sm-6">
                                <strong>📏 Área total:</strong>
                                <p class="text-muted small"><?php echo $projectData['area_total']; ?> hectáreas</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Problemática Actual -->
            <div class="col-lg-6">
                <div class="card h-100 border-0 shadow">
                    <div class="card-header bg-warning text-dark">
                        <h4 class="mb-0">
                            <i class="bi bi-exclamation-triangle me-2"></i>
                            Problemática Identificada
                        </h4>
                    </div>
                    <div class="card-body">
                        <img src="https://placehold.co/400x200/ffc107/000000?text=Suelo+Degradado" 
                             alt="Suelo degradado" class="img-fluid rounded mb-3">
                        <ul class="list-unstyled">
                            <li class="mb-3">
                                <i class="bi bi-x-circle text-danger me-2"></i>
                                <strong>Erosión del suelo</strong>
                                <p class="text-muted small">Pérdida de capa superficial por escorrentía</p>
                            </li>
                            <li class="mb-3">
                                <i class="bi bi-x-circle text-danger me-2"></i>
                                <strong>Baja cobertura vegetal</strong>
                                <p class="text-muted small">Solo 20% del área tiene vegetación</p>
                            </li>
                            <li class="mb-3">
                                <i class="bi bi-x-circle text-danger me-2"></i>
                                <strong>Compactación del suelo</strong>
                                <p class="text-muted small">Reducción de infiltración de agua</p>
                            </li>
                            <li class="mb-3">
                                <i class="bi bi-x-circle text-danger me-2"></i>
                                <strong>Pérdida de biodiversidad</strong>
                                <p class="text-muted small">Escasa fauna y flora nativa</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Reforestation Steps -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold text-success">
                <i class="bi bi-list-ol me-3"></i>
                <?php echo $translations['cbta_steps_title']; ?>
            </h2>
            <p class="lead text-muted">
                Plan detallado para la restauración del terreno del CBTA 35
            </p>
        </div>
        
        <div class="steps-container">
            <!-- Paso 1: Análisis del Sitio -->
            <div class="step">
                <div class="row align-items-center">
                    <div class="col-md-2 text-center">
                        <div class="step-number">1</div>
                    </div>
                    <div class="col-md-8">
                        <h4 class="text-success"><?php echo $translations['cbta_step_1']; ?></h4>
                        <p class="mb-3"><?php echo $translations['cbta_step_1_desc']; ?></p>
                        
                        <!-- Actividades específicas -->
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <h6><i class="bi bi-geo-alt text-primary me-2"></i>Análisis de Suelo</h6>
                                <ul class="small text-muted">
                                    <li>pH del suelo (6.0-7.5 óptimo)</li>
                                    <li>Contenido de materia orgánica</li>
                                    <li>Textura y estructura</li>
                                    <li>Capacidad de retención de agua</li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <h6><i class="bi bi-cloud-sun text-info me-2"></i>Condiciones Climáticas</h6>
                                <ul class="small text-muted">
                                    <li>Registro de temperaturas</li>
                                    <li>Patrones de precipitación</li>
                                    <li>Exposición solar</li>
                                    <li>Dirección de vientos dominantes</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="mt-3">
                            <span class="badge bg-info me-1">Duración: 2 semanas</span>
                            <span class="badge bg-secondary me-1">Materias: Ecosistemas, Química</span>
                            <span class="badge bg-warning text-dark">Costo: $500 USD</span>
                        </div>
                    </div>
                    <div class="col-md-2 text-center">
                        <img src="https://placehold.co/100x100/007bff/ffffff?text=Analisis" 
                             alt="Análisis" class="img-fluid rounded-circle">
                    </div>
                </div>
            </div>
            
            <!-- Paso 2: Selección de Especies -->
            <div class="step">
                <div class="row align-items-center">
                    <div class="col-md-2 text-center">
                        <div class="step-number">2</div>
                    </div>
                    <div class="col-md-8">
                        <h4 class="text-success"><?php echo $translations['cbta_step_2']; ?></h4>
                        <p class="mb-3"><?php echo $translations['cbta_step_2_desc']; ?></p>
                        
                        <div class="row g-3">
                            <div class="col-lg-6">
                                <h6><i class="bi bi-tree text-success me-2"></i>Especies Recomendadas</h6>
                                <div class="table-responsive">
                                    <table class="table table-sm">
                                        <thead>
                                            <tr>
                                                <th>Especie</th>
                                                <th>Adaptación</th>
                                                <th>Crecimiento</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><strong>Pino Montezuma</strong></td>
                                                <td>Alta</td>
                                                <td>Medio</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Encino</strong></td>
                                                <td>Muy alta</td>
                                                <td>Lento</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Cedro Blanco</strong></td>
                                                <td>Alta</td>
                                                <td>Medio</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Madroño</strong></td>
                                                <td>Media</td>
                                                <td>Medio</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <h6><i class="bi bi-shield-check text-warning me-2"></i>Criterios de Selección</h6>
                                <ul class="small text-muted">
                                    <li>Adaptación al clima local</li>
                                    <li>Resistencia a sequías</li>
                                    <li>Beneficios ecosistémicos</li>
                                    <li>Facilidad de mantenimiento</li>
                                    <li>Disponibilidad en viveros locales</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="mt-3">
                            <span class="badge bg-info me-1">Duración: 1 semana</span>
                            <span class="badge bg-secondary me-1">Materias: Ecosistemas, Humanidades</span>
                            <span class="badge bg-warning text-dark">Costo: $200 USD</span>
                        </div>
                    </div>
                    <div class="col-md-2 text-center">
                        <img src="https://placehold.co/100x100/28a745/ffffff?text=Especies" 
                             alt="Especies" class="img-fluid rounded-circle">
                    </div>
                </div>
            </div>
            
            <!-- Paso 3: Preparación del Terreno -->
            <div class="step">
                <div class="row align-items-center">
                    <div class="col-md-2 text-center">
                        <div class="step-number">3</div>
                    </div>
                    <div class="col-md-8">
                        <h4 class="text-success"><?php echo $translations['cbta_step_3']; ?></h4>
                        <p class="mb-3"><?php echo $translations['cbta_step_3_desc']; ?></p>
                        
                        <div class="row g-3">
                            <div class="col-sm-4">
                                <h6><i class="bi bi-tools text-warning me-2"></i>Actividades</h6>
                                <ul class="small text-muted">
                                    <li>Limpieza de maleza</li>
                                    <li>Subsolado del terreno</li>
                                    <li>Construcción de terrazas</li>
                                    <li>Instalación de riego</li>
                                </ul>
                            </div>
                            <div class="col-sm-4">
                                <h6><i class="bi bi-calendar text-info me-2"></i>Cronograma</h6>
                                <ul class="small text-muted">
                                    <li>Semana 1: Limpieza</li>
                                    <li>Semana 2: Preparación</li>
                                    <li>Semana 3: Terrazas</li>
                                    <li>Semana 4: Sistema riego</li>
                                </ul>
                            </div>
                            <div class="col-sm-4">
                                <h6><i class="bi bi-people text-success me-2"></i>Recursos</h6>
                                <ul class="small text-muted">
                                    <li>20 estudiantes</li>
                                    <li>3 profesores</li>
                                    <li>Herramientas manuales</li>
                                    <li>Tractor (alquiler)</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="mt-3">
                            <span class="badge bg-info me-1">Duración: 4 semanas</span>
                            <span class="badge bg-secondary me-1">Materias: Todas</span>
                            <span class="badge bg-warning text-dark">Costo: $1,200 USD</span>
                        </div>
                    </div>
                    <div class="col-md-2 text-center">
                        <img src="https://placehold.co/100x100/ffc107/000000?text=Prep" 
                             alt="Preparación" class="img-fluid rounded-circle">
                    </div>
                </div>
            </div>
            
            <!-- Paso 4: Obtención de Plántulas -->
            <div class="step">
                <div class="row align-items-center">
                    <div class="col-md-2 text-center">
                        <div class="step-number">4</div>
                    </div>
                    <div class="col-md-8">
                        <h4 class="text-success"><?php echo $translations['cbta_step_4']; ?></h4>
                        <p class="mb-3"><?php echo $translations['cbta_step_4_desc']; ?></p>
                        
                        <!-- Cálculo de plántulas necesarias -->
                        <div class="bg-light p-3 rounded mb-3">
                            <h6><i class="bi bi-calculator text-primary me-2"></i>Cálculo de Necesidades</h6>
                            <div class="row text-center">
                                <div class="col-3">
                                    <strong class="text-success">1,667</strong>
                                    <br><small class="text-muted">Plántulas totales</small>
                                </div>
                                <div class="col-3">
                                    <strong class="text-info">1.5</strong>
                                    <br><small class="text-muted">Hectáreas</small>
                                </div>
                                <div class="col-3">
                                    <strong class="text-warning">3x3m</strong>
                                    <br><small class="text-muted">Espaciamiento</small>
                                </div>
                                <div class="col-3">
                                    <strong class="text-danger">$4,168</strong>
                                    <br><small class="text-muted">Costo USD</small>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <h6><i class="bi bi-shop text-success me-2"></i>Proveedores</h6>
                                <ul class="small text-muted">
                                    <li>Vivero CONAFOR Texcoco</li>
                                    <li>Vivero Universidad Chapingo</li>
                                    <li>Vivero Municipal Toluca</li>
                                    <li>Producción propia (20%)</li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <h6><i class="bi bi-check2-square text-info me-2"></i>Calidad Requerida</h6>
                                <ul class="small text-muted">
                                    <li>Altura: 25-40 cm</li>
                                    <li>Diámetro: 4-8 mm</li>
                                    <li>Sistema radicular desarrollado</li>
                                    <li>Libre de plagas y enfermedades</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="mt-3">
                            <span class="badge bg-info me-1">Duración: 2 semanas</span>
                            <span class="badge bg-secondary me-1">Materias: Matemáticas, Ecosistemas</span>
                            <span class="badge bg-warning text-dark">Costo: $4,168 USD</span>
                        </div>
                    </div>
                    <div class="col-md-2 text-center">
                        <img src="https://placehold.co/100x100/dc3545/ffffff?text=Plantulas" 
                             alt="Plántulas" class="img-fluid rounded-circle">
                    </div>
                </div>
            </div>
            
            <!-- Paso 5: Plantación -->
            <div class="step">
                <div class="row align-items-center">
                    <div class="col-md-2 text-center">
                        <div class="step-number">5</div>
                    </div>
                    <div class="col-md-8">
                        <h4 class="text-success"><?php echo $translations['cbta_step_5']; ?></h4>
                        <p class="mb-3"><?php echo $translations['cbta_step_5_desc']; ?></p>
                        
                        <div class="alert alert-success">
                            <i class="bi bi-calendar-event me-2"></i>
                            <strong>Época óptima:</strong> Inicio de temporada de lluvias (mayo-junio)
                        </div>
                        
                        <div class="row g-3">
                            <div class="col-sm-4">
                                <h6><i class="bi bi-clock text-info me-2"></i>Cronograma Diario</h6>
                                <ul class="small text-muted">
                                    <li><strong>7:00-8:00</strong> Traslado y organización</li>
                                    <li><strong>8:00-10:30</strong> Marcado y excavación</li>
                                    <li><strong>10:30-11:00</strong> Descanso</li>
                                    <li><strong>11:00-12:30</strong> Plantación</li>
                                    <li><strong>12:30-13:30</strong> Comida</li>
                                    <li><strong>13:30-15:00</strong> Riego inicial</li>
                                </ul>
                            </div>
                            <div class="col-sm-4">
                                <h6><i class="bi bi-people text-warning me-2"></i>Organización</h6>
                                <ul class="small text-muted">
                                    <li>5 equipos de 9 estudiantes</li>
                                    <li>1 profesor por equipo</li>
                                    <li>Meta: 150 árboles/día</li>
                                    <li>Duración: 11 días laborables</li>
                                </ul>
                            </div>
                            <div class="col-sm-4">
                                <h6><i class="bi bi-tools text-success me-2"></i>Herramientas</h6>
                                <ul class="small text-muted">
                                    <li>Palas de plantación</li>
                                    <li>Azadones pequeños</li>
                                    <li>Regaderas</li>
                                    <li>Estacas marcadoras</li>
                                    <li>Cinta métrica</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="mt-3">
                            <span class="badge bg-info me-1">Duración: 3 semanas</span>
                            <span class="badge bg-secondary me-1">Materias: Todas</span>
                            <span class="badge bg-warning text-dark">Costo: $800 USD</span>
                        </div>
                    </div>
                    <div class="col-md-2 text-center">
                        <img src="https://placehold.co/100x100/6f42c1/ffffff?text=Plant" 
                             alt="Plantación" class="img-fluid rounded-circle">
                    </div>
                </div>
            </div>
            
            <!-- Paso 6: Mantenimiento -->
            <div class="step">
                <div class="row align-items-center">
                    <div class="col-md-2 text-center">
                        <div class="step-number">6</div>
                    </div>
                    <div class="col-md-8">
                        <h4 class="text-success"><?php echo $translations['cbta_step_6']; ?></h4>
                        <p class="mb-3"><?php echo $translations['cbta_step_6_desc']; ?></p>
                        
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <h6><i class="bi bi-droplet text-primary me-2"></i>Programa de Riego</h6>
                                <div class="table-responsive">
                                    <table class="table table-sm">
                                        <thead>
                                            <tr>
                                                <th>Período</th>
                                                <th>Frecuencia</th>
                                                <th>Cantidad</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Mes 1-2</td>
                                                <td>Diario</td>
                                                <td>2L/árbol</td>
                                            </tr>
                                            <tr>
                                                <td>Mes 3-6</td>
                                                <td>Interdiario</td>
                                                <td>3L/árbol</td>
                                            </tr>
                                            <tr>
                                                <td>Año 2-3</td>
                                                <td>Semanal</td>
                                                <td>5L/árbol</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <h6><i class="bi bi-scissors text-warning me-2"></i>Actividades de Mantenimiento</h6>
                                <ul class="small text-muted">
                                    <li><strong>Mensual:</strong> Control de maleza</li>
                                    <li><strong>Trimestral:</strong> Fertilización orgánica</li>
                                    <li><strong>Semestral:</strong> Poda de formación</li>
                                    <li><strong>Continuo:</strong> Vigilancia fitosanitaria</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="mt-3">
                            <span class="badge bg-info me-1">Duración: 3 años</span>
                            <span class="badge bg-secondary me-1">Materias: Ecosistemas, Matemáticas</span>
                            <span class="badge bg-warning text-dark">Costo: $2,400 USD</span>
                        </div>
                    </div>
                    <div class="col-md-2 text-center">
                        <img src="https://placehold.co/100x100/20c997/ffffff?text=Manten" 
                             alt="Mantenimiento" class="img-fluid rounded-circle">
                    </div>
                </div>
            </div>
            
            <!-- Paso 7: Monitoreo -->
            <div class="step">
                <div class="row align-items-center">
                    <div class="col-md-2 text-center">
                        <div class="step-number">7</div>
                    </div>
                    <div class="col-md-8">
                        <h4 class="text-success"><?php echo $translations['cbta_step_7']; ?></h4>
                        <p class="mb-3"><?php echo $translations['cbta_step_7_desc']; ?></p>
                        
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <h6><i class="bi bi-graph-up text-success me-2"></i>Parámetros de Seguimiento</h6>
                                <ul class="small text-muted">
                                    <li><strong>Supervivencia:</strong> % de árboles vivos</li>
                                    <li><strong>Crecimiento:</strong> Altura y diámetro</li>
                                    <li><strong>Sanidad:</strong> Incidencia de plagas</li>
                                    <li><strong>Cobertura:</strong> % de área cubierta</li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <h6><i class="bi bi-calendar-check text-info me-2"></i>Programa de Mediciones</h6>
                                <ul class="small text-muted">
                                    <li><strong>Mensual:</strong> Primeros 6 meses</li>
                                    <li><strong>Trimestral:</strong> Año 1-2</li>
                                    <li><strong>Semestral:</strong> Año 3-5</li>
                                    <li><strong>Anual:</strong> Largo plazo</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="alert alert-info mt-3">
                            <i class="bi bi-laptop me-2"></i>
                            <strong>Tecnología:</strong> Uso de drones para monitoreo aéreo 
                            y aplicación móvil para registro de datos en campo.
                        </div>
                        
                        <div class="mt-3">
                            <span class="badge bg-info me-1">Duración: 5 años</span>
                            <span class="badge bg-secondary me-1">Materias: Matemáticas, Programación</span>
                            <span class="badge bg-warning text-dark">Costo: $1,000 USD</span>
                        </div>
                    </div>
                    <div class="col-md-2 text-center">
                        <img src="https://placehold.co/100x100/fd7e14/ffffff?text=Monitor" 
                             alt="Monitoreo" class="img-fluid rounded-circle">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Project Summary -->
<section class="py-5 bg-success text-white">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold">
                Resumen del Proyecto
            </h2>
            <p class="lead">
                Impacto esperado y recursos necesarios
            </p>
        </div>
        
        <div class="row g-4 text-center">
            <div class="col-lg-3 col-md-6">
                <i class="bi bi-tree display-1 mb-3"></i>
                <h3 class="fw-bold">1,667</h3>
                <p class="mb-0">Árboles plantados</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <i class="bi bi-rulers display-1 mb-3"></i>
                <h3 class="fw-bold">1.5</h3>
                <p class="mb-0">Hectáreas restauradas</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <i class="bi bi-people display-1 mb-3"></i>
                <h3 class="fw-bold">45</h3>
                <p class="mb-0">Estudiantes participantes</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <i class="bi bi-currency-dollar display-1 mb-3"></i>
                <h3 class="fw-bold">$10,268</h3>
                <p class="mb-0">Inversión total USD</p>
            </div>
        </div>
        
        <div class="row mt-5">
            <div class="col-lg-8 mx-auto text-center">
                <h4 class="mb-3">Beneficios Esperados a Largo Plazo</h4>
                <div class="row g-3">
                    <div class="col-sm-6">
                        <div class="bg-white bg-opacity-10 p-3 rounded">
                            <i class="bi bi-cloud-fill fs-3 mb-2"></i>
                            <h6>Captura de CO₂</h6>
                            <p class="small mb-0">~30 toneladas/año cuando madure</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="bg-white bg-opacity-10 p-3 rounded">
                            <i class="bi bi-droplet-fill fs-3 mb-2"></i>
                            <h6>Conservación de Agua</h6>
                            <p class="small mb-0">Mejora infiltración 40%</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="bg-white bg-opacity-10 p-3 rounded">
                            <i class="bi bi-bug-fill fs-3 mb-2"></i>
                            <h6>Biodiversidad</h6>
                            <p class="small mb-0">Hábitat para 20+ especies</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="bg-white bg-opacity-10 p-3 rounded">
                            <i class="bi bi-mortarboard-fill fs-3 mb-2"></i>
                            <h6>Educación</h6>
                            <p class="small mb-0">Laboratorio vivo permanente</p>
                        </div>
                    </div>
                </div>
                
                <div class="mt-4">
                    <a href="../pages/calculator.php" class="btn btn-light btn-lg me-3">
                        <i class="bi bi-calculator me-2"></i>
                        Calcular tu Proyecto
                    </a>
                    <?php if (!$isLoggedIn): ?>
                    <button class="btn btn-outline-light btn-lg" data-bs-toggle="modal" data-bs-target="#registerModal">
                        <i class="bi bi-person-plus me-2"></i>
                        Únete al Proyecto
                    </button>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>

<!-- TODO: Agregar mapa interactivo del terreno del CBTA 35 -->
<!-- TODO: Implementar galería de fotos del progreso -->
<!-- TODO: Agregar cronograma interactivo con Gantt -->
<!-- TODO: Incluir sistema de reportes de progreso -->
<!-- TODO: Agregar calculadora específica para el proyecto CBTA 35 -->