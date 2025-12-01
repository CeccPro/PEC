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
$pageTitle = 'Humanidades: Ética - ' . $translations['app_title'];

include '../includes/header.php';
?>

<!-- Page Header -->
<section class="py-5 bg-warning text-dark">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold mb-3">
                    <i class="bi bi-compass-fill me-3"></i>
                    Humanidades: Ética y Reforestación
                </h1>
                <p class="lead mb-0">
                    Análisis ético de nuestra responsabilidad ambiental y el impacto de nuestras acciones en el planeta
                </p>
            </div>
            <div class="col-lg-4 text-center">
                <i class="bi bi-balance-scale display-1"></i>
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
                        <h2 class="h3 mb-4" style="color: #cc9900;">
                            <i class="bi bi-heart-fill me-2"></i>
                            La Ética en el Proyecto de Reforestación
                        </h2>
                        <p class="lead">
                            La ética nos proporciona el marco filosófico para reflexionar sobre nuestra responsabilidad 
                            moral hacia el medio ambiente y las generaciones futuras. Este proyecto de reforestación 
                            no es solo una acción técnica, sino un compromiso ético con la vida y el planeta.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <!-- ¿Qué es la Ética? -->
            <div class="col-lg-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h3 class="h5" style="color: #cc9900;">
                            <i class="bi bi-question-circle me-2"></i>
                            ¿Qué es la Ética?
                        </h3>
                        <p class="mt-3">
                            La ética es la rama de la filosofía que estudia la moralidad de los actos humanos, 
                            distinguiendo entre el bien y el mal, lo correcto e incorrecto.
                        </p>
                        <h6 class="mt-4">Elementos clave:</h6>
                        <ul class="small">
                            <li>Reflexión sobre valores morales</li>
                            <li>Principios universales de conducta</li>
                            <li>Responsabilidad individual y colectiva</li>
                            <li>Consecuencias de nuestras acciones</li>
                            <li>Búsqueda del bien común</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Ética Ambiental -->
            <div class="col-lg-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h3 class="h5" style="color: #cc9900;">
                            <i class="bi bi-globe me-2"></i>
                            Ética Ambiental
                        </h3>
                        <p class="mt-3">
                            Rama de la ética que examina la relación moral entre los seres humanos y el medio ambiente natural.
                        </p>
                        <h6 class="mt-4">Principios fundamentales:</h6>
                        <ul class="small">
                            <li><strong>Antropocentrismo:</strong> Naturaleza al servicio del humano</li>
                            <li><strong>Biocentrismo:</strong> Todo ser vivo tiene valor intrínseco</li>
                            <li><strong>Ecocentrismo:</strong> Valor de los ecosistemas completos</li>
                            <li><strong>Sostenibilidad:</strong> Equilibrio presente-futuro</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Responsabilidad Moral -->
            <div class="col-lg-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h3 class="h5" style="color: #cc9900;">
                            <i class="bi bi-shield-check me-2"></i>
                            Responsabilidad Moral
                        </h3>
                        <p class="mt-3">
                            Obligación ética de cuidar el planeta para las generaciones presentes y futuras.
                        </p>
                        <h6 class="mt-4">Niveles de responsabilidad:</h6>
                        <ul class="small">
                            <li><strong>Individual:</strong> Acciones personales cotidianas</li>
                            <li><strong>Comunitaria:</strong> Proyectos colectivos locales</li>
                            <li><strong>Institucional:</strong> Políticas educativas</li>
                            <li><strong>Global:</strong> Impacto planetario</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Teorías Éticas Aplicadas -->
<section class="py-5">
    <div class="container">
        <h2 class="h3 mb-4 text-center" style="color: #cc9900;">
            <i class="bi bi-book-half me-2"></i>
            Teorías Éticas Aplicadas a la Reforestación
        </h2>

        <div class="row g-4">
            <!-- Ética de la Virtud -->
            <div class="col-lg-6">
                <div class="card shadow-sm h-100">
                    <div class="card-header bg-success text-white">
                        <h4 class="mb-0">
                            <i class="bi bi-star-fill me-2"></i>
                            Ética de la Virtud (Aristóteles)
                        </h4>
                    </div>
                    <div class="card-body">
                        <p><strong>Principio:</strong> Actuar según virtudes morales como la prudencia, templanza y justicia.</p>
                        
                        <h6 class="mt-3">Aplicación a la reforestación:</h6>
                        <ul>
                            <li><strong>Prudencia:</strong> Planificar cuidadosamente qué, dónde y cómo reforestar</li>
                            <li><strong>Templanza:</strong> Uso moderado de recursos naturales</li>
                            <li><strong>Justicia:</strong> Distribución equitativa de beneficios ambientales</li>
                            <li><strong>Fortaleza:</strong> Persistencia a pesar de los desafíos</li>
                        </ul>
                        
                        <div class="alert alert-success mt-3">
                            <strong>Reflexión:</strong> Un estudiante virtuoso cuida el ambiente no por obligación, 
                            sino porque es parte de su carácter moral.
                        </div>
                    </div>
                </div>
            </div>

            <!-- Utilitarismo -->
            <div class="col-lg-6">
                <div class="card shadow-sm h-100">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">
                            <i class="bi bi-graph-up me-2"></i>
                            Utilitarismo (John Stuart Mill)
                        </h4>
                    </div>
                    <div class="card-body">
                        <p><strong>Principio:</strong> "La mayor felicidad para el mayor número de personas"</p>
                        
                        <h6 class="mt-3">Aplicación a la reforestación:</h6>
                        <ul>
                            <li>Beneficio colectivo vs. costo individual</li>
                            <li>Calidad del aire para toda la comunidad</li>
                            <li>Mitigación del cambio climático global</li>
                            <li>Servicios ecosistémicos para generaciones futuras</li>
                        </ul>
                        
                        <div class="alert alert-primary mt-3">
                            <strong>Análisis:</strong> La reforestación genera más bienestar general (aire limpio, 
                            agua, biodiversidad) que su ausencia, justificando éticamente el proyecto.
                        </div>
                    </div>
                </div>
            </div>

            <!-- Deontología -->
            <div class="col-lg-6">
                <div class="card shadow-sm h-100">
                    <div class="card-header bg-info text-white">
                        <h4 class="mb-0">
                            <i class="bi bi-list-check me-2"></i>
                            Deontología (Immanuel Kant)
                        </h4>
                    </div>
                    <div class="card-body">
                        <p><strong>Principio:</strong> Actuar según el deber y el imperativo categórico universal</p>
                        
                        <h6 class="mt-3">Imperativo categórico aplicado:</h6>
                        <div class="bg-light p-3 rounded mb-3">
                            <em>"Actúa como si la máxima de tu acción pudiera convertirse en ley universal"</em>
                        </div>
                        
                        <p><strong>Pregunta ética:</strong> ¿Qué pasaría si todos talaran árboles sin reforestar?</p>
                        <p><strong>Respuesta:</strong> El planeta se volvería inhabitable → Tenemos el deber moral de reforestar</p>
                        
                        <div class="alert alert-info mt-3">
                            <strong>Conclusión deontológica:</strong> Reforestar no es opcional, es un deber moral 
                            independiente de las consecuencias personales.
                        </div>
                    </div>
                </div>
            </div>

            <!-- Ética del Cuidado -->
            <div class="col-lg-6">
                <div class="card shadow-sm h-100">
                    <div class="card-header bg-danger text-white">
                        <h4 class="mb-0">
                            <i class="bi bi-heart me-2"></i>
                            Ética del Cuidado (Carol Gilligan)
                        </h4>
                    </div>
                    <div class="card-body">
                        <p><strong>Principio:</strong> Énfasis en las relaciones, empatía y responsabilidad hacia otros</p>
                        
                        <h6 class="mt-3">Aplicación a la reforestación:</h6>
                        <ul>
                            <li>Cuidado empático de los seres vivos (plantas, animales)</li>
                            <li>Responsabilidad hacia comunidades vulnerables</li>
                            <li>Relación de interdependencia con la naturaleza</li>
                            <li>Solidaridad intergeneracional</li>
                        </ul>
                        
                        <div class="alert alert-danger mt-3">
                            <strong>Perspectiva:</strong> Cuidamos los bosques como extensión de nuestra familia global, 
                            reconociendo nuestra vulnerabilidad e interdependencia.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Dilemas Éticos -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="h3 mb-4 text-center" style="color: #cc9900;">
            <i class="bi bi-exclamation-triangle me-2"></i>
            Dilemas Éticos en Reforestación
        </h2>

        <div class="accordion" id="ethicalDilemmas">
            <div class="accordion-item">
                <h3 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#dilema1">
                        <strong>Dilema 1: Especies nativas vs. Especies de rápido crecimiento</strong>
                    </button>
                </h3>
                <div id="dilema1" class="accordion-collapse collapse show" data-bs-parent="#ethicalDilemmas">
                    <div class="accordion-body">
                        <p><strong>Situación:</strong> Las especies nativas son mejores para el ecosistema pero crecen lento. 
                        Las especies exóticas crecen rápido y capturan más CO₂ a corto plazo.</p>
                        
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <h6 class="text-success">Argumentos por especies nativas:</h6>
                                <ul class="small">
                                    <li>Preservación de biodiversidad local</li>
                                    <li>Adaptación al clima regional</li>
                                    <li>Sostenibilidad a largo plazo</li>
                                    <li>Respeto por el ecosistema original</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h6 class="text-danger">Argumentos por especies exóticas:</h6>
                                <ul class="small">
                                    <li>Resultados visibles rápidos</li>
                                    <li>Mayor captura de carbono inmediata</li>
                                    <li>Motivación para continuar el proyecto</li>
                                    <li>Beneficios económicos potenciales</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="alert alert-warning mt-3">
                            <strong>Solución ética:</strong> Combinar ambas - mayoría nativas con algunas de rápido 
                            crecimiento como "especies nodrizas" que protejan a las nativas.
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#dilema2">
                        <strong>Dilema 2: Inversión en reforestación vs. Otras necesidades educativas</strong>
                    </button>
                </h3>
                <div id="dilema2" class="accordion-collapse collapse" data-bs-parent="#ethicalDilemmas">
                    <div class="accordion-body">
                        <p><strong>Situación:</strong> Los recursos son limitados. ¿Invertir en reforestación o en mejorar 
                        laboratorios, equipos deportivos, becas?</p>
                        
                        <h6 class="mt-3">Análisis ético:</h6>
                        <ul>
                            <li><strong>Justicia distributiva:</strong> ¿Cómo repartir recursos equitativamente?</li>
                            <li><strong>Prioridades:</strong> Necesidades inmediatas vs. impacto a largo plazo</li>
                            <li><strong>Bien común:</strong> Beneficio para estudiantes vs. beneficio para el planeta</li>
                        </ul>
                        
                        <div class="alert alert-info mt-3">
                            <strong>Reflexión:</strong> La reforestación puede integrarse como proyecto educativo 
                            transversal, generando aprendizaje mientras se cuida el ambiente - ¡doble beneficio!
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#dilema3">
                        <strong>Dilema 3: Participación voluntaria vs. Obligatoria</strong>
                    </button>
                </h3>
                <div id="dilema3" class="accordion-collapse collapse" data-bs-parent="#ethicalDilemmas">
                    <div class="accordion-body">
                        <p><strong>Situación:</strong> ¿Debe ser la participación en reforestación obligatoria para 
                        todos los estudiantes o voluntaria?</p>
                        
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <h6 class="text-primary">Participación voluntaria:</h6>
                                <ul class="small">
                                    <li>Respeta la autonomía individual</li>
                                    <li>Mayor compromiso genuino</li>
                                    <li>Motivación intrínseca</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h6 class="text-primary">Participación obligatoria:</h6>
                                <ul class="small">
                                    <li>Mayor impacto colectivo</li>
                                    <li>Formación ciudadana ambiental</li>
                                    <li>Equidad en responsabilidades</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="alert alert-success mt-3">
                            <strong>Balance ético:</strong> Actividad curricular obligatoria pero con opciones de 
                            participación (plantar, investigar, diseñar, documentar) respetando habilidades diversas.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Valores Éticos del Proyecto -->
<section class="py-5">
    <div class="container">
        <h2 class="h3 mb-4 text-center" style="color: #cc9900;">
            <i class="bi bi-gem me-2"></i>
            Valores Éticos Fundamentales del Proyecto
        </h2>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="card text-center shadow-sm h-100">
                    <div class="card-body">
                        <i class="bi bi-shield-fill-check display-3 text-success mb-3"></i>
                        <h5>Responsabilidad</h5>
                        <p class="small">Reconocer nuestro papel como agentes de cambio y asumir las consecuencias 
                        de nuestras acciones u omisiones ambientales.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-center shadow-sm h-100">
                    <div class="card-body">
                        <i class="bi bi-people-fill display-3 text-primary mb-3"></i>
                        <h5>Solidaridad</h5>
                        <p class="small">Trabajar colectivamente por el bien común, apoyando tanto a nuestra 
                        generación como a las futuras en su derecho a un ambiente sano.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-center shadow-sm h-100">
                    <div class="card-body">
                        <i class="bi bi-arrow-repeat display-3 text-info mb-3"></i>
                        <h5>Sostenibilidad</h5>
                        <p class="small">Satisfacer necesidades presentes sin comprometer la capacidad de las 
                        generaciones futuras de satisfacer las suyas.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-center shadow-sm h-100">
                    <div class="card-body">
                        <i class="bi bi-hand-thumbs-up-fill display-3 text-warning mb-3"></i>
                        <h5>Respeto</h5>
                        <p class="small">Valorar intrínsecamente la vida en todas sus formas, reconociendo 
                        la dignidad de cada ser vivo y del ecosistema.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-center shadow-sm h-100">
                    <div class="card-body">
                        <i class="bi bi-lightbulb-fill display-3 text-danger mb-3"></i>
                        <h5>Prudencia</h5>
                        <p class="small">Actuar con sabiduría y previsión, considerando cuidadosamente el 
                        impacto a corto y largo plazo de nuestras decisiones.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-center shadow-sm h-100">
                    <div class="card-body">
                        <i class="bi bi-balance-scale-fill display-3 text-success mb-3"></i>
                        <h5>Justicia Ambiental</h5>
                        <p class="small">Garantizar distribución equitativa de beneficios y cargas ambientales, 
                        especialmente hacia comunidades vulnerables.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Código de Ética Ambiental -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card shadow-lg border-warning" style="border-width: 3px;">
                    <div class="card-header bg-warning text-dark text-center">
                        <h3 class="mb-0">
                            <i class="bi bi-journal-code me-2"></i>
                            Código de Ética Ambiental del Proyecto
                        </h3>
                    </div>
                    <div class="card-body">
                        <p class="lead text-center mb-4">Compromisos éticos de los participantes</p>
                        
                        <ol class="list-group list-group-numbered">
                            <li class="list-group-item">
                                <strong>Compromiso con la vida:</strong> Reconocer el valor intrínseco de todos los seres vivos
                            </li>
                            <li class="list-group-item">
                                <strong>Acción informada:</strong> Basar decisiones en conocimiento científico y tradicional
                            </li>
                            <li class="list-group-item">
                                <strong>Transparencia:</strong> Documentar honestamente procesos, éxitos y fracasos
                            </li>
                            <li class="list-group-item">
                                <strong>Inclusión:</strong> Fomentar la participación equitativa de toda la comunidad
                            </li>
                            <li class="list-group-item">
                                <strong>Pensamiento a largo plazo:</strong> Considerar impacto en generaciones futuras
                            </li>
                            <li class="list-group-item">
                                <strong>Respeto cultural:</strong> Valorar conocimientos tradicionales y cosmovisiones indígenas
                            </li>
                            <li class="list-group-item">
                                <strong>Autocrítica:</strong> Reflexionar continuamente sobre nuestras prácticas y mejorarlas
                            </li>
                            <li class="list-group-item">
                                <strong>Difusión responsable:</strong> Compartir aprendizajes para multiplicar el impacto positivo
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Reflexiones Filosóficas -->
<section class="py-5">
    <div class="container">
        <h2 class="h3 mb-4 text-center" style="color: #cc9900;">
            <i class="bi bi-chat-quote me-2"></i>
            Reflexiones Filosóficas sobre Ambiente
        </h2>

        <div class="row g-4">
            <div class="col-lg-6">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <p>"La Tierra no es una herencia de nuestros padres, sino un préstamo de nuestros hijos."</p>
                            <footer class="blockquote-footer">Proverbio indígena</footer>
                        </blockquote>
                        <p class="mt-3 small">Esta sabiduría ancestral encapsula la ética de responsabilidad intergeneracional: 
                        nuestras acciones hoy determinan el mundo que heredarán las generaciones futuras.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <p>"Actúa de tal modo que los efectos de tu acción sean compatibles con la permanencia de una vida humana auténtica en la Tierra."</p>
                            <footer class="blockquote-footer">Hans Jonas - Principio de Responsabilidad</footer>
                        </blockquote>
                        <p class="mt-3 small">Jonas propone una ética para la era tecnológica: debemos garantizar que 
                        nuestras acciones no comprometan la supervivencia de la humanidad futura.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <p>"En toda la naturaleza hay algo de maravilloso."</p>
                            <footer class="blockquote-footer">Aristóteles</footer>
                        </blockquote>
                        <p class="mt-3 small">Reconocer la maravilla intrínseca de la naturaleza nos lleva a valorarla 
                        no solo por su utilidad, sino por su belleza y complejidad en sí misma.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <p>"El buen tratamiento de la Tierra no es una opción, es una necesidad."</p>
                            <footer class="blockquote-footer">Wangari Maathai (Premio Nobel de la Paz)</footer>
                        </blockquote>
                        <p class="mt-3 small">La activista keniana que plantó 30 millones de árboles nos recuerda que 
                        el cuidado ambiental es fundamental para nuestra propia supervivencia.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Relación con el Proyecto -->
<section class="py-5 bg-warning text-dark">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h2 class="h3 mb-4">
                    <i class="bi bi-tree-fill me-2"></i>
                    Dimensión Ética del Proyecto de Reforestación
                </h2>
                <p class="lead mb-3">
                    Nuestro proyecto no es solo una acción ecológica, es una declaración ética sobre qué tipo 
                    de personas y sociedad queremos ser.
                </p>
                <ul class="list-unstyled">
                    <li class="mb-2">
                        <i class="bi bi-check-circle-fill text-success me-2"></i>
                        <strong>Formación de carácter:</strong> Cultivar virtudes ambientales en los estudiantes
                    </li>
                    <li class="mb-2">
                        <i class="bi bi-check-circle-fill text-success me-2"></i>
                        <strong>Conciencia moral:</strong> Despertar sensibilidad hacia el sufrimiento ecológico
                    </li>
                    <li class="mb-2">
                        <i class="bi bi-check-circle-fill text-success me-2"></i>
                        <strong>Acción coherente:</strong> Alinear valores declarados con prácticas concretas
                    </li>
                    <li class="mb-2">
                        <i class="bi bi-check-circle-fill text-success me-2"></i>
                        <strong>Legado ético:</strong> Dejar un ejemplo de responsabilidad para futuros estudiantes
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 text-center">
                <i class="bi bi-heart-fill display-1"></i>
                <p class="mt-3 fw-bold">Ética en acción</p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-5 bg-light">
    <div class="container text-center">
        <h2 class="mb-3">Reflexiona y Actúa Éticamente</h2>
        <p class="lead mb-4">
            La ética nos guía hacia acciones ambientalmente responsables
        </p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="../index.php" class="btn btn-warning btn-lg">
                <i class="bi bi-house-fill me-2"></i>
                Inicio
            </a>
            <a href="cbta_project.php" class="btn btn-outline-warning btn-lg">
                <i class="bi bi-geo-alt me-2"></i>
                Proyecto CBTA
            </a>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
