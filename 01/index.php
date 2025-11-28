<?php
/**
 * Página principal del proyecto de reforestación
 * Introducción y información general sobre reforestación
 */

require_once 'config.php';
require_once 'functions.php';
require_once 'translations.php';

includeHeader(t('hero_title'), 'home');
?>

<!-- Hero Section -->
<div class="hero-section">
    <div class="container text-center">
        <h1 class="fade-in">
            <i class="bi bi-tree-fill"></i> <?php echo t('hero_title'); ?>
        </h1>
        <p class="lead fade-in"><?php echo t('hero_subtitle'); ?></p>
        <?php if (isLoggedIn()): ?>
            <h4 class="mt-4">
                <span class="badge bg-light text-success">
                    <?php echo t('welcome_message'); ?>, <?php echo htmlspecialchars($_SESSION['username']); ?>! 🌱
                </span>
            </h4>
        <?php endif; ?>
    </div>
</div>

<!-- Contenido principal -->
<div class="container">
    <!-- Imagen placeholder -->
    <div class="row mb-5">
        <div class="col-12">
            <img src="https://placehold.co/1200x400/198754/FFFFFF?text=Vista+Aérea+de+Bosques+Tropicales" 
                 alt="Vista aérea de bosques tropicales" 
                 class="img-fluid rounded shadow">
            <!-- TODO: Reemplazar con imagen real de bosques tropicales -->
        </div>
    </div>
    
    <!-- ¿Qué es la Reforestación? -->
    <div class="row mb-5">
        <div class="col-lg-8 mx-auto">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-5">
                    <h2 class="text-success mb-4">
                        <i class="bi bi-question-circle"></i> <?php echo t('what_is_reforestation'); ?>
                    </h2>
                    <p class="lead"><?php echo t('reforestation_definition'); ?></p>
                    <p><?php echo t('hero_description'); ?></p>
                    
                    <hr class="my-4">
                    
                    <p>
                        <?php if ($_SESSION['lang'] == 'es'): ?>
                            La deforestación global continúa a ritmo alarmante, con pérdidas anuales de 10-15 millones 
                            de hectáreas, principalmente en regiones tropicales (FAO, 2020). Esta pérdida representa 
                            no solo una crisis ambiental sino también socioeconómica, afectando los medios de vida de 
                            más de 1.6 billones de personas que dependen directamente de recursos forestales.
                        <?php else: ?>
                            Global deforestation continues at an alarming rate, with annual losses of 10-15 million 
                            hectares, mainly in tropical regions (FAO, 2020). This loss represents not only an 
                            environmental crisis but also a socioeconomic one, affecting the livelihoods of more than 
                            1.6 billion people who directly depend on forest resources.
                        <?php endif; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Comparación visual -->
    <div class="row mb-5">
        <div class="col-md-6">
            <img src="https://placehold.co/600x400/8B4513/FFFFFF?text=Área+Deforestada" 
                 alt="Área deforestada" 
                 class="img-fluid rounded shadow">
            <p class="text-center mt-2 text-muted">
                <?php echo $_SESSION['lang'] == 'es' ? 'Área deforestada' : 'Deforested area'; ?>
            </p>
        </div>
        <div class="col-md-6">
            <img src="https://placehold.co/600x400/228B22/FFFFFF?text=Bosque+Restaurado" 
                 alt="Bosque restaurado" 
                 class="img-fluid rounded shadow">
            <p class="text-center mt-2 text-muted">
                <?php echo $_SESSION['lang'] == 'es' ? 'Bosque restaurado' : 'Restored forest'; ?>
            </p>
        </div>
    </div>
    
    <!-- Importancia -->
    <div class="row mb-5">
        <div class="col-12">
            <div class="info-box">
                <h3 class="text-success">
                    <i class="bi bi-star-fill"></i> <?php echo t('importance_title'); ?>
                </h3>
                <p class="lead"><?php echo t('importance_text'); ?></p>
                <p>
                    <?php if ($_SESSION['lang'] == 'es'): ?>
                        El contexto actual de cambio climático global añade urgencia a los esfuerzos de reforestación. 
                        Los compromisos internacionales como el Acuerdo de París reconocen el potencial de los bosques 
                        para la mitigación climática, mientras que iniciativas como el Desafío de Bonn buscan restaurar 
                        350 millones de hectáreas de paisajes forestales degradados para 2030.
                    <?php else: ?>
                        The current context of global climate change adds urgency to reforestation efforts. International 
                        commitments such as the Paris Agreement recognize the potential of forests for climate mitigation, 
                        while initiatives such as the Bonn Challenge seek to restore 350 million hectares of degraded 
                        forest landscapes by 2030.
                    <?php endif; ?>
                </p>
            </div>
        </div>
    </div>
    
    <!-- Servicios Ecosistémicos -->
    <div class="row mb-5">
        <div class="col-12">
            <h2 class="text-center text-success mb-4">
                <i class="bi bi-gear-fill"></i> 
                <?php echo $_SESSION['lang'] == 'es' 
                    ? 'Servicios Ecosistémicos de los Bosques' 
                    : 'Ecosystem Services of Forests'; ?>
            </h2>
        </div>
        
        <div class="col-md-4 mb-4">
            <div class="card h-100 border-success">
                <div class="card-body text-center">
                    <i class="bi bi-cloud big-icon"></i>
                    <h4 class="text-success">
                        <?php echo $_SESSION['lang'] == 'es' 
                            ? 'Regulación Climática' 
                            : 'Climate Regulation'; ?>
                    </h4>
                    <p>
                        <?php if ($_SESSION['lang'] == 'es'): ?>
                            Captura y almacenamiento de CO₂, regulación de temperatura y precipitación. 
                            Los bosques globales constituyen un sumidero neto de 2.6 ± 0.7 Pg C/año.
                        <?php else: ?>
                            CO₂ capture and storage, temperature and precipitation regulation. 
                            Global forests constitute a net sink of 2.6 ± 0.7 Pg C/year.
                        <?php endif; ?>
                    </p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 mb-4">
            <div class="card h-100 border-success">
                <div class="card-body text-center">
                    <i class="bi bi-droplet-fill big-icon"></i>
                    <h4 class="text-success">
                        <?php echo $_SESSION['lang'] == 'es' 
                            ? 'Ciclo Hidrológico' 
                            : 'Hydrological Cycle'; ?>
                    </h4>
                    <p>
                        <?php if ($_SESSION['lang'] == 'es'): ?>
                            Regulación del flujo de agua, recarga de acuíferos, prevención de erosión 
                            y purificación del agua.
                        <?php else: ?>
                            Water flow regulation, aquifer recharge, erosion prevention 
                            and water purification.
                        <?php endif; ?>
                    </p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 mb-4">
            <div class="card h-100 border-success">
                <div class="card-body text-center">
                    <i class="bi bi-bug-fill big-icon"></i>
                    <h4 class="text-success">
                        <?php echo $_SESSION['lang'] == 'es' 
                            ? 'Biodiversidad' 
                            : 'Biodiversity'; ?>
                    </h4>
                    <p>
                        <?php if ($_SESSION['lang'] == 'es'): ?>
                            Hábitat para millones de especies. Los bosques nativos mantienen 2-5 veces 
                            más especies que plantaciones de exóticas.
                        <?php else: ?>
                            Habitat for millions of species. Native forests maintain 2-5 times 
                            more species than exotic plantations.
                        <?php endif; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Imagen de servicios ecosistémicos -->
    <div class="row mb-5">
        <div class="col-12">
            <img src="https://placehold.co/1200x500/2E7D32/FFFFFF?text=Servicios+Ecosistémicos+de+los+Bosques" 
                 alt="Servicios ecosistémicos" 
                 class="img-fluid rounded shadow">
            <!-- TODO: Reemplazar con diagrama real de servicios ecosistémicos -->
        </div>
    </div>
    
    <!-- Call to Action -->
    <div class="row mb-5">
        <div class="col-12">
            <div class="card bg-success text-white">
                <div class="card-body p-5 text-center">
                    <h2 class="mb-4">
                        <?php echo $_SESSION['lang'] == 'es' 
                            ? '¡Explora más sobre la Reforestación!' 
                            : 'Explore more about Reforestation!'; ?>
                    </h2>
                    <p class="lead mb-4">
                        <?php if ($_SESSION['lang'] == 'es'): ?>
                            Descubre cómo diferentes disciplinas se relacionan con la reforestación, 
                            conoce nuestro proyecto en el CBTA 35, y usa nuestra calculadora para planificar 
                            tu propio proyecto de reforestación.
                        <?php else: ?>
                            Discover how different disciplines relate to reforestation, 
                            learn about our project at CBTA 35, and use our calculator to plan 
                            your own reforestation project.
                        <?php endif; ?>
                    </p>
                    <div class="d-flex gap-3 justify-content-center flex-wrap">
                        <a href="disciplines.php" class="btn btn-light btn-lg">
                            <i class="bi bi-book"></i> <?php echo t('nav_disciplines'); ?>
                        </a>
                        <a href="cbta_project.php" class="btn btn-outline-light btn-lg">
                            <i class="bi bi-pin-map"></i> <?php echo t('nav_cbta_project'); ?>
                        </a>
                        <a href="calculator.php" class="btn btn-light btn-lg">
                            <i class="bi bi-calculator"></i> <?php echo t('nav_calculator'); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Referencias -->
    <div class="row mb-5">
        <div class="col-12">
            <h3 class="text-success mb-3">
                <i class="bi bi-journal-text"></i> 
                <?php echo $_SESSION['lang'] == 'es' ? 'Referencias Clave' : 'Key References'; ?>
            </h3>
            
            <div class="reference-item">
                <p class="mb-1">
                    <strong>Pan, Y., Birdsey, R. A., Fang, J., et al. (2011).</strong> 
                    A large and persistent carbon sink in the world's forests. 
                    <em>Science, 333</em>(6045), 988-993.
                </p>
                <small class="text-muted">
                    <?php echo $_SESSION['lang'] == 'es' 
                        ? 'Estudio fundamental sobre el papel de los bosques en el ciclo global del carbono.' 
                        : 'Fundamental study on the role of forests in the global carbon cycle.'; ?>
                </small>
            </div>
            
            <div class="reference-item">
                <p class="mb-1">
                    <strong>FAO. (2020).</strong> 
                    Global Forest Resources Assessment 2020. 
                    Food and Agriculture Organization of the United Nations.
                </p>
                <small class="text-muted">
                    <?php echo $_SESSION['lang'] == 'es' 
                        ? 'Evaluación global más completa sobre el estado de los recursos forestales.' 
                        : 'Most comprehensive global assessment on the state of forest resources.'; ?>
                </small>
            </div>
            
            <div class="reference-item">
                <p class="mb-1">
                    <strong>Lamb, D., Erskine, P. D., & Parrotta, J. A. (2005).</strong> 
                    Restoration of degraded tropical forest landscapes. 
                    <em>Science, 310</em>(5754), 1628-1632.
                </p>
                <small class="text-muted">
                    <?php echo $_SESSION['lang'] == 'es' 
                        ? 'Principios y técnicas para la restauración de bosques tropicales degradados.' 
                        : 'Principles and techniques for restoring degraded tropical forests.'; ?>
                </small>
            </div>
        </div>
    </div>
</div>

<?php includeFooter(); ?>
