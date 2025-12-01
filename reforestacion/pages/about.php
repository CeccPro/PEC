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
$currentPage = 'about';
$pageTitle = $translations['about_title'] . ' - ' . $translations['app_title'];

include '../includes/header.php';
?>

<!-- Hero Section -->
<section class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold mb-3">
                    <i class="bi bi-tree-fill me-3"></i>
                    Reforestación: Fundamentos Científicos
                </h1>
                <p class="lead mb-4">
                    <?php echo $translations['about_description']; ?>
                </p>
                <p>
                    La reforestación representa una estrategia fundamental para abordar crisis 
                    ambientales críticas del siglo XXI, incluyendo cambio climático, pérdida 
                    de biodiversidad y degradación de servicios ecosistémicos.
                </p>
            </div>
            <div class="col-lg-4 text-center">
                <i class="bi bi-globe display-1"></i>
            </div>
        </div>
    </div>
</section>

<!-- Global Context -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center mb-5">
                <h2 class="display-5 fw-bold text-success">
                    Contexto Global de la Reforestación
                </h2>
                <p class="lead text-muted">
                    Los bosques cubren aproximadamente 31% de la superficie terrestre global 
                    y almacenan cerca de 861 ± 66 Pg de carbono, siendo cruciales para la 
                    regulación climática global.
                </p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4">
                <div class="card border-0 shadow h-100">
                    <div class="card-body text-center p-4">
                        <i class="bi bi-exclamation-triangle-fill text-danger display-3 mb-3"></i>
                        <h4 class="text-danger">Crisis Actual</h4>
                        <h3 class="fw-bold">10-15</h3>
                        <p class="text-muted">Millones de hectáreas perdidas anualmente</p>
                        <p class="small">
                            La deforestación global continúa a ritmo alarmante, 
                            principalmente en regiones tropicales.
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="card border-0 shadow h-100">
                    <div class="card-body text-center p-4">
                        <i class="bi bi-people-fill text-warning display-3 mb-3"></i>
                        <h4 class="text-warning">Impacto Social</h4>
                        <h3 class="fw-bold">1.6</h3>
                        <p class="text-muted">Billones de personas afectadas</p>
                        <p class="small">
                            Personas que dependen directamente de recursos forestales 
                            para sus medios de vida.
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="card border-0 shadow h-100">
                    <div class="card-body text-center p-4">
                        <i class="bi bi-target text-success display-3 mb-3"></i>
                        <h4 class="text-success">Objetivo Global</h4>
                        <h3 class="fw-bold">350</h3>
                        <p class="text-muted">Millones de hectáreas a restaurar</p>
                        <p class="small">
                            Meta del Desafío de Bonn para restaurar paisajes 
                            forestales degradados para 2030.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Ecological Foundations -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold text-primary">
                Fundamentos Ecológicos
            </h2>
            <p class="lead text-muted">
                La sucesión ecológica constituye el proceso fundamental que sustenta 
                la reforestación exitosa.
            </p>
        </div>
        
        <div class="row g-4">
            <!-- Especies Pioneras -->
            <div class="col-lg-4">
                <div class="card border-0 shadow h-100">
                    <div class="card-header bg-success text-white">
                        <h4 class="mb-0">
                            <i class="bi bi-sunrise me-2"></i>
                            Especies Pioneras
                        </h4>
                    </div>
                    <div class="card-body">
                        <img src="https://placehold.co/300x150/28a745/ffffff?text=Especies+Pioneras" 
                             alt="Especies Pioneras" class="img-fluid rounded mb-3">
                        <p class="small text-muted mb-3">
                            Fundamentales en las etapas iniciales de la sucesión
                        </p>
                        <ul class="list-unstyled">
                            <li class="mb-2">
                                <i class="bi bi-check-circle text-success me-2"></i>
                                Crecimiento rápido y alta producción de biomasa
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-check-circle text-success me-2"></i>
                                Semillas pequeñas y abundantes
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-check-circle text-success me-2"></i>
                                Tolerancia a alta luminosidad
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-check-circle text-success me-2"></i>
                                Capacidad para establecerse en suelos degradados
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Especies Secundarias -->
            <div class="col-lg-4">
                <div class="card border-0 shadow h-100">
                    <div class="card-header bg-info text-white">
                        <h4 class="mb-0">
                            <i class="bi bi-sun me-2"></i>
                            Especies Secundarias
                        </h4>
                    </div>
                    <div class="card-body">
                        <img src="https://placehold.co/300x150/17a2b8/ffffff?text=Especies+Secundarias" 
                             alt="Especies Secundarias" class="img-fluid rounded mb-3">
                        <p class="small text-muted mb-3">
                            Se establecen bajo el dosel parcial creado por las pioneras
                        </p>
                        <ul class="list-unstyled">
                            <li class="mb-2">
                                <i class="bi bi-check-circle text-info me-2"></i>
                                Crecimiento moderadamente rápido
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-check-circle text-info me-2"></i>
                                Mayor longevidad que las pioneras
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-check-circle text-info me-2"></i>
                                Tolerancia parcial a la sombra
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-check-circle text-info me-2"></i>
                                Contribución significativa a mejora de suelos
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Especies Clímax -->
            <div class="col-lg-4">
                <div class="card border-0 shadow h-100">
                    <div class="card-header bg-warning text-dark">
                        <h4 class="mb-0">
                            <i class="bi bi-sunset me-2"></i>
                            Especies Clímax
                        </h4>
                    </div>
                    <div class="card-body">
                        <img src="https://placehold.co/300x150/ffc107/000000?text=Especies+Climax" 
                             alt="Especies Clímax" class="img-fluid rounded mb-3">
                        <p class="small text-muted mb-3">
                            Representan la etapa final de la sucesión ecológica
                        </p>
                        <ul class="list-unstyled">
                            <li class="mb-2">
                                <i class="bi bi-check-circle text-warning me-2"></i>
                                Crecimiento lento pero sostenido
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-check-circle text-warning me-2"></i>
                                Semillas grandes con almacenamiento de nutrientes
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-check-circle text-warning me-2"></i>
                                Alta tolerancia a la sombra
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-check-circle text-warning me-2"></i>
                                Máxima contribución a biodiversidad
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Reforestation Models -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold text-success">
                Modelos de Reforestación
            </h2>
            <p class="lead text-muted">
                Existen diferentes enfoques para la reforestación, cada uno con sus 
                ventajas específicas según los objetivos del proyecto.
            </p>
        </div>
        
        <div class="row g-4">
            <!-- Plantación en Bloque -->
            <div class="col-lg-6">
                <div class="card border-0 shadow">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-start">
                            <i class="bi bi-grid-3x3-gap-fill text-primary display-4 me-4"></i>
                            <div>
                                <h4 class="text-primary">Plantación en Bloque</h4>
                                <p class="text-muted mb-3">
                                    Plantación sistemática de especies arbóreas en áreas extensas 
                                    con espaciamiento regular.
                                </p>
                                <ul class="list-unstyled">
                                    <li class="mb-1">
                                        <i class="bi bi-check2 text-success me-2"></i>
                                        Espaciamiento 2x2 a 4x4 metros
                                    </li>
                                    <li class="mb-1">
                                        <i class="bi bi-check2 text-success me-2"></i>
                                        Especies seleccionadas según objetivos
                                    </li>
                                    <li class="mb-1">
                                        <i class="bi bi-check2 text-success me-2"></i>
                                        Manejo intensivo durante establecimiento
                                    </li>
                                </ul>
                                <span class="badge bg-primary">Producción</span>
                                <span class="badge bg-secondary">Rápido crecimiento</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Restauración por Núcleos -->
            <div class="col-lg-6">
                <div class="card border-0 shadow">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-start">
                            <i class="bi bi-circle-fill text-success display-4 me-4"></i>
                            <div>
                                <h4 class="text-success">Restauración por Núcleos</h4>
                                <p class="text-muted mb-3">
                                    Establecimiento de pequeños grupos de árboles que sirven 
                                    como centros de dispersión natural.
                                </p>
                                <ul class="list-unstyled">
                                    <li class="mb-1">
                                        <i class="bi bi-check2 text-success me-2"></i>
                                        Núcleos de 100-500 m²
                                    </li>
                                    <li class="mb-1">
                                        <i class="bi bi-check2 text-success me-2"></i>
                                        Especies nativas diversas
                                    </li>
                                    <li class="mb-1">
                                        <i class="bi bi-check2 text-success me-2"></i>
                                        Menor costo inicial
                                    </li>
                                </ul>
                                <span class="badge bg-success">Conservación</span>
                                <span class="badge bg-info">Biodiversidad</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Regeneración Natural Asistida -->
            <div class="col-lg-6">
                <div class="card border-0 shadow">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-start">
                            <i class="bi bi-arrow-up-circle-fill text-info display-4 me-4"></i>
                            <div>
                                <h4 class="text-info">Regeneración Natural Asistida</h4>
                                <p class="text-muted mb-3">
                                    Facilitación de procesos naturales de regeneración 
                                    mediante eliminación de factores limitantes.
                                </p>
                                <ul class="list-unstyled">
                                    <li class="mb-1">
                                        <i class="bi bi-check2 text-success me-2"></i>
                                        Control de especies invasoras
                                    </li>
                                    <li class="mb-1">
                                        <i class="bi bi-check2 text-success me-2"></i>
                                        Protección contra disturbios
                                    </li>
                                    <li class="mb-1">
                                        <i class="bi bi-check2 text-success me-2"></i>
                                        Enriquecimiento selectivo
                                    </li>
                                </ul>
                                <span class="badge bg-info">Costo-efectivo</span>
                                <span class="badge bg-warning text-dark">Largo plazo</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Sistemas Agroforestales -->
            <div class="col-lg-6">
                <div class="card border-0 shadow">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-start">
                            <i class="bi bi-tree text-warning display-4 me-4"></i>
                            <div>
                                <h4 class="text-warning">Sistemas Agroforestales</h4>
                                <p class="text-muted mb-3">
                                    Integración de árboles con cultivos agrícolas y/o 
                                    ganadería en el mismo espacio.
                                </p>
                                <ul class="list-unstyled">
                                    <li class="mb-1">
                                        <i class="bi bi-check2 text-success me-2"></i>
                                        Diversificación de ingresos
                                    </li>
                                    <li class="mb-1">
                                        <i class="bi bi-check2 text-success me-2"></i>
                                        Mejora de microclima
                                    </li>
                                    <li class="mb-1">
                                        <i class="bi bi-check2 text-success me-2"></i>
                                        Conservación de suelos
                                    </li>
                                </ul>
                                <span class="badge bg-warning text-dark">Productivo</span>
                                <span class="badge bg-success">Sostenible</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Ecosystem Services -->
<section class="py-5 bg-success text-white">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold">
                Servicios Ecosistémicos
            </h2>
            <p class="lead">
                Los bosques proporcionan múltiples beneficios que sostienen la vida 
                y el bienestar humano en el planeta.
            </p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 text-center">
                <i class="bi bi-cloud-fill display-1 mb-3"></i>
                <h4>Regulación Climática</h4>
                <p class="mb-0">
                    Captura de CO₂, regulación de temperatura y patrones de precipitación
                </p>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <i class="bi bi-droplet-fill display-1 mb-3"></i>
                <h4>Purificación de Agua</h4>
                <p class="mb-0">
                    Filtración natural, prevención de erosión y recarga de acuíferos
                </p>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <i class="bi bi-bug-fill display-1 mb-3"></i>
                <h4>Conservación de Biodiversidad</h4>
                <p class="mb-0">
                    Hábitat para flora y fauna, mantenimiento de corredores biológicos
                </p>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <i class="bi bi-heart-fill display-1 mb-3"></i>
                <h4>Bienestar Humano</h4>
                <p class="mb-0">
                    Recreación, salud mental, identidad cultural y recursos naturales
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Project Objectives -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h2 class="display-6 fw-bold text-primary mb-4">
                    <i class="bi bi-bullseye me-2"></i>
                    <?php echo $translations['about_objectives_title']; ?>
                </h2>
                <div class="row g-3">
                    <div class="col-12">
                        <div class="d-flex">
                            <i class="bi bi-1-circle-fill text-primary fs-3 me-3"></i>
                            <div>
                                <h5><?php echo $translations['about_objective_1']; ?></h5>
                                <p class="text-muted">
                                    Demostrar cómo las matemáticas, humanidades, programación, 
                                    estudio de ecosistemas y comunicación se integran en proyectos ambientales.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex">
                            <i class="bi bi-2-circle-fill text-success fs-3 me-3"></i>
                            <div>
                                <h5><?php echo $translations['about_objective_2']; ?></h5>
                                <p class="text-muted">
                                    Crear herramientas tecnológicas que faciliten la planificación 
                                    y evaluación de proyectos de restauración forestal.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex">
                            <i class="bi bi-3-circle-fill text-info fs-3 me-3"></i>
                            <div>
                                <h5><?php echo $translations['about_objective_3']; ?></h5>
                                <p class="text-muted">
                                    Sensibilizar sobre la importancia de los bosques para 
                                    el equilibrio ecológico y el bienestar humano.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex">
                            <i class="bi bi-4-circle-fill text-warning fs-3 me-3"></i>
                            <div>
                                <h5><?php echo $translations['about_objective_4']; ?></h5>
                                <p class="text-muted">
                                    Motivar la participación activa de jóvenes en la 
                                    solución de problemas ambientales locales y globales.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="https://placehold.co/500x400/28a745/ffffff?text=Objetivos+del+Proyecto" 
                     alt="Objetivos del Proyecto" class="img-fluid rounded shadow-lg">
                <!-- TODO: Reemplazar con infografía de objetivos -->
            </div>
        </div>
    </div>
</section>

<!-- Success Cases -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold text-success">
                Casos de Éxito en Reforestación
            </h2>
            <p class="lead text-muted">
                Ejemplos inspiradores de restauración forestal exitosa alrededor del mundo
            </p>
        </div>
        
        <div class="row g-4">
            <!-- Costa Rica -->
            <div class="col-lg-4">
                <div class="card border-0 shadow h-100">
                    <img src="https://placehold.co/400x200/228b22/ffffff?text=Costa+Rica" 
                         alt="Costa Rica" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title text-success">
                            <i class="bi bi-flag me-2"></i>
                            Costa Rica
                        </h5>
                        <p class="card-text">
                            Incrementó su cobertura forestal del 24% (1985) al 54% (2019) 
                            mediante pagos por servicios ecosistémicos y políticas de conservación.
                        </p>
                        <ul class="list-unstyled small">
                            <li><strong>Área restaurada:</strong> 2.9 millones de hectáreas</li>
                            <li><strong>Inversión:</strong> $500 millones USD</li>
                            <li><strong>Tiempo:</strong> 35 años</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- China -->
            <div class="col-lg-4">
                <div class="card border-0 shadow h-100">
                    <img src="https://placehold.co/400x200/dc3545/ffffff?text=China" 
                         alt="China" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title text-danger">
                            <i class="bi bi-flag me-2"></i>
                            China - Proyecto Grain for Green
                        </h5>
                        <p class="card-text">
                            El mayor programa de reforestación del mundo, convirtiendo 
                            tierras agrícolas marginales en bosques y pastizales.
                        </p>
                        <ul class="list-unstyled small">
                            <li><strong>Área restaurada:</strong> 32 millones de hectáreas</li>
                            <li><strong>Inversión:</strong> $40 billones USD</li>
                            <li><strong>Participantes:</strong> 32 millones de familias</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Etiopía -->
            <div class="col-lg-4">
                <div class="card border-0 shadow h-100">
                    <img src="https://placehold.co/400x200/ffc107/000000?text=Etiopia" 
                         alt="Etiopía" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title text-warning">
                            <i class="bi bi-flag me-2"></i>
                            Etiopía - Rehabilitación de Cuencas
                        </h5>
                        <p class="card-text">
                            Restauración masiva de paisajes degradados mediante participación 
                            comunitaria y técnicas de conservación de suelos y agua.
                        </p>
                        <ul class="list-unstyled small">
                            <li><strong>Área restaurada:</strong> 3.2 millones de hectáreas</li>
                            <li><strong>Beneficiarios:</strong> 3.7 millones de personas</li>
                            <li><strong>Impacto:</strong> 40% reducción de erosión</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Scientific References -->
<section class="py-5 bg-primary text-white">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold">
                Base Científica del Proyecto
            </h2>
            <p class="lead">
                Este proyecto se fundamenta en investigación científica rigurosa 
                y evidencia empírica de la restauración forestal.
            </p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-6">
                <h4 class="mb-3">
                    <i class="bi bi-journal-text me-2"></i>
                    Referencias Clave
                </h4>
                <div class="bg-white bg-opacity-10 p-3 rounded mb-3">
                    <h6>Pan et al. (2011)</h6>
                    <p class="small mb-0">
                        "A large and persistent carbon sink in the world's forests" - Science
                        <br><em>Cuantificación del carbono almacenado en bosques globales</em>
                    </p>
                </div>
                <div class="bg-white bg-opacity-10 p-3 rounded mb-3">
                    <h6>Chazdon (2008)</h6>
                    <p class="small mb-0">
                        "Second growth: the promise of tropical forest regeneration"
                        <br><em>Potencial de regeneración de bosques tropicales</em>
                    </p>
                </div>
                <div class="bg-white bg-opacity-10 p-3 rounded">
                    <h6>FAO (2020)</h6>
                    <p class="small mb-0">
                        "Global Forest Resources Assessment 2020"
                        <br><em>Evaluación global de recursos forestales</em>
                    </p>
                </div>
            </div>
            
            <div class="col-lg-6">
                <h4 class="mb-3">
                    <i class="bi bi-graph-up me-2"></i>
                    Datos Clave
                </h4>
                <div class="row g-3 text-center">
                    <div class="col-sm-6">
                        <div class="bg-white bg-opacity-10 p-3 rounded">
                            <h3 class="fw-bold">31%</h3>
                            <p class="small mb-0">Superficie terrestre cubierta por bosques</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="bg-white bg-opacity-10 p-3 rounded">
                            <h3 class="fw-bold">861 Pg</h3>
                            <p class="small mb-0">Carbono almacenado en bosques</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="bg-white bg-opacity-10 p-3 rounded">
                            <h3 class="fw-bold">15 M</h3>
                            <p class="small mb-0">Hectáreas perdidas anualmente</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="bg-white bg-opacity-10 p-3 rounded">
                            <h3 class="fw-bold">350 M</h3>
                            <p class="small mb-0">Hectáreas a restaurar para 2030</p>
                        </div>
                    </div>
                </div>
                
                <div class="mt-4 text-center">
                    <a href="../calculator.php" class="btn btn-light btn-lg">
                        <i class="bi bi-calculator me-2"></i>
                        Aplicar Conocimientos
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>

<!-- TODO: Agregar sección de metodología del proyecto -->
<!-- TODO: Implementar línea de tiempo interactiva -->
<!-- TODO: Agregar galería de especies nativas de México -->
<!-- TODO: Incluir mapas de distribución de bosques -->
<!-- TODO: Agregar calculadora de servicios ecosistémicos -->