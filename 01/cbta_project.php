<?php
/**
 * Proyecto de Reforestación CBTA 35
 * Descripción paso a paso del proyecto de reforestación del terreno escolar
 */

require_once 'config.php';
require_once 'functions.php';
require_once 'translations.php';

includeHeader(t('cbta_title'), 'cbta');
?>

<div class="hero-section">
    <div class="container text-center">
        <h1>
            <i class="bi bi-pin-map-fill"></i> <?php echo t('cbta_title'); ?>
        </h1>
        <p class="lead"><?php echo t('cbta_intro'); ?></p>
    </div>
</div>

<div class="container mb-5">
    
    <!-- Introducción al proyecto -->
    <div class="row mb-5">
        <div class="col-lg-10 mx-auto">
            <div class="card border-0 shadow">
                <div class="card-body p-5">
                    <h2 class="text-success mb-4">
                        <i class="bi bi-info-circle-fill"></i>
                        <?php echo $_SESSION['lang'] == 'es' 
                            ? 'Contexto del Proyecto' 
                            : 'Project Context'; ?>
                    </h2>
                    <p class="lead">
                        <?php if ($_SESSION['lang'] == 'es'): ?>
                            El Centro de Bachillerato Tecnológico Agropecuario N° 35 cuenta con un área de 
                            aproximadamente 2 hectáreas que ha sufrido degradación debido a prácticas agrícolas 
                            intensivas y falta de cobertura vegetal. Este proyecto tiene como objetivo restaurar 
                            esta área mediante un plan integral de reforestación que combine objetivos educativos, 
                            ambientales y sociales.
                        <?php else: ?>
                            The Agricultural Technical High School No. 35 has an area of approximately 2 hectares 
                            that has suffered degradation due to intensive agricultural practices and lack of 
                            vegetation cover. This project aims to restore this area through a comprehensive 
                            reforestation plan that combines educational, environmental, and social objectives.
                        <?php endif; ?>
                    </p>
                    
                    <div class="row mt-4">
                        <div class="col-md-4 text-center">
                            <div class="card bg-light">
                                <div class="card-body">
                                    <h3 class="text-success">2 ha</h3>
                                    <p class="mb-0">
                                        <?php echo $_SESSION['lang'] == 'es' ? 'Área total' : 'Total area'; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center">
                            <div class="card bg-light">
                                <div class="card-body">
                                    <h3 class="text-success">~2,200</h3>
                                    <p class="mb-0">
                                        <?php echo $_SESSION['lang'] == 'es' ? 'Árboles proyectados' : 'Projected trees'; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center">
                            <div class="card bg-light">
                                <div class="card-body">
                                    <h3 class="text-success">5</h3>
                                    <p class="mb-0">
                                        <?php echo $_SESSION['lang'] == 'es' ? 'Especies nativas' : 'Native species'; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Imagen del sitio -->
    <div class="row mb-5">
        <div class="col-12">
            <img src="https://placehold.co/1200x500/8BC34A/FFFFFF?text=Área+a+Reforestar+CBTA+35" 
                 alt="Área CBTA 35" 
                 class="img-fluid rounded shadow">
            <!-- TODO: Reemplazar con imagen real del terreno del CBTA 35 -->
        </div>
    </div>
    
    <!-- Timeline del proyecto -->
    <div class="row mb-5">
        <div class="col-12">
            <h2 class="text-success mb-4 text-center">
                <i class="bi bi-list-ol"></i>
                <?php echo $_SESSION['lang'] == 'es' 
                    ? 'Plan de Implementación Paso a Paso' 
                    : 'Step-by-Step Implementation Plan'; ?>
            </h2>
            
            <div class="timeline">
                
                <!-- Paso 1 -->
                <div class="timeline-item fade-in">
                    <div class="timeline-marker">1</div>
                    <div class="timeline-content">
                        <h4 class="text-success">
                            <?php echo $_SESSION['lang'] == 'es' 
                                ? 'Evaluación Inicial del Sitio' 
                                : 'Initial Site Assessment'; ?>
                        </h4>
                        <p><strong><?php echo $_SESSION['lang'] == 'es' ? 'Duración' : 'Duration'; ?>:</strong> 2-3 semanas</p>
                        
                        <h5 class="mt-3">
                            <?php echo $_SESSION['lang'] == 'es' ? 'Actividades:' : 'Activities:'; ?>
                        </h5>
                        <ul>
                            <li>
                                <?php if ($_SESSION['lang'] == 'es'): ?>
                                    <strong>Análisis de suelo:</strong> Toma de muestras en diferentes puntos del terreno 
                                    para determinar pH, textura, contenido de materia orgánica, y nutrientes disponibles.
                                <?php else: ?>
                                    <strong>Soil analysis:</strong> Sampling at different points of the land to determine 
                                    pH, texture, organic matter content, and available nutrients.
                                <?php endif; ?>
                            </li>
                            <li>
                                <?php if ($_SESSION['lang'] == 'es'): ?>
                                    <strong>Topografía:</strong> Levantamiento topográfico usando GPS para mapear pendientes, 
                                    drenaje natural y áreas de acumulación de agua.
                                <?php else: ?>
                                    <strong>Topography:</strong> Topographic survey using GPS to map slopes, natural 
                                    drainage, and water accumulation areas.
                                <?php endif; ?>
                            </li>
                            <li>
                                <?php if ($_SESSION['lang'] == 'es'): ?>
                                    <strong>Inventario de vegetación existente:</strong> Identificación de especies presentes, 
                                    estado de salud, y potencial para regeneración natural.
                                <?php else: ?>
                                    <strong>Existing vegetation inventory:</strong> Identification of present species, 
                                    health status, and potential for natural regeneration.
                                <?php endif; ?>
                            </li>
                            <li>
                                <?php if ($_SESSION['lang'] == 'es'): ?>
                                    <strong>Evaluación de factores limitantes:</strong> Compactación del suelo, erosión, 
                                    presencia de especies invasoras, riesgos de incendio.
                                <?php else: ?>
                                    <strong>Assessment of limiting factors:</strong> Soil compaction, erosion, presence 
                                    of invasive species, fire risks.
                                <?php endif; ?>
                            </li>
                        </ul>
                        
                        <div class="alert alert-info mt-3">
                            <strong><i class="bi bi-lightbulb"></i> 
                                <?php echo $_SESSION['lang'] == 'es' ? 'Integración disciplinaria:' : 'Disciplinary integration:'; ?>
                            </strong>
                            <?php if ($_SESSION['lang'] == 'es'): ?>
                                Los estudiantes aplicarán conocimientos de ecología (análisis de ecosistemas), matemáticas 
                                (estadística para muestreo), y programación (SIG para mapeo).
                            <?php else: ?>
                                Students will apply knowledge of ecology (ecosystem analysis), mathematics (sampling 
                                statistics), and programming (GIS for mapping).
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                
                <!-- Paso 2 -->
                <div class="timeline-item fade-in">
                    <div class="timeline-marker">2</div>
                    <div class="timeline-content">
                        <h4 class="text-success">
                            <?php echo $_SESSION['lang'] == 'es' 
                                ? 'Selección de Especies' 
                                : 'Species Selection'; ?>
                        </h4>
                        <p><strong><?php echo $_SESSION['lang'] == 'es' ? 'Duración' : 'Duration'; ?>:</strong> 1-2 semanas</p>
                        
                        <h5 class="mt-3">
                            <?php echo $_SESSION['lang'] == 'es' ? 'Especies propuestas:' : 'Proposed species:'; ?>
                        </h5>
                        
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="table-success">
                                    <tr>
                                        <th><?php echo $_SESSION['lang'] == 'es' ? 'Especie' : 'Species'; ?></th>
                                        <th><?php echo $_SESSION['lang'] == 'es' ? 'Función' : 'Function'; ?></th>
                                        <th><?php echo $_SESSION['lang'] == 'es' ? '% del total' : '% of total'; ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>Pino (Pinus spp.)</strong></td>
                                        <td>
                                            <?php if ($_SESSION['lang'] == 'es'): ?>
                                                Especie pionera de rápido crecimiento. Mejora condiciones de suelo y 
                                                proporciona sombra inicial.
                                            <?php else: ?>
                                                Fast-growing pioneer species. Improves soil conditions and provides 
                                                initial shade.
                                            <?php endif; ?>
                                        </td>
                                        <td>30%</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Encino (Quercus spp.)</strong></td>
                                        <td>
                                            <?php if ($_SESSION['lang'] == 'es'): ?>
                                                Especie tardía de alta longevidad. Proporciona alimento para fauna silvestre 
                                                (bellotas).
                                            <?php else: ?>
                                                Late-successional species with high longevity. Provides food for wildlife 
                                                (acorns).
                                            <?php endif; ?>
                                        </td>
                                        <td>25%</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Cedro (Cedrela odorata)</strong></td>
                                        <td>
                                            <?php if ($_SESSION['lang'] == 'es'): ?>
                                                Especie de valor comercial moderado. Excelente captura de carbono.
                                            <?php else: ?>
                                                Species with moderate commercial value. Excellent carbon capture.
                                            <?php endif; ?>
                                        </td>
                                        <td>20%</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Mezquite (Prosopis spp.)</strong></td>
                                        <td>
                                            <?php if ($_SESSION['lang'] == 'es'): ?>
                                                Leguminosa fijadora de nitrógeno. Tolerante a sequía y suelos pobres.
                                            <?php else: ?>
                                                Nitrogen-fixing legume. Drought-tolerant and adapted to poor soils.
                                            <?php endif; ?>
                                        </td>
                                        <td>15%</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Ahuehuete (Taxodium mucronatum)</strong></td>
                                        <td>
                                            <?php if ($_SESSION['lang'] == 'es'): ?>
                                                Árbol nacional de México. Para zonas húmedas o cerca de cuerpos de agua.
                                            <?php else: ?>
                                                National tree of Mexico. For humid areas or near water bodies.
                                            <?php endif; ?>
                                        </td>
                                        <td>10%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                        <div class="alert alert-success mt-3">
                            <strong><i class="bi bi-check-circle"></i> 
                                <?php echo $_SESSION['lang'] == 'es' ? 'Criterios de selección:' : 'Selection criteria:'; ?>
                            </strong>
                            <?php if ($_SESSION['lang'] == 'es'): ?>
                                Todas son especies nativas de la región, adaptadas al clima local, con disponibilidad 
                                de semillas en viveros locales, y que cumplen funciones ecológicas complementarias.
                            <?php else: ?>
                                All are native species of the region, adapted to the local climate, with seed availability 
                                in local nurseries, and fulfilling complementary ecological functions.
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                
                <!-- Paso 3 -->
                <div class="timeline-item fade-in">
                    <div class="timeline-marker">3</div>
                    <div class="timeline-content">
                        <h4 class="text-success">
                            <?php echo $_SESSION['lang'] == 'es' 
                                ? 'Preparación del Sitio' 
                                : 'Site Preparation'; ?>
                        </h4>
                        <p><strong><?php echo $_SESSION['lang'] == 'es' ? 'Duración' : 'Duration'; ?>:</strong> 3-4 semanas</p>
                        
                        <h5 class="mt-3">
                            <?php echo $_SESSION['lang'] == 'es' ? 'Actividades:' : 'Activities:'; ?>
                        </h5>
                        <ul>
                            <li>
                                <?php if ($_SESSION['lang'] == 'es'): ?>
                                    <strong>Limpieza del terreno:</strong> Remoción de malezas invasoras, escombros y 
                                    material vegetal muerto que pueda representar riesgo de incendio.
                                <?php else: ?>
                                    <strong>Land clearing:</strong> Removal of invasive weeds, debris, and dead plant 
                                    material that may pose fire risk.
                                <?php endif; ?>
                            </li>
                            <li>
                                <?php if ($_SESSION['lang'] == 'es'): ?>
                                    <strong>Control de erosión:</strong> Construcción de terrazas de nivel en áreas con 
                                    pendiente >15%, instalación de barreras vivas con plantas herbáceas.
                                <?php else: ?>
                                    <strong>Erosion control:</strong> Construction of level terraces in areas with slope 
                                    >15%, installation of living barriers with herbaceous plants.
                                <?php endif; ?>
                            </li>
                            <li>
                                <?php if ($_SESSION['lang'] == 'es'): ?>
                                    <strong>Mejoramiento de suelos:</strong> Aplicación de compost (5 kg/m²) en áreas 
                                    con suelo muy degradado, corrección de pH si es necesario.
                                <?php else: ?>
                                    <strong>Soil improvement:</strong> Application of compost (5 kg/m²) in areas with 
                                    very degraded soil, pH correction if necessary.
                                <?php endif; ?>
                            </li>
                            <li>
                                <?php if ($_SESSION['lang'] == 'es'): ?>
                                    <strong>Trazado y marcado:</strong> Delimitación con estacas de las áreas de plantación, 
                                    marcado de puntos de plantación según diseño espacial (3×3 m promedio).
                                <?php else: ?>
                                    <strong>Layout and marking:</strong> Delimitation with stakes of planting areas, 
                                    marking of planting points according to spatial design (3×3 m average).
                                <?php endif; ?>
                            </li>
                            <li>
                                <?php if ($_SESSION['lang'] == 'es'): ?>
                                    <strong>Excavación de cepas:</strong> Apertura de hoyos de 40×40×40 cm, con al menos 
                                    2 semanas de anticipación para aireación del suelo.
                                <?php else: ?>
                                    <strong>Hole excavation:</strong> Opening of 40×40×40 cm holes, at least 2 weeks 
                                    in advance for soil aeration.
                                <?php endif; ?>
                            </li>
                        </ul>
                        
                        <img src="https://placehold.co/800x400/4CAF50/FFFFFF?text=Preparación+del+Terreno" 
                             alt="Preparación" class="img-fluid rounded mt-3">
                        <!-- TODO: Reemplazar con fotos reales de preparación del terreno -->
                    </div>
                </div>
                
                <!-- Paso 4 -->
                <div class="timeline-item fade-in">
                    <div class="timeline-marker">4</div>
                    <div class="timeline-content">
                        <h4 class="text-success">
                            <?php echo $_SESSION['lang'] == 'es' 
                                ? 'Producción de Plántulas' 
                                : 'Seedling Production'; ?>
                        </h4>
                        <p><strong><?php echo $_SESSION['lang'] == 'es' ? 'Duración' : 'Duration'; ?>:</strong> 4-6 meses (en paralelo)</p>
                        
                        <p>
                            <?php if ($_SESSION['lang'] == 'es'): ?>
                                Se establecerá un vivero temporal en las instalaciones del CBTA para producir las plántulas. 
                                Esto permitirá a los estudiantes aprender técnicas de propagación y reducir costos.
                            <?php else: ?>
                                A temporary nursery will be established at CBTA facilities to produce seedlings. 
                                This will allow students to learn propagation techniques and reduce costs.
                            <?php endif; ?>
                        </p>
                        
                        <h5 class="mt-3">
                            <?php echo $_SESSION['lang'] == 'es' ? 'Proceso:' : 'Process:'; ?>
                        </h5>
                        <ol>
                            <li>
                                <?php if ($_SESSION['lang'] == 'es'): ?>
                                    <strong>Recolección de semillas:</strong> De árboles madre sanos en la región, 
                                    durante la temporada de fructificación apropiada para cada especie.
                                <?php else: ?>
                                    <strong>Seed collection:</strong> From healthy mother trees in the region, 
                                    during the appropriate fruiting season for each species.
                                <?php endif; ?>
                            </li>
                            <li>
                                <?php if ($_SESSION['lang'] == 'es'): ?>
                                    <strong>Tratamientos pregerminativos:</strong> Escarificación, estratificación o 
                                    remojo según especie para romper dormancia.
                                <?php else: ?>
                                    <strong>Pre-germinative treatments:</strong> Scarification, stratification, or 
                                    soaking according to species to break dormancy.
                                <?php endif; ?>
                            </li>
                            <li>
                                <?php if ($_SESSION['lang'] == 'es'): ?>
                                    <strong>Siembra en almácigos:</strong> En sustrato estéril con buen drenaje, bajo 
                                    sombra parcial (50%).
                                <?php else: ?>
                                    <strong>Sowing in seedbeds:</strong> In sterile substrate with good drainage, under 
                                    partial shade (50%).
                                <?php endif; ?>
                            </li>
                            <li>
                                <?php if ($_SESSION['lang'] == 'es'): ?>
                                    <strong>Trasplante a contenedores:</strong> Cuando alcancen 5-10 cm de altura, 
                                    a bolsas de polietileno con sustrato enriquecido.
                                <?php else: ?>
                                    <strong>Transplanting to containers:</strong> When they reach 5-10 cm in height, 
                                    to polyethylene bags with enriched substrate.
                                <?php endif; ?>
                            </li>
                            <li>
                                <?php if ($_SESSION['lang'] == 'es'): ?>
                                    <strong>Manejo en vivero:</strong> Riego regular, fertilización mensual, control 
                                    de plagas y enfermedades, y aclimatación gradual antes de plantación.
                                <?php else: ?>
                                    <strong>Nursery management:</strong> Regular watering, monthly fertilization, pest 
                                    and disease control, and gradual acclimatization before planting.
                                <?php endif; ?>
                            </li>
                        </ol>
                        
                        <div class="alert alert-warning mt-3">
                            <strong><i class="bi bi-exclamation-triangle"></i> 
                                <?php echo $_SESSION['lang'] == 'es' ? 'Nota importante:' : 'Important note:'; ?>
                            </strong>
                            <?php if ($_SESSION['lang'] == 'es'): ?>
                                Se producirán 20% más plántulas de las necesarias para compensar pérdidas durante 
                                trasplante y permitir selección de los mejores individuos.
                            <?php else: ?>
                                20% more seedlings than necessary will be produced to compensate for losses during 
                                transplanting and allow selection of the best individuals.
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                
                <!-- Paso 5 -->
                <div class="timeline-item fade-in">
                    <div class="timeline-marker">5</div>
                    <div class="timeline-content">
                        <h4 class="text-success">
                            <?php echo $_SESSION['lang'] == 'es' 
                                ? 'Plantación' 
                                : 'Planting'; ?>
                        </h4>
                        <p><strong><?php echo $_SESSION['lang'] == 'es' ? 'Duración' : 'Duration'; ?>:</strong> 2-3 días</p>
                        <p><strong><?php echo $_SESSION['lang'] == 'es' ? 'Época ideal' : 'Ideal season'; ?>:</strong> 
                            <?php echo $_SESSION['lang'] == 'es' 
                                ? 'Inicio de temporada de lluvias (junio-julio)' 
                                : 'Beginning of rainy season (June-July)'; ?>
                        </p>
                        
                        <h5 class="mt-3">
                            <?php echo $_SESSION['lang'] == 'es' ? 'Procedimiento:' : 'Procedure:'; ?>
                        </h5>
                        <ul>
                            <li>
                                <?php if ($_SESSION['lang'] == 'es'): ?>
                                    <strong>Día anterior:</strong> Riego profundo de plántulas, verificación de cepas abiertas.
                                <?php else: ?>
                                    <strong>Previous day:</strong> Deep watering of seedlings, verification of opened holes.
                                <?php endif; ?>
                            </li>
                            <li>
                                <?php if ($_SESSION['lang'] == 'es'): ?>
                                    <strong>Transporte cuidadoso:</strong> De plántulas al sitio, evitando deshidratación 
                                    y daño mecánico.
                                <?php else: ?>
                                    <strong>Careful transportation:</strong> Of seedlings to site, avoiding dehydration 
                                    and mechanical damage.
                                <?php endif; ?>
                            </li>
                            <li>
                                <?php if ($_SESSION['lang'] == 'es'): ?>
                                    <strong>Plantación:</strong> Remoción cuidadosa del contenedor, colocación en cepa 
                                    asegurando que cuello de raíz quede al nivel del suelo, rellenado con tierra suelta 
                                    mezclada con compost, compactación ligera.
                                <?php else: ?>
                                    <strong>Planting:</strong> Careful removal of container, placement in hole ensuring 
                                    root collar is at soil level, backfilling with loose soil mixed with compost, 
                                    light compaction.
                                <?php endif; ?>
                            </li>
                            <li>
                                <?php if ($_SESSION['lang'] == 'es'): ?>
                                    <strong>Riego inicial:</strong> 5-10 litros por planta inmediatamente después de plantar.
                                <?php else: ?>
                                    <strong>Initial watering:</strong> 5-10 liters per plant immediately after planting.
                                <?php endif; ?>
                            </li>
                            <li>
                                <?php if ($_SESSION['lang'] == 'es'): ?>
                                    <strong>Protección:</strong> Instalación de tutores para especies de porte alto, 
                                    protectores contra herbivoría si es necesario.
                                <?php else: ?>
                                    <strong>Protection:</strong> Installation of stakes for tall species, herbivory 
                                    protectors if necessary.
                                <?php endif; ?>
                            </li>
                            <li>
                                <?php if ($_SESSION['lang'] == 'es'): ?>
                                    <strong>Registro:</strong> Etiquetado con código único, registro en base de datos 
                                    con coordenadas GPS, especie, fecha de plantación.
                                <?php else: ?>
                                    <strong>Recording:</strong> Labeling with unique code, database entry with GPS 
                                    coordinates, species, planting date.
                                <?php endif; ?>
                            </li>
                        </ul>
                        
                        <img src="https://placehold.co/800x400/66BB6A/FFFFFF?text=Jornada+de+Plantación" 
                             alt="Plantación" class="img-fluid rounded mt-3">
                        <!-- TODO: Documentar con fotografías la jornada de plantación -->
                    </div>
                </div>
                
                <!-- Paso 6 -->
                <div class="timeline-item fade-in">
                    <div class="timeline-marker">6</div>
                    <div class="timeline-content">
                        <h4 class="text-success">
                            <?php echo $_SESSION['lang'] == 'es' 
                                ? 'Mantenimiento y Cuidados' 
                                : 'Maintenance and Care'; ?>
                        </h4>
                        <p><strong><?php echo $_SESSION['lang'] == 'es' ? 'Duración' : 'Duration'; ?>:</strong> 
                            <?php echo $_SESSION['lang'] == 'es' ? 'Primeros 3 años (críticos)' : 'First 3 years (critical)'; ?>
                        </p>
                        
                        <h5 class="mt-3">
                            <?php echo $_SESSION['lang'] == 'es' ? 'Actividades programadas:' : 'Scheduled activities:'; ?>
                        </h5>
                        
                        <table class="table table-hover">
                            <thead class="table-success">
                                <tr>
                                    <th><?php echo $_SESSION['lang'] == 'es' ? 'Actividad' : 'Activity'; ?></th>
                                    <th><?php echo $_SESSION['lang'] == 'es' ? 'Frecuencia' : 'Frequency'; ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <?php echo $_SESSION['lang'] == 'es' 
                                            ? 'Riego (temporada seca)' 
                                            : 'Watering (dry season)'; ?>
                                    </td>
                                    <td>
                                        <?php echo $_SESSION['lang'] == 'es' 
                                            ? 'Semanal, 10-15 L/árbol' 
                                            : 'Weekly, 10-15 L/tree'; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php echo $_SESSION['lang'] == 'es' 
                                            ? 'Control de malezas' 
                                            : 'Weed control'; ?>
                                    </td>
                                    <td>
                                        <?php echo $_SESSION['lang'] == 'es' 
                                            ? 'Mensual, círculo de 1 m de radio' 
                                            : 'Monthly, 1 m radius circle'; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php echo $_SESSION['lang'] == 'es' 
                                            ? 'Fertilización' 
                                            : 'Fertilization'; ?>
                                    </td>
                                    <td>
                                        <?php echo $_SESSION['lang'] == 'es' 
                                            ? 'Trimestral, fertilizante orgánico' 
                                            : 'Quarterly, organic fertilizer'; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php echo $_SESSION['lang'] == 'es' 
                                            ? 'Reposición de fallos' 
                                            : 'Replacement of failures'; ?>
                                    </td>
                                    <td>
                                        <?php echo $_SESSION['lang'] == 'es' 
                                            ? 'Después de 6 meses y 1 año' 
                                            : 'After 6 months and 1 year'; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php echo $_SESSION['lang'] == 'es' 
                                            ? 'Poda formativa' 
                                            : 'Formative pruning'; ?>
                                    </td>
                                    <td>
                                        <?php echo $_SESSION['lang'] == 'es' 
                                            ? 'Anual, después del segundo año' 
                                            : 'Annual, after second year'; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php echo $_SESSION['lang'] == 'es' 
                                            ? 'Control fitosanitario' 
                                            : 'Phytosanitary control'; ?>
                                    </td>
                                    <td>
                                        <?php echo $_SESSION['lang'] == 'es' 
                                            ? 'Bimensual, manejo integrado' 
                                            : 'Bimonthly, integrated management'; ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <div class="alert alert-info mt-3">
                            <strong><i class="bi bi-people"></i> 
                                <?php echo $_SESSION['lang'] == 'es' ? 'Participación estudiantil:' : 'Student participation:'; ?>
                            </strong>
                            <?php if ($_SESSION['lang'] == 'es'): ?>
                                Cada grupo escolar adoptará un sector del proyecto, realizando actividades de mantenimiento 
                                como parte de sus prácticas de campo. Se rotarán responsabilidades cada semestre.
                            <?php else: ?>
                                Each school group will adopt a project sector, performing maintenance activities as part 
                                of their field practices. Responsibilities will rotate each semester.
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                
                <!-- Paso 7 -->
                <div class="timeline-item fade-in">
                    <div class="timeline-marker">7</div>
                    <div class="timeline-content">
                        <h4 class="text-success">
                            <?php echo $_SESSION['lang'] == 'es' 
                                ? 'Monitoreo y Evaluación' 
                                : 'Monitoring and Evaluation'; ?>
                        </h4>
                        <p><strong><?php echo $_SESSION['lang'] == 'es' ? 'Duración' : 'Duration'; ?>:</strong> 
                            <?php echo $_SESSION['lang'] == 'es' ? 'Permanente (mínimo 10 años)' : 'Permanent (minimum 10 years)'; ?>
                        </p>
                        
                        <h5 class="mt-3">
                            <?php echo $_SESSION['lang'] == 'es' ? 'Variables a medir:' : 'Variables to measure:'; ?>
                        </h5>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card bg-light mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title text-success">
                                            <?php echo $_SESSION['lang'] == 'es' 
                                                ? 'Indicadores de Crecimiento' 
                                                : 'Growth Indicators'; ?>
                                        </h5>
                                        <ul class="mb-0">
                                            <li><?php echo $_SESSION['lang'] == 'es' ? 'Altura total (cm)' : 'Total height (cm)'; ?></li>
                                            <li><?php echo $_SESSION['lang'] == 'es' ? 'Diámetro basal (mm)' : 'Basal diameter (mm)'; ?></li>
                                            <li><?php echo $_SESSION['lang'] == 'es' ? 'Diámetro de copa (cm)' : 'Crown diameter (cm)'; ?></li>
                                            <li><?php echo $_SESSION['lang'] == 'es' ? 'Incrementos anuales' : 'Annual increments'; ?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card bg-light mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title text-success">
                                            <?php echo $_SESSION['lang'] == 'es' 
                                                ? 'Indicadores Ecológicos' 
                                                : 'Ecological Indicators'; ?>
                                        </h5>
                                        <ul class="mb-0">
                                            <li><?php echo $_SESSION['lang'] == 'es' ? 'Supervivencia (%)' : 'Survival (%)'; ?></li>
                                            <li><?php echo $_SESSION['lang'] == 'es' ? 'Cobertura de dosel' : 'Canopy cover'; ?></li>
                                            <li><?php echo $_SESSION['lang'] == 'es' ? 'Regeneración natural' : 'Natural regeneration'; ?></li>
                                            <li><?php echo $_SESSION['lang'] == 'es' ? 'Presencia de fauna' : 'Fauna presence'; ?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <h5 class="mt-3">
                            <?php echo $_SESSION['lang'] == 'es' ? 'Herramientas tecnológicas:' : 'Technological tools:'; ?>
                        </h5>
                        <ul>
                            <li>
                                <?php if ($_SESSION['lang'] == 'es'): ?>
                                    <strong>Base de datos web:</strong> Esta misma aplicación se usará para registrar 
                                    mediciones en tiempo real desde dispositivos móviles.
                                <?php else: ?>
                                    <strong>Web database:</strong> This same application will be used to record 
                                    measurements in real-time from mobile devices.
                                <?php endif; ?>
                            </li>
                            <li>
                                <?php if ($_SESSION['lang'] == 'es'): ?>
                                    <strong>Drones:</strong> Vuelos trimestrales para generar ortomosaicos y modelos 
                                    digitales de elevación, calcular cobertura vegetal.
                                <?php else: ?>
                                    <strong>Drones:</strong> Quarterly flights to generate orthomosaics and digital 
                                    elevation models, calculate vegetation cover.
                                <?php endif; ?>
                            </li>
                            <li>
                                <?php if ($_SESSION['lang'] == 'es'): ?>
                                    <strong>Análisis estadístico:</strong> Software R para generar modelos de crecimiento 
                                    y proyecciones futuras.
                                <?php else: ?>
                                    <strong>Statistical analysis:</strong> R software to generate growth models and 
                                    future projections.
                                <?php endif; ?>
                            </li>
                        </ul>
                        
                        <!-- TODO: Integrar formularios de captura de datos directamente en esta aplicación -->
                        <!-- TODO: Crear dashboard con gráficos de avance del proyecto -->
                    </div>
                </div>
                
                <!-- Paso 8 -->
                <div class="timeline-item fade-in">
                    <div class="timeline-marker">8</div>
                    <div class="timeline-content">
                        <h4 class="text-success">
                            <?php echo $_SESSION['lang'] == 'es' 
                                ? 'Divulgación y Educación' 
                                : 'Outreach and Education'; ?>
                        </h4>
                        <p><strong><?php echo $_SESSION['lang'] == 'es' ? 'Duración' : 'Duration'; ?>:</strong> 
                            <?php echo $_SESSION['lang'] == 'es' ? 'Continuo' : 'Continuous'; ?>
                        </p>
                        
                        <h5 class="mt-3">
                            <?php echo $_SESSION['lang'] == 'es' ? 'Actividades:' : 'Activities:'; ?>
                        </h5>
                        <ul>
                            <li>
                                <?php if ($_SESSION['lang'] == 'es'): ?>
                                    <strong>Jornadas de puertas abiertas:</strong> Invitación a comunidad local a conocer 
                                    el proyecto (dos veces al año).
                                <?php else: ?>
                                    <strong>Open house days:</strong> Invitation to local community to learn about the 
                                    project (twice a year).
                                <?php endif; ?>
                            </li>
                            <li>
                                <?php if ($_SESSION['lang'] == 'es'): ?>
                                    <strong>Talleres educativos:</strong> Para escuelas primarias y secundarias de la 
                                    región sobre importancia de bosques.
                                <?php else: ?>
                                    <strong>Educational workshops:</strong> For primary and secondary schools in the 
                                    region about forest importance.
                                <?php endif; ?>
                            </li>
                            <li>
                                <?php if ($_SESSION['lang'] == 'es'): ?>
                                    <strong>Publicaciones científicas:</strong> Artículos en revistas estudiantiles y 
                                    profesionales documentando resultados.
                                <?php else: ?>
                                    <strong>Scientific publications:</strong> Articles in student and professional 
                                    journals documenting results.
                                <?php endif; ?>
                            </li>
                            <li>
                                <?php if ($_SESSION['lang'] == 'es'): ?>
                                    <strong>Redes sociales:</strong> Actualización mensual con fotografías, videos y 
                                    datos del progreso del proyecto.
                                <?php else: ?>
                                    <strong>Social media:</strong> Monthly updates with photographs, videos, and project 
                                    progress data.
                                <?php endif; ?>
                            </li>
                            <li>
                                <?php if ($_SESSION['lang'] == 'es'): ?>
                                    <strong>Sendero interpretativo:</strong> Creación de ruta educativa con señalización 
                                    explicando diferentes especies y procesos ecológicos.
                                <?php else: ?>
                                    <strong>Interpretive trail:</strong> Creation of educational route with signage 
                                    explaining different species and ecological processes.
                                <?php endif; ?>
                            </li>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
    <!-- Resultados esperados -->
    <div class="row mb-5">
        <div class="col-12">
            <div class="card border-success">
                <div class="card-header bg-success text-white">
                    <h3 class="mb-0">
                        <i class="bi bi-trophy-fill"></i>
                        <?php echo $_SESSION['lang'] == 'es' 
                            ? 'Resultados Esperados (10 años)' 
                            : 'Expected Results (10 years)'; ?>
                    </h3>
                </div>
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col-md-3 mb-3">
                            <div class="card bg-light h-100">
                                <div class="card-body">
                                    <i class="bi bi-tree-fill text-success" style="font-size: 3rem;"></i>
                                    <h4 class="text-success mt-2">85%</h4>
                                    <p><?php echo $_SESSION['lang'] == 'es' ? 'Supervivencia' : 'Survival'; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="card bg-light h-100">
                                <div class="card-body">
                                    <i class="bi bi-cloud-fill text-success" style="font-size: 3rem;"></i>
                                    <h4 class="text-success mt-2">120 t</h4>
                                    <p><?php echo $_SESSION['lang'] == 'es' ? 'CO₂ capturado' : 'CO₂ captured'; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="card bg-light h-100">
                                <div class="card-body">
                                    <i class="bi bi-flower1 text-success" style="font-size: 3rem;"></i>
                                    <h4 class="text-success mt-2">60%</h4>
                                    <p><?php echo $_SESSION['lang'] == 'es' ? 'Cobertura vegetal' : 'Vegetation cover'; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="card bg-light h-100">
                                <div class="card-body">
                                    <i class="bi bi-people-fill text-success" style="font-size: 3rem;"></i>
                                    <h4 class="text-success mt-2">500+</h4>
                                    <p><?php echo $_SESSION['lang'] == 'es' ? 'Estudiantes formados' : 'Students trained'; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Call to action -->
    <div class="row">
        <div class="col-12">
            <div class="card bg-success text-white text-center">
                <div class="card-body p-5">
                    <h2 class="mb-3">
                        <?php echo $_SESSION['lang'] == 'es' 
                            ? '¿Quieres participar o replicar este proyecto?' 
                            : 'Want to participate or replicate this project?'; ?>
                    </h2>
                    <p class="lead mb-4">
                        <?php if ($_SESSION['lang'] == 'es'): ?>
                            Utiliza nuestra calculadora para planificar tu propio proyecto de reforestación o 
                            contáctanos para obtener más información sobre cómo implementar un proyecto similar 
                            en tu institución.
                        <?php else: ?>
                            Use our calculator to plan your own reforestation project or contact us for more 
                            information on how to implement a similar project in your institution.
                        <?php endif; ?>
                    </p>
                    <a href="calculator.php" class="btn btn-light btn-lg">
                        <i class="bi bi-calculator"></i>
                        <?php echo $_SESSION['lang'] == 'es' 
                            ? 'Ir a la Calculadora' 
                            : 'Go to Calculator'; ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
</div>

<?php includeFooter(); ?>
