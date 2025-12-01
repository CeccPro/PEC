<?php
/**
 * Página de Áreas Académicas
 * Explica la relación de diferentes materias con la reforestación
 */

require_once 'config.php';

includeHeader(t('nav_academic_areas'), 'areas');
?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <h1 class="display-4 fw-bold mb-4"><?php echo t('areas_title'); ?></h1>
        <p class="lead"><?php echo t('areas_subtitle'); ?></p>
    </div>
</section>

<!-- Introducción -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="alert alert-info">
                    <i class="bi bi-info-circle-fill"></i> 
                    <strong>Enfoque Multidisciplinario:</strong> La reforestación no es solo una actividad ecológica, sino un proyecto complejo que requiere la integración de múltiples disciplinas académicas para su éxito. Cada área del conocimiento aporta herramientas y perspectivas únicas que son fundamentales para la planificación, implementación y monitoreo de proyectos de restauración forestal.
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Matemáticas -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 order-md-2">
                <img src="https://a.storyblok.com/f/160385/99d4c71566/combo_mate.jpg/m/?w=256&q=100" 
                     class="img-fluid rounded shadow mb-3" 
                     style="width: 800px; height: auto;"
                     alt="Matemáticas en Reforestación">
            </div>            <div class="col-md-6 order-md-1">
                <h2 class="text-primary mb-4">
                    <i class="bi bi-calculator-fill"></i> Matemáticas: Funciones y Derivadas
                </h2>
                
                <h4>Funciones en Reforestación</h4>
                <p>Las funciones matemáticas modelan el comportamiento de variables forestales a lo largo del tiempo:</p>
                
                <h5 class="mt-3">Función de Crecimiento de Árboles</h5>
                <div class="card bg-white mb-3">
                    <div class="card-body">
                        <p class="mb-1"><code>h(t) = h_max × (1 - e<sup>-kt</sup>)</code></p>
                        <p class="mb-0"><small>Donde h(t) es la altura en función del tiempo, h_max es la altura máxima, k es la tasa de crecimiento</small></p>
                    </div>
                </div>
                
                <p><strong>Ejemplo:</strong> Un fresno con altura máxima de 25m y k = 0.15:</p>
                <p><code>h(10) = 25 × (1 - e<sup>-0.15×10</sup>) = 25 × (1 - 0.223) ≈ 19.4 metros a los 10 años</code></p>
                
                <h5 class="mt-3">Función de Densidad de Plantación</h5>
                <div class="card bg-white mb-3">
                    <div class="card-body">
                        <p class="mb-1"><code>D(e) = 10,000 / e²</code></p>
                        <p class="mb-0"><small>Donde D es densidad (árboles/ha) y e es el espaciamiento en metros</small></p>
                    </div>
                </div>
                
                <h4 class="mt-4">Derivadas: Tasas de Cambio en Ecosistemas</h4>
                <p>Las derivadas nos permiten analizar <strong>cómo cambian</strong> las variables forestales:</p>
                
                <h5 class="mt-3">Tasa de Crecimiento Instantánea</h5>
                <div class="card bg-white mb-3">
                    <div class="card-body">
                        <p class="mb-1"><code>dh/dt = k × h_max × e<sup>-kt</sup></code></p>
                        <p class="mb-0"><small>Esta derivada indica cuántos metros crece el árbol por año en un momento dado</small></p>
                    </div>
                </div>
                
                <p><strong>Interpretación:</strong> La derivada es máxima al inicio (crecimiento rápido juvenil) y disminuye con el tiempo (madurez).</p>
                
                <h5 class="mt-3">Tasa de Captura de CO₂</h5>
                <ul>
                    <li>Si C(t) es la cantidad de CO₂ capturado en función del tiempo</li>
                    <li>dC/dt representa la tasa de captura en toneladas por año</li>
                    <li>Permite identificar el momento de máxima eficiencia de captura</li>
                </ul>
                
                <h5 class="mt-3">Optimización con Derivadas</h5>
                <div class="card bg-light mb-3">
                    <div class="card-body">
                        <p><strong>Problema:</strong> ¿Cuál es el espaciamiento óptimo para maximizar captura de CO₂?</p>
                        <p class="mb-0"><strong>Solución:</strong> Encontrar dónde la derivada de la función de captura total es cero (máximo local)</p>
                    </div>
                </div>
                
                <h4 class="mt-4">Aplicaciones Prácticas</h4>
                <ul>
                    <li><strong>Modelos de crecimiento:</strong> Funciones exponenciales, logísticas y polinomiales</li>
                    <li><strong>Análisis de tendencias:</strong> Derivadas para identificar aceleración o desaceleración</li>
                    <li><strong>Predicción:</strong> Usar funciones para proyectar desarrollo futuro</li>
                    <li><strong>Puntos críticos:</strong> Determinar momentos óptimos para manejo (podas, raleos)</li>
                </ul>
                
                <div class="alert alert-info mt-3">
                    <strong>Conexión con el proyecto:</strong> Las calculadoras de este sitio utilizan funciones matemáticas para estimar densidades y captura de carbono, aplicando directamente los conceptos de funciones y sus derivadas.
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Humanidades -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="https://www.bbva.com/wp-content/uploads/2022/03/reforestacio%CC%81n-.jpg" 
                    class="img-fluid rounded shadow mb-3"
                    style="width: 600px; height: auto;"
                    alt="Humanidades">
            </div>            <div class="col-md-6">
                <h2 class="text-success mb-4">
                    <i class="bi bi-book-fill"></i> Humanidades: Ética Ambiental
                </h2>
                
                <h4>Ética y Responsabilidad Ambiental</h4>
                <p>El estudio de la ética nos lleva a reflexionar profundamente sobre nuestra relación moral con el medio ambiente y las generaciones futuras:</p>
                
                <h5 class="mt-3">Principios Éticos en Reforestación</h5>
                <ul>
                    <li><strong>Principio de No Maleficencia:</strong> "No dañar" - Evitar acciones que degraden ecosistemas</li>
                    <li><strong>Principio de Beneficencia:</strong> Obligación activa de mejorar y restaurar ecosistemas dañados</li>
                    <li><strong>Principio de Justicia:</strong> Distribución equitativa de beneficios y cargas ambientales</li>
                    <li><strong>Principio de Autonomía:</strong> Respeto a decisiones comunitarias sobre sus territorios</li>
                </ul>
                
                <h4 class="mt-4">Dilemas Éticos en Proyectos de Reforestación</h4>
                
                <div class="card bg-light mb-3">
                    <div class="card-body">
                        <h6>Dilema 1: ¿Especies Nativas vs Exóticas de Rápido Crecimiento?</h6>
                        <p class="small"><strong>Conflicto:</strong> Las especies exóticas capturan CO₂ más rápido, pero pueden amenazar biodiversidad nativa.</p>
                        <p class="small mb-0"><strong>Análisis ético:</strong> ¿Priorizamos beneficio climático inmediato o integridad ecológica a largo plazo?</p>
                    </div>
                </div>
                
                <div class="card bg-light mb-3">
                    <div class="card-body">
                        <h6>Dilema 2: ¿Quién Decide el Uso de la Tierra?</h6>
                        <p class="small"><strong>Conflicto:</strong> Autoridades quieren reforestar áreas que comunidades usan para cultivo.</p>
                        <p class="small mb-0"><strong>Análisis ético:</strong> Balance entre necesidades actuales de subsistencia y conservación ambiental.</p>
                    </div>
                </div>
                
                <h4 class="mt-4">Justicia Intergeneracional</h4>
                <p>Concepto central en ética ambiental:</p>
                <ul>
                    <li><strong>Definición:</strong> Las generaciones presentes tienen obligaciones morales hacia las futuras</li>
                    <li><strong>Aplicación:</strong> Plantar árboles hoy para que personas no nacidas disfruten sus beneficios</li>
                    <li><strong>Pregunta ética:</strong> ¿Tenemos derecho a agotar recursos que otros necesitarán?</li>
                </ul>
                
                <h4 class="mt-4">Antropocentrismo vs Biocentrismo</h4>
                <div class="row">
                    <div class="col-6">
                        <div class="card border-warning h-100">
                            <div class="card-body">
                                <h6>Antropocentrismo</h6>
                                <p class="small">Valorar naturaleza por su utilidad para humanos</p>
                                <p class="small mb-0"><em>Ej: Reforestar para oxígeno y madera</em></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card border-success h-100">
                            <div class="card-body">
                                <h6>Biocentrismo</h6>
                                <p class="small">Reconocer valor intrínseco de toda vida</p>
                                <p class="small mb-0"><em>Ej: Reforestar porque bosques tienen derecho a existir</em></p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <h4 class="mt-4">Responsabilidad Moral Individual y Colectiva</h4>
                <ul>
                    <li><strong>Responsabilidad individual:</strong> Cada persona tiene deber moral de cuidar el ambiente</li>
                    <li><strong>Responsabilidad colectiva:</strong> Instituciones, gobiernos y empresas tienen mayor capacidad de impacto</li>
                    <li><strong>Pregunta:</strong> ¿Es suficiente la acción individual o se requiere cambio sistémico?</li>
                </ul>
                
                <h4 class="mt-4">Ética del Cuidado Aplicada al Ambiente</h4>
                <p>Perspectiva que enfatiza relaciones de cuidado y responsabilidad:</p>
                <ul>
                    <li>Ver naturaleza como parte de nuestra red de relaciones de cuidado</li>
                    <li>Reconocer interdependencia entre humanos y ecosistemas</li>
                    <li>Cultivar virtudes ambientales: frugalidad, respeto, gratitud</li>
                </ul>
                
                <div class="alert alert-warning mt-4">
                    <strong>Reflexión ética:</strong> La deforestación global representa una crisis ética porque viola principios de no maleficencia, justicia intergeneracional y respeto a la vida. La reforestación es una respuesta ética a este daño, buscando reparar y restaurar lo que se ha perdido.
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Programación -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 order-md-2">
                <img src="https://geoinnova.org/wp-content/uploads/2021/08/sistema_plantacion.jpg" 
                     class="img-fluid rounded shadow mb-3" 
                     style="width: 600px; height: auto;"
                     alt="Programación">
            </div>            <div class="col-md-6 order-md-1">
                <h2 class="text-info mb-4">
                    <i class="bi bi-code-slash"></i> Programación: HTML, CSS y PHP
                </h2>
                
                <h4>HTML: Estructura del Contenido</h4>
                <p>HTML (HyperText Markup Language) es el lenguaje fundamental para estructurar páginas web. Este proyecto utiliza HTML semántico:</p>
                
                <div class="card bg-white mb-3">
                    <div class="card-body">
                        <h6>Ejemplo: Estructura de una Sección</h6>
                        <pre class="mb-0"><code class="language-html">&lt;section class="py-5"&gt;
    &lt;div class="container"&gt;
        &lt;h2&gt;Título de la Sección&lt;/h2&gt;
        &lt;p&gt;Contenido sobre reforestación...&lt;/p&gt;
        &lt;ul&gt;
            &lt;li&gt;Elemento de lista&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
&lt;/section&gt;</code></pre>
                    </div>
                </div>
                
                <h5 class="mt-3">Elementos HTML Usados en el Proyecto</h5>
                <ul>
                    <li><strong>&lt;section&gt;:</strong> Organiza contenido temático (información, calculadoras, etc.)</li>
                    <li><strong>&lt;nav&gt;:</strong> Menú de navegación principal</li>
                    <li><strong>&lt;article&gt;:</strong> Contenido independiente y reutilizable</li>
                    <li><strong>&lt;form&gt;:</strong> Formularios de login, registro y calculadoras</li>
                    <li><strong>&lt;table&gt;:</strong> Tablas de datos (especies, presupuestos, cronogramas)</li>
                </ul>
                
                <h4 class="mt-4">CSS: Diseño y Presentación</h4>
                <p>CSS (Cascading Style Sheets) controla la apariencia visual del sitio:</p>
                
                <div class="card bg-white mb-3">
                    <div class="card-body">
                        <h6>Ejemplo: Variables CSS para Tema Verde</h6>
                        <pre class="mb-0"><code class="language-css">:root {
    --primary-green: #2d5016;
    --secondary-green: #5a7c3e;
    --light-green: #a8c686;
}

.btn-primary {
    background-color: var(--primary-green);
    border-color: var(--primary-green);
}

.card:hover {
    transform: translateY(-5px);
    transition: transform 0.3s;
}</code></pre>
                    </div>
                </div>
                
                <h5 class="mt-3">Conceptos CSS Aplicados</h5>
                <ul>
                    <li><strong>Variables CSS:</strong> Colores reutilizables del tema ecológico</li>
                    <li><strong>Flexbox & Grid:</strong> Layouts responsivos para diferentes dispositivos</li>
                    <li><strong>Transiciones:</strong> Efectos suaves en hover de tarjetas</li>
                    <li><strong>Media Queries:</strong> Adaptación a móviles y tablets</li>
                    <li><strong>Bootstrap 5:</strong> Framework CSS para desarrollo rápido</li>
                </ul>
                
                <h4 class="mt-4">PHP: Lógica del Servidor</h4>
                <p>PHP procesa la lógica del backend, maneja usuarios y genera contenido dinámico:</p>
                
                <div class="card bg-white mb-3">
                    <div class="card-body">
                        <h6>Ejemplo: Sistema de Autenticación</h6>
                        <pre class="mb-0"><code class="language-php">&lt;?php
// Verificar credenciales del usuario
function loginUser($username, $password) {
    $users = loadUsers(); // Cargar desde JSON
    
    foreach ($users as $user) {
        if ($user['username'] === $username && 
            password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            return ['success' => true];
        }
    }
    return ['success' => false];
}
?&gt;</code></pre>
                    </div>
                </div>
                
                <h5 class="mt-3">Funcionalidades PHP en el Proyecto</h5>
                <ul>
                    <li><strong>Sesiones:</strong> Mantener usuarios logueados mientras navegan</li>
                    <li><strong>Cookies:</strong> Recordar preferencia de idioma y usuario</li>
                    <li><strong>Hashing de passwords:</strong> Seguridad con bcrypt</li>
                    <li><strong>Base de datos JSON:</strong> Almacenar usuarios sin SQL</li>
                    <li><strong>Sistema multiidioma:</strong> Traducción dinámica de contenido</li>
                    <li><strong>Inclusión de archivos:</strong> Reutilizar header y footer</li>
                </ul>
                
                <h4 class="mt-4">Integración HTML + CSS + PHP</h4>
                <div class="card bg-light mb-3">
                    <div class="card-body">
                        <h6>Flujo Completo de una Página</h6>
                        <ol class="small mb-0">
                            <li><strong>PHP:</strong> Procesa lógica (verificar sesión, cargar idioma)</li>
                            <li><strong>HTML:</strong> Genera estructura del contenido dinámicamente</li>
                            <li><strong>CSS:</strong> Aplica estilos y diseño responsivo</li>
                            <li><strong>JavaScript:</strong> Añade interactividad (calculadoras)</li>
                        </ol>
                    </div>
                </div>
                
                <h5 class="mt-3">Ejemplo Completo: Botón de Cambio de Idioma</h5>
                <div class="card bg-white mb-3">
                    <div class="card-body">
                        <p class="small mb-2"><strong>PHP - Lógica:</strong></p>
                        <pre class="small mb-2"><code>&lt;?php 
$lang = isset($_COOKIE['lang']) ? $_COOKIE['lang'] : 'es';
?&gt;</code></pre>
                        
                        <p class="small mb-2"><strong>HTML - Estructura:</strong></p>
                        <pre class="small mb-2"><code>&lt;a href="?lang=es" class="lang-btn"&gt;ES&lt;/a&gt;</code></pre>
                        
                        <p class="small mb-2"><strong>CSS - Diseño:</strong></p>
                        <pre class="small mb-0"><code>.lang-btn {
    padding: 5px 10px;
    background: rgba(255,255,255,0.2);
}</code></pre>
                    </div>
                </div>
                
                <h4 class="mt-4">Herramientas de Desarrollo</h4>
                <ul>
                    <li><strong>VS Code:</strong> Editor recomendado con extensiones PHP/HTML</li>
                    <li><strong>XAMPP:</strong> Servidor local Apache + PHP para pruebas</li>
                    <li><strong>Bootstrap 5:</strong> Framework CSS para diseño rápido</li>
                    <li><strong>Bootstrap Icons:</strong> Iconografía profesional</li>
                    <li><strong>DevTools:</strong> Inspector del navegador para debugging</li>
                </ul>
                
                <div class="alert alert-info mt-3">
                    <strong>Proyecto práctico:</strong> Este sitio web completo está construido con HTML, CSS y PHP, demostrando cómo estos lenguajes trabajan juntos para crear una aplicación web funcional con autenticación, multiidioma y calculadoras interactivas.
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Estudio de Ecosistemas -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="https://www.fundacionaquae.org/wp-content/uploads/2022/07/reforestacion.jpg" 
                     class="img-fluid rounded shadow mb-3" 
                     alt="Ecosistemas">
            </div>            <div class="col-md-6">
                <h2 class="text-warning mb-4">
                    <i class="bi bi-flower1"></i> Estudio de Ecosistemas: Especímenes Vegetales
                </h2>
                
                <h4>Identificación y Clasificación de Especímenes</h4>
                <p>El estudio de especímenes vegetales es fundamental para proyectos de reforestación exitosos:</p>
                
                <h5 class="mt-3">Morfología Vegetal</h5>
                <p>Características observables para identificar especies:</p>
                <ul>
                    <li><strong>Hojas:</strong> Forma (lanceolada, ovalada, compuesta), borde (entero, serrado), venación, filotaxia</li>
                    <li><strong>Tallo:</strong> Tipo (herbáceo, leñoso), corteza, lenticelas, médula</li>
                    <li><strong>Flores:</strong> Simetría, número de pétalos, tipo de inflorescencia</li>
                    <li><strong>Frutos y semillas:</strong> Tipo (drupa, legumbre, cápsula), dispersión</li>
                    <li><strong>Raíces:</strong> Pivotante, fasciculada, adventicias</li>
                </ul>
                
                <div class="card bg-light mb-3">
                    <div class="card-body">
                        <h6>Ejemplo: Identificación de <em>Fraxinus uhdei</em> (Fresno)</h6>
                        <ul class="small mb-0">
                            <li><strong>Hojas:</strong> Compuestas, imparipinnadas, 5-9 foliolos</li>
                            <li><strong>Foliolos:</strong> Lanceolados, margen serrado, 6-12 cm</li>
                            <li><strong>Corteza:</strong> Gris-parda, fisurada en árboles maduros</li>
                            <li><strong>Fruto:</strong> Sámara alada (dispersión por viento)</li>
                        </ul>
                    </div>
                </div>
                
                <h4 class="mt-4">Técnicas de Recolección y Preservación</h4>
                
                <h5 class="mt-3">Recolección de Especímenes</h5>
                <div class="card bg-white mb-3">
                    <div class="card-body">
                        <h6>Materiales Necesarios:</h6>
                        <ul class="small">
                            <li>Tijeras de podar o navaja</li>
                            <li>Prensa botánica o periódicos</li>
                            <li>Libreta de campo y lápiz</li>
                            <li>Bolsas de papel o plástico perforado</li>
                            <li>GPS o ubicación aproximada</li>
                        </ul>
                    </div>
                </div>
                
                <h5 class="mt-3">Proceso de Herborización</h5>
                <ol>
                    <li><strong>Recolectar:</strong> Obtener muestra completa (hojas, flores/frutos si hay, parte de tallo)</li>
                    <li><strong>Prensar:</strong> Colocar entre papeles absorbentes con peso uniforme</li>
                    <li><strong>Secar:</strong> Cambiar papeles diariamente por 7-10 días</li>
                    <li><strong>Montar:</strong> Fijar espécimen seco en cartulina con cinta o pegamento</li>
                    <li><strong>Etiquetar:</strong> Datos completos (especie, ubicación, fecha, colector)</li>
                </ol>
                
                <h4 class="mt-4">Anatomía Vegetal</h4>
                <p>Estudio de estructuras internas (requiere microscopio):</p>
                <ul>
                    <li><strong>Tejidos meristemáticos:</strong> Crecimiento apical y lateral</li>
                    <li><strong>Xilema:</strong> Transporte de agua y minerales</li>
                    <li><strong>Floema:</strong> Transporte de azúcares</li>
                    <li><strong>Estomas:</strong> Intercambio gaseoso en hojas</li>
                    <li><strong>Tricomas:</strong> Pelos protectores</li>
                </ul>
                
                <h4 class="mt-4">Claves Taxonómicas</h4>
                <p>Herramientas dicotómicas para identificación:</p>
                
                <div class="card bg-white mb-3">
                    <div class="card-body">
                        <h6>Ejemplo de Clave Simplificada:</h6>
                        <pre class="small mb-0">1a. Hojas simples ...................... ir a 2
1b. Hojas compuestas ................... ir a 3

2a. Hojas con margen entero ............ Schinus molle
2b. Hojas con margen dentado ........... Quercus rugosa

3a. Hojas bipinnadas ................... Acacia farnesiana
3b. Hojas pinnadas ..................... Fraxinus uhdei</pre>
                    </div>
                </div>
                
                <h4 class="mt-4">Adaptaciones Ecológicas</h4>
                <p>Relación entre estructura y función en diferentes ambientes:</p>
                <ul>
                    <li><strong>Xerofitas:</strong> Hojas reducidas, cutícula gruesa (adaptación a sequía)</li>
                    <li><strong>Mesofitas:</strong> Hojas normales, ambiente moderado</li>
                    <li><strong>Hidrofitas:</strong> Aerénquima, adaptación a ambientes acuáticos</li>
                    <li><strong>Esclerofitas:</strong> Hojas duras y coriáceas</li>
                </ul>
                
                <h4 class="mt-4">Especies Nativas Importantes para Reforestación</h4>
                <div class="table-responsive">
                    <table class="table table-sm table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th>Especie</th>
                                <th>Nombre Común</th>
                                <th>Características Distintivas</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><em>Fraxinus uhdei</em></td>
                                <td>Fresno</td>
                                <td>Hojas compuestas, sámaras aladas</td>
                            </tr>
                            <tr>
                                <td><em>Quercus rugosa</em></td>
                                <td>Encino</td>
                                <td>Hojas coriáceas, bellotas</td>
                            </tr>
                            <tr>
                                <td><em>Schinus molle</em></td>
                                <td>Pirul</td>
                                <td>Hojas pinnadas aromáticas, frutos rosados</td>
                            </tr>
                            <tr>
                                <td><em>Acacia farnesiana</em></td>
                                <td>Huizache</td>
                                <td>Hojas bipinnadas, flores amarillas fragantes</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <h4 class="mt-4">Aplicación Práctica en Reforestación</h4>
                <ul>
                    <li><strong>Inventarios:</strong> Identificar especies existentes antes de plantar</li>
                    <li><strong>Selección:</strong> Elegir especies compatibles con el ecosistema</li>
                    <li><strong>Propagación:</strong> Conocer tipo de fruto/semilla para reproducción</li>
                    <li><strong>Monitoreo:</strong> Verificar identidad de plántulas y crecimiento</li>
                    <li><strong>Educación:</strong> Crear herbarios educativos en escuelas</li>
                </ul>
                
                <div class="alert alert-success mt-3">
                    <strong>Actividad sugerida:</strong> Crear un herbario del CBTA 35 recolectando y preservando especímenes de las especies que se plantarán en el proyecto de reforestación. Esto servirá como material educativo permanente.
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Lengua y Comunicación -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 order-md-2">
                <img src="https://www.wrm.org.uy/sites/default/files/styles/529_x_353_exactly/public/images/Editorial_5.jpg?itok=CAspI8aa" 
                    class="img-fluid rounded shadow mb-3" 
                    style="width: 600px; height: auto;"
                    alt="Comunicación">
            </div>            <div class="col-md-6 order-md-1">
                <h2 class="text-danger mb-4">
                    <i class="bi bi-chat-dots-fill"></i> Lengua y Comunicación: Redacción de Ensayos
                </h2>
                
                <h4>El Ensayo como Herramienta de Análisis</h4>
                <p>La redacción de ensayos permite explorar, argumentar y comunicar ideas sobre temas ambientales de forma estructurada y persuasiva:</p>
                
                <h5 class="mt-3">Estructura del Ensayo</h5>
                <div class="card bg-white mb-3">
                    <div class="card-body">
                        <ol class="mb-0">
                            <li><strong>Introducción:</strong> Presenta el tema, contexto y tesis principal</li>
                            <li><strong>Desarrollo:</strong> Argumentos con evidencia que sostienen la tesis</li>
                            <li><strong>Conclusión:</strong> Síntesis de argumentos y reflexión final</li>
                        </ol>
                    </div>
                </div>
                
                <h4 class="mt-4">Tipos de Ensayos Aplicados a Reforestación</h4>
                
                <h5 class="mt-3">1. Ensayo Expositivo</h5>
                <div class="card bg-light mb-3">
                    <div class="card-body">
                        <p class="small mb-1"><strong>Objetivo:</strong> Explicar e informar sobre un tema</p>
                        <p class="small mb-1"><strong>Ejemplo de título:</strong> "Los Procesos de Sucesión Ecológica en la Reforestación"</p>
                        <p class="small mb-0"><strong>Enfoque:</strong> Presenta información objetiva, sin argumentar posición personal</p>
                    </div>
                </div>
                
                <h5 class="mt-3">2. Ensayo Argumentativo</h5>
                <div class="card bg-light mb-3">
                    <div class="card-body">
                        <p class="small mb-1"><strong>Objetivo:</strong> Defender una postura con argumentos sólidos</p>
                        <p class="small mb-1"><strong>Ejemplo de título:</strong> "Por Qué Debemos Priorizar Especies Nativas sobre Exóticas en Proyectos de Reforestación"</p>
                        <p class="small mb-0"><strong>Enfoque:</strong> Tesis clara + argumentos + contraargumentos refutados + evidencia científica</p>
                    </div>
                </div>
                
                <h5 class="mt-3">3. Ensayo Crítico</h5>
                <div class="card bg-light mb-3">
                    <div class="card-body">
                        <p class="small mb-1"><strong>Objetivo:</strong> Analizar y evaluar críticamente un tema</p>
                        <p class="small mb-1"><strong>Ejemplo de título:</strong> "Análisis Crítico de las Políticas de Reforestación en México: Aciertos y Limitaciones"</p>
                        <p class="small mb-0"><strong>Enfoque:</strong> Evalúa fortalezas y debilidades, propone mejoras</p>
                    </div>
                </div>
                
                <h5 class="mt-3">4. Ensayo Narrativo-Reflexivo</h5>
                <div class="card bg-light mb-3">
                    <div class="card-body">
                        <p class="small mb-1"><strong>Objetivo:</strong> Combinar experiencia personal con reflexión profunda</p>
                        <p class="small mb-1"><strong>Ejemplo de título:</strong> "Mi Experiencia Plantando Árboles: Una Reflexión sobre Nuestra Conexión con la Naturaleza"</p>
                        <p class="small mb-0"><strong>Enfoque:</strong> Primera persona, narración + análisis personal</p>
                    </div>
                </div>
                
                <h4 class="mt-4">Elementos de un Buen Ensayo</h4>
                
                <h5 class="mt-3">Tesis Clara y Contundente</h5>
                <div class="card bg-white mb-3">
                    <div class="card-body">
                        <p class="small mb-2"><strong>❌ Débil:</strong> "La reforestación es importante."</p>
                        <p class="small mb-0"><strong>✓ Fuerte:</strong> "La reforestación con especies nativas representa la estrategia más efectiva para restaurar ecosistemas degradados porque promueve biodiversidad, resilencia climática y beneficios socioculturales a largo plazo."</p>
                    </div>
                </div>
                
                <h5 class="mt-3">Argumentación Sólida</h5>
                <ul>
                    <li><strong>Evidencia científica:</strong> Citas de estudios, estadísticas, datos verificables</li>
                    <li><strong>Ejemplos concretos:</strong> Casos de éxito o fracaso documentados</li>
                    <li><strong>Razonamiento lógico:</strong> Conexión clara entre premisas y conclusiones</li>
                    <li><strong>Contraargumentos:</strong> Anticipar objeciones y refutarlas</li>
                </ul>
                
                <h5 class="mt-3">Cohesión y Coherencia</h5>
                <div class="card bg-white mb-3">
                    <div class="card-body">
                        <p class="small mb-1"><strong>Conectores argumentativos:</strong></p>
                        <ul class="small mb-0">
                            <li><em>Para añadir:</em> además, asimismo, por otra parte</li>
                            <li><em>Para contrastar:</em> sin embargo, no obstante, por el contrario</li>
                            <li><em>Para ejemplificar:</em> por ejemplo, es decir, así como</li>
                            <li><em>Para concluir:</em> en conclusión, finalmente, en síntesis</li>
                        </ul>
                    </div>
                </div>
                
                <h4 class="mt-4">Proceso de Escritura</h4>
                <ol>
                    <li><strong>Planeación:</strong> Investigar, delimitar tema, formular tesis</li>
                    <li><strong>Esquema:</strong> Organizar ideas en estructura lógica</li>
                    <li><strong>Primer borrador:</strong> Escribir sin preocuparse por perfección</li>
                    <li><strong>Revisión de contenido:</strong> Verificar argumentos, evidencia, coherencia</li>
                    <li><strong>Revisión de forma:</strong> Ortografía, gramática, puntuación, estilo</li>
                    <li><strong>Versión final:</strong> Pulir detalles, verificar formato</li>
                </ol>
                
                <h4 class="mt-4">Formato APA para Referencias</h4>
                <div class="card bg-white mb-3">
                    <div class="card-body">
                        <h6>Ejemplos de Referencias:</h6>
                        <p class="small mb-1"><strong>Libro:</strong></p>
                        <p class="small mb-2"><em>Chazdon, R. L. (2008). Second growth: the promise of tropical forest regeneration in an age of deforestation. University of Chicago Press.</em></p>
                        
                        <p class="small mb-1"><strong>Artículo de revista:</strong></p>
                        <p class="small mb-0"><em>Pan, Y., Birdsey, R. A., Fang, J., et al. (2011). A large and persistent carbon sink in the world's forests. Science, 333(6045), 988-993.</em></p>
                    </div>
                </div>
                
                <h4 class="mt-4">Temas de Ensayo Sugeridos sobre Reforestación</h4>
                <ul>
                    <li>"La Responsabilidad Ética de las Generaciones Actuales en la Reforestación"</li>
                    <li>"Análisis Comparativo: Reforestación con Especies Nativas vs. Exóticas"</li>
                    <li>"El Rol de la Educación Ambiental en Proyectos de Reforestación Comunitaria"</li>
                    <li>"Cambio Climático y Urgencia de la Reforestación: Una Perspectiva Crítica"</li>
                    <li>"Mi Visión para un CBTA 35 más Verde: Propuesta de Reforestación Estudiantil"</li>
                </ul>
                
                <h4 class="mt-4">Estilo y Voz en Ensayos Académicos</h4>
                <ul>
                    <li><strong>Tono formal:</strong> Evitar jerga coloquial, usar vocabulario académico</li>
                    <li><strong>Objetividad:</strong> Presentar argumentos balanceados, no solo emocionales</li>
                    <li><strong>Tercera persona:</strong> "Se argumenta que..." en lugar de "Yo pienso que..."</li>
                    <li><strong>Voz activa:</strong> Preferir "Los investigadores demostraron" sobre "Fue demostrado"</li>
                </ul>
                
                <div class="alert alert-info mt-3">
                    <strong>Ejercicio práctico:</strong> Redacta un ensayo argumentativo de 500-800 palabras sobre "La Importancia de Incluir la Reforestación en el Currículo Escolar del CBTA 35", utilizando información de este sitio web como evidencia.
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Integración Multidisciplinaria -->
<section class="py-5">
    <div class="container">
        <h2 class="section-title text-center">Integración Multidisciplinaria</h2>
        
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card border-primary">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Ejemplo de Proyecto Integrado</h5>
                        <p>Un proyecto exitoso de reforestación en el CBTA 35 requeriría:</p>
                        
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="table-light">
                                    <tr>
                                        <th>Fase</th>
                                        <th>Disciplinas Involucradas</th>
                                        <th>Actividades Clave</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>Diagnóstico</strong></td>
                                        <td>Ecosistemas, Matemáticas, Programación</td>
                                        <td>Análisis de suelo, mapeo SIG, cálculo de áreas, inventario de biodiversidad</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Diseño</strong></td>
                                        <td>Todas las áreas</td>
                                        <td>Selección de especies, cálculo de densidad, diseño participativo, presupuesto</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Implementación</strong></td>
                                        <td>Ecosistemas, Humanidades, Lengua</td>
                                        <td>Plantación, capacitación comunitaria, documentación fotográfica</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Monitoreo</strong></td>
                                        <td>Matemáticas, Programación, Ecosistemas</td>
                                        <td>Mediciones periódicas, análisis estadístico, base de datos, evaluación ecológica</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Comunicación</strong></td>
                                        <td>Lengua, Programación</td>
                                        <td>Informes, sitio web, redes sociales, eventos públicos</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-5 bg-primary text-white">
    <div class="container text-center">
        <h2 class="mb-4">¿Listo para ver cómo aplicar estos conocimientos?</h2>
        <p class="lead mb-4">Explora nuestro proyecto específico para el CBTA 35</p>
        <a href="proyecto_cbta.php" class="btn btn-light btn-lg">
            <i class="bi bi-map-fill"></i> Ver Proyecto CBTA 35
        </a>
    </div>
</section>

<?php includeFooter(); ?>
