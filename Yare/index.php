<?php
/**
 * Página principal del proyecto de reforestación
 * Presenta información general sobre reforestación y su importancia
 */

require_once 'config.php';

includeHeader(t('nav_home'), 'home');
?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <h1 class="display-3 fw-bold mb-4"><?php echo t('home_hero_title'); ?></h1>
        <p class="lead mb-4"><?php echo t('home_hero_subtitle'); ?></p>
        <a href="areas_academicas.php" class="btn btn-light btn-lg">
            <i class="bi bi-book"></i> <?php echo t('learn_more'); ?>
        </a>
    </div>
</section>

<!-- Introducción -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2 class="section-title text-start"><?php echo t('home_intro_title'); ?></h2>
                <p class="lead"><?php echo t('home_intro_text'); ?></p>
                
                <p>Los bosques cubren aproximadamente 31% de la superficie terrestre global y almacenan cerca de 861 ± 66 Pg de carbono, siendo cruciales para la regulación climática global (Pan et al., 2011).</p>
                
                <p>La deforestación global continúa a ritmo alarmante, con pérdidas anuales de 10-15 millones de hectáreas, principalmente en regiones tropicales (FAO, 2020). Esta pérdida representa no solo una crisis ambiental sino también socioeconómica, afectando los medios de vida de más de 1.6 billones de personas que dependen directamente de recursos forestales.</p>
                
                <div class="alert alert-success mt-4" role="alert">
                    <i class="bi bi-lightbulb-fill"></i> <strong>Dato importante:</strong> El contexto actual de cambio climático global añade urgencia a los esfuerzos de reforestación. Los compromisos internacionales como el Acuerdo de París reconocen el potencial de los bosques para la mitigación climática.
                </div>
            </div>
            <div class="col-md-6">
                <img style="width: 100%; height: auto;" src="https://www.iberdrola.com/documents/20125/40576/reforestacion_746x419.jpg/7ffde25d-e3a2-3e75-ba3d-b6e543dd0e24?t=1627463867254" 
                     class="img-fluid rounded shadow" 
                     alt="Bosque reforestado">
            </div>
        </div>
    </div>
</section>

<!-- Importancia de la Reforestación -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="section-title text-center"><?php echo t('home_importance_title'); ?></h2>
        
        <div class="row g-4">
            <!-- Regulación Climática -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="mb-3">
                            <i class="bi bi-thermometer-half display-4 text-primary"></i>
                        </div>
                        <h5 class="card-title"><?php echo t('home_climate_title'); ?></h5>
                        <p class="card-text"><?php echo t('home_climate_text'); ?></p>
                        <small class="text-muted">Pan et al., 2011</small>
                    </div>
                </div>
            </div>
            
            <!-- Biodiversidad -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="mb-3">
                            <i class="bi bi-bug display-4 text-success"></i>
                        </div>
                        <h5 class="card-title"><?php echo t('home_biodiversity_title'); ?></h5>
                        <p class="card-text"><?php echo t('home_biodiversity_text'); ?></p>
                        <small class="text-muted">Gibson et al., 2011</small>
                    </div>
                </div>
            </div>
            
            <!-- Ciclo Hidrológico -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="mb-3">
                            <i class="bi bi-droplet-fill display-4 text-info"></i>
                        </div>
                        <h5 class="card-title"><?php echo t('home_water_title'); ?></h5>
                        <p class="card-text"><?php echo t('home_water_text'); ?></p>
                    </div>
                </div>
            </div>
            
            <!-- Beneficios Sociales -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="mb-3">
                            <i class="bi bi-people-fill display-4 text-warning"></i>
                        </div>
                        <h5 class="card-title"><?php echo t('home_social_title'); ?></h5>
                        <p class="card-text"><?php echo t('home_social_text'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Fundamentos Ecológicos -->
<section class="py-5">
    <div class="container">
        <h2 class="section-title text-center">Fundamentos Ecológicos</h2>
        
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <img style="width: 93%; height: auto;" src="https://thumbs.dreamstime.com/b/especies-de-%C3%A1rboles-pioneros-en-la-alfombra-bog-nuevo-hampshire-dos-pioneras-esteras-picea-negra-mariana-y-tamarack-o-laricina-267947718.jpg" 
                         class="card-img-top" 
                         alt="Especies Pioneras">
                    <div class="card-body">
                        <h5 class="card-title">Especies Pioneras</h5>
                        <p class="card-text">Las especies pioneras son fundamentales en las etapas iniciales de la sucesión. Se caracterizan por crecimiento rápido, alta producción de biomasa, semillas pequeñas y abundantes con alta capacidad de dispersión.</p>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check-circle-fill text-success"></i> Crecimiento rápido</li>
                            <li><i class="bi bi-check-circle-fill text-success"></i> Alta dispersión</li>
                            <li><i class="bi bi-check-circle-fill text-success"></i> Tolerancia a condiciones extremas</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <img style="width: 93%; height: auto;" src="https://www.lifeder.com/wp-content/uploads/2020/03/Secondary_succesion_cm01_opt.jpg" 
                         class="card-img-top" 
                         alt="Especies Secundarias">
                    <div class="card-body">
                        <h5 class="card-title">Especies Secundarias Tempranas</h5>
                        <p class="card-text">Estas especies se establecen bajo el dosel parcial creado por las pioneras. Tienen crecimiento moderadamente rápido, mayor longevidad y contribución significativa a la mejora de suelos.</p>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check-circle-fill text-success"></i> Crecimiento moderado</li>
                            <li><i class="bi bi-check-circle-fill text-success"></i> Mayor longevidad</li>
                            <li><i class="bi bi-check-circle-fill text-success"></i> Mejoran el suelo</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <img style="width: 93%; height: auto;" src="https://upload.wikimedia.org/wikipedia/commons/5/51/Monte_del_Pardo2.jpg" 
                         class="card-img-top" 
                         alt="Especies Climax">
                    <div class="card-body">
                        <h5 class="card-title">Especies Tardías o Clímax</h5>
                        <p class="card-text">Representan la etapa final de la sucesión. Tienen crecimiento lento pero sostenido, alta tolerancia a la sombra, longevidad excepcional y máxima contribución a la biodiversidad.</p>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check-circle-fill text-success"></i> Crecimiento sostenido</li>
                            <li><i class="bi bi-check-circle-fill text-success"></i> Alta longevidad</li>
                            <li><i class="bi bi-check-circle-fill text-success"></i> Máxima biodiversidad</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modelos de Reforestación -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="section-title text-center">Modelos de Reforestación</h2>
        
        <div class="row g-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0"><i class="bi bi-grid-3x3-gap"></i> Plantación en Bloque</h5>
                    </div>
                    <div class="card-body">
                        <p><strong>Características:</strong></p>
                        <ul>
                            <li>Plantación sistemática en áreas extensas</li>
                            <li>Espaciamiento regular (2x2 a 4x4 metros)</li>
                            <li>Especies seleccionadas según objetivos</li>
                            <li>Manejo intensivo durante establecimiento</li>
                        </ul>
                        <p><strong>Tasas de supervivencia:</strong> 60-85% en plantaciones bien manejadas (Lamb et al., 2005)</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-success text-white">
                        <h5 class="mb-0"><i class="bi bi-diagram-3"></i> Sistemas Agroforestales</h5>
                    </div>
                    <div class="card-body">
                        <p><strong>Tipos principales:</strong></p>
                        <ul>
                            <li><strong>Silvopastoriles:</strong> Árboles con pasturas y ganado</li>
                            <li><strong>Agrosilvícolas:</strong> Árboles con cultivos anuales o perennes</li>
                            <li><strong>Silvopiscícolas:</strong> Árboles con acuicultura</li>
                        </ul>
                        <p><strong>Beneficios:</strong> Incremento de 15-35% en productividad total, secuestro de 12-228 toneladas CO₂/ha (Montagnini & Nair, 2004)</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        <h5 class="mb-0"><i class="bi bi-arrow-repeat"></i> Sucesión Natural Asistida</h5>
                    </div>
                    <div class="card-body">
                        <p><strong>Técnicas principales:</strong></p>
                        <ul>
                            <li>Eliminación de especies invasoras</li>
                            <li>Mejoramiento de condiciones de sitio</li>
                            <li>Facilitación de dispersión de semillas</li>
                            <li>Protección contra disturbios</li>
                        </ul>
                        <p><strong>Resultados:</strong> Restauración de 40-60% de la diversidad original en 20-40 años (Chazdon, 2008)</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-warning text-dark">
                        <h5 class="mb-0"><i class="bi bi-circle"></i> Nucleación Ecológica</h5>
                    </div>
                    <div class="card-body">
                        <p><strong>Principios:</strong></p>
                        <ul>
                            <li>Creación de múltiples puntos focales de regeneración</li>
                            <li>Facilitación gradual de condiciones</li>
                            <li>Reducción de costos (40-60% vs plantación total)</li>
                            <li>Mayor heterogeneidad espacial</li>
                        </ul>
                        <p><strong>Técnicas:</strong> Núcleos de plantación, perchas para aves, refugios de fauna</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Servicios Ecosistémicos -->
<section class="py-5">
    <div class="container">
        <h2 class="section-title text-center">Servicios Ecosistémicos de los Bosques</h2>
        
        <div class="row">
            <div class="col-md-12">
                <img src="https://mx.fsc.org/sites/default/files/inline-images/SE.jpg" 
                     class="img-fluid rounded mb-4" 
                     alt="Servicios Ecosistémicos">
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card border-primary">
                    <div class="card-body">
                        <h5 class="card-title text-primary">
                            <i class="bi bi-gear-fill"></i> Servicios de Regulación
                        </h5>
                        <ul>
                            <li>Regulación climática (2.6 ± 0.7 Pg C/año)</li>
                            <li>Control del ciclo hidrológico</li>
                            <li>Purificación del aire</li>
                            <li>Control de erosión</li>
                            <li>Polinización</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card border-success">
                    <div class="card-body">
                        <h5 class="card-title text-success">
                            <i class="bi bi-box-seam"></i> Servicios de Provisión
                        </h5>
                        <ul>
                            <li>Madera para construcción</li>
                            <li>Productos no maderables</li>
                            <li>Alimentos (frutos, semillas, miel)</li>
                            <li>Plantas medicinales</li>
                            <li>Recursos genéticos</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card border-warning">
                    <div class="card-body">
                        <h5 class="card-title text-warning">
                            <i class="bi bi-heart-fill"></i> Servicios Culturales
                        </h5>
                        <ul>
                            <li>Valores espirituales</li>
                            <li>Recreación y ecoturismo</li>
                            <li>Educación ambiental</li>
                            <li>Conocimiento tradicional</li>
                            <li>Valor estético</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-5 bg-primary text-white">
    <div class="container text-center">
        <h2 class="mb-4">¿Listo para participar en el proyecto?</h2>
        <p class="lead mb-4">Explora nuestras herramientas y aprende cómo puedes contribuir a la reforestación</p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="calculadora.php" class="btn btn-light btn-lg">
                <i class="bi bi-calculator"></i> Usar Calculadora
            </a>
            <a href="proyecto_cbta.php" class="btn btn-outline-light btn-lg">
                <i class="bi bi-map"></i> Ver Proyecto CBTA
            </a>
            <?php if (!isLoggedIn()): ?>
            <a href="auth.php" class="btn btn-warning btn-lg">
                <i class="bi bi-person-plus"></i> Registrarse
            </a>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Referencias -->
<section class="py-5">
    <div class="container">
        <h3 class="text-center mb-4">Referencias Bibliográficas</h3>
        <div class="card">
            <div class="card-body">
                <p class="mb-2"><small>
                    Chazdon, R. L. (2008). <em>Second growth: the promise of tropical forest regeneration in an age of deforestation</em>. University of Chicago Press.
                </small></p>
                
                <p class="mb-2"><small>
                    FAO. (2020). <em>Global Forest Resources Assessment 2020</em>. Food and Agriculture Organization of the United Nations.
                </small></p>
                
                <p class="mb-2"><small>
                    Gibson, L., Lee, T. M., Koh, L. P., et al. (2011). Primary forests are irreplaceable for sustaining tropical biodiversity. <em>Nature</em>, 478(7369), 378-381.
                </small></p>
                
                <p class="mb-2"><small>
                    Lamb, D., Erskine, P. D., & Parrotta, J. A. (2005). Restoration of degraded tropical forest landscapes. <em>Science</em>, 310(5754), 1628-1632.
                </small></p>
                
                <p class="mb-2"><small>
                    Montagnini, F., & Nair, P. K. R. (2004). Carbon sequestration: an underexploited environmental benefit of agroforestry systems. <em>Agroforestry Systems</em>, 61(1), 281-295.
                </small></p>
                
                <p class="mb-0"><small>
                    Pan, Y., Birdsey, R. A., Fang, J., et al. (2011). A large and persistent carbon sink in the world's forests. <em>Science</em>, 333(6045), 988-993.
                </small></p>
            </div>
        </div>
    </div>
</section>

<?php includeFooter(); ?>
