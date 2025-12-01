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
                <img src="https://placehold.co/600x400/2d5016/ffffff?text=Matematicas+Forestales" 
                     class="img-fluid rounded shadow mb-3" 
                     alt="Matemáticas en Reforestación">
            </div>
            <div class="col-md-6 order-md-1">
                <h2 class="text-primary mb-4">
                    <i class="bi bi-calculator-fill"></i> Matemáticas
                </h2>
                
                <h4>Cálculo de Densidad de Plantación</h4>
                <p>Las matemáticas son fundamentales para determinar cuántos árboles se pueden plantar en un área determinada. La fórmula básica es:</p>
                
                <div class="card bg-white mb-3">
                    <div class="card-body">
                        <p class="text-center mb-0">
                            <code>Árboles/ha = 10,000 / (espaciamiento_x × espaciamiento_y)</code>
                        </p>
                    </div>
                </div>
                
                <p><strong>Ejemplo:</strong> Para un espaciamiento de 3m × 3m:</p>
                <p><code>10,000 / (3 × 3) = 1,111 árboles por hectárea</code></p>
                
                <h4 class="mt-4">Estadística y Muestreo</h4>
                <ul>
                    <li><strong>Diseño de parcelas de monitoreo:</strong> Determinación del tamaño de muestra estadísticamente significativo</li>
                    <li><strong>Análisis de supervivencia:</strong> Cálculo de porcentajes de mortalidad y tasas de crecimiento</li>
                    <li><strong>Distribuciones de frecuencia:</strong> Análisis de clases diamétricas y altimétricas</li>
                    <li><strong>Regresiones:</strong> Modelos de predicción de crecimiento y biomasa</li>
                </ul>
                
                <h4 class="mt-4">Cálculo de Biomasa y Carbono</h4>
                <p>Las ecuaciones alométricas relacionan el diámetro y altura de los árboles con su biomasa:</p>
                
                <div class="card bg-white mb-3">
                    <div class="card-body">
                        <p class="mb-1"><code>Biomasa = a × DAP<sup>b</sup> × Altura<sup>c</sup></code></p>
                        <p class="mb-0"><small>Donde a, b, c son coeficientes específicos por especie</small></p>
                    </div>
                </div>
                
                <h4 class="mt-4">Geometría y Topografía</h4>
                <ul>
                    <li>Cálculo de áreas en terrenos irregulares</li>
                    <li>Determinación de pendientes y curvas de nivel</li>
                    <li>Diseño de terrazas para control de erosión</li>
                    <li>Optimización de distribución espacial de árboles</li>
                </ul>
                
                <h4 class="mt-4">Análisis Económico</h4>
                <ul>
                    <li><strong>Valor Presente Neto (VPN):</strong> Evaluación de rentabilidad a largo plazo</li>
                    <li><strong>Tasa Interna de Retorno (TIR):</strong> Comparación entre alternativas de inversión</li>
                    <li><strong>Análisis costo-beneficio:</strong> Cuantificación de servicios ecosistémicos</li>
                    <li><strong>Flujos de caja:</strong> Proyección de ingresos y egresos temporales</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Humanidades -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="https://placehold.co/600x400/5a7c3e/ffffff?text=Humanidades+y+Cultura" 
                     class="img-fluid rounded shadow mb-3" 
                     alt="Humanidades">
            </div>
            <div class="col-md-6">
                <h2 class="text-success mb-4">
                    <i class="bi bi-book-fill"></i> Humanidades
                </h2>
                
                <h4>Historia y Contexto Cultural</h4>
                <p>Las humanidades nos permiten comprender el contexto histórico y cultural de la deforestación y reforestación:</p>
                <ul>
                    <li><strong>Historia ambiental:</strong> Análisis de patrones históricos de uso de suelo y deforestación</li>
                    <li><strong>Conocimiento tradicional:</strong> Sistemas ancestrales de manejo forestal de comunidades indígenas</li>
                    <li><strong>Cosmovisión:</strong> Relación espiritual y cultural con los bosques</li>
                    <li><strong>Etnobotánica:</strong> Uso tradicional de especies forestales para medicina, alimentación y rituales</li>
                </ul>
                
                <h4 class="mt-4">Ética Ambiental</h4>
                <p>Reflexión sobre nuestra responsabilidad con el medio ambiente:</p>
                <ul>
                    <li><strong>Justicia intergeneracional:</strong> Derecho de generaciones futuras a recursos naturales</li>
                    <li><strong>Derechos de la naturaleza:</strong> Valor intrínseco de los ecosistemas más allá de utilidad humana</li>
                    <li><strong>Equidad social:</strong> Distribución justa de beneficios de proyectos de reforestación</li>
                    <li><strong>Responsabilidad histórica:</strong> Reconocimiento de deudas ecológicas coloniales</li>
                </ul>
                
                <h4 class="mt-4">Filosofía y Pensamiento Crítico</h4>
                <ul>
                    <li>Análisis crítico de modelos de desarrollo sostenible</li>
                    <li>Cuestionamiento de paradigmas antropocéntricos</li>
                    <li>Debate sobre conservación vs desarrollo</li>
                    <li>Reflexión sobre relación sociedad-naturaleza</li>
                </ul>
                
                <h4 class="mt-4">Arte y Representación</h4>
                <p>El arte como herramienta de concientización y documentación:</p>
                <ul>
                    <li>Fotografía documental de procesos de deforestación y restauración</li>
                    <li>Arte ambiental y land art para sensibilización</li>
                    <li>Murales y expresiones artísticas comunitarias</li>
                    <li>Cine y documentales sobre crisis ambiental</li>
                </ul>
                
                <div class="alert alert-warning mt-4">
                    <strong>Caso relevante:</strong> En muchas comunidades indígenas de México, los bosques son considerados entidades sagradas. El Proyecto Eden en Madagascar integró exitosamente valores culturales locales, generando empleos para >20,000 personas mientras restauraban 650,000 hectáreas.
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
                <img src="https://placehold.co/600x400/8b6f47/ffffff?text=Tecnologia+y+Programacion" 
                     class="img-fluid rounded shadow mb-3" 
                     alt="Programación">
            </div>
            <div class="col-md-6 order-md-1">
                <h2 class="text-info mb-4">
                    <i class="bi bi-code-slash"></i> Programación y Tecnología
                </h2>
                
                <h4>Sistemas de Información Geográfica (SIG)</h4>
                <p>La programación permite crear herramientas avanzadas para el análisis espacial:</p>
                <ul>
                    <li><strong>Mapeo de áreas degradadas:</strong> Identificación de zonas prioritarias usando algoritmos de clasificación</li>
                    <li><strong>Análisis de cobertura forestal:</strong> Procesamiento de imágenes satelitales con Python (GDAL, Rasterio)</li>
                    <li><strong>Modelos predictivos:</strong> Machine Learning para predecir áreas de riesgo de deforestación</li>
                    <li><strong>Visualización interactiva:</strong> Dashboards web con Leaflet, Mapbox o Google Earth Engine</li>
                </ul>
                
                <div class="card bg-white mb-3">
                    <div class="card-body">
                        <h6>Ejemplo: Análisis con Python</h6>
                        <pre class="mb-0"><code class="language-python"># Cálculo de NDVI para evaluar salud vegetal
import rasterio
import numpy as np

def calculate_ndvi(nir_band, red_band):
    ndvi = (nir_band - red_band) / (nir_band + red_band)
    return ndvi
</code></pre>
                    </div>
                </div>
                
                <h4 class="mt-4">Bases de Datos y Gestión de Información</h4>
                <ul>
                    <li><strong>Inventarios forestales digitales:</strong> Sistemas para registro y seguimiento de árboles plantados</li>
                    <li><strong>Bases de datos de especies:</strong> Catálogos con información ecológica, requerimientos, usos</li>
                    <li><strong>Sistemas de monitoreo:</strong> Plataformas para captura de datos de campo con dispositivos móviles</li>
                    <li><strong>Blockchain:</strong> Trazabilidad de carbono y certificaciones forestales</li>
                </ul>
                
                <h4 class="mt-4">Sensores y IoT</h4>
                <p>Internet de las Cosas aplicado al monitoreo forestal:</p>
                <ul>
                    <li>Sensores de humedad de suelo para riego inteligente</li>
                    <li>Estaciones meteorológicas automáticas</li>
                    <li>Cámaras trampa con IA para monitoreo de fauna</li>
                    <li>Drones para mapeo y vigilancia forestal</li>
                </ul>
                
                <h4 class="mt-4">Modelado y Simulación</h4>
                <ul>
                    <li><strong>Modelos de crecimiento forestal:</strong> Simulaciones de desarrollo de plantaciones</li>
                    <li><strong>Modelos climáticos:</strong> Predicción de impactos del cambio climático</li>
                    <li><strong>Análisis de escenarios:</strong> Evaluación de diferentes estrategias de manejo</li>
                    <li><strong>Optimización:</strong> Algoritmos para maximizar beneficios ecológicos y económicos</li>
                </ul>
                
                <h4 class="mt-4">Aplicaciones Web y Móviles</h4>
                <p>Como este proyecto, la programación permite crear:</p>
                <ul>
                    <li>Calculadoras de reforestación interactivas</li>
                    <li>Plataformas de educación ambiental</li>
                    <li>Sistemas de gestión de voluntarios</li>
                    <li>Apps móviles para identificación de especies</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Estudio de Ecosistemas -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="https://placehold.co/600x400/a8c686/2d5016?text=Ecosistemas+Forestales" 
                     class="img-fluid rounded shadow mb-3" 
                     alt="Ecosistemas">
            </div>
            <div class="col-md-6">
                <h2 class="text-warning mb-4">
                    <i class="bi bi-flower1"></i> Estudio de Ecosistemas
                </h2>
                
                <h4>Ecología Forestal</h4>
                <p>El conocimiento profundo de los ecosistemas es esencial para el éxito de la reforestación:</p>
                
                <h5 class="mt-3">Sucesión Ecológica</h5>
                <p>Comprensión de las etapas naturales de desarrollo forestal:</p>
                <ul>
                    <li>Colonización inicial por especies pioneras (alta luminosidad)</li>
                    <li>Establecimiento de especies secundarias (sombra parcial)</li>
                    <li>Desarrollo de bosque maduro con especies clímax</li>
                    <li>Ciclos de perturbación y regeneración natural</li>
                </ul>
                
                <h5 class="mt-3">Interacciones Bióticas</h5>
                <ul>
                    <li><strong>Simbiosis:</strong> Micorrizas (hongos-raíces), rizobios (fijación de nitrógeno)</li>
                    <li><strong>Polinización:</strong> Relaciones específicas planta-polinizador</li>
                    <li><strong>Dispersión:</strong> Aves, mamíferos e insectos como dispersores de semillas</li>
                    <li><strong>Herbivoría:</strong> Control de plagas y equilibrio poblacional</li>
                    <li><strong>Depredación:</strong> Regulación de cadenas tróficas</li>
                </ul>
                
                <h4 class="mt-4">Edafología (Ciencia del Suelo)</h4>
                <p>El suelo es la base de todo proyecto de reforestación exitoso:</p>
                <ul>
                    <li><strong>Propiedades físicas:</strong> Textura, estructura, densidad, porosidad, capacidad de retención de agua</li>
                    <li><strong>Propiedades químicas:</strong> pH, nutrientes (N, P, K), materia orgánica, CIC</li>
                    <li><strong>Propiedades biológicas:</strong> Microorganismos, mesofauna, macrofauna del suelo</li>
                    <li><strong>Degradación:</strong> Compactación, erosión, pérdida de horizontes, contaminación</li>
                </ul>
                
                <div class="card bg-light mb-3">
                    <div class="card-body">
                        <h6>Valores óptimos para reforestación:</h6>
                        <ul class="mb-0">
                            <li>pH: 5.5 - 7.0 (ligeramente ácido a neutro)</li>
                            <li>Materia orgánica: > 3%</li>
                            <li>Nitrógeno total: > 0.15%</li>
                            <li>Fósforo disponible: 10-30 ppm</li>
                        </ul>
                    </div>
                </div>
                
                <h4 class="mt-4">Hidrología Forestal</h4>
                <ul>
                    <li>Intercepción de lluvia por dosel forestal (10-40%)</li>
                    <li>Infiltración y recarga de acuíferos</li>
                    <li>Transpiración y regulación de humedad atmosférica</li>
                    <li>Control de escorrentía y prevención de inundaciones</li>
                </ul>
                
                <h4 class="mt-4">Selección de Especies</h4>
                <p>Criterios ecológicos para elegir especies apropiadas:</p>
                <ul>
                    <li><strong>Especies nativas:</strong> Adaptadas evolutivamente al clima y suelo local</li>
                    <li><strong>Requerimientos ecológicos:</strong> Luz, agua, nutrientes, temperatura</li>
                    <li><strong>Funciones ecosistémicas:</strong> Fijación de nitrógeno, atracción de fauna, protección del suelo</li>
                    <li><strong>Resiliencia:</strong> Capacidad de adaptación al cambio climático</li>
                </ul>
                
                <h4 class="mt-4">Monitoreo de Biodiversidad</h4>
                <ul>
                    <li>Índices de diversidad (Shannon, Simpson, Margalef)</li>
                    <li>Especies indicadoras de calidad de hábitat</li>
                    <li>Presencia de especies clave (keystone species)</li>
                    <li>Conectividad de hábitats y corredores biológicos</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Lengua y Comunicación -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 order-md-2">
                <img src="https://placehold.co/600x400/2d5016/ffffff?text=Comunicacion+Ambiental" 
                     class="img-fluid rounded shadow mb-3" 
                     alt="Comunicación">
            </div>
            <div class="col-md-6 order-md-1">
                <h2 class="text-danger mb-4">
                    <i class="bi bi-chat-dots-fill"></i> Lengua y Comunicación
                </h2>
                
                <h4>Comunicación Científica</h4>
                <p>La comunicación efectiva es crucial para el éxito del proyecto de reforestación:</p>
                <ul>
                    <li><strong>Redacción de informes técnicos:</strong> Documentación de metodologías, resultados y conclusiones</li>
                    <li><strong>Publicaciones científicas:</strong> Difusión de hallazgos en revistas especializadas</li>
                    <li><strong>Propuestas de financiamiento:</strong> Solicitudes a fondos nacionales e internacionales</li>
                    <li><strong>Estilo APA:</strong> Formato estandarizado para referencias bibliográficas</li>
                </ul>
                
                <h4 class="mt-4">Divulgación y Educación Ambiental</h4>
                <p>Traducir conocimiento técnico a lenguaje accesible:</p>
                <ul>
                    <li><strong>Materiales educativos:</strong> Folletos, infografías, videos explicativos</li>
                    <li><strong>Talleres comunitarios:</strong> Capacitación en técnicas de plantación y cuidado</li>
                    <li><strong>Campañas de sensibilización:</strong> Redes sociales, medios tradicionales</li>
                    <li><strong>Interpretación ambiental:</strong> Señalética y guías en áreas reforestadas</li>
                </ul>
                
                <h4 class="mt-4">Comunicación Intercultural</h4>
                <ul>
                    <li><strong>Trabajo con comunidades indígenas:</strong> Respeto a lenguas y cosmovisiones locales</li>
                    <li><strong>Traducción de materiales:</strong> Idiomas locales para inclusión</li>
                    <li><strong>Diálogo de saberes:</strong> Integración de conocimiento tradicional y científico</li>
                    <li><strong>Mediación de conflictos:</strong> Resolución de disputas por uso de recursos</li>
                </ul>
                
                <h4 class="mt-4">Narrativas y Storytelling</h4>
                <p>Las historias generan empatía y motivación:</p>
                <ul>
                    <li>Testimonios de comunidades beneficiadas</li>
                    <li>Historias de éxito de proyectos de reforestación</li>
                    <li>Narrativas de transformación de paisajes degradados</li>
                    <li>Documentación audiovisual del proceso</li>
                </ul>
                
                <div class="card bg-white mb-3">
                    <div class="card-body">
                        <h6>Ejemplo de comunicación efectiva:</h6>
                        <p><strong>Técnico:</strong> "Incrementamos la cobertura forestal en 15% mediante plantación sistemática de especies nativas con densidad de 1,111 ind/ha."</p>
                        <p class="mb-0"><strong>Divulgativo:</strong> "Gracias a la participación de 50 familias, plantamos más de 20,000 árboles nativos que están recuperando nuestro bosque y ofreciendo sombra y aire limpio para todos."</p>
                    </div>
                </div>
                
                <h4 class="mt-4">Gestión de Participación</h4>
                <ul>
                    <li><strong>Consultas públicas:</strong> Espacios de diálogo con comunidades locales</li>
                    <li><strong>Facilitación de reuniones:</strong> Técnicas de moderación inclusiva</li>
                    <li><strong>Negociación:</strong> Acuerdos de uso de tierra y distribución de beneficios</li>
                    <li><strong>Rendición de cuentas:</strong> Informes transparentes para stakeholders</li>
                </ul>
                
                <h4 class="mt-4">Comunicación Política</h4>
                <ul>
                    <li>Cabildeo para políticas favorables a reforestación</li>
                    <li>Argumentación basada en evidencia para tomadores de decisión</li>
                    <li>Alianzas estratégicas con sectores público, privado y social</li>
                    <li>Posicionamiento de agenda ambiental en espacios públicos</li>
                </ul>
                
                <h4 class="mt-4">Comunicación Digital</h4>
                <p>Aprovechamiento de tecnologías para amplificar mensajes:</p>
                <ul>
                    <li><strong>Redes sociales:</strong> Facebook, Instagram, Twitter para difusión masiva</li>
                    <li><strong>Sitios web:</strong> Como este proyecto, centralizando información y herramientas</li>
                    <li><strong>Webinars y conferencias virtuales:</strong> Capacitación a distancia</li>
                    <li><strong>Storytelling multimedia:</strong> Combinación de texto, imagen, video, audio</li>
                </ul>
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
