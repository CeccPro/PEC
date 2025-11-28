<?php
session_start();
require_once 'includes/config.php';
require_once 'includes/auth.php';
require_once 'includes/language.php';

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
$currentPage = 'home';
$pageTitle = $translations['home_title'] . ' - ' . $translations['app_title'];

include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-10">
                <h1 class="hero-title animate-on-scroll">
                    <?php echo $translations['home_title']; ?>
                </h1>
                <p class="hero-subtitle animate-on-scroll">
                    <?php echo $translations['home_subtitle']; ?>
                </p>
                <p class="lead mb-4 animate-on-scroll">
                    <?php echo $translations['home_description']; ?>
                </p>
                <div class="animate-on-scroll">
                    <a href="pages/calculator.php" class="btn btn-light btn-lg me-3 mb-2">
                        <i class="bi bi-calculator me-2"></i>
                        <?php echo $translations['nav_calculator']; ?>
                    </a>
                    <a href="pages/cbta_project.php" class="btn btn-outline-light btn-lg mb-2">
                        <i class="bi bi-geo-alt me-2"></i>
                        <?php echo $translations['nav_cbta_project']; ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Project Information -->
<section class="py-5">
    <div class="container">
        <div class="project-info animate-on-scroll">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2 class="h3 mb-3 text-primary-green">
                        <i class="bi bi-info-circle-fill me-2"></i>
                        <?php echo $translations['project_info_title']; ?>
                    </h2>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <strong><?php echo $translations['project_school']; ?></strong>
                        </div>
                        <div class="col-md-6 mb-3">
                            <span class="badge bg-success fs-6">
                                <?php echo $translations['project_group']; ?> <?php echo $translations['project_group_value']; ?>
                            </span>
                        </div>
                        <div class="col-12">
                            <p class="mb-2"><strong><?php echo $translations['project_theme']; ?></strong></p>
                            <p class="text-muted"><?php echo $translations['project_description']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-center">
                    <img src="https://placehold.co/300x200/28a745/ffffff?text=CBTA+35" 
                         alt="CBTA 35" class="img-fluid rounded shadow">
                    <!-- TODO: Reemplazar con imagen real del CBTA 35 -->
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Subjects Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="h1 mb-3 text-primary-green animate-on-scroll">
                <i class="bi bi-book-fill me-3"></i>
                <?php echo $translations['subjects_title']; ?>
            </h2>
            <p class="lead text-muted animate-on-scroll">
                <?php echo $translations['subjects_description']; ?>
            </p>
        </div>

        <div class="row g-4">
            <!-- Matemáticas -->
            <div class="col-lg-6 animate-on-scroll">
                <div class="card subject-card h-100" onclick="location.href='pages/matematicas.php'">
                    <div class="card-header text-center">
                        <i class="bi bi-calculator-fill subject-icon"></i>
                        <h4><?php echo $translations['subject_matematicas_title']; ?></h4>
                    </div>
                    <div class="card-body">
                        <p><?php echo $translations['subject_matematicas_content']; ?></p>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check-circle text-success me-2"></i>Cálculos de densidad de plantación</li>
                            <li><i class="bi bi-check-circle text-success me-2"></i>Análisis estadístico</li>
                            <li><i class="bi bi-check-circle text-success me-2"></i>Modelos de crecimiento</li>
                            <li><i class="bi bi-check-circle text-success me-2"></i>Optimización de recursos</li>
                        </ul>
                        <div class="mt-3">
                            <span class="badge bg-primary me-1">Álgebra</span>
                            <span class="badge bg-primary me-1">Estadística</span>
                            <span class="badge bg-primary me-1">Geometría</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Humanidades -->
            <div class="col-lg-6 animate-on-scroll">
                <div class="card subject-card h-100" onclick="location.href='pages/humanidades.php'">
                    <div class="card-header text-center">
                        <i class="bi bi-people-fill subject-icon"></i>
                        <h4><?php echo $translations['subject_humanidades_title']; ?></h4>
                    </div>
                    <div class="card-body">
                        <p><?php echo $translations['subject_humanidades_content']; ?></p>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check-circle text-success me-2"></i>Historia de la deforestación</li>
                            <li><i class="bi bi-check-circle text-success me-2"></i>Impacto sociocultural</li>
                            <li><i class="bi bi-check-circle text-success me-2"></i>Culturas indígenas</li>
                            <li><i class="bi bi-check-circle text-success me-2"></i>Políticas públicas</li>
                        </ul>
                        <div class="mt-3">
                            <span class="badge bg-warning me-1">Historia</span>
                            <span class="badge bg-warning me-1">Sociología</span>
                            <span class="badge bg-warning me-1">Antropología</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Programación -->
            <div class="col-lg-6 animate-on-scroll">
                <div class="card subject-card h-100" onclick="location.href='pages/programacion.php'">
                    <div class="card-header text-center">
                        <i class="bi bi-code-slash subject-icon"></i>
                        <h4><?php echo $translations['subject_programacion_title']; ?></h4>
                    </div>
                    <div class="card-body">
                        <p><?php echo $translations['subject_programacion_content']; ?></p>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check-circle text-success me-2"></i>Plataforma web educativa</li>
                            <li><i class="bi bi-check-circle text-success me-2"></i>Calculadora interactiva</li>
                            <li><i class="bi bi-check-circle text-success me-2"></i>Sistema multiidioma</li>
                            <li><i class="bi bi-check-circle text-success me-2"></i>Gestión de usuarios</li>
                        </ul>
                        <div class="mt-3">
                            <span class="badge bg-info me-1">PHP</span>
                            <span class="badge bg-info me-1">HTML/CSS</span>
                            <span class="badge bg-info me-1">JavaScript</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Estudio de Ecosistemas -->
            <div class="col-lg-6 animate-on-scroll">
                <div class="card subject-card h-100" onclick="location.href='pages/ecosistemas.php'">
                    <div class="card-header text-center">
                        <i class="bi bi-tree subject-icon"></i>
                        <h4><?php echo $translations['subject_ecosistemas_title']; ?></h4>
                    </div>
                    <div class="card-body">
                        <p><?php echo $translations['subject_ecosistemas_content']; ?></p>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check-circle text-success me-2"></i>Caracterización de ecosistemas</li>
                            <li><i class="bi bi-check-circle text-success me-2"></i>Sucesión ecológica</li>
                            <li><i class="bi bi-check-circle text-success me-2"></i>Servicios ecosistémicos</li>
                            <li><i class="bi bi-check-circle text-success me-2"></i>Monitoreo de biodiversidad</li>
                        </ul>
                        <div class="mt-3">
                            <span class="badge bg-success me-1">Ecología</span>
                            <span class="badge bg-success me-1">Botánica</span>
                            <span class="badge bg-success me-1">Biología</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Ecological Foundation Section -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 animate-on-scroll slide-in-left">
                <img src="https://placehold.co/500x300/228b22/ffffff?text=Fundamentos+Ecologicos" 
                     alt="Fundamentos Ecológicos" class="img-fluid rounded shadow-lg">
                <!-- TODO: Reemplazar con imagen de bosques y ecosistemas -->
            </div>
            <div class="col-lg-6 animate-on-scroll slide-in-right">
                <h3 class="text-primary-green mb-3">
                    <i class="bi bi-globe me-2"></i>
                    <?php echo $translations['ecological_foundation_title']; ?>
                </h3>
                <p class="lead mb-4">
                    <?php echo $translations['ecological_foundation_content']; ?>
                </p>
                <div class="row g-3">
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-tree-fill text-success fs-4 me-3"></i>
                            <div>
                                <h6 class="mb-0">31%</h6>
                                <small class="text-muted">Superficie terrestre</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-cloud-fill text-info fs-4 me-3"></i>
                            <div>
                                <h6 class="mb-0">861 Pg</h6>
                                <small class="text-muted">Carbono almacenado</small>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="pages/about.php" class="btn btn-success mt-3">
                    <i class="bi bi-arrow-right me-2"></i>
                    Conocer más
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Quick Calculator Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="text-primary-green animate-on-scroll">
                <i class="bi bi-calculator-fill me-3"></i>
                Calculadora Rápida
            </h2>
            <p class="lead text-muted animate-on-scroll">
                Calcula cuántos árboles necesitas para tu proyecto de reforestación
            </p>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="calculator-container animate-on-scroll">
                    <form id="reforestationCalculator">
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label class="form-label">Área (hectáreas):</label>
                                <input type="number" class="form-control" name="area" min="0.1" step="0.1" placeholder="1.0">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Tipo de árbol:</label>
                                <select class="form-select" name="tree_type">
                                    <option value="">Seleccionar...</option>
                                    <option value="pino">Pino</option>
                                    <option value="encino">Encino</option>
                                    <option value="cedro">Cedro</option>
                                    <option value="eucalipto">Eucalipto</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Tipo de suelo:</label>
                                <select class="form-select" name="soil_type">
                                    <option value="">Seleccionar...</option>
                                    <option value="arcilloso">Arcilloso</option>
                                    <option value="arenoso">Arenoso</option>
                                    <option value="limoso">Limoso</option>
                                    <option value="franco">Franco</option>
                                </select>
                            </div>
                        </div>
                    </form>
                    
                    <div id="calculatorResults" style="display: none;">
                        <!-- Los resultados se mostrarán aquí via JavaScript -->
                    </div>
                    
                    <div class="text-center mt-4">
                        <a href="pages/calculator.php" class="btn btn-success btn-lg">
                            <i class="bi bi-calculator me-2"></i>
                            Calculadora Completa
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-5 bg-primary-green text-white">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2 class="mb-4 animate-on-scroll">
                    <i class="bi bi-heart-fill me-3"></i>
                    Únete a la Restauración Forestal
                </h2>
                <p class="lead mb-4 animate-on-scroll">
                    Cada árbol plantado es un paso hacia un futuro más sostenible. 
                    Conoce nuestro proyecto del CBTA 35 y cómo puedes participar.
                </p>
                <div class="animate-on-scroll">
                    <?php if (!$isLoggedIn): ?>
                        <button class="btn btn-light btn-lg me-3" data-bs-toggle="modal" data-bs-target="#registerModal">
                            <i class="bi bi-person-plus me-2"></i>
                            Regístrate Ahora
                        </button>
                    <?php endif; ?>
                    <a href="pages/cbta_project.php" class="btn btn-outline-light btn-lg">
                        <i class="bi bi-geo-alt me-2"></i>
                        Proyecto CBTA 35
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

<!-- TODO: Agregar sección de testimonios -->
<!-- TODO: Implementar galería de fotos del proyecto -->
<!-- TODO: Agregar mapa interactivo del área del CBTA 35 -->
<!-- TODO: Incluir contador de árboles plantados -->