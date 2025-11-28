<?php
/**
 * Página de Disciplinas
 * Explica cómo diferentes materias se relacionan con la reforestación
 */

require_once 'config.php';
require_once 'functions.php';
require_once 'translations.php';

includeHeader(t('disciplines_title'), 'disciplines');
?>

<div class="hero-section">
    <div class="container text-center">
        <h1>
            <i class="bi bi-book-fill"></i> <?php echo t('disciplines_title'); ?>
        </h1>
        <p class="lead">
            <?php echo $_SESSION['lang'] == 'es' 
                ? 'Un enfoque multidisciplinario para la restauración ecológica' 
                : 'A multidisciplinary approach to ecological restoration'; ?>
        </p>
    </div>
</div>

<div class="container mb-5">
    
    <!-- Introducción -->
    <div class="row mb-5">
        <div class="col-lg-10 mx-auto">
            <div class="info-box">
                <p class="lead">
                    <?php if ($_SESSION['lang'] == 'es'): ?>
                        La reforestación no es solo una actividad ambiental, es un proyecto que integra 
                        conocimientos de diversas disciplinas. Cada materia aporta herramientas y perspectivas 
                        únicas que son fundamentales para el éxito de cualquier proyecto de restauración forestal.
                    <?php else: ?>
                        Reforestation is not just an environmental activity, it is a project that integrates 
                        knowledge from various disciplines. Each subject provides unique tools and perspectives 
                        that are fundamental to the success of any forest restoration project.
                    <?php endif; ?>
                </p>
            </div>
        </div>
    </div>
    
    <!-- MATEMÁTICAS -->
    <div class="row mb-5">
        <div class="col-12">
            <div class="card discipline-card">
                <div class="card-header">
                    <i class="bi bi-calculator-fill"></i> <?php echo t('mathematics_title'); ?>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <img src="https://placehold.co/400x300/1976D2/FFFFFF?text=Matemáticas+en+Reforestación" 
                                 alt="Matemáticas" class="img-fluid rounded mb-3">
                            <i class="bi bi-graph-up-arrow big-icon"></i>
                        </div>
                        <div class="col-md-8">
                            <h4 class="text-primary mb-3">
                                <?php echo $_SESSION['lang'] == 'es' 
                                    ? 'Aplicaciones Matemáticas en Reforestación' 
                                    : 'Mathematical Applications in Reforestation'; ?>
                            </h4>
                            
                            <h5 class="text-success mt-4">
                                <?php echo $_SESSION['lang'] == 'es' 
                                    ? '1. Cálculos de Densidad de Plantación' 
                                    : '1. Planting Density Calculations'; ?>
                            </h5>
                            <p>
                                <?php if ($_SESSION['lang'] == 'es'): ?>
                                    La determinación del número óptimo de árboles por hectárea requiere geometría y 
                                    álgebra. Se utiliza la fórmula: <strong>N = 10,000 / (d × d)</strong>, donde N es el 
                                    número de árboles por hectárea y d es la distancia de espaciamiento en metros.
                                <?php else: ?>
                                    Determining the optimal number of trees per hectare requires geometry and algebra. 
                                    The formula used is: <strong>N = 10,000 / (d × d)</strong>, where N is the number 
                                    of trees per hectare and d is the spacing distance in meters.
                                <?php endif; ?>
                            </p>
                            <div class="alert alert-info">
                                <strong><?php echo $_SESSION['lang'] == 'es' ? 'Ejemplo' : 'Example'; ?>:</strong>
                                <?php if ($_SESSION['lang'] == 'es'): ?>
                                    Con espaciamiento de 3×3 metros: N = 10,000 / (3 × 3) = 1,111 árboles/ha
                                <?php else: ?>
                                    With 3×3 meter spacing: N = 10,000 / (3 × 3) = 1,111 trees/ha
                                <?php endif; ?>
                            </div>
                            
                            <h5 class="text-success mt-4">
                                <?php echo $_SESSION['lang'] == 'es' 
                                    ? '2. Estimaciones de Captura de Carbono' 
                                    : '2. Carbon Capture Estimates'; ?>
                            </h5>
                            <p>
                                <?php if ($_SESSION['lang'] == 'es'): ?>
                                    Se emplean ecuaciones alométricas para estimar la biomasa y el carbono almacenado. 
                                    La fórmula general es: <strong>Biomasa = a × (DAP)^b</strong>, donde DAP es el diámetro 
                                    a la altura del pecho, y a y b son constantes específicas de cada especie. 
                                    El carbono se estima como aproximadamente el 50% de la biomasa seca.
                                <?php else: ?>
                                    Allometric equations are used to estimate biomass and stored carbon. 
                                    The general formula is: <strong>Biomass = a × (DBH)^b</strong>, where DBH is the diameter 
                                    at breast height, and a and b are species-specific constants. 
                                    Carbon is estimated as approximately 50% of dry biomass.
                                <?php endif; ?>
                            </p>
                            
                            <h5 class="text-success mt-4">
                                <?php echo $_SESSION['lang'] == 'es' 
                                    ? '3. Modelos de Crecimiento' 
                                    : '3. Growth Models'; ?>
                            </h5>
                            <p>
                                <?php if ($_SESSION['lang'] == 'es'): ?>
                                    Los modelos matemáticos como el modelo de Chapman-Richards predicen el crecimiento 
                                    forestal: <strong>Y = a × (1 - e^(-b×t))^c</strong>, donde Y es la variable de interés 
                                    (altura, volumen), t es la edad, y a, b, c son parámetros del modelo. Estos modelos 
                                    permiten proyectar el desarrollo del bosque a largo plazo y estimar la producción de madera.
                                <?php else: ?>
                                    Mathematical models such as the Chapman-Richards model predict forest growth: 
                                    <strong>Y = a × (1 - e^(-b×t))^c</strong>, where Y is the variable of interest 
                                    (height, volume), t is age, and a, b, c are model parameters. These models allow 
                                    projecting long-term forest development and estimating timber production.
                                <?php endif; ?>
                            </p>
                            
                            <h5 class="text-success mt-4">
                                <?php echo $_SESSION['lang'] == 'es' 
                                    ? '4. Estadística para Monitoreo' 
                                    : '4. Statistics for Monitoring'; ?>
                            </h5>
                            <p>
                                <?php if ($_SESSION['lang'] == 'es'): ?>
                                    El diseño de parcelas de monitoreo utiliza muestreo estadístico. Se calculan promedios, 
                                    desviaciones estándar, intervalos de confianza y se realizan análisis de varianza (ANOVA) 
                                    para comparar tratamientos. La estadística inferencial permite generalizar resultados 
                                    de parcelas muestra a toda el área reforestada con niveles de confianza conocidos.
                                <?php else: ?>
                                    Monitoring plot design uses statistical sampling. Averages, standard deviations, 
                                    confidence intervals are calculated, and analysis of variance (ANOVA) is performed 
                                    to compare treatments. Inferential statistics allow generalizing results from sample 
                                    plots to the entire reforested area with known confidence levels.
                                <?php endif; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- HUMANIDADES -->
    <div class="row mb-5">
        <div class="col-12">
            <div class="card discipline-card">
                <div class="card-header">
                    <i class="bi bi-people-fill"></i> <?php echo t('humanities_title'); ?>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <img src="https://placehold.co/400x300/7B1FA2/FFFFFF?text=Humanidades+y+Comunidad" 
                                 alt="Humanidades" class="img-fluid rounded mb-3">
                            <i class="bi bi-heart-fill big-icon"></i>
                        </div>
                        <div class="col-md-8">
                            <h4 class="text-primary mb-3">
                                <?php echo $_SESSION['lang'] == 'es' 
                                    ? 'Dimensión Social de la Reforestación' 
                                    : 'Social Dimension of Reforestation'; ?>
                            </h4>
                            
                            <h5 class="text-success mt-4">
                                <?php echo $_SESSION['lang'] == 'es' 
                                    ? '1. Participación Comunitaria' 
                                    : '1. Community Participation'; ?>
                            </h5>
                            <p>
                                <?php if ($_SESSION['lang'] == 'es'): ?>
                                    Agrawal et al. (2008) documentaron que proyectos con participación comunitaria activa 
                                    tienen probabilidades de éxito 2-3 veces superiores. Las humanidades aportan metodologías 
                                    para el diálogo intercultural, la negociación de conflictos y el diseño participativo 
                                    de proyectos que respetan las necesidades y aspiraciones de las comunidades locales.
                                <?php else: ?>
                                    Agrawal et al. (2008) documented that projects with active community participation 
                                    have 2-3 times higher success rates. Humanities provide methodologies for intercultural 
                                    dialogue, conflict negotiation, and participatory design of projects that respect the 
                                    needs and aspirations of local communities.
                                <?php endif; ?>
                            </p>
                            
                            <h5 class="text-success mt-4">
                                <?php echo $_SESSION['lang'] == 'es' 
                                    ? '2. Conocimiento Tradicional' 
                                    : '2. Traditional Knowledge'; ?>
                            </h5>
                            <p>
                                <?php if ($_SESSION['lang'] == 'es'): ?>
                                    Las comunidades indígenas y locales poseen siglos de conocimiento sobre el manejo 
                                    de recursos forestales. Este conocimiento tradicional incluye sistemas de clasificación 
                                    etnobotánica, calendarios ecológicos, técnicas de propagación y prácticas de manejo 
                                    sostenible. La antropología y la etnoecología documentan y valoran estos saberes, 
                                    integrándolos con la ciencia moderna para crear enfoques híbridos más efectivos.
                                <?php else: ?>
                                    Indigenous and local communities possess centuries of knowledge about forest resource 
                                    management. This traditional knowledge includes ethnobotanical classification systems, 
                                    ecological calendars, propagation techniques, and sustainable management practices. 
                                    Anthropology and ethnoecology document and value this knowledge, integrating it with 
                                    modern science to create more effective hybrid approaches.
                                <?php endif; ?>
                            </p>
                            
                            <h5 class="text-success mt-4">
                                <?php echo $_SESSION['lang'] == 'es' 
                                    ? '3. Aspectos Culturales y Espirituales' 
                                    : '3. Cultural and Spiritual Aspects'; ?>
                            </h5>
                            <p>
                                <?php if ($_SESSION['lang'] == 'es'): ?>
                                    Los bosques tienen profundo significado cultural y espiritual para muchas sociedades. 
                                    Son sitios sagrados, fuentes de identidad cultural y espacios de prácticas ceremoniales. 
                                    La filosofía y los estudios religiosos ayudan a comprender estos vínculos intangibles 
                                    pero cruciales entre las personas y los bosques, diseñando proyectos que respeten 
                                    estas dimensiones culturales.
                                <?php else: ?>
                                    Forests have deep cultural and spiritual significance for many societies. 
                                    They are sacred sites, sources of cultural identity, and spaces for ceremonial practices. 
                                    Philosophy and religious studies help understand these intangible but crucial links 
                                    between people and forests, designing projects that respect these cultural dimensions.
                                <?php endif; ?>
                            </p>
                            
                            <h5 class="text-success mt-4">
                                <?php echo $_SESSION['lang'] == 'es' 
                                    ? '4. Justicia Ambiental y Derechos' 
                                    : '4. Environmental Justice and Rights'; ?>
                            </h5>
                            <p>
                                <?php if ($_SESSION['lang'] == 'es'): ?>
                                    Los estudios sociales analizan cómo los beneficios y costos de la reforestación se 
                                    distribuyen entre diferentes grupos sociales. Se abordan temas de tenencia de la tierra, 
                                    derechos territoriales de pueblos indígenas, equidad de género, y acceso a beneficios 
                                    económicos. La ética ambiental proporciona marcos para evaluar la justicia en la 
                                    distribución de recursos y responsabilidades.
                                <?php else: ?>
                                    Social studies analyze how the benefits and costs of reforestation are distributed 
                                    among different social groups. Issues of land tenure, indigenous territorial rights, 
                                    gender equity, and access to economic benefits are addressed. Environmental ethics 
                                    provides frameworks for assessing justice in the distribution of resources and 
                                    responsibilities.
                                <?php endif; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- PROGRAMACIÓN -->
    <div class="row mb-5">
        <div class="col-12">
            <div class="card discipline-card">
                <div class="card-header">
                    <i class="bi bi-code-slash"></i> <?php echo t('programming_title'); ?>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <img src="https://placehold.co/400x300/00796B/FFFFFF?text=Programación+y+Tecnología" 
                                 alt="Programación" class="img-fluid rounded mb-3">
                            <i class="bi bi-laptop big-icon"></i>
                        </div>
                        <div class="col-md-8">
                            <h4 class="text-primary mb-3">
                                <?php echo $_SESSION['lang'] == 'es' 
                                    ? 'Tecnología Digital en Reforestación' 
                                    : 'Digital Technology in Reforestation'; ?>
                            </h4>
                            
                            <h5 class="text-success mt-4">
                                <?php echo $_SESSION['lang'] == 'es' 
                                    ? '1. Sistemas de Información Geográfica (SIG)' 
                                    : '1. Geographic Information Systems (GIS)'; ?>
                            </h5>
                            <p>
                                <?php if ($_SESSION['lang'] == 'es'): ?>
                                    Los SIG permiten analizar y visualizar datos espaciales de proyectos de reforestación. 
                                    Software como QGIS, ArcGIS y bibliotecas como GDAL en Python facilitan el mapeo de áreas 
                                    degradadas, planificación de plantaciones, análisis de cobertura forestal y monitoreo 
                                    de cambios temporales. Se pueden integrar datos de satélites (Landsat, Sentinel), drones 
                                    y GPS para crear mapas precisos de avance del proyecto.
                                <?php else: ?>
                                    GIS allow analyzing and visualizing spatial data from reforestation projects. 
                                    Software such as QGIS, ArcGIS, and libraries like GDAL in Python facilitate mapping 
                                    degraded areas, plantation planning, forest cover analysis, and monitoring temporal 
                                    changes. Satellite data (Landsat, Sentinel), drones, and GPS can be integrated to 
                                    create accurate project progress maps.
                                <?php endif; ?>
                            </p>
                            
                            <h5 class="text-success mt-4">
                                <?php echo $_SESSION['lang'] == 'es' 
                                    ? '2. Bases de Datos para Monitoreo' 
                                    : '2. Databases for Monitoring'; ?>
                            </h5>
                            <p>
                                <?php if ($_SESSION['lang'] == 'es'): ?>
                                    Las bases de datos relacionales (MySQL, PostgreSQL) y no relacionales (MongoDB, JSON) 
                                    almacenan información sobre árboles individuales, parcelas, mediciones de crecimiento, 
                                    supervivencia, y variables ambientales. Esto permite análisis longitudinales, generación 
                                    de reportes automáticos y visualización de tendencias. Aplicaciones web (como este proyecto) 
                                    facilitan el acceso y actualización de datos en tiempo real desde campo.
                                <?php else: ?>
                                    Relational databases (MySQL, PostgreSQL) and non-relational (MongoDB, JSON) store 
                                    information about individual trees, plots, growth measurements, survival, and 
                                    environmental variables. This enables longitudinal analysis, automatic report generation, 
                                    and trend visualization. Web applications (like this project) facilitate real-time 
                                    data access and updates from the field.
                                <?php endif; ?>
                            </p>
                            
                            <h5 class="text-success mt-4">
                                <?php echo $_SESSION['lang'] == 'es' 
                                    ? '3. Sensores Remotos y Drones' 
                                    : '3. Remote Sensing and Drones'; ?>
                            </h5>
                            <p>
                                <?php if ($_SESSION['lang'] == 'es'): ?>
                                    La programación de drones y el procesamiento de imágenes con bibliotecas como OpenCV, 
                                    scikit-image y TensorFlow permiten análisis automatizado de cobertura vegetal, detección 
                                    de árboles individuales, estimación de altura mediante fotogrametría, y monitoreo de 
                                    salud vegetal usando índices espectrales (NDVI, EVI). Machine learning detecta patrones 
                                    de crecimiento y predice áreas de mortalidad.
                                <?php else: ?>
                                    Drone programming and image processing with libraries like OpenCV, scikit-image, and 
                                    TensorFlow enable automated analysis of vegetation cover, individual tree detection, 
                                    height estimation through photogrammetry, and vegetation health monitoring using 
                                    spectral indices (NDVI, EVI). Machine learning detects growth patterns and predicts 
                                    mortality areas.
                                <?php endif; ?>
                            </p>
                            
                            <h5 class="text-success mt-4">
                                <?php echo $_SESSION['lang'] == 'es' 
                                    ? '4. Modelado y Simulación' 
                                    : '4. Modeling and Simulation'; ?>
                            </h5>
                            <p>
                                <?php if ($_SESSION['lang'] == 'es'): ?>
                                    Lenguajes como R y Python con bibliotecas científicas (NumPy, SciPy, pandas) implementan 
                                    modelos de crecimiento forestal, simulaciones de sucesión ecológica y análisis de 
                                    escenarios climáticos. Se pueden modelar diferentes estrategias de plantación, predecir 
                                    resultados a 20-50 años, y optimizar la asignación de recursos. Esto reduce costos 
                                    de ensayo-error en campo.
                                <?php else: ?>
                                    Languages like R and Python with scientific libraries (NumPy, SciPy, pandas) implement 
                                    forest growth models, ecological succession simulations, and climate scenario analysis. 
                                    Different planting strategies can be modeled, outcomes predicted for 20-50 years, and 
                                    resource allocation optimized. This reduces trial-and-error costs in the field.
                                <?php endif; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- ESTUDIO DE ECOSISTEMAS -->
    <div class="row mb-5">
        <div class="col-12">
            <div class="card discipline-card">
                <div class="card-header">
                    <i class="bi bi-flower1"></i> <?php echo t('ecosystems_title'); ?>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <img src="https://placehold.co/400x300/388E3C/FFFFFF?text=Ecología+y+Ecosistemas" 
                                 alt="Ecosistemas" class="img-fluid rounded mb-3">
                            <i class="bi bi-tree big-icon"></i>
                        </div>
                        <div class="col-md-8">
                            <h4 class="text-primary mb-3">
                                <?php echo $_SESSION['lang'] == 'es' 
                                    ? 'Fundamentos Ecológicos' 
                                    : 'Ecological Foundations'; ?>
                            </h4>
                            
                            <h5 class="text-success mt-4">
                                <?php echo $_SESSION['lang'] == 'es' 
                                    ? '1. Sucesión Ecológica' 
                                    : '1. Ecological Succession'; ?>
                            </h5>
                            <p>
                                <?php if ($_SESSION['lang'] == 'es'): ?>
                                    La sucesión ecológica es el proceso fundamental que sustenta la reforestación. Involucra 
                                    cambios predecibles en la composición de especies desde pioneras colonizadoras (crecimiento 
                                    rápido, alta producción de semillas) hasta especies secundarias y finalmente climácicas 
                                    (crecimiento lento, tolerantes a sombra, longevas). Chazdon (2008) reportó que la 
                                    regeneración natural puede restaurar 40-60% de la diversidad original en 20-40 años 
                                    bajo condiciones apropiadas.
                                <?php else: ?>
                                    Ecological succession is the fundamental process underlying reforestation. It involves 
                                    predictable changes in species composition from colonizing pioneers (fast growth, high 
                                    seed production) to secondary and finally climax species (slow growth, shade-tolerant, 
                                    long-lived). Chazdon (2008) reported that natural regeneration can restore 40-60% of 
                                    original diversity in 20-40 years under appropriate conditions.
                                <?php endif; ?>
                            </p>
                            
                            <h5 class="text-success mt-4">
                                <?php echo $_SESSION['lang'] == 'es' 
                                    ? '2. Biodiversidad y Redes Ecológicas' 
                                    : '2. Biodiversity and Ecological Networks'; ?>
                            </h5>
                            <p>
                                <?php if ($_SESSION['lang'] == 'es'): ?>
                                    Gibson et al. (2011) demostraron que bosques nativos mantienen 2-5 veces más especies 
                                    que plantaciones de exóticas. La biodiversidad no es solo un objetivo, sino un medio: 
                                    ecosistemas diversos son más resilientes a plagas, enfermedades y cambios climáticos. 
                                    Las redes ecológicas incluyen interacciones planta-polinizador, planta-dispersor, 
                                    planta-herbívoro, y relaciones simbióticas (micorrizas, fijadores de nitrógeno) 
                                    esenciales para la funcionalidad ecosistémica.
                                <?php else: ?>
                                    Gibson et al. (2011) demonstrated that native forests maintain 2-5 times more species 
                                    than exotic plantations. Biodiversity is not just a goal, but a means: diverse ecosystems 
                                    are more resilient to pests, diseases, and climate change. Ecological networks include 
                                    plant-pollinator, plant-disperser, plant-herbivore interactions, and symbiotic 
                                    relationships (mycorrhizae, nitrogen fixers) essential for ecosystem functionality.
                                <?php endif; ?>
                            </p>
                            
                            <h5 class="text-success mt-4">
                                <?php echo $_SESSION['lang'] == 'es' 
                                    ? '3. Servicios Ecosistémicos' 
                                    : '3. Ecosystem Services'; ?>
                            </h5>
                            <p>
                                <?php if ($_SESSION['lang'] == 'es'): ?>
                                    Los bosques proveen servicios de regulación (clima, ciclo hidrológico, calidad del aire), 
                                    provisión (madera, alimentos, medicinas), soporte (formación de suelo, ciclado de 
                                    nutrientes) y culturales (recreación, valores espirituales). Pan et al. (2011) documentaron 
                                    que bosques globales constituyen un sumidero neto de 2.6 ± 0.7 Pg C/año. La ecología 
                                    cuantifica estos servicios para justificar inversión en reforestación.
                                <?php else: ?>
                                    Forests provide regulating services (climate, hydrological cycle, air quality), 
                                    provisioning (timber, food, medicine), supporting (soil formation, nutrient cycling), 
                                    and cultural (recreation, spiritual values). Pan et al. (2011) documented that global 
                                    forests constitute a net sink of 2.6 ± 0.7 Pg C/year. Ecology quantifies these services 
                                    to justify investment in reforestation.
                                <?php endif; ?>
                            </p>
                            
                            <h5 class="text-success mt-4">
                                <?php echo $_SESSION['lang'] == 'es' 
                                    ? '4. Adaptación al Cambio Climático' 
                                    : '4. Climate Change Adaptation'; ?>
                            </h5>
                            <p>
                                <?php if ($_SESSION['lang'] == 'es'): ?>
                                    La ecología del cambio climático informa la selección de especies para reforestación. 
                                    Se deben elegir especies adaptadas no solo a condiciones actuales sino a escenarios 
                                    climáticos futuros (aumentos de 2-4°C, cambios en precipitación, eventos extremos). 
                                    La migración asistida y el uso de poblaciones de origen más cálido/seco pueden aumentar 
                                    la resiliencia de las plantaciones ante el cambio climático.
                                <?php else: ?>
                                    Climate change ecology informs species selection for reforestation. Species must be 
                                    chosen that are adapted not only to current conditions but to future climate scenarios 
                                    (2-4°C increases, precipitation changes, extreme events). Assisted migration and use 
                                    of populations from warmer/drier origins can increase plantation resilience to 
                                    climate change.
                                <?php endif; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- LENGUA Y COMUNICACIÓN -->
    <div class="row mb-5">
        <div class="col-12">
            <div class="card discipline-card">
                <div class="card-header">
                    <i class="bi bi-chat-dots-fill"></i> <?php echo t('language_title'); ?>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <img src="https://placehold.co/400x300/F57C00/FFFFFF?text=Comunicación+Ambiental" 
                                 alt="Lengua y Comunicación" class="img-fluid rounded mb-3">
                            <i class="bi bi-megaphone-fill big-icon"></i>
                        </div>
                        <div class="col-md-8">
                            <h4 class="text-primary mb-3">
                                <?php echo $_SESSION['lang'] == 'es' 
                                    ? 'Comunicación Efectiva en Proyectos Ambientales' 
                                    : 'Effective Communication in Environmental Projects'; ?>
                            </h4>
                            
                            <h5 class="text-success mt-4">
                                <?php echo $_SESSION['lang'] == 'es' 
                                    ? '1. Documentación Científica' 
                                    : '1. Scientific Documentation'; ?>
                            </h5>
                            <p>
                                <?php if ($_SESSION['lang'] == 'es'): ?>
                                    Los proyectos de reforestación requieren documentación rigurosa: propuestas de proyecto, 
                                    informes técnicos, artículos científicos y memorias. La escritura científica sigue 
                                    convenciones específicas (formato APA, estructura IMRyD - Introducción, Metodología, 
                                    Resultados y Discusión). La claridad, precisión y objetividad son fundamentales para 
                                    comunicar hallazgos a la comunidad científica y gestores ambientales.
                                <?php else: ?>
                                    Reforestation projects require rigorous documentation: project proposals, technical 
                                    reports, scientific articles, and proceedings. Scientific writing follows specific 
                                    conventions (APA format, IMRaD structure - Introduction, Methodology, Results, and 
                                    Discussion). Clarity, precision, and objectivity are fundamental for communicating 
                                    findings to the scientific community and environmental managers.
                                <?php endif; ?>
                            </p>
                            
                            <h5 class="text-success mt-4">
                                <?php echo $_SESSION['lang'] == 'es' 
                                    ? '2. Comunicación Comunitaria' 
                                    : '2. Community Communication'; ?>
                            </h5>
                            <p>
                                <?php if ($_SESSION['lang'] == 'es'): ?>
                                    La comunicación intercultural es crucial cuando se trabaja con comunidades locales. 
                                    Requiere adaptar el lenguaje técnico a contextos locales, utilizar metáforas culturalmente 
                                    relevantes y respetar formas tradicionales de comunicación. Las técnicas de comunicación 
                                    participativa (talleres, asambleas comunitarias, teatro popular) facilitan el diálogo 
                                    bidireccional y la co-creación de conocimiento.
                                <?php else: ?>
                                    Intercultural communication is crucial when working with local communities. It requires 
                                    adapting technical language to local contexts, using culturally relevant metaphors, and 
                                    respecting traditional forms of communication. Participatory communication techniques 
                                    (workshops, community assemblies, popular theater) facilitate two-way dialogue and 
                                    knowledge co-creation.
                                <?php endif; ?>
                            </p>
                            
                            <h5 class="text-success mt-4">
                                <?php echo $_SESSION['lang'] == 'es' 
                                    ? '3. Educación Ambiental' 
                                    : '3. Environmental Education'; ?>
                            </h5>
                            <p>
                                <?php if ($_SESSION['lang'] == 'es'): ?>
                                    Los programas de educación ambiental aumentan la conciencia sobre importancia de bosques 
                                    y necesidad de reforestación. Materiales educativos (folletos, videos, aplicaciones móviles) 
                                    deben ser pedagógicamente sólidos, científicamente precisos y comunicativamente atractivos. 
                                    La narración de historias (storytelling) y el uso de casos de éxito inspiradores motivan 
                                    la participación pública en proyectos de reforestación.
                                <?php else: ?>
                                    Environmental education programs increase awareness about forest importance and 
                                    reforestation needs. Educational materials (brochures, videos, mobile apps) must be 
                                    pedagogically sound, scientifically accurate, and communicatively attractive. 
                                    Storytelling and use of inspiring success stories motivate public participation in 
                                    reforestation projects.
                                <?php endif; ?>
                            </p>
                            
                            <h5 class="text-success mt-4">
                                <?php echo $_SESSION['lang'] == 'es' 
                                    ? '4. Comunicación para Políticas Públicas' 
                                    : '4. Communication for Public Policy'; ?>
                            </h5>
                            <p>
                                <?php if ($_SESSION['lang'] == 'es'): ?>
                                    La incidencia en políticas públicas requiere comunicación estratégica dirigida a tomadores 
                                    de decisiones. Policy briefs, comunicados de prensa, presentaciones ejecutivas y testimonios 
                                    en foros públicos deben sintetizar evidencia científica en mensajes claros y accionables. 
                                    La argumentación persuasiva, respaldada por datos, es esencial para influir en legislación 
                                    y asignación de presupuestos para reforestación.
                                <?php else: ?>
                                    Policy advocacy requires strategic communication directed at decision-makers. Policy 
                                    briefs, press releases, executive presentations, and testimonies at public forums must 
                                    synthesize scientific evidence into clear, actionable messages. Persuasive argumentation, 
                                    backed by data, is essential for influencing legislation and budget allocation for 
                                    reforestation.
                                <?php endif; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Conclusión -->
    <div class="row">
        <div class="col-12">
            <div class="card bg-success text-white">
                <div class="card-body p-4">
                    <h3 class="mb-3">
                        <i class="bi bi-lightbulb-fill"></i>
                        <?php echo $_SESSION['lang'] == 'es' 
                            ? 'Integración Multidisciplinaria' 
                            : 'Multidisciplinary Integration'; ?>
                    </h3>
                    <p class="lead">
                        <?php if ($_SESSION['lang'] == 'es'): ?>
                            El éxito de proyectos de reforestación depende de la integración efectiva de todas estas 
                            disciplinas. Las matemáticas cuantifican, las humanidades contextualizan, la programación 
                            automatiza, la ecología fundamenta, y la comunicación articula. Solo mediante colaboración 
                            interdisciplinaria podemos abordar la complejidad de restaurar ecosistemas forestales y 
                            lograr objetivos ambientales, sociales y económicos simultáneamente.
                        <?php else: ?>
                            The success of reforestation projects depends on the effective integration of all these 
                            disciplines. Mathematics quantifies, humanities contextualize, programming automates, 
                            ecology substantiates, and communication articulates. Only through interdisciplinary 
                            collaboration can we address the complexity of restoring forest ecosystems and achieve 
                            environmental, social, and economic objectives simultaneously.
                        <?php endif; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    
</div>

<?php includeFooter(); ?>
