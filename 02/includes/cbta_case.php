<?php
/**
 * Caso de Estudio: Proyecto de Reforestación CBTA 35
 * Situación hipotética y pasos detallados para reforestación
 * 
 * @author: Estudiante CBTA 35
 * @date: November 2025
 */
?>

<!-- Caso de Estudio CBTA 35 -->
<section id="cbta35" class="cbta-section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <i class="fas fa-school text-primary fa-4x mb-3"></i>
                <h2><?php echo $t['cbta_case_title']; ?></h2>
                <p class="lead"><?php echo $t['cbta_intro']; ?></p>
            </div>
        </div>
        
        <!-- Análisis de la Situación -->
        <div class="row mb-5">
            <div class="col-12">
                <div class="card shadow-lg">
                    <div class="card-header bg-primary text-white">
                        <h3 class="mb-0">
                            <i class="fas fa-search me-2"></i>
                            <?php echo $t['situation_analysis']; ?>
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <img src="https://placehold.co/500x300/228B22/FFFFFF?text=Terreno+CBTA+35" 
                                     alt="Terreno CBTA 35" class="img-fluid rounded shadow mb-4">
                                <!-- TODO: Usar imagen real del terreno del CBTA 35 -->
                                
                                <h5 class="text-success mb-3">
                                    <i class="fas fa-map-marked-alt me-2"></i>
                                    Características del Terreno
                                </h5>
                                
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <tbody>
                                            <tr>
                                                <td><strong>Ubicación:</strong></td>
                                                <td>Zona norte del plantel, área recreativa</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Área total:</strong></td>
                                                <td>2.5 hectáreas (25,000 m²)</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Topografía:</strong></td>
                                                <td>Terreno plano con pendiente ligera (2-3%)</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Uso anterior:</strong></td>
                                                <td>Pastizal para ganado, sin uso por 5 años</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Accesibilidad:</strong></td>
                                                <td>Camino de terracería, acceso vehicular</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <h5 class="text-warning mb-3">
                                    <i class="fas fa-layer-group me-2"></i>
                                    <?php echo $t['soil_conditions']; ?>
                                </h5>
                                
                                <div class="mb-4">
                                    <div class="progress mb-2" style="height: 20px;">
                                        <div class="progress-bar bg-danger" style="width: 30%">Arcilla 30%</div>
                                        <div class="progress-bar bg-warning" style="width: 45%">Limo 45%</div>
                                        <div class="progress-bar bg-success" style="width: 25%">Arena 25%</div>
                                    </div>
                                    <small class="text-muted">Clasificación: Suelo franco-limoso</small>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item d-flex justify-content-between">
                                                <span>pH del suelo:</span>
                                                <strong class="text-success">6.8 (neutro)</strong>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between">
                                                <span>Materia orgánica:</span>
                                                <strong class="text-warning">2.1% (medio)</strong>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between">
                                                <span>Drenaje:</span>
                                                <strong class="text-info">Moderado</strong>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item d-flex justify-content-between">
                                                <span>Nitrógeno:</span>
                                                <strong class="text-danger">Bajo</strong>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between">
                                                <span>Fósforo:</span>
                                                <strong class="text-warning">Medio</strong>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between">
                                                <span>Potasio:</span>
                                                <strong class="text-success">Alto</strong>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <h5 class="text-info mb-3 mt-4">
                                    <i class="fas fa-cloud-sun me-2"></i>
                                    <?php echo $t['climate_factors']; ?>
                                </h5>
                                
                                <div class="row text-center">
                                    <div class="col-md-3">
                                        <div class="card bg-light">
                                            <div class="card-body py-2">
                                                <i class="fas fa-thermometer-half text-danger fa-2x"></i>
                                                <h6 class="mt-2 mb-0">Temperatura</h6>
                                                <small>18-25°C promedio</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card bg-light">
                                            <div class="card-body py-2">
                                                <i class="fas fa-tint text-primary fa-2x"></i>
                                                <h6 class="mt-2 mb-0">Precipitación</h6>
                                                <small>800mm anuales</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card bg-light">
                                            <div class="card-body py-2">
                                                <i class="fas fa-eye text-success fa-2x"></i>
                                                <h6 class="mt-2 mb-0">Humedad</h6>
                                                <small>65% promedio</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card bg-light">
                                            <div class="card-body py-2">
                                                <i class="fas fa-wind text-info fa-2x"></i>
                                                <h6 class="mt-2 mb-0">Viento</h6>
                                                <small>Moderado NE</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Pasos del Proyecto -->
        <div class="row">
            <div class="col-12">
                <h3 class="text-center mb-5">
                    <i class="fas fa-list-ol me-2"></i>
                    <?php echo $t['step_by_step']; ?>
                </h3>
            </div>
        </div>
        
        <!-- Paso 1: Preparación del Sitio -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="card step-card shadow">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="step-number">1</div>
                            <h4 class="mb-0 text-success"><?php echo $t['site_preparation']; ?></h4>
                        </div>
                        
                        <div class="row">
                            <div class="col-lg-8">
                                <h6 class="text-primary">Actividades Principales:</h6>
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul class="list-unstyled">
                                            <li><i class="fas fa-cut text-warning me-2"></i><strong>Limpieza del terreno:</strong> Remoción de malezas y pastos existentes</li>
                                            <li><i class="fas fa-tractor text-success me-2"></i><strong>Subsolado:</strong> Romper capas compactadas del suelo</li>
                                            <li><i class="fas fa-seedling text-primary me-2"></i><strong>Incorporación de materia orgánica:</strong> 2 ton/ha de compost</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="list-unstyled">
                                            <li><i class="fas fa-ruler text-info me-2"></i><strong>Trazado de curvas de nivel:</strong> Prevención de erosión</li>
                                            <li><i class="fas fa-tools text-secondary me-2"></i><strong>Instalación de cerco:</strong> Protección contra ganado</li>
                                            <li><i class="fas fa-water text-cyan me-2"></i><strong>Sistema de riego:</strong> Aspersores temporales</li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <div class="alert alert-info mt-3">
                                    <h6><i class="fas fa-calendar-alt me-2"></i>Cronograma:</h6>
                                    <p class="mb-0"><strong>Duración:</strong> 3-4 semanas en temporada seca (marzo-abril)</p>
                                    <p class="mb-0"><strong>Personal requerido:</strong> 8-10 personas incluyendo operador de maquinaria</p>
                                </div>
                            </div>
                            
                            <div class="col-lg-4">
                                <img src="https://placehold.co/300x200/FFA726/FFFFFF?text=Preparación+Sitio" 
                                     alt="Preparación del sitio" class="img-fluid rounded shadow">
                                <!-- TODO: Usar imagen real de preparación de sitio -->
                                
                                <div class="mt-3">
                                    <h6 class="text-warning">Costo Estimado:</h6>
                                    <div class="table-responsive">
                                        <table class="table table-sm">
                                            <tbody>
                                                <tr>
                                                    <td>Limpieza manual</td>
                                                    <td class="text-end">$15,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Maquinaria</td>
                                                    <td class="text-end">$25,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Materiales</td>
                                                    <td class="text-end">$18,000</td>
                                                </tr>
                                                <tr class="table-success">
                                                    <td><strong>Total</strong></td>
                                                    <td class="text-end"><strong>$58,000</strong></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Paso 2: Selección de Especies -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="card step-card shadow">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="step-number">2</div>
                            <h4 class="mb-0 text-primary"><?php echo $t['species_selection']; ?></h4>
                        </div>
                        
                        <div class="row">
                            <div class="col-lg-6">
                                <h6 class="text-success">Especies Nativas Recomendadas:</h6>
                                
                                <div class="accordion" id="speciesAccordion">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" 
                                                    data-bs-toggle="collapse" data-bs-target="#encino">
                                                <i class="fas fa-tree text-success me-2"></i>
                                                Encino (Quercus spp.) - 40% del total
                                            </button>
                                        </h2>
                                        <div id="encino" class="accordion-collapse collapse" 
                                             data-bs-parent="#speciesAccordion">
                                            <div class="accordion-body">
                                                <ul class="list-unstyled">
                                                    <li><strong>Ventajas:</strong> Adaptado al clima local, alta supervivencia</li>
                                                    <li><strong>Espaciamiento:</strong> 6 x 6 metros</li>
                                                    <li><strong>Crecimiento:</strong> Moderado (1-2 m/año)</li>
                                                    <li><strong>Servicios:</strong> Hábitat fauna, productos no maderables</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" 
                                                    data-bs-toggle="collapse" data-bs-target="#pino">
                                                <i class="fas fa-tree text-primary me-2"></i>
                                                Pino (Pinus spp.) - 30% del total
                                            </button>
                                        </h2>
                                        <div id="pino" class="accordion-collapse collapse" 
                                             data-bs-parent="#speciesAccordion">
                                            <div class="accordion-body">
                                                <ul class="list-unstyled">
                                                    <li><strong>Ventajas:</strong> Crecimiento rápido, valor comercial</li>
                                                    <li><strong>Espaciamiento:</strong> 4 x 4 metros</li>
                                                    <li><strong>Crecimiento:</strong> Rápido (2-3 m/año)</li>
                                                    <li><strong>Servicios:</strong> Madera, resina, protección suelos</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" 
                                                    data-bs-toggle="collapse" data-bs-target="#otras">
                                                <i class="fas fa-leaf text-warning me-2"></i>
                                                Especies complementarias - 30% del total
                                            </button>
                                        </h2>
                                        <div id="otras" class="accordion-collapse collapse" 
                                             data-bs-parent="#speciesAccordion">
                                            <div class="accordion-body">
                                                <ul class="list-unstyled">
                                                    <li><strong>Madroño:</strong> Frutos comestibles, ornamental</li>
                                                    <li><strong>Tejocote:</strong> Uso medicinal y alimentario</li>
                                                    <li><strong>Capulín:</strong> Atrae fauna silvestre</li>
                                                    <li><strong>Huizache:</strong> Fijador de nitrógeno</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <img src="https://placehold.co/400x250/228B22/FFFFFF?text=Especies+Nativas" 
                                     alt="Especies nativas" class="img-fluid rounded shadow mb-3">
                                <!-- TODO: Usar imagen de especies nativas de la región -->
                                
                                <h6 class="text-info">Criterios de Selección:</h6>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Adaptación local
                                        <span class="badge bg-success">Alta</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Disponibilidad de semilla
                                        <span class="badge bg-success">Confirmada</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Valor ecológico
                                        <span class="badge bg-primary">Múltiple</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Resistencia a plagas
                                        <span class="badge bg-warning">Media-Alta</span>
                                    </li>
                                </ul>
                                
                                <div class="alert alert-success mt-3">
                                    <h6><i class="fas fa-seedling me-2"></i>Total de plantas necesarias:</h6>
                                    <p class="mb-0"><strong>6,250 plantas</strong> para 2.5 hectáreas</p>
                                    <small>Considerando espaciamiento promedio de 5x4 metros</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Paso 3: Plan de Plantación -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="card step-card shadow">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="step-number">3</div>
                            <h4 class="mb-0 text-warning"><?php echo $t['planting_plan']; ?></h4>
                        </div>
                        
                        <div class="row">
                            <div class="col-lg-8">
                                <h6 class="text-success">Metodología de Plantación:</h6>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card bg-light mb-3">
                                            <div class="card-body">
                                                <h6><i class="fas fa-calendar text-primary me-2"></i>Época Óptima</h6>
                                                <p class="mb-0">Inicio de lluvias (junio-julio)</p>
                                                <small class="text-muted">Mayor probabilidad de supervivencia</small>
                                            </div>
                                        </div>
                                        
                                        <div class="card bg-light mb-3">
                                            <div class="card-body">
                                                <h6><i class="fas fa-ruler text-info me-2"></i>Diseño Espacial</h6>
                                                <p class="mb-0">Sistema de marco real modificado</p>
                                                <small class="text-muted">Adaptado a la topografía</small>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="card bg-light mb-3">
                                            <div class="card-body">
                                                <h6><i class="fas fa-users text-success me-2"></i>Participación</h6>
                                                <p class="mb-0">Estudiantes, profesores y comunidad</p>
                                                <small class="text-muted">200 personas en jornadas</small>
                                            </div>
                                        </div>
                                        
                                        <div class="card bg-light mb-3">
                                            <div class="card-body">
                                                <h6><i class="fas fa-tools text-warning me-2"></i>Herramientas</h6>
                                                <p class="mb-0">Palas, barras, regaderas</p>
                                                <small class="text-muted">30 juegos de herramientas</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <h6 class="text-primary mt-3">Proceso de Plantación:</h6>
                                <ol class="list-group list-group-numbered">
                                    <li class="list-group-item">Marcado de puntos de plantación con GPS</li>
                                    <li class="list-group-item">Apertura de cepas 40x40x40 cm</li>
                                    <li class="list-group-item">Mezcla de tierra con abono orgánico</li>
                                    <li class="list-group-item">Plantación cuidadosa manteniendo cepellón</li>
                                    <li class="list-group-item">Riego inicial (5-8 litros por planta)</li>
                                    <li class="list-group-item">Colocación de protectores individuales</li>
                                    <li class="list-group-item">Etiquetado y registro de cada árbol</li>
                                </ol>
                            </div>
                            
                            <div class="col-lg-4">
                                <img src="https://placehold.co/300x200/32CD32/FFFFFF?text=Plan+Plantación" 
                                     alt="Plan de plantación" class="img-fluid rounded shadow mb-3">
                                <!-- TODO: Usar imagen de actividades de plantación -->
                                
                                <div class="card bg-primary text-white">
                                    <div class="card-body">
                                        <h6><i class="fas fa-clock me-2"></i>Cronograma de Plantación</h6>
                                        <ul class="list-unstyled mb-0">
                                            <li><strong>Semana 1-2:</strong> Marcado y apertura de cepas</li>
                                            <li><strong>Semana 3:</strong> Jornada de plantación masiva</li>
                                            <li><strong>Semana 4:</strong> Riego de establecimiento</li>
                                            <li><strong>Mes 2-3:</strong> Monitoreo y replante</li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <div class="mt-3">
                                    <h6 class="text-danger">Costo de Plantación:</h6>
                                    <div class="table-responsive">
                                        <table class="table table-sm">
                                            <tbody>
                                                <tr>
                                                    <td>Plantas (6,250)</td>
                                                    <td class="text-end">$187,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Abono orgánico</td>
                                                    <td class="text-end">$25,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Protectores</td>
                                                    <td class="text-end">$31,250</td>
                                                </tr>
                                                <tr>
                                                    <td>Mano de obra</td>
                                                    <td class="text-end">$45,000</td>
                                                </tr>
                                                <tr class="table-danger">
                                                    <td><strong>Total</strong></td>
                                                    <td class="text-end"><strong>$288,750</strong></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Paso 4: Mantenimiento y Monitoreo -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="card step-card shadow">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="step-number">4</div>
                            <h4 class="mb-0 text-info"><?php echo $t['maintenance_monitoring']; ?></h4>
                        </div>
                        
                        <div class="row">
                            <div class="col-lg-6">
                                <h6 class="text-success">Actividades de Mantenimiento:</h6>
                                
                                <div class="timeline-maintenance">
                                    <div class="timeline-item-maintenance mb-3">
                                        <div class="timeline-badge-maintenance bg-success">1-3</div>
                                        <div class="timeline-content-maintenance">
                                            <h6>Primeros 3 meses</h6>
                                            <ul class="list-unstyled small">
                                                <li><i class="fas fa-tint text-primary me-2"></i>Riego semanal (8-10 L/árbol)</li>
                                                <li><i class="fas fa-cut text-warning me-2"></i>Control de malezas manual</li>
                                                <li><i class="fas fa-bug text-danger me-2"></i>Inspección fitosanitaria</li>
                                                <li><i class="fas fa-seedling text-success me-2"></i>Replante de fallas (10-15%)</li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                    <div class="timeline-item-maintenance mb-3">
                                        <div class="timeline-badge-maintenance bg-primary">4-12</div>
                                        <div class="timeline-content-maintenance">
                                            <h6>Meses 4-12</h6>
                                            <ul class="list-unstyled small">
                                                <li><i class="fas fa-tint text-primary me-2"></i>Riego quincenal en sequía</li>
                                                <li><i class="fas fa-leaf text-success me-2"></i>Fertilización orgánica (2 veces/año)</li>
                                                <li><i class="fas fa-cut text-warning me-2"></i>Poda de formación</li>
                                                <li><i class="fas fa-shield-alt text-info me-2"></i>Mantenimiento de protectores</li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                    <div class="timeline-item-maintenance">
                                        <div class="timeline-badge-maintenance bg-warning">2-5</div>
                                        <div class="timeline-content-maintenance">
                                            <h6>Años 2-5</h6>
                                            <ul class="list-unstyled small">
                                                <li><i class="fas fa-tree text-success me-2"></i>Podas de mantenimiento</li>
                                                <li><i class="fas fa-fire text-danger me-2"></i>Brechas cortafuego</li>
                                                <li><i class="fas fa-eye text-info me-2"></i>Monitoreo anual detallado</li>
                                                <li><i class="fas fa-users text-primary me-2"></i>Capacitación continua</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <h6 class="text-primary">Programa de Monitoreo:</h6>
                                
                                <div class="card bg-light">
                                    <div class="card-body">
                                        <h6><i class="fas fa-chart-line text-success me-2"></i>Indicadores de Éxito</h6>
                                        
                                        <div class="row text-center">
                                            <div class="col-6 mb-3">
                                                <div class="border rounded p-2">
                                                    <i class="fas fa-percentage text-success fa-2x"></i>
                                                    <h6 class="mt-2">Supervivencia</h6>
                                                    <span class="badge bg-success">Meta: >85%</span>
                                                </div>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <div class="border rounded p-2">
                                                    <i class="fas fa-ruler-vertical text-primary fa-2x"></i>
                                                    <h6 class="mt-2">Crecimiento</h6>
                                                    <span class="badge bg-primary">Meta: >1.5m/año</span>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="border rounded p-2">
                                                    <i class="fas fa-heart text-danger fa-2x"></i>
                                                    <h6 class="mt-2">Salud</h6>
                                                    <span class="badge bg-danger">Meta: >90%</span>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="border rounded p-2">
                                                    <i class="fas fa-leaf text-warning fa-2x"></i>
                                                    <h6 class="mt-2">Cobertura</h6>
                                                    <span class="badge bg-warning">Meta: >70%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <img src="https://placehold.co/400x200/17A2B8/FFFFFF?text=Monitoreo+Forestal" 
                                     alt="Monitoreo forestal" class="img-fluid rounded shadow mt-3">
                                <!-- TODO: Usar imagen de actividades de monitoreo -->
                                
                                <div class="alert alert-warning mt-3">
                                    <h6><i class="fas fa-exclamation-triangle me-2"></i>Factores de Riesgo</h6>
                                    <ul class="mb-0 small">
                                        <li><strong>Sequías prolongadas:</strong> Riego de emergencia</li>
                                        <li><strong>Plagas forestales:</strong> Tratamiento biológico</li>
                                        <li><strong>Incendios:</strong> Brechas cortafuego y vigilancia</li>
                                        <li><strong>Vandalismo:</strong> Educación y vigilancia comunitaria</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Resumen del Proyecto -->
        <div class="row">
            <div class="col-12">
                <div class="card shadow-lg border-success">
                    <div class="card-header bg-success text-white">
                        <h3 class="mb-0">
                            <i class="fas fa-chart-pie me-2"></i>
                            Resumen Ejecutivo del Proyecto
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <h5 class="text-success">Inversión Total</h5>
                                <h2 class="text-primary">$431,750 MXN</h2>
                                <small class="text-muted">Costo por hectárea: $172,700</small>
                                
                                <h6 class="mt-4 text-info">Fuentes de Financiamiento:</h6>
                                <div class="progress mb-2">
                                    <div class="progress-bar bg-success" style="width: 40%">CBTA 35 (40%)</div>
                                    <div class="progress-bar bg-primary" style="width: 35%">CONAFOR (35%)</div>
                                    <div class="progress-bar bg-warning" style="width: 25%">Comunidad (25%)</div>
                                </div>
                            </div>
                            
                            <div class="col-lg-4">
                                <h5 class="text-primary">Beneficios Esperados</h5>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-tree text-success me-2"></i><strong>5,312 árboles</strong> supervivientes</li>
                                    <li><i class="fas fa-cloud text-primary me-2"></i><strong>45 ton CO₂/año</strong> capturadas</li>
                                    <li><i class="fas fa-eye text-info me-2"></i><strong>1,800 m³</strong> agua infiltrada</li>
                                    <li><i class="fas fa-users text-warning me-2"></i><strong>500 estudiantes</strong> beneficiados</li>
                                </ul>
                                
                                <div class="alert alert-success">
                                    <strong>Retorno social:</strong> $2.40 por cada peso invertido en 10 años
                                </div>
                            </div>
                            
                            <div class="col-lg-4">
                                <h5 class="text-warning">Cronograma General</h5>
                                <div class="timeline-summary">
                                    <div class="d-flex justify-content-between">
                                        <span>Preparación</span>
                                        <span class="badge bg-primary">Mar-Abr</span>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <span>Plantación</span>
                                        <span class="badge bg-success">Jun-Jul</span>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <span>Mantenimiento</span>
                                        <span class="badge bg-warning">Continuo</span>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <span>Evaluación</span>
                                        <span class="badge bg-info">Anual</span>
                                    </div>
                                </div>
                                
                                <div class="text-center mt-3">
                                    <button class="btn btn-success btn-lg">
                                        <i class="fas fa-play me-2"></i>
                                        Iniciar Proyecto
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Estilos específicos para el caso CBTA 35 */
.cbta-section {
    background: linear-gradient(135deg, #E3F2FD 0%, #F1F8E9 100%);
}

.timeline-maintenance {
    position: relative;
    padding-left: 50px;
}

.timeline-maintenance::before {
    content: '';
    position: absolute;
    left: 20px;
    top: 0;
    bottom: 0;
    width: 2px;
    background: #dee2e6;
}

.timeline-item-maintenance {
    position: relative;
}

.timeline-badge-maintenance {
    position: absolute;
    left: -45px;
    top: 0;
    width: 40px;
    height: 30px;
    border-radius: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    color: white;
    font-size: 0.8rem;
}

.timeline-summary > div {
    padding: 5px 0;
    border-bottom: 1px solid #eee;
}

.timeline-summary > div:last-child {
    border-bottom: none;
}

/* TODO: Añadir más estilos para mejorar la presentación visual */
/* TODO: Implementar gráficos interactivos para las estadísticas */
/* TODO: Añadir mapas interactivos del área de plantación */
</style>