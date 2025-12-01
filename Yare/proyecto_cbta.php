<?php
/**
 * Página del Proyecto CBTA 35
 * Describe paso a paso el proyecto de reforestación específico
 */

require_once 'config.php';

includeHeader(t('nav_cbta_project'), 'project');
?>

<!-- Hero Section -->
<section class="hero-section" style="background: linear-gradient(rgba(45, 80, 22, 0.7), rgba(90, 124, 62, 0.7)), url('https://www.fundacionaquae.org/wp-content/uploads/2022/03/reforestar-e1646755472702-1024x512.jpg'); background-size: cover; background-position: center;">
    <div class="container">
        <h1 class="display-4 fw-bold mb-4"><?php echo t('cbta_title'); ?></h1>
        <p class="lead"><?php echo t('cbta_subtitle'); ?></p>
    </div>
</section>

<!-- Introducción al Proyecto -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <h2 class="section-title text-center">Propuesta de Reforestación CBTA 35</h2>
                
                <div class="alert alert-info">
                    <h5><i class="bi bi-info-circle-fill"></i> Contexto del Proyecto</h5>
                    <p class="mb-0"><?php echo t('cbta_intro'); ?>. Este plan se basa en principios científicos de restauración ecológica, aprovechando especies nativas y promoviendo la participación de la comunidad estudiantil y docente.</p>
                </div>
                
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Objetivos del Proyecto</h5>
                        <ul class="mb-0">
                            <li><strong>Ecológicos:</strong> Restaurar la cobertura vegetal y promover el retorno de biodiversidad nativa</li>
                            <li><strong>Educativos:</strong> Crear un laboratorio vivo para el aprendizaje multidisciplinario</li>
                            <li><strong>Sociales:</strong> Fomentar la conciencia ambiental y el trabajo colaborativo</li>
                            <li><strong>Climáticos:</strong> Contribuir al secuestro de carbono y mitigación del cambio climático</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Área del Proyecto -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="section-title text-center">Caracterización del Área</h2>
        
        <div class="row">
            <div class="col-md-6">
                <!-- TODO: Agregar mapa real del CBTA 35 con área señalada -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1914.3470548947355!2d-98.96118241521168!3d19.32735770469535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1ses-419!2smx!4v1764595540873!5m2!1ses-419!2smx" width="800" height="600" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                     class="img-fluid rounded shadow mb-3" alt="Mapa del área" style="width: 100%; height: 400px; margin=0;"></iframe>
            </div>
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Datos del Área</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-sm mb-0">
                            <tr>
                                <th>Superficie total:</th>
                                <td>2.5 hectáreas</td>
                            </tr>
                            <tr>
                                <th>Ubicación:</th>
                                <td>Zona norte del campus CBTA 35</td>
                            </tr>
                            <tr>
                                <th>Topografía:</th>
                                <td>Ligeramente irregular (0-5% pendiente)</td>
                            </tr>
                            <tr>
                                <th>Uso actual:</th>
                                <td>Área descuidada con vegetación escasa</td>
                            </tr>
                            <tr>
                                <th>Acceso:</th>
                                <td>Bueno - Vialidad interna existente</td>
                            </tr>
                        </table>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header bg-success text-white">
                        <h5 class="mb-0">Condiciones del Sitio</h5>
                    </div>
                    <div class="card-body">
                        <p><strong>Suelo:</strong> Franco-arcilloso, pH 6.5, materia orgánica media (2.5%)</p>
                        <p><strong>Clima:</strong> Templado subhúmedo, precipitación anual 800mm</p>
                        <p><strong>Vegetación remanente:</strong> Algunos árboles aislados (Fraxinus, Schinus)</p>
                        <p class="mb-0"><strong>Problemáticas:</strong> Compactación por tránsito, erosión laminar, especies invasoras</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Plan de Acción Paso a Paso -->
<section class="py-5">
    <div class="container">
        <h2 class="section-title text-center">Plan de Acción: Proceso Paso a Paso</h2>
        
        <div class="row">
            <div class="col-md-12">
                <!-- Paso 1 -->
                <div class="card mb-4 border-primary">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">
                            <i class="bi bi-1-circle-fill"></i> <?php echo t('cbta_step'); ?> 1: Diagnóstico y Evaluación Inicial
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <h5>Actividades</h5>
                                <ul>
                                    <li><strong>Análisis de suelo:</strong> Toma de muestras en cuadrícula de 50x50m para análisis físico-químico
                                        <ul>
                                            <li>pH, textura, materia orgánica</li>
                                            <li>Nutrientes (N, P, K, Ca, Mg)</li>
                                            <li>Densidad aparente y compactación</li>
                                        </ul>
                                    </li>
                                    <li><strong>Levantamiento topográfico:</strong> Uso de GPS y estación total para generar curvas de nivel</li>
                                    <li><strong>Inventario de vegetación:</strong> Identificar especies presentes y su estado de salud</li>
                                    <li><strong>Evaluación de fauna:</strong> Registros de aves, mamíferos pequeños e insectos</li>
                                    <li><strong>Análisis hidrológico:</strong> Identificar flujos de agua, áreas de encharcamiento</li>
                                </ul>
                                
                                <h5 class="mt-3">Herramientas Disciplinarias</h5>
                                <ul>
                                    <li><strong>Matemáticas:</strong> Cálculo de áreas, diseño de cuadrícula de muestreo</li>
                                    <li><strong>Ecosistemas:</strong> Técnicas de muestreo, identificación de especies</li>
                                    <li><strong>Programación:</strong> Base de datos para registro, mapeo con QGIS</li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <div class="card bg-light">
                                    <div class="card-body">
                                        <h6>Duración</h6>
                                        <p><strong>4 semanas</strong></p>
                                        
                                        <h6>Responsables</h6>
                                        <p>Estudiantes de agronomía y ecología con asesoría docente</p>
                                        
                                        <h6>Recursos</h6>
                                        <ul class="small mb-0">
                                            <li>Kit de análisis de suelo</li>
                                            <li>GPS y equipo topográfico</li>
                                            <li>Guías de identificación</li>
                                            <li>Formatos de campo</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Paso 2 -->
                <div class="card mb-4 border-success">
                    <div class="card-header bg-success text-white">
                        <h4 class="mb-0">
                            <i class="bi bi-2-circle-fill"></i> <?php echo t('cbta_step'); ?> 2: Diseño del Proyecto
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <h5>Selección de Especies</h5>
                                <p>Basados en el diagnóstico, se proponen las siguientes especies nativas:</p>
                                
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Especie</th>
                                                <th>Nombre Común</th>
                                                <th>Función Ecológica</th>
                                                <th>Cantidad</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><em>Fraxinus uhdei</em></td>
                                                <td>Fresno</td>
                                                <td>Especie pionera, crecimiento rápido</td>
                                                <td>400</td>
                                            </tr>
                                            <tr>
                                                <td><em>Schinus molle</em></td>
                                                <td>Pirul</td>
                                                <td>Tolerante a sequía, atrae aves</td>
                                                <td>300</td>
                                            </tr>
                                            <tr>
                                                <td><em>Quercus rugosa</em></td>
                                                <td>Encino</td>
                                                <td>Especie clímax, alta biodiversidad</td>
                                                <td>350</td>
                                            </tr>
                                            <tr>
                                                <td><em>Crataegus mexicana</em></td>
                                                <td>Tejocote</td>
                                                <td>Frutal nativo, alimento fauna</td>
                                                <td>200</td>
                                            </tr>
                                            <tr>
                                                <td><em>Acacia farnesiana</em></td>
                                                <td>Huizache</td>
                                                <td>Fijador de nitrógeno</td>
                                                <td>250</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" class="text-end"><strong>Total:</strong></td>
                                                <td><strong>1,500 árboles</strong></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                
                                <h5 class="mt-3">Diseño Espacial</h5>
                                <ul>
                                    <li><strong>Modelo:</strong> Plantación mixta con distribución en núcleos</li>
                                    <li><strong>Densidad:</strong> 600 árboles/ha (espaciamiento 4x4m en promedio)</li>
                                    <li><strong>Distribución:</strong> Mezcla de especies según micrositios
                                        <ul>
                                            <li>Zonas bajas/húmedas: Fresno y Sauce</li>
                                            <li>Zonas medias: Encino y Tejocote</li>
                                            <li>Zonas altas/secas: Pirul y Huizache</li>
                                        </ul>
                                    </li>
                                    <li><strong>Áreas complementarias:</strong>
                                        <ul>
                                            <li>Zona de observación de aves (100m²)</li>
                                            <li>Sendero educativo (300m)</li>
                                            <li>Área de composteo (50m²)</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <div class="card bg-light">
                                    <div class="card-body">
                                        <h6>Duración</h6>
                                        <p><strong>3 semanas</strong></p>
                                        
                                        <h6>Responsables</h6>
                                        <p>Comité técnico multidisciplinario</p>
                                        
                                        <h6>Herramientas</h6>
                                        <ul class="small mb-0">
                                            <li>Software CAD/SIG</li>
                                            <li>Calculadora de densidad</li>
                                            <li>Catálogos de especies</li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <div class="card bg-warning mt-3">
                                    <div class="card-body">
                                        <h6>Cálculo Matemático</h6>
                                        <p class="small mb-1"><strong>Área:</strong> 2.5 ha = 25,000 m²</p>
                                        <p class="small mb-1"><strong>Espaciamiento:</strong> 4m × 4m = 16 m²/árbol</p>
                                        <p class="small mb-0"><strong>Capacidad:</strong> 25,000 / 16 = 1,562 árboles</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Paso 3 -->
                <div class="card mb-4 border-info">
                    <div class="card-header bg-info text-white">
                        <h4 class="mb-0">
                            <i class="bi bi-3-circle-fill"></i> <?php echo t('cbta_step'); ?> 3: Preparación del Sitio
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <h5>Actividades de Preparación</h5>
                                
                                <h6>3.1 Limpieza y Desbroce</h6>
                                <ul>
                                    <li>Remoción selectiva de especies invasoras (prioritariamente herbáceas no nativas)</li>
                                    <li>Conservación de árboles existentes como "árboles nodrizas"</li>
                                    <li>Limpieza de basura y escombros</li>
                                    <li>Creación de montón de material vegetal para composteo</li>
                                </ul>
                                
                                <h6>3.2 Mejoramiento del Suelo</h6>
                                <ul>
                                    <li><strong>Descompactación:</strong> Subsolado superficial en áreas muy compactadas</li>
                                    <li><strong>Enmiendas:</strong> 
                                        <ul>
                                            <li>Aplicación de compost (2 kg por cepa)</li>
                                            <li>Inoculación con micorrizas nativas</li>
                                            <li>Corrección de pH si es necesario</li>
                                        </ul>
                                    </li>
                                    <li><strong>Control de erosión:</strong>
                                        <ul>
                                            <li>Construcción de pequeñas zanjas de infiltración</li>
                                            <li>Barreras vivas con pasto nativo</li>
                                            <li>Acolchado con restos vegetales</li>
                                        </ul>
                                    </li>
                                </ul>
                                
                                <h6>3.3 Preparación de Cepas</h6>
                                <ul>
                                    <li>Marcado de puntos de plantación con estacas y GPS</li>
                                    <li>Excavación de cepas 40x40x40 cm</li>
                                    <li>Mezcla de tierra extraída con compost</li>
                                    <li>Protección con malla antifauna si es necesario</li>
                                </ul>
                                
                                <h6>3.4 Infraestructura</h6>
                                <ul>
                                    <li>Instalación de sistema de riego por goteo (zonas prioritarias)</li>
                                    <li>Trazado de senderos educativos con material reciclado</li>
                                    <li>Colocación de señalética educativa</li>
                                    <li>Establecimiento de área de composteo</li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <div class="card bg-light">
                                    <div class="card-body">
                                        <h6>Duración</h6>
                                        <p><strong>6 semanas</strong></p>
                                        
                                        <h6>Cronograma</h6>
                                        <ul class="small">
                                            <li>Semanas 1-2: Limpieza</li>
                                            <li>Semanas 3-4: Suelo</li>
                                            <li>Semanas 5-6: Cepas e infraestructura</li>
                                        </ul>
                                        
                                        <h6>Participantes</h6>
                                        <p class="small">100 estudiantes + 10 docentes (brigadas rotativas)</p>
                                    </div>
                                </div>
                                
                                <div class="alert alert-warning mt-3 small">
                                    <strong>Importante:</strong> Todas las actividades deben realizarse con medidas de seguridad: guantes, botas, herramientas en buen estado.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Paso 4 -->
                <div class="card mb-4 border-warning">
                    <div class="card-header bg-warning text-dark">
                        <h4 class="mb-0">
                            <i class="bi bi-4-circle-fill"></i> <?php echo t('cbta_step'); ?> 4: Producción de Plántulas
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <h5>Establecimiento de Vivero Escolar</h5>
                                
                                <h6>4.1 Infraestructura del Vivero</h6>
                                <ul>
                                    <li><strong>Ubicación:</strong> Área de 200 m² cerca de toma de agua</li>
                                    <li><strong>Componentes:</strong>
                                        <ul>
                                            <li>Área de germinación con sombra 50%</li>
                                            <li>Área de crecimiento con sombra graduable</li>
                                            <li>Área de rustificación a pleno sol</li>
                                            <li>Bodega de insumos y herramientas</li>
                                        </ul>
                                    </li>
                                    <li><strong>Sistema de riego:</strong> Mangueras perforadas con timer</li>
                                </ul>
                                
                                <h6>4.2 Proceso de Propagación</h6>
                                <p><strong>Recolección de Semillas:</strong></p>
                                <ul>
                                    <li>Identificación de árboles madre sanos en la región</li>
                                    <li>Recolección en el momento óptimo de madurez</li>
                                    <li>Procesamiento y almacenamiento adecuado</li>
                                </ul>
                                
                                <p><strong>Sustrato y Contenedores:</strong></p>
                                <ul>
                                    <li>Mezcla: 60% tierra cernida + 30% composta + 10% arena</li>
                                    <li>Bolsas de polietileno 15x25 cm o tubetes reutilizables</li>
                                    <li>Tratamiento pregerminativo según especie</li>
                                </ul>
                                
                                <p><strong>Manejo en Vivero:</strong></p>
                                <ul>
                                    <li>Siembra directa o trasplante de germinadores</li>
                                    <li>Riego frecuente pero sin encharcamiento</li>
                                    <li>Fertilización orgánica mensual</li>
                                    <li>Control manual de plagas y enfermedades</li>
                                    <li>Rustificación 2 meses antes de plantación</li>
                                </ul>
                                
                                <h6>4.3 Criterios de Calidad</h6>
                                <p>Las plántulas listas para plantación deben tener:</p>
                                <ul>
                                    <li>Altura: 25-40 cm según especie</li>
                                    <li>Diámetro de cuello: > 4 mm</li>
                                    <li>Sistema radicular bien desarrollado sin espirales</li>
                                    <li>Follaje verde y vigoroso sin plagas visibles</li>
                                    <li>Lignificación de tallo</li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <div class="card bg-light">
                                    <div class="card-body">
                                        <h6>Duración</h6>
                                        <p><strong>6-8 meses</strong></p>
                                        
                                        <h6>Ventajas del Vivero Escolar</h6>
                                        <ul class="small">
                                            <li>Aprendizaje práctico</li>
                                            <li>Reducción de costos (70%)</li>
                                            <li>Especies locales adaptadas</li>
                                            <li>Disponibilidad garantizada</li>
                                        </ul>
                                        
                                        <h6>Producción Estimada</h6>
                                        <p class="small mb-0">1,800 plántulas (20% extra para reposición)</p>
                                    </div>
                                </div>
                                
                                <div class="card bg-success text-white mt-3">
                                    <div class="card-body">
                                        <h6>Componente Educativo</h6>
                                        <p class="small mb-0">El vivero se integra a prácticas de asignaturas de Biología, Ecología y Producción Vegetal.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Paso 5 -->
                <div class="card mb-4 border-danger">
                    <div class="card-header bg-danger text-white">
                        <h4 class="mb-0">
                            <i class="bi bi-5-circle-fill"></i> <?php echo t('cbta_step'); ?> 5: Plantación
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <h5>Jornada de Plantación</h5>
                                
                                <h6>5.1 Planificación</h6>
                                <ul>
                                    <li><strong>Temporada:</strong> Inicio de temporada de lluvias (junio-julio)</li>
                                    <li><strong>Duración:</strong> 2-3 jornadas intensivas</li>
                                    <li><strong>Participantes:</strong> Toda la comunidad escolar + invitados externos</li>
                                </ul>
                                
                                <h6>5.2 Logística</h6>
                                <ul>
                                    <li><strong>Organización en brigadas:</strong>
                                        <ul>
                                            <li>Brigada de transporte de plántulas</li>
                                            <li>Brigadas de plantación (grupos de 5 personas)</li>
                                            <li>Brigada de riego</li>
                                            <li>Brigada de señalización</li>
                                            <li>Brigada de registro y documentación</li>
                                        </ul>
                                    </li>
                                    <li><strong>Materiales por brigada:</strong>
                                        <ul>
                                            <li>Palas, picos, barras</li>
                                            <li>Guantes de trabajo</li>
                                            <li>Agua potable</li>
                                            <li>Formatos de registro</li>
                                            <li>GPS o marcadores</li>
                                        </ul>
                                    </li>
                                </ul>
                                
                                <h6>5.3 Técnica de Plantación</h6>
                                <ol>
                                    <li>Verificar ubicación con plano y GPS</li>
                                    <li>Verificar tamaño de cepa (debe caber el cepellón)</li>
                                    <li>Extraer plántula de contenedor con cuidado</li>
                                    <li>Colocar plántula en centro de cepa, nivel superficial</li>
                                    <li>Rellenar con mezcla de tierra y composta</li>
                                    <li>Apisonar suavemente sin compactar en exceso</li>
                                    <li>Formar cajete para retención de agua</li>
                                    <li>Riego abundante inicial (10-15 litros)</li>
                                    <li>Colocar acolchado orgánico alrededor</li>
                                    <li>Registrar en base de datos (especie, coordenadas, responsable)</li>
                                </ol>
                                
                                <h6>5.4 Registro y Documentación</h6>
                                <ul>
                                    <li>Código de identificación único por árbol</li>
                                    <li>Georeferenciación con GPS</li>
                                    <li>Fotografía inicial</li>
                                    <li>Registro en aplicación móvil o formato impreso</li>
                                    <li>Base de datos centralizada</li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <div class="card bg-light">
                                    <div class="card-body">
                                        <h6>Duración</h6>
                                        <p><strong>2-3 días</strong></p>
                                        
                                        <h6>Meta</h6>
                                        <p><strong>1,500 árboles plantados</strong></p>
                                        
                                        <h6>Horario</h6>
                                        <p class="small">7:00 AM - 2:00 PM (evitar calor intenso)</p>
                                    </div>
                                </div>
                                
                                <div class="card bg-info text-white mt-3">
                                    <div class="card-body">
                                        <h6>Evento Comunitario</h6>
                                        <p class="small">La plantación se organiza como festival comunitario con:</p>
                                        <ul class="small mb-0">
                                            <li>Ceremonia de inauguración</li>
                                            <li>Talleres educativos</li>
                                            <li>Alimentos para participantes</li>
                                            <li>Música y actividades culturales</li>
                                            <li>Cobertura en medios locales</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Paso 6 -->
                <div class="card mb-4 border-secondary">
                    <div class="card-header bg-secondary text-white">
                        <h4 class="mb-0">
                            <i class="bi bi-6-circle-fill"></i> <?php echo t('cbta_step'); ?> 6: Mantenimiento
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <h5>Plan de Mantenimiento (Años 1-3)</h5>
                                
                                <h6>6.1 Riego</h6>
                                <ul>
                                    <li><strong>Primer año:</strong> Semanal en temporada seca (15-20 L/árbol)</li>
                                    <li><strong>Segundo año:</strong> Quincenal en temporada seca</li>
                                    <li><strong>Tercer año:</strong> Solo en sequías extremas</li>
                                    <li>Priorizar especies más sensibles y árboles en estrés</li>
                                </ul>
                                
                                <h6>6.2 Control de Malezas</h6>
                                <ul>
                                    <li>Chapeo manual alrededor de cada árbol (radio 1m)</li>
                                    <li>Frecuencia: Cada 2-3 meses durante temporada de lluvias</li>
                                    <li>Mantener vegetación herbácea baja, no eliminar completamente</li>
                                    <li>Material vegetal como acolchado</li>
                                </ul>
                                
                                <h6>6.3 Fertilización</h6>
                                <ul>
                                    <li>Aplicación de composta (2-3 kg/árbol) cada 6 meses</li>
                                    <li>Fertilización foliar orgánica en primavera</li>
                                    <li>Inoculación adicional de micorrizas al año</li>
                                </ul>
                                
                                <h6>6.4 Protección</h6>
                                <ul>
                                    <li>Revisión y reparación de cercas si existen</li>
                                    <li>Protección individual contra fauna (mallas si es necesario)</li>
                                    <li>Vigilancia y prevención de incendios</li>
                                    <li>Señalización para evitar tránsito vehicular</li>
                                </ul>
                                
                                <h6>6.5 Manejo Fitosanitario</h6>
                                <ul>
                                    <li>Monitoreo mensual de plagas y enfermedades</li>
                                    <li>Control manual o biológico (evitar químicos)</li>
                                    <li>Poda sanitaria de ramas dañadas</li>
                                    <li>Eliminación de plantas parásitas</li>
                                </ul>
                                
                                <h6>6.6 Reposición</h6>
                                <ul>
                                    <li>Evaluación trimestral de supervivencia</li>
                                    <li>Reposición de árboles muertos en temporada de lluvias</li>
                                    <li>Meta: Mantener > 85% de supervivencia</li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <div class="card bg-light">
                                    <div class="card-body">
                                        <h6>Duración</h6>
                                        <p><strong>3 años (fase crítica)</strong></p>
                                        
                                        <h6>Responsabilidad</h6>
                                        <p class="small">Sistema rotativo de grupos estudiantiles + personal de mantenimiento</p>
                                        
                                        <h6>Calendario Anual</h6>
                                        <ul class="small">
                                            <li>Ene-May: Riego, chapeo</li>
                                            <li>Jun-Sep: Fertilización, monitoreo</li>
                                            <li>Oct-Dic: Poda, protección</li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <div class="alert alert-info mt-3 small">
                                    <strong>Estrategia:</strong> Integrar el mantenimiento a prácticas de servicio social estudiantil (30 horas/estudiante/año).
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Paso 7 -->
                <div class="card mb-4 border-dark">
                    <div class="card-header bg-dark text-white">
                        <h4 class="mb-0">
                            <i class="bi bi-7-circle-fill"></i> <?php echo t('cbta_step'); ?> 7: Monitoreo y Evaluación
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <h5>Sistema de Monitoreo Integral</h5>
                                
                                <h6>7.1 Variables Dasométricas</h6>
                                <p><strong>Frecuencia:</strong> Semestral (primeros 3 años), anual (después)</p>
                                <ul>
                                    <li>Supervivencia (% por especie y global)</li>
                                    <li>Altura total (cm)</li>
                                    <li>Diámetro de cuello o DAP según tamaño (mm)</li>
                                    <li>Cobertura de copa (cm)</li>
                                    <li>Estado fitosanitario (escala 1-5)</li>
                                    <li>Presencia de floración/fructificación</li>
                                </ul>
                                
                                <h6>7.2 Variables Ecológicas</h6>
                                <ul>
                                    <li><strong>Regeneración natural:</strong> Aparición de plántulas de especies nativas</li>
                                    <li><strong>Colonización por fauna:</strong>
                                        <ul>
                                            <li>Conteos de aves (puntos fijos, transectos)</li>
                                            <li>Registros de mamíferos (cámaras trampa, huellas)</li>
                                            <li>Inventarios de insectos (trampas, red de golpeo)</li>
                                        </ul>
                                    </li>
                                    <li><strong>Calidad del suelo:</strong> Análisis cada 2 años de materia orgánica, nutrientes</li>
                                    <li><strong>Cobertura del suelo:</strong> Reducción de suelo desnudo</li>
                                </ul>
                                
                                <h6>7.3 Servicios Ecosistémicos</h6>
                                <ul>
                                    <li><strong>Captura de carbono:</strong> Estimación mediante ecuaciones alométricas</li>
                                    <li><strong>Regulación de temperatura:</strong> Mediciones microclimáticas</li>
                                    <li><strong>Infiltración:</strong> Pruebas de permeabilidad del suelo</li>
                                    <li><strong>Biodiversidad:</strong> Índices de diversidad (Shannon, Simpson)</li>
                                </ul>
                                
                                <h6>7.4 Herramientas Tecnológicas</h6>
                                <ul>
                                    <li><strong>Base de datos:</strong> Sistema de gestión en línea con acceso desde campo</li>
                                    <li><strong>SIG:</strong> Mapas actualizables de distribución y estado</li>
                                    <li><strong>Análisis estadístico:</strong> R, Python para procesamiento de datos</li>
                                    <li><strong>Visualización:</strong> Dashboards interactivos para difusión</li>
                                </ul>
                                
                                <h6>7.5 Reportes</h6>
                                <ul>
                                    <li>Informes semestrales para dirección del plantel</li>
                                    <li>Artículos de divulgación en revista escolar</li>
                                    <li>Presentaciones en congresos estudiantiles</li>
                                    <li>Publicaciones en redes sociales</li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <div class="card bg-light">
                                    <div class="card-body">
                                        <h6>Responsables</h6>
                                        <p class="small">Comité de Monitoreo (estudiantes y docentes de todas las especialidades)</p>
                                        
                                        <h6>Indicadores de Éxito</h6>
                                        <ul class="small">
                                            <li>Supervivencia > 85% a 3 años</li>
                                            <li>Crecimiento > 40 cm/año promedio</li>
                                            <li>Incremento del 50% en diversidad de aves</li>
                                            <li>Secuestro de 10 ton CO₂ a 5 años</li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <div class="card bg-primary text-white mt-3">
                                    <div class="card-body">
                                        <h6>Componente Educativo</h6>
                                        <p class="small mb-0">Datos del monitoreo se integran a proyectos de investigación estudiantil y prácticas de estadística, programación y ciencias ambientales.</p>
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

<!-- Call to Action -->
<section class="py-5 bg-primary text-white">
    <div class="container text-center">
        <h2 class="mb-4">¿Quieres calcular el impacto de tu propio proyecto?</h2>
        <p class="lead mb-4">Usa nuestra calculadora de reforestación para estimar árboles, densidad y captura de carbono</p>
        <a href="calculadora.php" class="btn btn-light btn-lg">
            <i class="bi bi-calculator-fill"></i> Ir a la Calculadora
        </a>
    </div>
</section>

<?php includeFooter(); ?>
