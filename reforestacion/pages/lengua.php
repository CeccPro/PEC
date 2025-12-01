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
$pageTitle = 'Lengua y Comunicación - ' . $translations['app_title'];

include '../includes/header.php';
?>

<!-- Page Header -->
<section class="py-5 bg-secondary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold mb-3">
                    <i class="bi bi-pen-fill me-3"></i>
                    Lengua y Comunicación: Ensayos y Normas APA
                </h1>
                <p class="lead mb-0">
                    Desarrollo de competencias de investigación y redacción académica aplicadas al proyecto de reforestación
                </p>
            </div>
            <div class="col-lg-4 text-center">
                <i class="bi bi-book display-1"></i>
            </div>
        </div>
    </div>
</section>

<!-- Role and Methodology -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <h2 class="h3 mb-4 text-secondary">
                            <i class="bi bi-journal-text me-2"></i>
                            Rol de Lengua y Comunicación en el Proyecto
                        </h2>
                        <p class="lead">
                            La comunicación escrita efectiva es fundamental para documentar, difundir y 
                            justificar científicamente nuestro proyecto de reforestación. Las normas APA 
                            nos proporcionan el marco académico para presentar nuestra investigación con rigor y profesionalismo.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <!-- El Ensayo Académico -->
            <div class="col-lg-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h3 class="h5 text-secondary">
                            <i class="bi bi-file-text me-2"></i>
                            El Ensayo Académico
                        </h3>
                        <p class="mt-3">Un ensayo es un escrito en prosa que expone, analiza o interpreta un tema desde la perspectiva del autor.</p>
                        <h6 class="mt-4">Características:</h6>
                        <ul class="small">
                            <li>Estructura definida (introducción, desarrollo, conclusión)</li>
                            <li>Argumentación fundamentada</li>
                            <li>Uso de fuentes confiables</li>
                            <li>Redacción clara y coherente</li>
                            <li>Objetividad y análisis crítico</li>
                            <li>Citación adecuada de fuentes</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Normas APA 7ª Edición -->
            <div class="col-lg-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h3 class="h5 text-secondary">
                            <i class="bi bi-clipboard-check me-2"></i>
                            Normas APA (7ª Edición)
                        </h3>
                        <p class="mt-3">Conjunto de estándares creados por la American Psychological Association para la redacción académica.</p>
                        <h6 class="mt-4">Elementos principales:</h6>
                        <ul class="small">
                            <li>Formato del documento</li>
                            <li>Citación en el texto</li>
                            <li>Lista de referencias</li>
                            <li>Tablas y figuras</li>
                            <li>Encabezados y niveles</li>
                            <li>Números y estadísticas</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Aplicación al Proyecto -->
            <div class="col-lg-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h3 class="h5 text-secondary">
                            <i class="bi bi-tree-fill me-2"></i>
                            Aplicación en Reforestación
                        </h3>
                        <p class="mt-3">Documentación académica del proyecto de reforestación del CBTA 35.</p>
                        <h6 class="mt-4">Documentos a elaborar:</h6>
                        <ul class="small">
                            <li>Ensayo sobre la importancia de la reforestación</li>
                            <li>Informe técnico del proyecto</li>
                            <li>Revisión de literatura científica</li>
                            <li>Propuesta de investigación</li>
                            <li>Análisis de impacto ambiental</li>
                            <li>Presentación de resultados</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Estructura del Ensayo -->
<section class="py-5">
    <div class="container">
        <h2 class="h3 mb-4 text-secondary text-center">
            <i class="bi bi-diagram-3 me-2"></i>
            Estructura del Ensayo Académico
        </h2>

        <div class="row g-4">
            <div class="col-lg-4">
                <div class="card shadow-sm h-100 border-success">
                    <div class="card-header bg-success text-white">
                        <h4 class="mb-0">
                            <i class="bi bi-1-circle-fill me-2"></i>
                            Introducción
                        </h4>
                    </div>
                    <div class="card-body">
                        <h6>Elementos clave:</h6>
                        <ul>
                            <li><strong>Gancho inicial:</strong> Captar la atención del lector</li>
                            <li><strong>Contexto:</strong> Presentar el tema general</li>
                            <li><strong>Tesis:</strong> Plantear el argumento principal</li>
                            <li><strong>Objetivos:</strong> Indicar qué se abordará</li>
                        </ul>
                        <div class="alert alert-success mt-3">
                            <strong>Ejemplo para reforestación:</strong>
                            <p class="small mb-0">"La deforestación en México ha alcanzado niveles alarmantes, perdiendo 500,000 hectáreas anuales. Este ensayo analiza cómo proyectos educativos de reforestación pueden revertir esta tendencia."</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card shadow-sm h-100 border-primary">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">
                            <i class="bi bi-2-circle-fill me-2"></i>
                            Desarrollo
                        </h4>
                    </div>
                    <div class="card-body">
                        <h6>Elementos clave:</h6>
                        <ul>
                            <li><strong>Argumentos:</strong> 3-5 ideas principales</li>
                            <li><strong>Evidencia:</strong> Datos, estadísticas, citas</li>
                            <li><strong>Análisis:</strong> Interpretación propia</li>
                            <li><strong>Cohesión:</strong> Conectores entre párrafos</li>
                        </ul>
                        <div class="alert alert-primary mt-3">
                            <strong>Párrafo tipo:</strong>
                            <p class="small mb-0">Idea principal + evidencia + análisis + conexión. Cada párrafo desarrolla una idea específica con respaldo bibliográfico.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card shadow-sm h-100 border-warning">
                    <div class="card-header bg-warning text-dark">
                        <h4 class="mb-0">
                            <i class="bi bi-3-circle-fill me-2"></i>
                            Conclusión
                        </h4>
                    </div>
                    <div class="card-body">
                        <h6>Elementos clave:</h6>
                        <ul>
                            <li><strong>Resumen:</strong> Recapitular puntos principales</li>
                            <li><strong>Reforzar tesis:</strong> Reafirmar la postura</li>
                            <li><strong>Implicaciones:</strong> Relevancia y aplicaciones</li>
                            <li><strong>Cierre:</strong> Reflexión final contundente</li>
                        </ul>
                        <div class="alert alert-warning mt-3">
                            <strong>No incluir:</strong>
                            <p class="small mb-0">❌ Ideas nuevas<br>❌ Citas textuales<br>❌ Disculpas<br>✅ Síntesis y proyección</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Normas APA Fundamentales -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="h3 mb-4 text-secondary text-center">
            <i class="bi bi-clipboard2-check me-2"></i>
            Normas APA Fundamentales (7ª Edición)
        </h2>

        <div class="row g-4 mb-4">
            <!-- Formato General -->
            <div class="col-lg-6">
                <div class="card shadow-sm">
                    <div class="card-header bg-secondary text-white">
                        <h5 class="mb-0">
                            <i class="bi bi-file-earmark-text me-2"></i>
                            Formato General del Documento
                        </h5>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li><strong>Fuente:</strong> Times New Roman 12 pt o Arial 11 pt</li>
                            <li><strong>Interlineado:</strong> Doble espacio en todo el documento</li>
                            <li><strong>Márgenes:</strong> 2.54 cm (1 pulgada) en todos los lados</li>
                            <li><strong>Alineación:</strong> Justificado o alineado a la izquierda</li>
                            <li><strong>Sangría:</strong> 1.27 cm (0.5 pulgadas) al inicio de cada párrafo</li>
                            <li><strong>Numeración:</strong> Esquina superior derecha</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Encabezado y Portada -->
            <div class="col-lg-6">
                <div class="card shadow-sm">
                    <div class="card-header bg-secondary text-white">
                        <h5 class="mb-0">
                            <i class="bi bi-file-earmark-ruled me-2"></i>
                            Portada (Página de Título)
                        </h5>
                    </div>
                    <div class="card-body">
                        <p><strong>Elementos en orden (centrados):</strong></p>
                        <ol>
                            <li>Título del trabajo (negrita)</li>
                            <li>Nombre del autor</li>
                            <li>Afiliación institucional (CBTA 35)</li>
                            <li>Nombre del curso y código</li>
                            <li>Nombre del instructor</li>
                            <li>Fecha de entrega</li>
                        </ol>
                        <div class="alert alert-info mt-3 mb-0">
                            <small><strong>Nota:</strong> Para trabajos estudiantiles no se requiere resumen a menos que el instructor lo solicite.</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Citas en el Texto -->
        <div class="card shadow-sm mb-4">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">
                    <i class="bi bi-quote me-2"></i>
                    Citas en el Texto
                </h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h6>Cita Textual Corta (menos de 40 palabras)</h6>
                        <p class="small">Se incluye entre comillas dentro del párrafo:</p>
                        <div class="bg-light p-3 rounded">
                            <p class="small mb-0">Según García (2021), "la reforestación urbana mejora significativamente la calidad del aire" (p. 45).</p>
                        </div>
                        
                        <h6 class="mt-4">Cita Textual Larga (40 palabras o más)</h6>
                        <p class="small">Bloque independiente sin comillas, con sangría de 1.27 cm:</p>
                        <div class="bg-light p-3 rounded">
                            <p class="small mb-0" style="margin-left: 1cm;">
                                Los proyectos de reforestación comunitaria han demostrado ser efectivos no solo en la restauración ecológica, sino también en el fortalecimiento del tejido social de las comunidades involucradas. (Martínez, 2020, p. 78)
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <h6>Paráfrasis (Cita Indirecta)</h6>
                        <p class="small">Reformular ideas con palabras propias:</p>
                        <div class="bg-light p-3 rounded mb-3">
                            <p class="small mb-0">Los estudios de López (2022) indican que la biodiversidad aumenta en zonas reforestadas.</p>
                        </div>

                        <h6>Formatos de citación:</h6>
                        <ul class="small">
                            <li><strong>Un autor:</strong> (García, 2021)</li>
                            <li><strong>Dos autores:</strong> (García & López, 2021)</li>
                            <li><strong>Tres o más:</strong> (García et al., 2021)</li>
                            <li><strong>Sin autor:</strong> ("Título del artículo", 2021)</li>
                            <li><strong>Fuente corporativa:</strong> (FAO, 2021)</li>
                        </ul>

                        <div class="alert alert-warning mt-3 mb-0">
                            <small><strong>⚠️ Importante:</strong> Toda información tomada de fuentes debe citarse para evitar plagio.</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Lista de Referencias -->
        <div class="card shadow-sm">
            <div class="card-header bg-success text-white">
                <h5 class="mb-0">
                    <i class="bi bi-list-ul me-2"></i>
                    Lista de Referencias
                </h5>
            </div>
            <div class="card-body">
                <p>Nueva página al final del documento con el título "Referencias" (centrado, negrita). Orden alfabético por apellido del autor.</p>
                
                <h6 class="mt-3">Formatos según tipo de fuente:</h6>
                
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="table-success">
                            <tr>
                                <th>Tipo de Fuente</th>
                                <th>Formato APA</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Libro</strong></td>
                                <td class="small">Apellido, A. A. (Año). <em>Título del libro</em>. Editorial.</td>
                            </tr>
                            <tr>
                                <td><strong>Artículo de revista</strong></td>
                                <td class="small">Apellido, A. A. (Año). Título del artículo. <em>Nombre de la Revista</em>, <em>volumen</em>(número), páginas. https://doi.org/xxx</td>
                            </tr>
                            <tr>
                                <td><strong>Página web</strong></td>
                                <td class="small">Apellido, A. A. (Año, Mes Día). Título de la página. Nombre del sitio. URL</td>
                            </tr>
                            <tr>
                                <td><strong>Organización</strong></td>
                                <td class="small">Nombre de la Organización. (Año). <em>Título del documento</em>. URL</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h6 class="mt-4">Ejemplos aplicados al proyecto:</h6>
                <div class="bg-light p-3 rounded">
                    <p class="small mb-2">FAO. (2020). <em>El estado de los bosques del mundo 2020</em>. Organización de las Naciones Unidas para la Alimentación y la Agricultura. https://www.fao.org/</p>
                    <p class="small mb-2">García, J. M., & López, P. (2021). Estrategias de reforestación en zonas áridas. <em>Revista Mexicana de Ciencias Forestales</em>, <em>12</em>(3), 45-67. https://doi.org/10.29298/rmcf.v12i3.890</p>
                    <p class="small mb-0">Semarnat. (2022, marzo 15). <em>Programa Nacional de Reforestación</em>. Secretaría de Medio Ambiente y Recursos Naturales. https://www.gob.mx/semarnat</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Proceso de Redacción -->
<section class="py-5">
    <div class="container">
        <h2 class="h3 mb-4 text-secondary text-center">
            <i class="bi bi-pencil-square me-2"></i>
            Proceso de Redacción del Ensayo
        </h2>

        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <ol class="list-group list-group-numbered">
                            <li class="list-group-item d-flex align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Investigación y Documentación</div>
                                    Buscar fuentes confiables (artículos científicos, libros, organismos oficiales). Tomar notas y registrar referencias completas.
                                </div>
                            </li>
                            <li class="list-group-item d-flex align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Planificación</div>
                                    Crear un esquema con la estructura del ensayo. Organizar argumentos de manera lógica.
                                </div>
                            </li>
                            <li class="list-group-item d-flex align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Primer Borrador</div>
                                    Escribir sin detenerse demasiado. Enfocarse en desarrollar ideas completas.
                                </div>
                            </li>
                            <li class="list-group-item d-flex align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Revisión de Contenido</div>
                                    Verificar coherencia, argumentación sólida y cumplimiento de objetivos.
                                </div>
                            </li>
                            <li class="list-group-item d-flex align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Revisión de Formato APA</div>
                                    Verificar citas, referencias, formato general y elementos requeridos.
                                </div>
                            </li>
                            <li class="list-group-item d-flex align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Corrección de Estilo</div>
                                    Revisar ortografía, gramática, puntuación y claridad de expresión.
                                </div>
                            </li>
                            <li class="list-group-item d-flex align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Versión Final</div>
                                    Incorporar todas las correcciones y verificar que cumple todos los requisitos.
                                </div>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Temas de Ensayo para el Proyecto -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="h3 mb-4 text-secondary text-center">
            <i class="bi bi-lightbulb me-2"></i>
            Temas de Ensayo para el Proyecto de Reforestación
        </h2>

        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title text-success">
                            <i class="bi bi-tree me-2"></i>
                            Impacto Ambiental
                        </h5>
                        <ul class="small">
                            <li>Deforestación en México: causas y consecuencias</li>
                            <li>Beneficios de la reforestación urbana</li>
                            <li>Cambio climático y bosques</li>
                            <li>Servicios ecosistémicos forestales</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title text-primary">
                            <i class="bi bi-people me-2"></i>
                            Dimensión Social
                        </h5>
                        <ul class="small">
                            <li>Educación ambiental en instituciones educativas</li>
                            <li>Participación comunitaria en reforestación</li>
                            <li>Juventud y conciencia ecológica</li>
                            <li>Culturas indígenas y conservación forestal</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title text-info">
                            <i class="bi bi-graph-up me-2"></i>
                            Técnicas y Metodología
                        </h5>
                        <ul class="small">
                            <li>Métodos de reforestación efectivos</li>
                            <li>Selección de especies nativas</li>
                            <li>Monitoreo y evaluación de proyectos</li>
                            <li>Innovaciones tecnológicas en reforestación</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Recursos y Herramientas -->
<section class="py-5">
    <div class="container">
        <h2 class="h3 mb-4 text-secondary text-center">
            <i class="bi bi-tools me-2"></i>
            Recursos y Herramientas Útiles
        </h2>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="card text-center shadow-sm h-100">
                    <div class="card-body">
                        <i class="bi bi-book display-3 text-primary mb-3"></i>
                        <h5>Generadores de Referencias APA</h5>
                        <ul class="list-unstyled text-start small">
                            <li>• Cite This For Me</li>
                            <li>• Mendeley</li>
                            <li>• Zotero</li>
                            <li>• EasyBib</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-center shadow-sm h-100">
                    <div class="card-body">
                        <i class="bi bi-spell-check display-3 text-success mb-3"></i>
                        <h5>Correctores de Estilo</h5>
                        <ul class="list-unstyled text-start small">
                            <li>• Grammarly</li>
                            <li>• LanguageTool</li>
                            <li>• Microsoft Editor</li>
                            <li>• ProWritingAid</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-center shadow-sm h-100">
                    <div class="card-body">
                        <i class="bi bi-search display-3 text-info mb-3"></i>
                        <h5>Bases de Datos Académicas</h5>
                        <ul class="list-unstyled text-start small">
                            <li>• Google Scholar</li>
                            <li>• SciELO</li>
                            <li>• Redalyc</li>
                            <li>• ResearchGate</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Relation to Reforestation -->
<section class="py-5 bg-secondary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h2 class="h3 mb-4">
                    <i class="bi bi-tree-fill me-2"></i>
                    Conexión con el Proyecto de Reforestación
                </h2>
                <p class="lead mb-3">
                    Las competencias de comunicación escrita son esenciales para documentar y difundir nuestro proyecto de reforestación.
                </p>
                <ul class="list-unstyled">
                    <li class="mb-2">
                        <i class="bi bi-check-circle-fill text-success me-2"></i>
                        <strong>Documentación científica:</strong> Registrar metodologías, resultados y aprendizajes
                    </li>
                    <li class="mb-2">
                        <i class="bi bi-check-circle-fill text-success me-2"></i>
                        <strong>Investigación fundamentada:</strong> Respaldar decisiones con literatura científica
                    </li>
                    <li class="mb-2">
                        <i class="bi bi-check-circle-fill text-success me-2"></i>
                        <strong>Difusión académica:</strong> Compartir resultados con la comunidad educativa
                    </li>
                    <li class="mb-2">
                        <i class="bi bi-check-circle-fill text-success me-2"></i>
                        <strong>Propuestas formales:</strong> Solicitar apoyo institucional y gubernamental
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 text-center">
                <i class="bi bi-file-earmark-text display-1"></i>
                <p class="mt-3">Comunicación académica efectiva</p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-5 bg-light">
    <div class="container text-center">
        <h2 class="mb-3">Desarrolla tus Competencias de Comunicación</h2>
        <p class="lead mb-4">
            Explora otros aspectos del proyecto de reforestación
        </p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="../index.php" class="btn btn-secondary btn-lg">
                <i class="bi bi-house-fill me-2"></i>
                Inicio
            </a>
            <a href="cbta_project.php" class="btn btn-outline-secondary btn-lg">
                <i class="bi bi-geo-alt me-2"></i>
                Proyecto CBTA
            </a>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
