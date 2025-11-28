<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/i18n.php';
require_once __DIR__ . '/includes/database.php';
require_once __DIR__ . '/includes/auth.php';

// Manejar cambio de idioma vía GET
if (isset($_GET['lang'])) {
    setLanguage($_GET['lang']);
    header('Location: index.php');
    exit;
}

// Variables útiles
$currentUser = $auth->getCurrentUser();

?>
<!doctype html>
<html lang="<?php echo getCurrentLanguage(); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo t('site_title'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/styles.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><?php echo t('site_title'); ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link active" href="#"><?php echo t('nav_home'); ?></a></li>
        <li class="nav-item"><a class="nav-link" href="#about"><?php echo t('nav_about'); ?></a></li>
        <li class="nav-item"><a class="nav-link" href="#disciplines"><?php echo t('nav_disciplines'); ?></a></li>
        <li class="nav-item"><a class="nav-link" href="#calculator"><?php echo t('nav_calculator'); ?></a></li>
        <li class="nav-item"><a class="nav-link" href="#cbta"><?php echo t('nav_cbta_case'); ?></a></li>
      </ul>

      <ul class="navbar-nav">
        <?php if ($currentUser): ?>
            <li class="nav-item"><a class="nav-link" href="#"><?php echo htmlspecialchars($currentUser['username']); ?></a></li>
            <li class="nav-item"><a class="nav-link" href="?lang=<?php echo (getCurrentLanguage()=='es')?'en':'es'; ?>"><?php echo (getCurrentLanguage()=='es')? 'English' : 'Español'; ?></a></li>
            <li class="nav-item"><a class="nav-link" href="logout.php"><?php echo t('nav_logout'); ?></a></li>
        <?php else: ?>
            <li class="nav-item"><a class="nav-link" href="login.php"><?php echo t('nav_login'); ?></a></li>
            <li class="nav-item"><a class="nav-link" href="register.php"><?php echo t('nav_register'); ?></a></li>
            <li class="nav-item"><a class="nav-link" href="?lang=<?php echo (getCurrentLanguage()=='es')?'en':'es'; ?>"><?php echo (getCurrentLanguage()=='es')? 'English' : 'Español'; ?></a></li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>

<header class="container mt-4">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h1><?php echo t('welcome_title'); ?></h1>
            <p class="lead"><?php echo t('project_description'); ?></p>
            <p><?php echo t('intro_text'); ?></p>
        </div>
        <div class="col-md-4 text-center">
            <img src="https://placehold.co/300x200?text=Reforestaci%C3%B3n" class="img-fluid rounded" alt="Placeholder">
            <!-- TODO: Reemplazar por imagen real del sitio -->
        </div>
    </div>
</header>

<main class="container mt-5">
    <section id="about" class="mb-5">
        <h2><?php echo t('about_title'); ?></h2>
        <p><?php echo t('project_description'); ?></p>
        <p><!-- TODO: Insertar resumen en formato APA desde Resumen_Reforestacion.md -->
            <?php
                // Mostrar una sección breve del resumen investigador en formato APA (TODO: mejorar parseo)
                echo "Resumen disponible en el archivo de investigación (consultar 'Resumen_Reforestacion.md').";
            ?>
        </p>
    </section>

    <section id="disciplines" class="mb-5">
        <h2><?php echo t('disciplines_title'); ?></h2>
        
        <!-- MATEMÁTICAS -->
        <div class="card mb-4">
            <div class="card-header bg-primary text-white">
                <h3 class="mb-0"><?php echo t('math_title'); ?></h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <img src="https://placehold.co/300x200/4a90e2/ffffff?text=Matemáticas" class="img-fluid rounded" alt="Matemáticas">
                    </div>
                    <div class="col-md-8">
                        <p><?php echo t('math_description'); ?></p>
                        <?php if (getCurrentLanguage() === 'es'): ?>
                            <h5>Aplicaciones Matemáticas en Reforestación:</h5>
                            <ul>
                                <li><strong>Geometría y Topografía:</strong> Cálculo de áreas irregulares usando integrales, medición de pendientes, determinación de curvas de nivel para terrazas de plantación.</li>
                                <li><strong>Álgebra y Modelos de Crecimiento:</strong> Ecuaciones de crecimiento exponencial y logístico para predecir desarrollo de árboles. Ejemplo: altura(t) = A × (1 - e^(-k×t)), donde A es altura asintótica y k la tasa de crecimiento.</li>
                                <li><strong>Estadística:</strong> Diseño experimental con bloques aleatorios, análisis de varianza (ANOVA) para comparar tratamientos, regresión lineal y no lineal para modelar supervivencia.</li>
                                <li><strong>Probabilidad:</strong> Cálculo de tasas de supervivencia esperadas, intervalos de confianza, distribuciones binomiales para éxito/fracaso de plantaciones.</li>
                                <li><strong>Optimización:</strong> Programación lineal para maximizar cobertura con recursos limitados, espaciamiento óptimo considerando crecimiento radicular y competencia.</li>
                            </ul>
                            <p><strong>Ejemplo práctico:</strong> Si plantamos en cuadrícula con espaciamiento de 2×2m, en 1 hectárea (10,000 m²) caben: 10,000/(2×2) = 2,500 árboles.</p>
                        <?php else: ?>
                            <h5>Mathematical Applications in Reforestation:</h5>
                            <ul>
                                <li><strong>Geometry and Topography:</strong> Calculation of irregular areas using integrals, slope measurement, determination of contour lines for planting terraces.</li>
                                <li><strong>Algebra and Growth Models:</strong> Exponential and logistic growth equations to predict tree development. Example: height(t) = A × (1 - e^(-k×t)), where A is asymptotic height and k the growth rate.</li>
                                <li><strong>Statistics:</strong> Experimental design with randomized blocks, analysis of variance (ANOVA) to compare treatments, linear and nonlinear regression to model survival.</li>
                                <li><strong>Probability:</strong> Calculation of expected survival rates, confidence intervals, binomial distributions for plantation success/failure.</li>
                                <li><strong>Optimization:</strong> Linear programming to maximize coverage with limited resources, optimal spacing considering root growth and competition.</li>
                            </ul>
                            <p><strong>Practical example:</strong> If we plant in a 2×2m grid, in 1 hectare (10,000 m²) we can fit: 10,000/(2×2) = 2,500 trees.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- HUMANIDADES -->
        <div class="card mb-4">
            <div class="card-header bg-success text-white">
                <h3 class="mb-0"><?php echo t('humanities_title'); ?></h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <p><?php echo t('humanities_description'); ?></p>
                        <?php if (getCurrentLanguage() === 'es'): ?>
                            <h5>Dimensión Social e Histórica:</h5>
                            <ul>
                                <li><strong>Historia Ambiental:</strong> Análisis de patrones históricos de deforestación en México, desde la época prehispánica hasta la actualidad. La Revolución Verde y su impacto en ecosistemas.</li>
                                <li><strong>Aspectos Culturales:</strong> Conocimiento tradicional indígena sobre manejo forestal, especies medicinales, ceremonias relacionadas con árboles sagrados. Respeto a cosmovisiones locales.</li>
                                <li><strong>Justicia Ambiental:</strong> Distribución equitativa de beneficios ecosistémicos, reconocimiento de derechos territoriales de comunidades originarias, resolución de conflictos por uso de tierra.</li>
                                <li><strong>Ética Ambiental:</strong> Responsabilidad intergeneracional, valor intrínseco de la naturaleza más allá del antropocentrismo, dilemas éticos en introducción de especies.</li>
                                <li><strong>Participación Comunitaria:</strong> Metodologías participativas (talleres, asambleas), construcción de consensos, empoderamiento local para toma de decisiones sobre recursos naturales.</li>
                            </ul>
                            <p><strong>Referencia APA:</strong> Agrawal, A., Chhatre, A., & Hardin, R. (2008). Changing governance of the world's forests. <em>Science, 320</em>(5882), 1460-1462.</p>
                        <?php else: ?>
                            <h5>Social and Historical Dimension:</h5>
                            <ul>
                                <li><strong>Environmental History:</strong> Analysis of historical deforestation patterns in Mexico, from pre-Hispanic times to present. The Green Revolution and its impact on ecosystems.</li>
                                <li><strong>Cultural Aspects:</strong> Traditional indigenous knowledge about forest management, medicinal species, ceremonies related to sacred trees. Respect for local worldviews.</li>
                                <li><strong>Environmental Justice:</strong> Equitable distribution of ecosystem benefits, recognition of territorial rights of indigenous communities, resolution of land use conflicts.</li>
                                <li><strong>Environmental Ethics:</strong> Intergenerational responsibility, intrinsic value of nature beyond anthropocentrism, ethical dilemmas in species introduction.</li>
                                <li><strong>Community Participation:</strong> Participatory methodologies (workshops, assemblies), consensus building, local empowerment for natural resource decision-making.</li>
                            </ul>
                            <p><strong>APA Reference:</strong> Agrawal, A., Chhatre, A., & Hardin, R. (2008). Changing governance of the world's forests. <em>Science, 320</em>(5882), 1460-1462.</p>
                        <?php endif; ?>
                    </div>
                    <div class="col-md-4">
                        <img src="https://placehold.co/300x200/50c878/ffffff?text=Humanidades" class="img-fluid rounded" alt="Humanidades">
                    </div>
                </div>
            </div>
        </div>

        <!-- PROGRAMACIÓN -->
        <div class="card mb-4">
            <div class="card-header bg-info text-white">
                <h3 class="mb-0"><?php echo t('programming_title'); ?></h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <img src="https://placehold.co/300x200/5bc0de/ffffff?text=Programación" class="img-fluid rounded" alt="Programación">
                    </div>
                    <div class="col-md-8">
                        <p><?php echo t('programming_description'); ?></p>
                        <?php if (getCurrentLanguage() === 'es'): ?>
                            <h5>Herramientas Tecnológicas:</h5>
                            <ul>
                                <li><strong>Bases de Datos:</strong> MySQL, PostgreSQL o JSON para registrar datos de plantación, supervivencia, crecimiento. Ejemplo: tabla "arboles" con campos (id, especie, fecha_plantacion, altura, diametro, ubicacion_gps).</li>
                                <li><strong>Sistemas de Información Geográfica (SIG):</strong> QGIS para mapeo de áreas de plantación, análisis de pendientes, generación de mapas de distribución de especies.</li>
                                <li><strong>Lenguajes de Programación:</strong> PHP para desarrollo web (esta página), Python para análisis estadístico y machine learning, R para modelado ecológico.</li>
                                <li><strong>Automatización:</strong> Scripts para procesar imágenes de drones, calcular índices de vegetación (NDVI), generar reportes automáticos de monitoreo.</li>
                                <li><strong>IoT y Sensores:</strong> Arduino/Raspberry Pi para medir humedad del suelo, temperatura, precipitación. Envío de datos en tiempo real a servidores en la nube.</li>
                            </ul>
                            <p><strong>Ejemplo de código PHP (hash de contraseñas):</strong></p>
                            <pre><code>$password = "miclave123";
$hash = password_hash($password, PASSWORD_DEFAULT);
// Resultado: $2y$10$randomsalt...hash...</code></pre>
                        <?php else: ?>
                            <h5>Technology Tools:</h5>
                            <ul>
                                <li><strong>Databases:</strong> MySQL, PostgreSQL or JSON to record planting, survival, growth data. Example: "trees" table with fields (id, species, planting_date, height, diameter, gps_location).</li>
                                <li><strong>Geographic Information Systems (GIS):</strong> QGIS for mapping planting areas, slope analysis, generation of species distribution maps.</li>
                                <li><strong>Programming Languages:</strong> PHP for web development (this page), Python for statistical analysis and machine learning, R for ecological modeling.</li>
                                <li><strong>Automation:</strong> Scripts to process drone images, calculate vegetation indices (NDVI), generate automatic monitoring reports.</li>
                                <li><strong>IoT and Sensors:</strong> Arduino/Raspberry Pi to measure soil moisture, temperature, precipitation. Real-time data transmission to cloud servers.</li>
                            </ul>
                            <p><strong>PHP code example (password hashing):</strong></p>
                            <pre><code>$password = "mypassword123";
$hash = password_hash($password, PASSWORD_DEFAULT);
// Result: $2y$10$randomsalt...hash...</code></pre>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- ECOSISTEMAS -->
        <div class="card mb-4">
            <div class="card-header bg-warning text-dark">
                <h3 class="mb-0"><?php echo t('ecosystems_title'); ?></h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <p><?php echo t('ecosystems_description'); ?></p>
                        <?php if (getCurrentLanguage() === 'es'): ?>
                            <h5>Fundamentos Ecológicos:</h5>
                            <ul>
                                <li><strong>Sucesión Ecológica:</strong> Proceso de cambio temporal en comunidades vegetales. Especies pioneras (rápido crecimiento, tolerantes a luz) → especies secundarias → especies climax (tolerantes a sombra, crecimiento lento).</li>
                                <li><strong>Interacciones Bióticas:</strong> Mutualismo (micorrizas hongo-raíz), competencia (por luz, agua, nutrientes), facilitación (árboles nodriza que protegen plántulas), herbivoría.</li>
                                <li><strong>Ciclos Biogeoquímicos:</strong> Ciclo del carbono (fotosíntesis, respiración, descomposición), ciclo del nitrógeno (fijación por leguminosas, nitrificación, desnitrificación).</li>
                                <li><strong>Servicios Ecosistémicos:</strong> Provisión (madera, frutas, medicinas), regulación (clima, agua, erosión), culturales (recreación, espiritualidad), soporte (formación de suelo, ciclado de nutrientes).</li>
                                <li><strong>Biodiversidad:</strong> Diversidad genética, de especies y ecosistémica. Importancia de corredores biológicos para conectar fragmentos de bosque.</li>
                            </ul>
                            <p><strong>Especies nativas recomendadas para región central de México:</strong> Pino (Pinus spp.), Encino (Quercus spp.), Oyamel (Abies religiosa), Madroño (Arbutus xalapensis), Tepozán (Buddleja cordata).</p>
                        <?php else: ?>
                            <h5>Ecological Foundations:</h5>
                            <ul>
                                <li><strong>Ecological Succession:</strong> Process of temporal change in plant communities. Pioneer species (fast growth, light tolerant) → secondary species → climax species (shade tolerant, slow growth).</li>
                                <li><strong>Biotic Interactions:</strong> Mutualism (mycorrhizae fungus-root), competition (for light, water, nutrients), facilitation (nurse trees protecting seedlings), herbivory.</li>
                                <li><strong>Biogeochemical Cycles:</strong> Carbon cycle (photosynthesis, respiration, decomposition), nitrogen cycle (fixation by legumes, nitrification, denitrification).</li>
                                <li><strong>Ecosystem Services:</strong> Provisioning (timber, fruits, medicines), regulation (climate, water, erosion), cultural (recreation, spirituality), supporting (soil formation, nutrient cycling).</li>
                                <li><strong>Biodiversity:</strong> Genetic, species and ecosystem diversity. Importance of biological corridors to connect forest fragments.</li>
                            </ul>
                            <p><strong>Native species recommended for central Mexico:</strong> Pine (Pinus spp.), Oak (Quercus spp.), Oyamel fir (Abies religiosa), Madroño (Arbutus xalapensis), Tepozán (Buddleja cordata).</p>
                        <?php endif; ?>
                    </div>
                    <div class="col-md-4">
                        <img src="https://placehold.co/300x200/f0ad4e/ffffff?text=Ecosistemas" class="img-fluid rounded" alt="Ecosistemas">
                    </div>
                </div>
            </div>
        </div>

        <!-- COMUNICACIÓN -->
        <div class="card mb-4">
            <div class="card-header bg-danger text-white">
                <h3 class="mb-0"><?php echo t('communication_title'); ?></h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <img src="https://placehold.co/300x200/d9534f/ffffff?text=Comunicación" class="img-fluid rounded" alt="Comunicación">
                    </div>
                    <div class="col-md-8">
                        <p><?php echo t('communication_description'); ?></p>
                        <?php if (getCurrentLanguage() === 'es'): ?>
                            <h5>Estrategias Comunicativas:</h5>
                            <ul>
                                <li><strong>Comunicación Científica:</strong> Redacción de artículos en formato APA, presentaciones en congresos, elaboración de pósters académicos, reportes técnicos para instituciones.</li>
                                <li><strong>Divulgación:</strong> Adaptación de lenguaje técnico a audiencias generales, infografías, videos educativos, redes sociales para difusión de resultados.</li>
                                <li><strong>Educación Ambiental:</strong> Diseño de talleres escolares, materiales didácticos (trípticos, manuales), actividades prácticas (jornadas de plantación).</li>
                                <li><strong>Negociación y Gestión:</strong> Elaboración de propuestas de financiamiento, comunicación con autoridades, resolución de conflictos mediante mediación, persuasión para adopción de prácticas sustentables.</li>
                                <li><strong>Documentación:</strong> Fotografía y video para registro de procesos, bitácoras de campo, elaboración de manuales de operación, sistematización de experiencias.</li>
                            </ul>
                            <p><strong>Ejemplo de comunicación multicultural:</strong> Esta página está disponible en español e inglés para alcanzar audiencias diversas y facilitar colaboración internacional.</p>
                        <?php else: ?>
                            <h5>Communication Strategies:</h5>
                            <ul>
                                <li><strong>Scientific Communication:</strong> Writing articles in APA format, conference presentations, academic poster preparation, technical reports for institutions.</li>
                                <li><strong>Outreach:</strong> Adaptation of technical language to general audiences, infographics, educational videos, social media for disseminating results.</li>
                                <li><strong>Environmental Education:</strong> Design of school workshops, educational materials (brochures, manuals), practical activities (planting campaigns).</li>
                                <li><strong>Negotiation and Management:</strong> Preparation of funding proposals, communication with authorities, conflict resolution through mediation, persuasion for adopting sustainable practices.</li>
                                <li><strong>Documentation:</strong> Photography and video for process recording, field logs, operation manual preparation, experience systematization.</li>
                            </ul>
                            <p><strong>Example of multicultural communication:</strong> This page is available in Spanish and English to reach diverse audiences and facilitate international collaboration.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="calculator" class="mb-5">
        <h2><?php echo t('calculator_title'); ?></h2>
        <div class="row">
            <div class="col-md-6">
                <form id="calcForm" method="post" action="calculator.php">
                    <div class="mb-3">
                        <label class="form-label"><?php echo t('calc_area_label'); ?></label>
                        <input type="number" step="0.01" name="area" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><?php echo t('calc_spacing_label'); ?></label>
                        <input type="number" step="0.1" name="spacing" class="form-control" value="2" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><?php echo t('calc_tree_type_label'); ?></label>
                        <select name="tree_type" class="form-select">
                            <option value="native">Nativa</option>
                            <option value="fast_growing">De rápido crecimiento</option>
                            <option value="fruit">Frutal</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><?php echo t('calc_soil_type_label'); ?></label>
                        <select name="soil_type" class="form-select">
                            <option value="sandy">Arenoso</option>
                            <option value="loam">Franco</option>
                            <option value="clay">Arcilloso</option>
                        </select>
                    </div>
                    <button class="btn btn-primary" type="submit"><?php echo t('calc_calculate_btn'); ?></button>
                </form>
            </div>
            <div class="col-md-6">
                <div id="calcResult">
                    <!-- Resultados serán mostrados aquí -->
                </div>
            </div>
        </div>
    </section>

    <section id="cbta" class="mb-5">
        <h2><?php echo t('cbta_title'); ?></h2>
        <p><?php echo t('cbta_intro'); ?></p>
        <ol>
            <li><strong><?php echo t('cbta_step1'); ?>:</strong> Evaluar topografía, suelos y cobertura existente.</li>
            <li><strong><?php echo t('cbta_step2'); ?>:</strong> Seleccionar especies nativas y planificar distribución por microhábitat.</li>
            <li><strong><?php echo t('cbta_step3'); ?>:</strong> Preparar sitio, controlar erosión y mejorar condiciones del suelo.</li>
            <li><strong><?php echo t('cbta_step4'); ?>:</strong> Plantación en época adecuada, con riegos iniciales y protección contra herbívoros.</li>
            <li><strong><?php echo t('cbta_step5'); ?>:</strong> Establecer un plan de monitoreo con parcelas permanentes y registros anuales.</li>
        </ol>
        <p><!-- TODO: Añadir mapa y fotos del terreno del CBTA 35 -->
            <img src="https://placehold.co/600x200?text=Mapa+CBTA+35" class="img-fluid" alt="Mapa CBTA">
        </p>
    </section>
</main>

<footer class="bg-light py-4 mt-5">
    <div class="container text-center">
        <p><?php echo t('footer_text'); ?> &middot; <?php echo t('footer_year'); ?></p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
