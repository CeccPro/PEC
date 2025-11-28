<?php
/**
 * Secciones de Materias - Análisis Multidisciplinario
 * Conexión entre reforestación y diferentes áreas académicas
 * 
 * @author: Estudiante CBTA 35
 * @date: November 2025
 */
?>

<!-- Sección Matemáticas -->
<section id="matematicas" class="subject-section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <i class="fas fa-calculator math-icon mb-3"></i>
                <h2><?php echo $t['math_title']; ?></h2>
                <p class="lead"><?php echo $t['math_intro']; ?></p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="card h-100 shadow">
                    <div class="card-header">
                        <h5 class="mb-0">
                            <i class="fas fa-shapes me-2"></i>
                            <?php echo $t['geometry_applications']; ?>
                        </h5>
                    </div>
                    <div class="card-body">
                        <img src="https://placehold.co/400x250/FF6B6B/FFFFFF?text=Geometría+Forestal" 
                             alt="Aplicaciones geométricas" class="img-fluid rounded mb-3">
                        <!-- TODO: Usar imagen real de cálculos geométricos en forestación -->
                        
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <i class="fas fa-ruler-combined text-primary me-2"></i>
                                <?php echo $t['spacing_calculations']; ?>
                            </li>
                            <li class="list-group-item">
                                <i class="fas fa-vector-square text-success me-2"></i>
                                <?php echo $t['area_optimization']; ?>
                            </li>
                            <li class="list-group-item">
                                <i class="fas fa-chart-line text-info me-2"></i>
                                <?php echo $t['growth_models']; ?>
                            </li>
                        </ul>
                        
                        <div class="mt-3">
                            <h6 class="text-primary">Fórmulas Aplicadas:</h6>
                            <div class="bg-light p-3 rounded">
                                <p class="mb-2"><strong>Densidad de plantación:</strong></p>
                                <p class="font-monospace">D = 10,000 / (E × E)</p>
                                <small class="text-muted">Donde D = árboles/ha, E = espaciamiento en metros</small>
                                
                                <p class="mb-2 mt-3"><strong>Área basal:</strong></p>
                                <p class="font-monospace">AB = π × (DAP/200)² × N</p>
                                <small class="text-muted">AB = área basal, DAP = diámetro a la altura del pecho, N = número de árboles</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 mb-4">
                <div class="card h-100 shadow">
                    <div class="card-header">
                        <h5 class="mb-0">
                            <i class="fas fa-chart-bar me-2"></i>
                            <?php echo $t['statistics_applications']; ?>
                        </h5>
                    </div>
                    <div class="card-body">
                        <img src="https://placehold.co/400x250/32CD32/FFFFFF?text=Estadísticas+Forestales" 
                             alt="Estadísticas forestales" class="img-fluid rounded mb-3">
                        <!-- TODO: Usar imagen real de gráficos estadísticos forestales -->
                        
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <i class="fas fa-heartbeat text-danger me-2"></i>
                                <?php echo $t['survival_analysis']; ?>
                            </li>
                            <li class="list-group-item">
                                <i class="fas fa-leaf text-success me-2"></i>
                                <?php echo $t['biodiversity_indices']; ?>
                            </li>
                            <li class="list-group-item">
                                <i class="fas fa-cloud text-primary me-2"></i>
                                <?php echo $t['carbon_calculations']; ?>
                            </li>
                        </ul>
                        
                        <div class="mt-3">
                            <h6 class="text-success">Ejemplo Práctico:</h6>
                            <div class="bg-success bg-opacity-10 p-3 rounded">
                                <p><strong>Cálculo de supervivencia:</strong></p>
                                <p>En una plantación de 1000 pinos, después de 2 años sobreviven 850 árboles.</p>
                                <p><strong>Tasa de supervivencia = (850/1000) × 100 = 85%</strong></p>
                                <p><strong>Intervalo de confianza (95%):</strong> 82.4% - 87.6%</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sección Humanidades -->
<section id="humanidades" class="subject-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <i class="fas fa-users humanities-icon mb-3"></i>
                <h2><?php echo $t['humanities_title']; ?></h2>
                <p class="lead"><?php echo $t['humanities_intro']; ?></p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="card h-100 shadow">
                    <div class="card-header bg-info text-white">
                        <h5 class="mb-0">
                            <i class="fas fa-history me-2"></i>
                            <?php echo $t['historical_context']; ?>
                        </h5>
                    </div>
                    <div class="card-body">
                        <img src="https://placehold.co/400x250/4ECDC4/FFFFFF?text=Historia+Forestal" 
                             alt="Historia forestal" class="img-fluid rounded mb-3">
                        <!-- TODO: Usar imagen histórica de bosques mexicanos -->
                        
                        <div class="timeline">
                            <div class="timeline-item">
                                <div class="timeline-marker bg-primary"></div>
                                <div class="timeline-content">
                                    <h6>Época Prehispánica</h6>
                                    <p class="small">Los pueblos originarios desarrollaron sistemas sostenibles de manejo forestal basados en conocimientos milenarios.</p>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <div class="timeline-marker bg-warning"></div>
                                <div class="timeline-content">
                                    <h6>Siglo XX</h6>
                                    <p class="small">Intensificación de la deforestación debido a la expansión agrícola y ganadera.</p>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <div class="timeline-marker bg-success"></div>
                                <div class="timeline-content">
                                    <h6>Actualidad</h6>
                                    <p class="small">Programas gubernamentales y iniciativas privadas promueven la reforestación.</p>
                                </div>
                            </div>
                        </div>
                        
                        <ul class="list-unstyled mt-3">
                            <li><i class="fas fa-book text-primary me-2"></i><?php echo $t['deforestation_history']; ?></li>
                            <li><i class="fas fa-feather-alt text-success me-2"></i><?php echo $t['indigenous_knowledge']; ?></li>
                            <li><i class="fas fa-heart text-danger me-2"></i><?php echo $t['cultural_significance']; ?></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 mb-4">
                <div class="card h-100 shadow">
                    <div class="card-header bg-warning text-dark">
                        <h5 class="mb-0">
                            <i class="fas fa-handshake me-2"></i>
                            <?php echo $t['social_aspects']; ?>
                        </h5>
                    </div>
                    <div class="card-body">
                        <img src="https://placehold.co/400x250/FFA726/FFFFFF?text=Participación+Comunitaria" 
                             alt="Participación social" class="img-fluid rounded mb-3">
                        <!-- TODO: Usar imagen de participación comunitaria en reforestación -->
                        
                        <div class="accordion" id="socialAspectsAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" 
                                            data-bs-toggle="collapse" data-bs-target="#participation">
                                        <i class="fas fa-people-group me-2"></i>
                                        <?php echo $t['community_participation']; ?>
                                    </button>
                                </h2>
                                <div id="participation" class="accordion-collapse collapse" 
                                     data-bs-parent="#socialAspectsAccordion">
                                    <div class="accordion-body">
                                        <p>La participación activa de las comunidades locales es fundamental para el éxito de los proyectos de reforestación.</p>
                                        <ul>
                                            <li>Conocimiento tradicional del territorio</li>
                                            <li>Compromiso a largo plazo con el proyecto</li>
                                            <li>Beneficios económicos directos</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" 
                                            data-bs-toggle="collapse" data-bs-target="#justice">
                                        <i class="fas fa-balance-scale me-2"></i>
                                        <?php echo $t['environmental_justice']; ?>
                                    </button>
                                </h2>
                                <div id="justice" class="accordion-collapse collapse" 
                                     data-bs-parent="#socialAspectsAccordion">
                                    <div class="accordion-body">
                                        <p>Los proyectos de reforestación deben considerar la equidad social y la distribución justa de beneficios.</p>
                                        <ul>
                                            <li>Acceso equitativo a recursos</li>
                                            <li>Respeto a derechos territoriales</li>
                                            <li>Inclusión de grupos vulnerables</li>
                                        </ul>
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

<!-- Sección Programación -->
<section id="programacion" class="subject-section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <i class="fas fa-code programming-icon mb-3"></i>
                <h2><?php echo $t['programming_title']; ?></h2>
                <p class="lead"><?php echo $t['programming_intro']; ?></p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card h-100 shadow">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">
                            <i class="fas fa-database me-2"></i>
                            <?php echo $t['data_analysis']; ?>
                        </h5>
                    </div>
                    <div class="card-body">
                        <img src="https://placehold.co/300x200/45B7D1/FFFFFF?text=Análisis+de+Datos" 
                             alt="Análisis de datos" class="img-fluid rounded mb-3">
                        <!-- TODO: Usar imagen de gráficos de análisis de datos forestales -->
                        
                        <ul class="list-unstyled">
                            <li><i class="fas fa-map text-success me-2"></i><?php echo $t['gis_applications']; ?></li>
                            <li><i class="fas fa-chart-line text-info me-2"></i><?php echo $t['growth_modeling']; ?></li>
                            <li><i class="fas fa-globe text-primary me-2"></i><?php echo $t['web_development']; ?></li>
                        </ul>
                        
                        <div class="bg-light p-3 rounded mt-3">
                            <h6>Ejemplo de Código Python:</h6>
                            <pre class="small"><code>import pandas as pd
import matplotlib.pyplot as plt

# Cargar datos de supervivencia
data = pd.read_csv('supervivencia.csv')

# Calcular tasa por especie
survival_rate = data.groupby('especie')['supervivencia'].mean()

# Generar gráfico
survival_rate.plot(kind='bar')
plt.title('Tasa de Supervivencia por Especie')
plt.show()</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 mb-4">
                <div class="card h-100 shadow">
                    <div class="card-header bg-success text-white">
                        <h5 class="mb-0">
                            <i class="fas fa-cogs me-2"></i>
                            <?php echo $t['automation']; ?>
                        </h5>
                    </div>
                    <div class="card-body">
                        <img src="https://placehold.co/300x200/228B22/FFFFFF?text=Automatización" 
                             alt="Automatización" class="img-fluid rounded mb-3">
                        <!-- TODO: Usar imagen de sistemas automatizados de monitoreo -->
                        
                        <ul class="list-unstyled">
                            <li><i class="fas fa-eye text-warning me-2"></i><?php echo $t['monitoring_systems']; ?></li>
                            <li><i class="fas fa-server text-info me-2"></i><?php echo $t['database_management']; ?></li>
                            <li><i class="fas fa-file-alt text-primary me-2"></i><?php echo $t['report_generation']; ?></li>
                        </ul>
                        
                        <div class="bg-light p-3 rounded mt-3">
                            <h6>Tecnologías Utilizadas:</h6>
                            <div class="d-flex flex-wrap gap-1">
                                <span class="badge bg-primary">PHP</span>
                                <span class="badge bg-success">MySQL</span>
                                <span class="badge bg-info">JavaScript</span>
                                <span class="badge bg-warning">Python</span>
                                <span class="badge bg-danger">Bootstrap</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 mb-4">
                <div class="card h-100 shadow">
                    <div class="card-header bg-info text-white">
                        <h5 class="mb-0">
                            <i class="fas fa-mobile-alt me-2"></i>
                            Aplicaciones Móviles
                        </h5>
                    </div>
                    <div class="card-body">
                        <img src="https://placehold.co/300x200/17A2B8/FFFFFF?text=App+Móvil" 
                             alt="Aplicación móvil" class="img-fluid rounded mb-3">
                        <!-- TODO: Usar screenshot de aplicación móvil de reforestación -->
                        
                        <p>Desarrollo de aplicaciones móviles para:</p>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-camera text-success me-2"></i>Registro fotográfico de plantaciones</li>
                            <li><i class="fas fa-map-marker-alt text-danger me-2"></i>Geolocalización de árboles</li>
                            <li><i class="fas fa-clipboard-check text-primary me-2"></i>Formularios de monitoreo</li>
                            <li><i class="fas fa-cloud-upload-alt text-info me-2"></i>Sincronización con base de datos</li>
                        </ul>
                        
                        <div class="bg-light p-3 rounded mt-3">
                            <h6>Funcionalidades:</h6>
                            <ul class="small mb-0">
                                <li>Modo offline para trabajo en campo</li>
                                <li>Integración con GPS</li>
                                <li>Cámara con metadatos automáticos</li>
                                <li>Reportes automáticos</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sección Ecosistemas -->
<section id="ecosistemas" class="subject-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <i class="fas fa-leaf ecosystems-icon mb-3"></i>
                <h2><?php echo $t['ecosystems_title']; ?></h2>
                <p class="lead"><?php echo $t['ecosystems_intro']; ?></p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="card h-100 shadow">
                    <div class="card-header bg-success text-white">
                        <h5 class="mb-0">
                            <i class="fas fa-recycle me-2"></i>
                            <?php echo $t['ecosystem_services']; ?>
                        </h5>
                    </div>
                    <div class="card-body">
                        <img src="https://placehold.co/400x250/228B22/FFFFFF?text=Servicios+Ecosistémicos" 
                             alt="Servicios ecosistémicos" class="img-fluid rounded mb-3">
                        <!-- TODO: Usar imagen de servicios ecosistémicos -->
                        
                        <div class="row">
                            <div class="col-md-6">
                                <h6 class="text-success">Servicios de Regulación:</h6>
                                <ul class="list-unstyled small">
                                    <li><i class="fas fa-thermometer-half text-primary me-2"></i><?php echo $t['climate_regulation']; ?></li>
                                    <li><i class="fas fa-tint text-info me-2"></i><?php echo $t['water_cycle']; ?></li>
                                    <li><i class="fas fa-shield-alt text-success me-2"></i>Control de erosión</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h6 class="text-primary">Servicios de Provisión:</h6>
                                <ul class="list-unstyled small">
                                    <li><i class="fas fa-tree text-success me-2"></i>Productos maderables</li>
                                    <li><i class="fas fa-apple-alt text-warning me-2"></i>Productos no maderables</li>
                                    <li><i class="fas fa-dna text-info me-2"></i>Recursos genéticos</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="mt-3">
                            <h6 class="text-info"><?php echo $t['biodiversity_conservation']; ?></h6>
                            <p class="small">Los bosques restaurados pueden albergar hasta el 60-80% de la biodiversidad de bosques naturales, dependiendo de las especies utilizadas y las técnicas de manejo aplicadas.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 mb-4">
                <div class="card h-100 shadow">
                    <div class="card-header bg-warning text-dark">
                        <h5 class="mb-0">
                            <i class="fas fa-cogs me-2"></i>
                            <?php echo $t['ecological_processes']; ?>
                        </h5>
                    </div>
                    <div class="card-body">
                        <img src="https://placehold.co/400x250/FFC107/000000?text=Procesos+Ecológicos" 
                             alt="Procesos ecológicos" class="img-fluid rounded mb-3">
                        <!-- TODO: Usar imagen de procesos ecológicos -->
                        
                        <div class="process-flow">
                            <div class="process-step mb-3">
                                <div class="d-flex align-items-center">
                                    <div class="process-icon bg-success text-white rounded-circle me-3">
                                        <i class="fas fa-seedling"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-1">Establecimiento</h6>
                                        <small class="text-muted">Germinación y establecimiento inicial de plántulas</small>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="process-step mb-3">
                                <div class="d-flex align-items-center">
                                    <div class="process-icon bg-primary text-white rounded-circle me-3">
                                        <i class="fas fa-arrows-alt"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-1"><?php echo $t['nutrient_cycling']; ?></h6>
                                        <small class="text-muted">Reciclaje de nutrientes mediante descomposición</small>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="process-step mb-3">
                                <div class="d-flex align-items-center">
                                    <div class="process-icon bg-info text-white rounded-circle me-3">
                                        <i class="fas fa-mountain"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-1"><?php echo $t['soil_formation']; ?></h6>
                                        <small class="text-muted">Mejoramiento gradual de la estructura del suelo</small>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="process-step">
                                <div class="d-flex align-items-center">
                                    <div class="process-icon bg-warning text-white rounded-circle me-3">
                                        <i class="fas fa-network-wired"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-1"><?php echo $t['species_interactions']; ?></h6>
                                        <small class="text-muted">Desarrollo de redes tróficas complejas</small>
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

<!-- Sección Comunicación -->
<section id="comunicacion" class="subject-section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <i class="fas fa-comments communication-icon mb-3"></i>
                <h2><?php echo $t['communication_title']; ?></h2>
                <p class="lead"><?php echo $t['communication_intro']; ?></p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="card h-100 shadow">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">
                            <i class="fas fa-pen-nib me-2"></i>
                            <?php echo $t['scientific_writing']; ?>
                        </h5>
                    </div>
                    <div class="card-body">
                        <img src="https://placehold.co/400x250/007BFF/FFFFFF?text=Redacción+Científica" 
                             alt="Redacción científica" class="img-fluid rounded mb-3">
                        <!-- TODO: Usar imagen de documentos científicos -->
                        
                        <ul class="list-unstyled">
                            <li><i class="fas fa-file-alt text-primary me-2"></i><?php echo $t['research_reports']; ?></li>
                            <li><i class="fas fa-presentation text-success me-2"></i><?php echo $t['academic_presentations']; ?></li>
                            <li><i class="fas fa-quote-left text-info me-2"></i><?php echo $t['citation_formats']; ?></li>
                        </ul>
                        
                        <div class="bg-light p-3 rounded mt-3">
                            <h6>Ejemplo de Citación APA:</h6>
                            <div class="small font-monospace">
                                <p class="mb-1">Pan, Y., Birdsey, R. A., Fang, J., Houghton, R., Kauppi, P. E., Kurz, W. A., ... & Hayes, D. (2011). A large and persistent carbon sink in the world's forests. <em>Science</em>, 333(6045), 988-993.</p>
                            </div>
                        </div>
                        
                        <div class="mt-3">
                            <h6 class="text-success">Estructura de Reporte:</h6>
                            <ol class="small">
                                <li>Resumen ejecutivo</li>
                                <li>Introducción y objetivos</li>
                                <li>Metodología</li>
                                <li>Resultados y análisis</li>
                                <li>Conclusiones y recomendaciones</li>
                                <li>Referencias bibliográficas</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 mb-4">
                <div class="card h-100 shadow">
                    <div class="card-header bg-warning text-dark">
                        <h5 class="mb-0">
                            <i class="fas fa-bullhorn me-2"></i>
                            <?php echo $t['public_communication']; ?>
                        </h5>
                    </div>
                    <div class="card-body">
                        <img src="https://placehold.co/400x250/FFC107/000000?text=Comunicación+Pública" 
                             alt="Comunicación pública" class="img-fluid rounded mb-3">
                        <!-- TODO: Usar imagen de actividades de comunicación ambiental -->
                        
                        <div class="row">
                            <div class="col-md-6">
                                <h6 class="text-success">Estrategias Digitales:</h6>
                                <ul class="list-unstyled small">
                                    <li><i class="fab fa-facebook text-primary me-2"></i>Campañas en redes sociales</li>
                                    <li><i class="fab fa-youtube text-danger me-2"></i>Videos educativos</li>
                                    <li><i class="fas fa-blog text-info me-2"></i>Blogs ambientales</li>
                                    <li><i class="fas fa-podcast text-success me-2"></i>Podcasts científicos</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h6 class="text-primary">Actividades Presenciales:</h6>
                                <ul class="list-unstyled small">
                                    <li><i class="fas fa-chalkboard-teacher text-success me-2"></i><?php echo $t['environmental_education']; ?></li>
                                    <li><i class="fas fa-users text-primary me-2"></i><?php echo $t['community_workshops']; ?></li>
                                    <li><i class="fas fa-tree text-success me-2"></i>Jornadas de plantación</li>
                                    <li><i class="fas fa-eye text-info me-2"></i>Visitas guiadas</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="mt-3">
                            <div class="alert alert-info">
                                <h6><i class="fas fa-lightbulb me-2"></i>Consejos para Comunicación Efectiva:</h6>
                                <ul class="mb-0 small">
                                    <li>Usar lenguaje claro y accesible</li>
                                    <li>Incluir elementos visuales atractivos</li>
                                    <li>Conectar con experiencias locales</li>
                                    <li>Proporcionar acciones concretas</li>
                                    <li>Medir el impacto de las campañas</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Estilos específicos para las secciones de materias */
.timeline {
    position: relative;
    padding-left: 30px;
}

.timeline-item {
    position: relative;
    margin-bottom: 20px;
}

.timeline-marker {
    position: absolute;
    left: -35px;
    top: 5px;
    width: 12px;
    height: 12px;
    border-radius: 50%;
}

.timeline::before {
    content: '';
    position: absolute;
    left: -30px;
    top: 0;
    bottom: 0;
    width: 2px;
    background: #dee2e6;
}

.process-icon {
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.process-flow .process-step:not(:last-child)::after {
    content: '';
    position: absolute;
    left: 20px;
    top: 45px;
    width: 2px;
    height: 20px;
    background: #dee2e6;
}

.process-step {
    position: relative;
}

/* TODO: Añadir más estilos personalizados para mejorar la presentación */
/* TODO: Implementar animaciones de entrada para los elementos */
/* TODO: Optimizar estilos para dispositivos móviles */
</style>