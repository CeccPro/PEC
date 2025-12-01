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
$pageTitle = 'Programación - ' . $translations['app_title'];

include '../includes/header.php';
?>

<!-- Page Header -->
<section class="py-5 bg-info text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold mb-3">
                    <i class="bi bi-code-slash me-3"></i>
                    Programación y Reforestación
                </h1>
                <p class="lead mb-0">
                    Desarrollo de plataforma web educativa sobre reforestación utilizando PHP, HTML y CSS
                </p>
            </div>
            <div class="col-lg-4 text-center">
                <i class="bi bi-laptop display-1"></i>
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
                        <h2 class="h3 mb-4 text-info">
                            <i class="bi bi-gear-fill me-2"></i>
                            Rol de la Programación en el Proyecto
                        </h2>
                        <p class="lead">
                            La programación web es la herramienta fundamental que permite crear esta plataforma educativa 
                            interactiva, facilitando el acceso a información sobre reforestación y permitiendo cálculos 
                            precisos para la planificación de proyectos de reforestación.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <!-- Tecnologías Utilizadas -->
            <div class="col-lg-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h3 class="h5 text-info">
                            <i class="bi bi-stack me-2"></i>
                            Tecnologías del Proyecto
                        </h3>
                        <ul class="list-unstyled mt-3">
                            <li class="mb-3">
                                <strong class="text-danger">PHP</strong>
                                <p class="mb-0 small text-muted">Lenguaje del lado del servidor para lógica de negocio, autenticación y procesamiento de datos</p>
                            </li>
                            <li class="mb-3">
                                <strong class="text-warning">HTML5</strong>
                                <p class="mb-0 small text-muted">Estructura semántica del contenido y formularios interactivos</p>
                            </li>
                            <li class="mb-3">
                                <strong class="text-primary">CSS3</strong>
                                <p class="mb-0 small text-muted">Estilos, diseño responsivo y animaciones (Bootstrap 5)</p>
                            </li>
                            <li class="mb-3">
                                <strong class="text-success">JavaScript</strong>
                                <p class="mb-0 small text-muted">Interactividad del cliente y validaciones en tiempo real</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Características Implementadas -->
            <div class="col-lg-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h3 class="h5 text-info">
                            <i class="bi bi-check2-square me-2"></i>
                            Características Implementadas
                        </h3>
                        <ul class="mt-3">
                            <li class="mb-2">Sistema de autenticación de usuarios</li>
                            <li class="mb-2">Gestión de sesiones con PHP</li>
                            <li class="mb-2">Sistema multiidioma (ES/EN)</li>
                            <li class="mb-2">Calculadora de reforestación interactiva</li>
                            <li class="mb-2">Diseño responsivo (móvil/tablet/escritorio)</li>
                            <li class="mb-2">Navegación dinámica</li>
                            <li class="mb-2">Almacenamiento de datos en JSON</li>
                            <li class="mb-2">Animaciones CSS personalizadas</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Estructura del Proyecto -->
            <div class="col-lg-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h3 class="h5 text-info">
                            <i class="bi bi-folder-fill me-2"></i>
                            Estructura del Proyecto
                        </h3>
                        <pre class="bg-dark text-light p-3 rounded mt-3" style="font-size: 0.85rem;">
reforestacion/
├── assets/
│   ├── css/
│   │   └── style.css
│   └── js/
│       └── main.js
├── data/
│   └── users.json
├── includes/
│   ├── auth.php
│   ├── config.php
│   ├── header.php
│   ├── footer.php
│   └── language.php
├── languages/
│   ├── es.json
│   └── en.json
├── 
│   └── [páginas]
└── index.php</pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PHP Concepts -->
<section class="py-5">
    <div class="container">
        <h2 class="h3 mb-4 text-info text-center">
            <i class="bi bi-filetype-php me-2"></i>
            Conceptos de PHP Aplicados
        </h2>

        <div class="row g-4">
            <div class="col-lg-6">
                <div class="card shadow-sm">
                    <div class="card-header bg-danger text-white">
                        <h4 class="mb-0">Gestión de Sesiones</h4>
                    </div>
                    <div class="card-body">
                        <p>Permite mantener el estado del usuario entre páginas:</p>
                        <pre class="bg-light p-3 rounded"><code>&lt;?php
session_start();

// Guardar datos en sesión
$_SESSION['user_id'] = $userId;
$_SESSION['language'] = 'es';

// Recuperar datos
$userId = $_SESSION['user_id'] ?? null;

// Destruir sesión
session_destroy();
?&gt;</code></pre>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card shadow-sm">
                    <div class="card-header bg-danger text-white">
                        <h4 class="mb-0">Programación Orientada a Objetos</h4>
                    </div>
                    <div class="card-body">
                        <p>Estructura modular y reutilizable del código:</p>
                        <pre class="bg-light p-3 rounded"><code>&lt;?php
class Auth {
    private $usersFile;
    
    public function __construct() {
        $this->usersFile = '../data/users.json';
    }
    
    public function isLoggedIn() {
        return isset($_SESSION['user_id']);
    }
}
?&gt;</code></pre>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card shadow-sm">
                    <div class="card-header bg-danger text-white">
                        <h4 class="mb-0">Manejo de Archivos JSON</h4>
                    </div>
                    <div class="card-body">
                        <p>Almacenamiento y recuperación de datos:</p>
                        <pre class="bg-light p-3 rounded"><code>&lt;?php
// Leer archivo JSON
$json = file_get_contents('users.json');
$data = json_decode($json, true);

// Escribir archivo JSON
$json = json_encode($data, JSON_PRETTY_PRINT);
file_put_contents('users.json', $json);
?&gt;</code></pre>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card shadow-sm">
                    <div class="card-header bg-danger text-white">
                        <h4 class="mb-0">Inclusión de Archivos</h4>
                    </div>
                    <div class="card-body">
                        <p>Reutilización de código y organización modular:</p>
                        <pre class="bg-light p-3 rounded"><code>&lt;?php
// require_once: incluye archivo una sola vez
require_once 'includes/config.php';
require_once 'includes/auth.php';

// include: incluye archivo
include 'includes/header.php';
include 'includes/footer.php';
?&gt;</code></pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- HTML/CSS Concepts -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="h3 mb-4 text-info text-center">
            <i class="bi bi-filetype-html me-2"></i>
            HTML y CSS en el Proyecto
        </h2>

        <div class="row g-4">
            <div class="col-lg-6">
                <div class="card shadow-sm">
                    <div class="card-header bg-warning text-dark">
                        <h4 class="mb-0">HTML5 Semántico</h4>
                    </div>
                    <div class="card-body">
                        <p>Uso de etiquetas semánticas para mejor estructura:</p>
                        <pre class="bg-light p-3 rounded"><code>&lt;header&gt;
  &lt;nav&gt;...&lt;/nav&gt;
&lt;/header&gt;

&lt;main&gt;
  &lt;section&gt;
    &lt;article&gt;...&lt;/article&gt;
  &lt;/section&gt;
&lt;/main&gt;

&lt;footer&gt;...&lt;/footer&gt;</code></pre>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Bootstrap 5 Framework</h4>
                    </div>
                    <div class="card-body">
                        <p>Sistema de grid responsivo y componentes:</p>
                        <pre class="bg-light p-3 rounded"><code>&lt;div class="container"&gt;
  &lt;div class="row"&gt;
    &lt;div class="col-lg-6 col-md-12"&gt;
      Contenido responsivo
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">CSS Variables y Personalización</h4>
                    </div>
                    <div class="card-body">
                        <p>Variables CSS para temas consistentes:</p>
                        <pre class="bg-light p-3 rounded"><code>:root {
  --primary-green: #2d5016;
  --accent-green: #4a7c29;
  --light-green: #7fb069;
}

.text-primary-green {
  color: var(--primary-green);
}</code></pre>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Animaciones CSS</h4>
                    </div>
                    <div class="card-body">
                        <p>Efectos visuales y transiciones:</p>
                        <pre class="bg-light p-3 rounded"><code>@keyframes slideInUp {
  from {
    opacity: 0;
    transform: translateY(30px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}</code></pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Web Application Features -->
<section class="py-5">
    <div class="container">
        <h2 class="h3 mb-4 text-info text-center">
            <i class="bi bi-globe me-2"></i>
            Funcionalidades de la Aplicación Web
        </h2>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="card shadow-sm text-center h-100">
                    <div class="card-body">
                        <i class="bi bi-person-check display-3 text-success mb-3"></i>
                        <h4>Sistema de Usuarios</h4>
                        <p class="text-muted">Registro, login y gestión de sesiones seguras para personalizar la experiencia</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm text-center h-100">
                    <div class="card-body">
                        <i class="bi bi-translate display-3 text-primary mb-3"></i>
                        <h4>Multiidioma</h4>
                        <p class="text-muted">Soporte para español e inglés con cambio dinámico sin recargar</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm text-center h-100">
                    <div class="card-body">
                        <i class="bi bi-calculator display-3 text-info mb-3"></i>
                        <h4>Calculadora Interactiva</h4>
                        <p class="text-muted">Herramienta para calcular recursos necesarios en proyectos de reforestación</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm text-center h-100">
                    <div class="card-body">
                        <i class="bi bi-phone display-3 text-warning mb-3"></i>
                        <h4>Diseño Responsivo</h4>
                        <p class="text-muted">Adaptable a dispositivos móviles, tablets y computadoras de escritorio</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm text-center h-100">
                    <div class="card-body">
                        <i class="bi bi-shield-check display-3 text-danger mb-3"></i>
                        <h4>Seguridad</h4>
                        <p class="text-muted">Validación de datos, protección contra inyecciones y encriptación de contraseñas</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm text-center h-100">
                    <div class="card-body">
                        <i class="bi bi-layout-text-sidebar display-3 text-success mb-3"></i>
                        <h4>Navegación Intuitiva</h4>
                        <p class="text-muted">Menú dinámico y estructura clara para facilitar el acceso a la información</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Learning Outcomes -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="h3 mb-4 text-info text-center">
            <i class="bi bi-journal-check me-2"></i>
            Aprendizajes y Competencias Desarrolladas
        </h2>

        <div class="row">
            <div class="col-lg-6">
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <h4 class="text-info">
                            <i class="bi bi-code-square me-2"></i>
                            Habilidades Técnicas
                        </h4>
                        <ul class="mt-3">
                            <li>Desarrollo de aplicaciones web con arquitectura MVC</li>
                            <li>Programación orientada a objetos en PHP</li>
                            <li>Manejo de datos con JSON y persistencia</li>
                            <li>Implementación de sistemas de autenticación</li>
                            <li>Creación de interfaces responsivas con Bootstrap</li>
                            <li>Uso de Git para control de versiones</li>
                            <li>Debugging y resolución de problemas</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <h4 class="text-info">
                            <i class="bi bi-lightbulb me-2"></i>
                            Competencias Transversales
                        </h4>
                        <ul class="mt-3">
                            <li>Pensamiento lógico y resolución de problemas</li>
                            <li>Planificación y organización de proyectos</li>
                            <li>Investigación y auto-aprendizaje</li>
                            <li>Atención al detalle y precisión</li>
                            <li>Creatividad en el diseño de interfaces</li>
                            <li>Documentación y comunicación técnica</li>
                            <li>Trabajo en equipo y colaboración</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Relation to Reforestation -->
<section class="py-5">
    <div class="container">
        <div class="card shadow-lg border-0">
            <div class="card-body p-5">
                <h2 class="h3 mb-4 text-center text-success">
                    <i class="bi bi-tree-fill me-2"></i>
                    Conexión con el Proyecto de Reforestación
                </h2>
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <p class="lead mb-3">
                            La programación web es la herramienta que integra todos los conocimientos del proyecto 
                            de reforestación en una plataforma accesible y funcional.
                        </p>
                        <ul class="list-unstyled">
                            <li class="mb-2">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <strong>Difusión educativa:</strong> La plataforma web permite compartir conocimientos 
                                sobre reforestación con un público amplio
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <strong>Herramientas prácticas:</strong> La calculadora facilita la planificación 
                                real de proyectos de reforestación
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <strong>Integración interdisciplinaria:</strong> Conecta matemáticas, ecología, 
                                humanidades y programación
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <strong>Accesibilidad:</strong> Sistema multiidioma para alcance internacional
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <strong>Impacto ambiental:</strong> Facilita la toma de decisiones informadas 
                                para proyectos de conservación
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 text-center">
                        <i class="bi bi-laptop-fill text-success display-1"></i>
                        <p class="text-muted mt-3">Tecnología al servicio del medio ambiente</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-5 bg-success text-white">
    <div class="container text-center">
        <h2 class="mb-3">Explora las Funcionalidades</h2>
        <p class="lead mb-4">
            Descubre cómo la programación web facilita la educación ambiental
        </p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="../index.php" class="btn btn-light btn-lg">
                <i class="bi bi-house-fill me-2"></i>
                Inicio
            </a>
            <a href="calculator.php" class="btn btn-outline-light btn-lg">
                <i class="bi bi-calculator me-2"></i>
                Calculadora
            </a>
            <a href="cbta_project.php" class="btn btn-outline-light btn-lg">
                <i class="bi bi-geo-alt me-2"></i>
                Proyecto CBTA
            </a>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
