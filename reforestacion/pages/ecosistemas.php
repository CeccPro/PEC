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
$pageTitle = 'Estudio de Ecosistemas - ' . $translations['app_title'];

include '../includes/header.php';
?>

<!-- Page Header -->
<section class="py-5 bg-success text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold mb-3">
                    <i class="bi bi-tree-fill me-3"></i>
                    Estudio de Ecosistemas: Reforestación
                </h1>
                <p class="lead mb-0">
                    Formas de reforestación, tipos de ecosistemas y estrategias de restauración ecológica
                </p>
            </div>
            <div class="col-lg-4 text-center">
                <i class="bi bi-globe-americas display-1"></i>
            </div>
        </div>
    </div>
</section>

<!-- Introduction -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="card shadow-sm mb-4">
            <div class="card-body">
                <h2 class="h3 mb-4 text-success">
                    <i class="bi bi-info-circle-fill me-2"></i>
                    Fundamentos Ecológicos de la Reforestación
                </h2>
                <p class="lead">
                    La reforestación es el proceso de plantar árboles en áreas que fueron forestales y que 
                    por diversas razones perdieron su cobertura vegetal. Es una estrategia fundamental para 
                    la restauración de ecosistemas y la mitigación del cambio climático.
                </p>
                <p>
                    Comprender los ecosistemas, su funcionamiento y las técnicas adecuadas de reforestación 
                    es esencial para el éxito de cualquier proyecto de restauración ecológica.
                </p>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-lg-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h4 class="text-success">
                            <i class="bi bi-diagram-3 me-2"></i>
                            ¿Qué es un Ecosistema?
                        </h4>
                        <p class="mt-3">
                            Sistema complejo formado por organismos vivos (componente biótico) y su ambiente 
                            físico (componente abiótico) que interactúan como una unidad funcional.
                        </p>
                        <h6>Componentes:</h6>
                        <ul class="small">
                            <li><strong>Bióticos:</strong> Plantas, animales, hongos, bacterias</li>
                            <li><strong>Abióticos:</strong> Agua, aire, suelo, luz, temperatura</li>
                            <li><strong>Relaciones:</strong> Flujo de energía y ciclos de nutrientes</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h4 class="text-success">
                            <i class="bi bi-arrow-repeat me-2"></i>
                            Servicios Ecosistémicos
                        </h4>
                        <p class="mt-3">
                            Beneficios que los ecosistemas proporcionan a la humanidad y que sustentan la vida en el planeta.
                        </p>
                        <h6>Tipos de servicios:</h6>
                        <ul class="small">
                            <li><strong>Provisión:</strong> Alimentos, agua, madera</li>
                            <li><strong>Regulación:</strong> Clima, agua, enfermedades</li>
                            <li><strong>Culturales:</strong> Recreación, espirituales</li>
                            <li><strong>Soporte:</strong> Fotosíntesis, ciclo de nutrientes</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h4 class="text-success">
                            <i class="bi bi-exclamation-triangle me-2"></i>
                            Degradación de Ecosistemas
                        </h4>
                        <p class="mt-3">
                            Pérdida de la capacidad del ecosistema para proporcionar servicios debido a factores naturales o humanos.
                        </p>
                        <h6>Causas principales:</h6>
                        <ul class="small">
                            <li>Deforestación y cambio de uso de suelo</li>
                            <li>Agricultura intensiva</li>
                            <li>Urbanización descontrolada</li>
                            <li>Contaminación</li>
                            <li>Cambio climático</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tipos de Ecosistemas -->
<section class="py-5">
    <div class="container">
        <h2 class="h3 mb-4 text-success text-center">
            <i class="bi bi-grid-3x3-gap me-2"></i>
            Principales Tipos de Ecosistemas Forestales en México
        </h2>

        <div class="row g-4">
            <!-- Bosque de Coníferas -->
            <div class="col-lg-6">
                <div class="card shadow-sm h-100">
                    <div class="card-header bg-success text-white">
                        <h4 class="mb-0">
                            <i class="bi bi-snow2 me-2"></i>
                            Bosque de Coníferas
                        </h4>
                    </div>
                    <div class="card-body">
                        <img src="https://placehold.co/400x200/228b22/ffffff?text=Bosque+Coniferas" 
                             alt="Bosque de Coníferas" class="img-fluid rounded mb-3">
                        
                        <h6>Características:</h6>
                        <ul class="small">
                            <li>Altitud: 2,000 - 4,000 msnm</li>
                            <li>Temperatura: 6-28°C</li>
                            <li>Precipitación: 600-1,000 mm/año</li>
                            <li>Especies: Pinos, abetos, oyameles</li>
                        </ul>

                        <h6 class="mt-3">Especies representativas:</h6>
                        <ul class="small">
                            <li><em>Pinus montezumae</em> (Pino Moctezuma)</li>
                            <li><em>Abies religiosa</em> (Oyamel)</li>
                            <li><em>Pinus hartwegii</em> (Pino de las alturas)</li>
                        </ul>

                        <div class="alert alert-success mt-3 mb-0">
                            <strong>Importancia:</strong> Captura de agua, regulación climática, 
                            hábitat de fauna endémica (Mariposa Monarca).
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bosque de Encino -->
            <div class="col-lg-6">
                <div class="card shadow-sm h-100">
                    <div class="card-header bg-warning text-dark">
                        <h4 class="mb-0">
                            <i class="bi bi-tree me-2"></i>
                            Bosque de Encino
                        </h4>
                    </div>
                    <div class="card-body">
                        <img src="https://placehold.co/400x200/d4a017/000000?text=Bosque+Encino" 
                             alt="Bosque de Encino" class="img-fluid rounded mb-3">
                        
                        <h6>Características:</h6>
                        <ul class="small">
                            <li>Altitud: 1,200 - 2,800 msnm</li>
                            <li>Temperatura: 10-26°C</li>
                            <li>Precipitación: 600-1,200 mm/año</li>
                            <li>Especies: Robles, encinos</li>
                        </ul>

                        <h6 class="mt-3">Especies representativas:</h6>
                        <ul class="small">
                            <li><em>Quercus rugosa</em> (Encino)</li>
                            <li><em>Quercus laurina</em> (Encino laurelillo)</li>
                            <li><em>Quercus obtusata</em> (Roble)</li>
                        </ul>

                        <div class="alert alert-warning mt-3 mb-0">
                            <strong>Importancia:</strong> Gran biodiversidad, prevención de erosión, 
                            producción de bellotas para fauna.
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bosque Mesófilo de Montaña -->
            <div class="col-lg-6">
                <div class="card shadow-sm h-100">
                    <div class="card-header bg-info text-white">
                        <h4 class="mb-0">
                            <i class="bi bi-cloud-fog me-2"></i>
                            Bosque Mesófilo de Montaña
                        </h4>
                    </div>
                    <div class="card-body">
                        <img src="https://placehold.co/400x200/17a2b8/ffffff?text=Bosque+Mesofilo" 
                             alt="Bosque Mesófilo" class="img-fluid rounded mb-3">
                        
                        <h6>Características:</h6>
                        <ul class="small">
                            <li>Altitud: 600 - 2,700 msnm</li>
                            <li>Temperatura: 12-23°C</li>
                            <li>Precipitación: 1,500-3,000 mm/año</li>
                            <li>Alta humedad y neblina constante</li>
                        </ul>

                        <h6 class="mt-3">Importancia especial:</h6>
                        <ul class="small">
                            <li>Ecosistema MÁS BIODIVERSO de México</li>
                            <li>Solo cubre 1% del territorio nacional</li>
                            <li>Altísimo endemismo de especies</li>
                            <li>Regulación hídrica excepcional</li>
                        </ul>

                        <div class="alert alert-danger mt-3 mb-0">
                            <strong>⚠️ En peligro crítico:</strong> Ha perdido más del 50% de su cobertura original.
                        </div>
                    </div>
                </div>
            </div>

            <!-- Selva -->
            <div class="col-lg-6">
                <div class="card shadow-sm h-100">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">
                            <i class="bi bi-brightness-high me-2"></i>
                            Selvas (Tropical y Subtropical)
                        </h4>
                    </div>
                    <div class="card-body">
                        <img src="https://placehold.co/400x200/0066cc/ffffff?text=Selva+Tropical" 
                             alt="Selva Tropical" class="img-fluid rounded mb-3">
                        
                        <h6>Características:</h6>
                        <ul class="small">
                            <li>Altitud: 0 - 1,000 msnm</li>
                            <li>Temperatura: 20-28°C</li>
                            <li>Precipitación: >1,500 mm/año</li>
                            <li>Vegetación exuberante y perennifolia</li>
                        </ul>

                        <h6 class="mt-3">Tipos en México:</h6>
                        <ul class="small">
                            <li><strong>Perennifolia:</strong> Siempre verde (Chiapas, Veracruz)</li>
                            <li><strong>Caducifolia:</strong> Pierde hojas en secas (Pacífico)</li>
                            <li><strong>Subcaducifolia:</strong> Intermedia</li>
                        </ul>

                        <div class="alert alert-primary mt-3 mb-0">
                            <strong>Importancia:</strong> Pulmón del planeta, mayor biodiversidad por m², 
                            regulación climática global.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Formas de Reforestación -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="h3 mb-4 text-success text-center">
            <i class="bi bi-tools me-2"></i>
            Métodos y Técnicas de Reforestación
        </h2>

        <div class="row g-4 mb-4">
            <!-- Reforestación vs Forestación -->
            <div class="col-lg-6">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="text-success">Diferencias Fundamentales</h5>
                        <div class="table-responsive mt-3">
                            <table class="table table-bordered">
                                <thead class="table-success">
                                    <tr>
                                        <th>Concepto</th>
                                        <th>Definición</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>Reforestación</strong></td>
                                        <td>Plantar árboles en áreas que FUERON bosques</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Forestación</strong></td>
                                        <td>Plantar árboles donde NUNCA hubo bosques</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Restauración</strong></td>
                                        <td>Recuperar el ecosistema original completo</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Objetivos de la Reforestación -->
            <div class="col-lg-6">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="text-success">Objetivos de la Reforestación</h5>
                        <ul class="mt-3">
                            <li><strong>Ecológicos:</strong> Restaurar biodiversidad y funciones ecosistémicas</li>
                            <li><strong>Ambientales:</strong> Captura de carbono, mejora de calidad de aire y agua</li>
                            <li><strong>Productivos:</strong> Obtener recursos forestales sostenibles</li>
                            <li><strong>Sociales:</strong> Generar empleos y beneficios comunitarios</li>
                            <li><strong>Educativos:</strong> Conciencia ambiental y aprendizaje</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Técnicas de Plantación -->
        <h3 class="h4 mb-3 text-success">
            <i class="bi bi-gear me-2"></i>
            Técnicas de Plantación
        </h3>

        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="card text-center shadow-sm h-100">
                    <div class="card-body">
                        <i class="bi bi-grid-3x3 display-4 text-success mb-3"></i>
                        <h6>Plantación en Marco Real</h6>
                        <p class="small">Distribución cuadrada o rectangular uniforme. Fácil de planificar y mantener.</p>
                        <div class="bg-light p-2 rounded">
                            <small>Ejemplo: 3m x 3m<br>1,111 árboles/ha</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card text-center shadow-sm h-100">
                    <div class="card-body">
                        <i class="bi bi-triangle display-4 text-primary mb-3"></i>
                        <h6>Plantación al Tresbolillo</h6>
                        <p class="small">Distribución triangular. Aprovecha mejor el espacio, 15% más árboles.</p>
                        <div class="bg-light p-2 rounded">
                            <small>Mayor densidad<br>Mejor cobertura</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card text-center shadow-sm h-100">
                    <div class="card-body">
                        <i class="bi bi-water display-4 text-info mb-3"></i>
                        <h6>Plantación en Curvas de Nivel</h6>
                        <p class="small">En terrenos inclinados siguiendo las curvas. Previene erosión y retiene agua.</p>
                        <div class="bg-light p-2 rounded">
                            <small>Ideal para laderas<br>Control de erosión</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card text-center shadow-sm h-100">
                    <div class="card-body">
                        <i class="bi bi-flower1 display-4 text-warning mb-3"></i>
                        <h6>Plantación en Manchones</h6>
                        <p class="small">Grupos concentrados de árboles. Imita patrones naturales de regeneración.</p>
                        <div class="bg-light p-2 rounded">
                            <small>Biodiversidad<br>Regeneración natural</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Proceso de Reforestación -->
<section class="py-5">
    <div class="container">
        <h2 class="h3 mb-4 text-success text-center">
            <i class="bi bi-list-ol me-2"></i>
            Proceso Completo de Reforestación
        </h2>

        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="timeline">
                    <div class="card mb-3 shadow-sm">
                        <div class="card-body">
                            <h5 class="text-success">
                                <span class="badge bg-success me-2">1</span>
                                Diagnóstico del Sitio
                            </h5>
                            <ul>
                                <li>Análisis de suelo (pH, textura, nutrientes)</li>
                                <li>Estudio del clima local (precipitación, temperatura)</li>
                                <li>Evaluación de vegetación existente</li>
                                <li>Identificación de amenazas (plagas, erosión)</li>
                                <li>Determinación de especies nativas históricas</li>
                            </ul>
                        </div>
                    </div>

                    <div class="card mb-3 shadow-sm">
                        <div class="card-body">
                            <h5 class="text-success">
                                <span class="badge bg-success me-2">2</span>
                                Planificación
                            </h5>
                            <ul>
                                <li>Selección de especies apropiadas (nativas preferentemente)</li>
                                <li>Diseño del patrón de plantación</li>
                                <li>Cálculo de densidad de plantación</li>
                                <li>Cronograma de actividades (mejor época: temporada de lluvias)</li>
                                <li>Presupuesto y recursos necesarios</li>
                            </ul>
                        </div>
                    </div>

                    <div class="card mb-3 shadow-sm">
                        <div class="card-body">
                            <h5 class="text-success">
                                <span class="badge bg-success me-2">3</span>
                                Preparación del Terreno
                            </h5>
                            <ul>
                                <li>Limpieza de maleza excesiva (sin eliminar toda la vegetación)</li>
                                <li>Control de erosión (barreras, terrazas)</li>
                                <li>Apertura de cepas (hoyos de 40x40x40 cm)</li>
                                <li>Mejoramiento del suelo (compost, micorrizas)</li>
                                <li>Marcado de puntos de plantación</li>
                            </ul>
                        </div>
                    </div>

                    <div class="card mb-3 shadow-sm">
                        <div class="card-body">
                            <h5 class="text-success">
                                <span class="badge bg-success me-2">4</span>
                                Obtención de Plántulas
                            </h5>
                            <ul>
                                <li>Producción en vivero (6-12 meses antes)</li>
                                <li>Selección de plántulas sanas (30-50 cm de altura)</li>
                                <li>Aclimatación al sitio (endurecimiento)</li>
                                <li>Transporte cuidadoso evitando daños</li>
                                <li>Verificación de calidad (raíz completa, sin plagas)</li>
                            </ul>
                        </div>
                    </div>

                    <div class="card mb-3 shadow-sm">
                        <div class="card-body">
                            <h5 class="text-success">
                                <span class="badge bg-success me-2">5</span>
                                Plantación
                            </h5>
                            <ul>
                                <li>Época ideal: Inicio de temporada de lluvias</li>
                                <li>Retirar bolsa/contenedor con cuidado</li>
                                <li>Colocar plántula a nivel correcto (cuello de raíz)</li>
                                <li>Rellenar con tierra suelta mezclada con composta</li>
                                <li>Compactar suavemente y regar abundantemente</li>
                                <li>Proteger con tutores si es necesario</li>
                            </ul>
                        </div>
                    </div>

                    <div class="card mb-3 shadow-sm">
                        <div class="card-body">
                            <h5 class="text-success">
                                <span class="badge bg-success me-2">6</span>
                                Mantenimiento
                            </h5>
                            <ul>
                                <li><strong>Primeros 2 años (críticos):</strong> Riego en época seca, control de maleza</li>
                                <li>Reposición de plantas muertas (replante)</li>
                                <li>Protección contra herbívoros (cercado)</li>
                                <li>Control de plagas y enfermedades</li>
                                <li>Podas de formación si es necesario</li>
                                <li>Fertilización orgánica moderada</li>
                            </ul>
                        </div>
                    </div>

                    <div class="card mb-3 shadow-sm">
                        <div class="card-body">
                            <h5 class="text-success">
                                <span class="badge bg-success me-2">7</span>
                                Monitoreo y Evaluación
                            </h5>
                            <ul>
                                <li>Medición de supervivencia (meta: >80%)</li>
                                <li>Registro de crecimiento (altura, diámetro)</li>
                                <li>Evaluación de salud de plantas</li>
                                <li>Monitoreo de regeneración natural</li>
                                <li>Documentación fotográfica del progreso</li>
                                <li>Análisis de fauna que regresa al sitio</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Especies Nativas Recomendadas -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="h3 mb-4 text-success text-center">
            <i class="bi bi-flower2 me-2"></i>
            Especies Nativas Recomendadas para el Estado de México
        </h2>

        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="table-success">
                    <tr>
                        <th>Nombre Común</th>
                        <th>Nombre Científico</th>
                        <th>Altitud (msnm)</th>
                        <th>Características</th>
                        <th>Beneficios</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Pino</strong></td>
                        <td><em>Pinus montezumae</em></td>
                        <td>2,200-3,000</td>
                        <td>Rápido crecimiento, resistente</td>
                        <td>Madera, resina, captura CO₂</td>
                    </tr>
                    <tr>
                        <td><strong>Oyamel</strong></td>
                        <td><em>Abies religiosa</em></td>
                        <td>2,400-3,600</td>
                        <td>Hábitat Mariposa Monarca</td>
                        <td>Conservación, regulación hídrica</td>
                    </tr>
                    <tr>
                        <td><strong>Encino</strong></td>
                        <td><em>Quercus rugosa</em></td>
                        <td>1,800-2,800</td>
                        <td>Longevidad, resistencia</td>
                        <td>Bellotas para fauna, leña</td>
                    </tr>
                    <tr>
                        <td><strong>Aile</strong></td>
                        <td><em>Alnus jorullensis</em></td>
                        <td>1,500-3,000</td>
                        <td>Fija nitrógeno en suelo</td>
                        <td>Mejora suelo, riberas de ríos</td>
                    </tr>
                    <tr>
                        <td><strong>Cedro blanco</strong></td>
                        <td><em>Cupressus lusitanica</em></td>
                        <td>1,800-3,000</td>
                        <td>Aromático, ornamental</td>
                        <td>Madera de calidad, cortinas</td>
                    </tr>
                    <tr>
                        <td><strong>Madroño</strong></td>
                        <td><em>Arbutus xalapensis</em></td>
                        <td>1,500-3,000</td>
                        <td>Corteza rojiza distintiva</td>
                        <td>Ornamental, frutos comestibles</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="alert alert-success mt-4">
            <i class="bi bi-lightbulb-fill me-2"></i>
            <strong>Recomendación:</strong> Usar mezcla de especies (policultivo) para mayor resiliencia 
            y biodiversidad. Evitar monocultivos que son más vulnerables a plagas y enfermedades.
        </div>
    </div>
</section>

<!-- Sucesión Ecológica -->
<section class="py-5">
    <div class="container">
        <h2 class="h3 mb-4 text-success text-center">
            <i class="bi bi-arrow-right-circle me-2"></i>
            Sucesión Ecológica en Reforestación
        </h2>

        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5>¿Qué es la Sucesión Ecológica?</h5>
                        <p>
                            Proceso gradual y predecible de cambios en la composición de especies de un ecosistema 
                            a lo largo del tiempo, desde una comunidad pionera hasta una comunidad clímax estable.
                        </p>

                        <h6 class="mt-4">Etapas de la Sucesión Secundaria:</h6>
                        <ol>
                            <li><strong>Comunidad Pionera (0-5 años):</strong>
                                <ul class="small">
                                    <li>Hierbas y pastos</li>
                                    <li>Especies de rápido crecimiento</li>
                                    <li>Mejoran condiciones del suelo</li>
                                </ul>
                            </li>
                            <li><strong>Arbustos y Árboles Pequeños (5-25 años):</strong>
                                <ul class="small">
                                    <li>Especies de sombra parcial</li>
                                    <li>Mayor complejidad estructural</li>
                                    <li>Inicio del dosel</li>
                                </ul>
                            </li>
                            <li><strong>Bosque Joven (25-100 años):</strong>
                                <ul class="small">
                                    <li>Árboles dominantes establecidos</li>
                                    <li>Sotobosque desarrollándose</li>
                                    <li>Aumento de biodiversidad</li>
                                </ul>
                            </li>
                            <li><strong>Bosque Maduro - Clímax (100+ años):</strong>
                                <ul class="small">
                                    <li>Máxima biodiversidad</li>
                                    <li>Equilibrio dinámico</li>
                                    <li>Múltiples estratos vegetales</li>
                                </ul>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <img src="https://placehold.co/500x400/228b22/ffffff?text=Sucesion+Ecologica" 
                     alt="Sucesión Ecológica" class="img-fluid rounded shadow-lg">
                <div class="alert alert-info mt-3">
                    <strong>Aplicación práctica:</strong> En proyectos de reforestación, podemos acelerar 
                    la sucesión plantando especies de diferentes etapas simultáneamente, con especies 
                    pioneras protegiendo a las de clímax.
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Challenges and Solutions -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="h3 mb-4 text-success text-center">
            <i class="bi bi-exclamation-octagon me-2"></i>
            Desafíos y Soluciones en Reforestación
        </h2>

        <div class="row g-4">
            <div class="col-lg-6">
                <div class="card shadow-sm h-100">
                    <div class="card-header bg-danger text-white">
                        <h5 class="mb-0">Desafíos Comunes</h5>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li><strong>Baja tasa de supervivencia:</strong> Mortalidad en primeros 2 años</li>
                            <li><strong>Falta de agua:</strong> Estrés hídrico en época seca</li>
                            <li><strong>Especies inadecuadas:</strong> No adaptadas al sitio</li>
                            <li><strong>Plagas y enfermedades:</strong> Ataque a plántulas</li>
                            <li><strong>Herbivoría:</strong> Daño por animales</li>
                            <li><strong>Competencia con maleza:</strong> Asfixia de plántulas</li>
                            <li><strong>Erosión del suelo:</strong> Pérdida de sustrato</li>
                            <li><strong>Falta de seguimiento:</strong> Abandono post-plantación</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card shadow-sm h-100">
                    <div class="card-header bg-success text-white">
                        <h5 class="mb-0">Soluciones Efectivas</h5>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li><strong>Riego inicial:</strong> Sistema de goteo o riegos manuales</li>
                            <li><strong>Mulching:</strong> Capa de materia orgánica retiene humedad</li>
                            <li><strong>Especies nativas:</strong> Mejor adaptación local</li>
                            <li><strong>Plántulas de calidad:</strong> Vivero certificado</li>
                            <li><strong>Cercado protector:</strong> Evita herbivoría</li>
                            <li><strong>Control de maleza:</strong> Chapeo selectivo periódico</li>
                            <li><strong>Terrazas y barreras:</strong> Previenen erosión</li>
                            <li><strong>Plan de monitoreo:</strong> Visitas regulares programadas</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Relación con el Proyecto CBTA -->
<section class="py-5 bg-success text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h2 class="h3 mb-4">
                    <i class="bi bi-geo-alt-fill me-2"></i>
                    Aplicación en el Proyecto CBTA 35
                </h2>
                <p class="lead mb-3">
                    El conocimiento de ecosistemas y técnicas de reforestación es fundamental para el éxito 
                    de nuestro proyecto de restauración ecológica.
                </p>
                <ul class="list-unstyled">
                    <li class="mb-2">
                        <i class="bi bi-check-circle-fill text-warning me-2"></i>
                        <strong>Ecosistema local:</strong> Bosque templado de pino-encino a 2,240 msnm
                    </li>
                    <li class="mb-2">
                        <i class="bi bi-check-circle-fill text-warning me-2"></i>
                        <strong>Especies prioritarias:</strong> Pinus montezumae, Quercus rugosa, Abies religiosa
                    </li>
                    <li class="mb-2">
                        <i class="bi bi-check-circle-fill text-warning me-2"></i>
                        <strong>Técnica de plantación:</strong> Marco real 3x3m en curvas de nivel
                    </li>
                    <li class="mb-2">
                        <i class="bi bi-check-circle-fill text-warning me-2"></i>
                        <strong>Época de plantación:</strong> Junio-agosto (temporada de lluvias)
                    </li>
                    <li class="mb-2">
                        <i class="bi bi-check-circle-fill text-warning me-2"></i>
                        <strong>Monitoreo estudiantil:</strong> Seguimiento continuo del crecimiento y supervivencia
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 text-center">
                <i class="bi bi-tree display-1"></i>
                <p class="mt-3 fw-bold">Restaurando ecosistemas locales</p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-5">
    <div class="container text-center">
        <h2 class="mb-3">Aplica el Conocimiento Ecológico</h2>
        <p class="lead mb-4">
            Descubre cómo implementar estas técnicas en nuestro proyecto
        </p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="../index.php" class="btn btn-success btn-lg">
                <i class="bi bi-house-fill me-2"></i>
                Inicio
            </a>
            <a href="cbta_project.php" class="btn btn-outline-success btn-lg">
                <i class="bi bi-geo-alt me-2"></i>
                Proyecto CBTA
            </a>
            <a href="calculator.php" class="btn btn-outline-success btn-lg">
                <i class="bi bi-calculator me-2"></i>
                Calculadora
            </a>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
