<?php
/**
 * Calculadora de Reforestación
 * Herramienta interactiva para calcular densidad de plantación,
 * eficiencia por tipo de suelo y estimaciones de impacto
 * 
 * @author: Estudiante CBTA 35
 * @date: November 2025
 */
?>

<!-- Calculadora de Reforestación -->
<section id="calculadora" class="calculator-section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <i class="fas fa-calculator fa-4x text-success mb-3"></i>
                <h2><?php echo $t['calculator_title']; ?></h2>
                <p class="lead"><?php echo $t['calculator_intro']; ?></p>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="calculator-form">
                    <form id="reforestationForm" novalidate>
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <label for="area" class="form-label">
                                    <i class="fas fa-expand-arrows-alt text-primary me-2"></i>
                                    <?php echo $t['area_size']; ?>
                                </label>
                                <div class="input-group">
                                    <input type="number" 
                                           class="form-control" 
                                           id="area" 
                                           name="area" 
                                           min="100" 
                                           max="1000000" 
                                           step="1" 
                                           placeholder="Ej. 10000"
                                           required>
                                    <span class="input-group-text">m²</span>
                                </div>
                                <div class="form-text">Área mínima: 100 m² | Máxima: 1,000,000 m²</div>
                                <div class="invalid-feedback">
                                    <?php echo $t['area_required']; ?>
                                </div>
                            </div>
                            
                            <div class="col-md-6 mb-4">
                                <label for="treeType" class="form-label">
                                    <i class="fas fa-tree text-success me-2"></i>
                                    <?php echo $t['tree_type']; ?>
                                </label>
                                <select class="form-select" id="treeType" name="treeType" required>
                                    <option value=""><?php echo $t['select_tree_type']; ?></option>
                                    <option value="oak"><?php echo $t['oak']; ?> (Quercus spp.)</option>
                                    <option value="pine"><?php echo $t['pine']; ?> (Pinus spp.)</option>
                                    <option value="cedar"><?php echo $t['cedar']; ?> (Cedrela odorata)</option>
                                    <option value="mahogany"><?php echo $t['mahogany']; ?> (Swietenia macrophylla)</option>
                                    <option value="eucalyptus"><?php echo $t['eucalyptus']; ?> (Eucalyptus spp.)</option>
                                </select>
                                <div class="invalid-feedback">
                                    <?php echo $t['select_tree_type']; ?>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <label for="soilType" class="form-label">
                                    <i class="fas fa-layer-group text-warning me-2"></i>
                                    <?php echo $t['soil_type']; ?>
                                </label>
                                <select class="form-select" id="soilType" name="soilType" required>
                                    <option value=""><?php echo $t['select_soil_type']; ?></option>
                                    <option value="clay"><?php echo $t['clay']; ?> - Retiene agua, drenaje lento</option>
                                    <option value="sandy"><?php echo $t['sandy']; ?> - Drenaje rápido, requiere riego</option>
                                    <option value="loamy"><?php echo $t['loamy']; ?> - Ideal para la mayoría de especies</option>
                                    <option value="rocky"><?php echo $t['rocky']; ?> - Drenaje excelente, limitado</option>
                                    <option value="humid"><?php echo $t['humid']; ?> - Rico en materia orgánica</option>
                                </select>
                                <div class="invalid-feedback">
                                    <?php echo $t['select_soil_type']; ?>
                                </div>
                            </div>
                            
                            <div class="col-md-6 mb-4">
                                <label class="form-label">
                                    <i class="fas fa-cog text-info me-2"></i>
                                    Opciones Avanzadas
                                </label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="includeNatives" checked>
                                    <label class="form-check-label" for="includeNatives">
                                        Priorizar especies nativas
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="includeEconomic">
                                    <label class="form-check-label" for="includeEconomic">
                                        Incluir análisis económico
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="includeBiodiversity">
                                    <label class="form-check-label" for="includeBiodiversity">
                                        Análisis de biodiversidad
                                    </label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="text-center">
                            <button type="submit" class="btn btn-success btn-lg px-5" id="calculateBtn">
                                <i class="fas fa-calculator me-2"></i>
                                <?php echo $t['calculate']; ?>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <!-- Área de Resultados -->
        <div class="row mt-5">
            <div class="col-12">
                <div id="calculationResults" class="fade-in-up">
                    <!-- Los resultados se insertan aquí dinámicamente -->
                </div>
            </div>
        </div>
        
        <!-- Información Educativa -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="card shadow">
                    <div class="card-header bg-info text-white">
                        <h4 class="mb-0">
                            <i class="fas fa-lightbulb me-2"></i>
                            ¿Cómo funciona la calculadora?
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <h6 class="text-primary">Variables Consideradas:</h6>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <strong>Espaciamiento óptimo:</strong> Basado en el tamaño maduro de cada especie
                                    </li>
                                    <li class="list-group-item">
                                        <strong>Tasa de supervivencia:</strong> Histórica por especie y tipo de suelo
                                    </li>
                                    <li class="list-group-item">
                                        <strong>Captura de carbono:</strong> Estimada según biomasa por especie
                                    </li>
                                    <li class="list-group-item">
                                        <strong>Modificadores de suelo:</strong> Factores de corrección por tipo de suelo
                                    </li>
                                </ul>
                            </div>
                            
                            <div class="col-lg-6">
                                <h6 class="text-success">Fórmulas Aplicadas:</h6>
                                <div class="bg-light p-3 rounded">
                                    <div class="mb-3">
                                        <strong>Densidad de plantación:</strong><br>
                                        <code>D = 10,000 / (E × E)</code><br>
                                        <small class="text-muted">D = árboles/hectárea, E = espaciamiento en metros</small>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <strong>Supervivencia ajustada:</strong><br>
                                        <code>S_adj = S_base × M_suelo</code><br>
                                        <small class="text-muted">S = supervivencia, M = modificador</small>
                                    </div>
                                    
                                    <div>
                                        <strong>Captura de CO₂:</strong><br>
                                        <code>CO₂ = N × T_captura × M_crecimiento</code><br>
                                        <small class="text-muted">N = árboles, T = tasa captura, M = modificador</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mt-4">
                            <div class="col-12">
                                <div class="alert alert-warning">
                                    <h6><i class="fas fa-exclamation-triangle me-2"></i>Limitaciones y Consideraciones</h6>
                                    <ul class="mb-0">
                                        <li>Los cálculos son estimativos basados en datos promedio</li>
                                        <li>Condiciones locales específicas pueden alterar los resultados</li>
                                        <li>Se recomienda consulta con expertos forestales para proyectos grandes</li>
                                        <li>Los datos de captura de carbono son proyecciones a 20 años</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Comparativa de Especies -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="card shadow">
                    <div class="card-header bg-success text-white">
                        <h4 class="mb-0">
                            <i class="fas fa-balance-scale me-2"></i>
                            Comparativa de Especies Forestales
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="table-success">
                                    <tr>
                                        <th>Especie</th>
                                        <th>Espaciamiento (m)</th>
                                        <th>Supervivencia Base (%)</th>
                                        <th>Captura CO₂ (kg/año/árbol)</th>
                                        <th>Tiempo a Madurez</th>
                                        <th>Mejor Suelo</th>
                                        <th>Características</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>Encino</strong><br><small class="text-muted">Quercus spp.</small></td>
                                        <td>6 x 6</td>
                                        <td><span class="badge bg-success">85%</span></td>
                                        <td>15 kg</td>
                                        <td>15-20 años</td>
                                        <td>Franco</td>
                                        <td><small>Longevidad alta, hábitat fauna</small></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Pino</strong><br><small class="text-muted">Pinus spp.</small></td>
                                        <td>4 x 4</td>
                                        <td><span class="badge bg-success">90%</span></td>
                                        <td>12 kg</td>
                                        <td>10-15 años</td>
                                        <td>Arenoso</td>
                                        <td><small>Crecimiento rápido, valor comercial</small></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Cedro</strong><br><small class="text-muted">Cedrela odorata</small></td>
                                        <td>8 x 8</td>
                                        <td><span class="badge bg-warning">75%</span></td>
                                        <td>20 kg</td>
                                        <td>20-25 años</td>
                                        <td>Húmedo</td>
                                        <td><small>Madera valiosa, crecimiento lento</small></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Caoba</strong><br><small class="text-muted">Swietenia macrophylla</small></td>
                                        <td>10 x 10</td>
                                        <td><span class="badge bg-warning">70%</span></td>
                                        <td>25 kg</td>
                                        <td>25-30 años</td>
                                        <td>Franco-Húmedo</td>
                                        <td><small>Muy valiosa, requiere cuidados</small></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Eucalipto</strong><br><small class="text-muted">Eucalyptus spp.</small></td>
                                        <td>3 x 3</td>
                                        <td><span class="badge bg-success">95%</span></td>
                                        <td>8 kg</td>
                                        <td>5-10 años</td>
                                        <td>Variado</td>
                                        <td><small>Crecimiento muy rápido, adaptable</small></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                        <div class="row mt-4">
                            <div class="col-md-4">
                                <div class="card bg-light">
                                    <div class="card-body text-center">
                                        <i class="fas fa-award text-success fa-3x mb-2"></i>
                                        <h6>Mayor Supervivencia</h6>
                                        <p class="mb-0"><strong>Eucalipto</strong> - 95%</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card bg-light">
                                    <div class="card-body text-center">
                                        <i class="fas fa-cloud text-primary fa-3x mb-2"></i>
                                        <h6>Mayor Captura CO₂</h6>
                                        <p class="mb-0"><strong>Caoba</strong> - 25 kg/año</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card bg-light">
                                    <div class="card-body text-center">
                                        <i class="fas fa-clock text-warning fa-3x mb-2"></i>
                                        <h6>Crecimiento Más Rápido</h6>
                                        <p class="mb-0"><strong>Eucalipto</strong> - 5-10 años</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Guía de Interpretación de Resultados -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="card shadow">
                    <div class="card-header bg-warning text-dark">
                        <h4 class="mb-0">
                            <i class="fas fa-compass me-2"></i>
                            Guía de Interpretación de Resultados
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <h6 class="text-primary">Rangos de Supervivencia:</h6>
                                <ul class="list-unstyled">
                                    <li>
                                        <span class="badge bg-danger me-2">< 60%</span>
                                        <strong>Baja:</strong> Requiere condiciones especiales
                                    </li>
                                    <li>
                                        <span class="badge bg-warning me-2">60-79%</span>
                                        <strong>Media:</strong> Aceptable con manejo adecuado
                                    </li>
                                    <li>
                                        <span class="badge bg-success me-2">≥ 80%</span>
                                        <strong>Alta:</strong> Excelente para las condiciones
                                    </li>
                                </ul>
                                
                                <h6 class="text-success mt-4">Densidad Recomendada:</h6>
                                <ul class="list-unstyled">
                                    <li>
                                        <strong>Baja densidad (< 400 árb/ha):</strong> Especies de gran porte
                                    </li>
                                    <li>
                                        <strong>Media densidad (400-800 árb/ha):</strong> Especies medianas
                                    </li>
                                    <li>
                                        <strong>Alta densidad (> 800 árb/ha):</strong> Especies pequeñas o plantación intensiva
                                    </li>
                                </ul>
                            </div>
                            
                            <div class="col-lg-6">
                                <h6 class="text-info">Captura de Carbono:</h6>
                                <div class="progress mb-2">
                                    <div class="progress-bar bg-danger" style="width: 20%">Baja (< 5 t/ha/año)</div>
                                    <div class="progress-bar bg-warning" style="width: 40%">Media (5-15 t/ha/año)</div>
                                    <div class="progress-bar bg-success" style="width: 40%">Alta (> 15 t/ha/año)</div>
                                </div>
                                
                                <h6 class="text-warning mt-4">Recomendaciones por Resultado:</h6>
                                <div class="accordion" id="recommendationsAccordion">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" 
                                                    data-bs-toggle="collapse" data-bs-target="#lowSurvival">
                                                Si la supervivencia es baja (< 70%)
                                            </button>
                                        </h2>
                                        <div id="lowSurvival" class="accordion-collapse collapse" 
                                             data-bs-parent="#recommendationsAccordion">
                                            <div class="accordion-body">
                                                <ul>
                                                    <li>Considere cambiar de especie más adaptada</li>
                                                    <li>Mejore las condiciones del suelo antes de plantar</li>
                                                    <li>Implemente riego de apoyo durante establecimiento</li>
                                                    <li>Aumente el porcentaje de replante inicial (15-20%)</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" 
                                                    data-bs-toggle="collapse" data-bs-target="#highDensity">
                                                Si la densidad es muy alta (> 1000 árb/ha)
                                            </button>
                                        </h2>
                                        <div id="highDensity" class="accordion-collapse collapse" 
                                             data-bs-parent="#recommendationsAccordion">
                                            <div class="accordion-body">
                                                <ul>
                                                    <li>Planifique raleos tempranos (3-5 años)</li>
                                                    <li>Asegure acceso suficiente para mantenimiento</li>
                                                    <li>Considere plantación en fajas para reducir competencia</li>
                                                    <li>Monitoree crecimiento más frecuentemente</li>
                                                </ul>
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
    </div>
</section>

<!-- Scripts específicos para la calculadora -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('reforestationForm');
    
    // Validación en tiempo real
    const inputs = form.querySelectorAll('input, select');
    inputs.forEach(input => {
        input.addEventListener('blur', validateField);
        input.addEventListener('input', clearValidation);
    });
    
    // Manejar envío del formulario
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        performCalculation();
    });
});

function validateField(event) {
    const field = event.target;
    const value = field.value.trim();
    let isValid = true;
    
    // Validaciones específicas
    if (field.name === 'area') {
        const area = parseFloat(value);
        isValid = !isNaN(area) && area >= 100 && area <= 1000000;
    } else if (field.type === 'select-one') {
        isValid = value !== '';
    }
    
    // Aplicar clases de validación
    field.classList.toggle('is-valid', isValid && value !== '');
    field.classList.toggle('is-invalid', !isValid && value !== '');
}

function clearValidation(event) {
    const field = event.target;
    field.classList.remove('is-valid', 'is-invalid');
}

// TODO: Implementar funciones de guardado de cálculos
// TODO: Añadir exportación de resultados a PDF
// TODO: Implementar comparación de múltiples escenarios
// TODO: Conectar con base de datos para guardar histórico de cálculos
</script>

<style>
.calculator-section {
    background: linear-gradient(135deg, #F8F9FA 0%, #E9ECEF 100%);
    padding: 5rem 0;
}

.calculator-form {
    background: white;
    padding: 3rem;
    border-radius: 20px;
    box-shadow: 0 15px 35px rgba(0,0,0,0.1);
}

.form-control:focus,
.form-select:focus {
    border-color: #28a745;
    box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
}

.table-hover tbody tr:hover {
    background-color: rgba(40, 167, 69, 0.05);
}

/* TODO: Añadir más estilos personalizados */
/* TODO: Implementar animaciones para los resultados */
/* TODO: Mejorar accesibilidad con contrastes adecuados */
</style>