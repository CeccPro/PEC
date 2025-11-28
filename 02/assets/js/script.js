/**
 * JavaScript para Portal de Reforestación CBTA 35
 * Funcionalidades interactivas y calculadora
 * 
 * @author: Estudiante CBTA 35
 * @date: November 2025
 */

// Variables globales
let calculator = {
    treeData: {
        oak: { spacing: 6, survival: 0.85, carbonRate: 15 },
        pine: { spacing: 4, survival: 0.90, carbonRate: 12 },
        cedar: { spacing: 8, survival: 0.75, carbonRate: 20 },
        mahogany: { spacing: 10, survival: 0.70, carbonRate: 25 },
        eucalyptus: { spacing: 3, survival: 0.95, carbonRate: 8 }
    },
    soilModifiers: {
        clay: { survival: 0.9, growth: 0.8 },
        sandy: { survival: 0.7, growth: 1.2 },
        loamy: { survival: 1.1, growth: 1.3 },
        rocky: { survival: 0.6, growth: 0.6 },
        humid: { survival: 1.2, growth: 1.4 }
    }
};

// Inicialización cuando el DOM esté cargado
document.addEventListener('DOMContentLoaded', function() {
    initializeComponents();
    setupEventListeners();
    loadUserPreferences();
});

/**
 * Inicializar componentes de la página
 */
function initializeComponents() {
    // Inicializar tooltips de Bootstrap
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    const tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });

    // Animaciones de entrada para elementos visibles
    observeElements();
    
    // Configurar navegación suave
    setupSmoothScrolling();
    
    console.log('Portal de Reforestación CBTA 35 inicializado correctamente');
}

/**
 * Configurar event listeners
 */
function setupEventListeners() {
    // Calculadora de reforestación
    const calculateBtn = document.getElementById('calculateBtn');
    if (calculateBtn) {
        calculateBtn.addEventListener('click', performCalculation);
    }

    // Cambio de idioma
    const languageLinks = document.querySelectorAll('[data-lang]');
    languageLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            changeLanguage(this.getAttribute('data-lang'));
        });
    });

    // Validación de formularios
    const forms = document.querySelectorAll('.needs-validation');
    forms.forEach(form => {
        form.addEventListener('submit', handleFormSubmit);
    });

    // TODO: Añadir event listeners para funcionalidades adicionales
}

/**
 * Realizar cálculos de reforestación
 */
function performCalculation() {
    const area = parseFloat(document.getElementById('area').value);
    const treeType = document.getElementById('treeType').value;
    const soilType = document.getElementById('soilType').value;

    // Validaciones
    if (!area || area <= 0) {
        showAlert('Por favor ingresa un área válida mayor a 0', 'danger');
        return;
    }

    if (!treeType) {
        showAlert('Por favor selecciona un tipo de árbol', 'warning');
        return;
    }

    if (!soilType) {
        showAlert('Por favor selecciona un tipo de suelo', 'warning');
        return;
    }

    // Mostrar spinner de carga
    showCalculationLoading(true);

    // Simular tiempo de procesamiento
    setTimeout(() => {
        const results = calculateReforestation(area, treeType, soilType);
        displayResults(results);
        showCalculationLoading(false);
    }, 1500);
}

/**
 * Calcular parámetros de reforestación
 * @param {number} area - Área en metros cuadrados
 * @param {string} treeType - Tipo de árbol
 * @param {string} soilType - Tipo de suelo
 * @returns {object} Resultados de cálculo
 */
function calculateReforestation(area, treeType, soilType) {
    const treeInfo = calculator.treeData[treeType];
    const soilModifier = calculator.soilModifiers[soilType];

    // Cálculos básicos
    const spacing = treeInfo.spacing;
    const treesPerHectare = 10000 / (spacing * spacing);
    const totalTrees = Math.floor((area / 10000) * treesPerHectare);
    
    // Aplicar modificadores por tipo de suelo
    const adjustedSurvival = Math.min(0.98, treeInfo.survival * soilModifier.survival);
    const adjustedCarbonRate = treeInfo.carbonRate * soilModifier.growth;
    
    // Estimaciones a largo plazo
    const survivingTrees = Math.floor(totalTrees * adjustedSurvival);
    const carbonCapturePerYear = (adjustedCarbonRate * survivingTrees) / 1000; // toneladas CO2/año
    const carbonCapture20Years = carbonCapturePerYear * 20;

    return {
        totalTrees: totalTrees,
        spacing: spacing,
        survivalProbability: Math.round(adjustedSurvival * 100),
        survivingTrees: survivingTrees,
        carbonCapturePerYear: carbonCapturePerYear.toFixed(2),
        carbonCapture20Years: carbonCapture20Years.toFixed(2),
        costEstimate: calculateCostEstimate(totalTrees),
        maintenanceYears: getMaintenanceRecommendation(treeType, soilType)
    };
}

/**
 * Mostrar resultados de la calculadora
 * @param {object} results - Resultados del cálculo
 */
function displayResults(results) {
    const resultsContainer = document.getElementById('calculationResults');
    
    const resultsHTML = `
        <div class="results-container fade-in-up">
            <h4 class="text-primary-green mb-4">
                <i class="fas fa-chart-line me-2"></i>
                Resultados del Cálculo
            </h4>
            
            <div class="row">
                <div class="col-md-6">
                    <div class="result-item">
                        <span class="result-label">
                            <i class="fas fa-seedling text-success me-2"></i>
                            Árboles recomendados:
                        </span>
                        <span class="result-value">${results.totalTrees.toLocaleString()}</span>
                    </div>
                    
                    <div class="result-item">
                        <span class="result-label">
                            <i class="fas fa-ruler-combined text-info me-2"></i>
                            Espaciamiento:
                        </span>
                        <span class="result-value">${results.spacing} x ${results.spacing} m</span>
                    </div>
                    
                    <div class="result-item">
                        <span class="result-label">
                            <i class="fas fa-heart-pulse text-danger me-2"></i>
                            Supervivencia estimada:
                        </span>
                        <span class="result-value">${results.survivalProbability}%</span>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="result-item">
                        <span class="result-label">
                            <i class="fas fa-tree text-success me-2"></i>
                            Árboles supervivientes:
                        </span>
                        <span class="result-value">${results.survivingTrees.toLocaleString()}</span>
                    </div>
                    
                    <div class="result-item">
                        <span class="result-label">
                            <i class="fas fa-cloud text-primary me-2"></i>
                            Captura CO₂ anual:
                        </span>
                        <span class="result-value">${results.carbonCapturePerYear} t/año</span>
                    </div>
                    
                    <div class="result-item">
                        <span class="result-label">
                            <i class="fas fa-calendar-alt text-warning me-2"></i>
                            Captura CO₂ (20 años):
                        </span>
                        <span class="result-value">${results.carbonCapture20Years} t</span>
                    </div>
                </div>
            </div>
            
            <div class="mt-4">
                <div class="alert alert-info">
                    <h6><i class="fas fa-info-circle me-2"></i>Recomendaciones:</h6>
                    <ul class="mb-0">
                        <li>Costo estimado de implementación: $${results.costEstimate.toLocaleString()} MXN</li>
                        <li>Mantenimiento intensivo requerido: ${results.maintenanceYears} años</li>
                        <li>Monitoreo recomendado cada 6 meses durante los primeros 3 años</li>
                        <li>Considerar riego de apoyo en temporada seca</li>
                    </ul>
                </div>
            </div>
            
            <div class="text-center mt-4">
                <button class="btn btn-success me-2" onclick="downloadResults()">
                    <i class="fas fa-download me-1"></i>
                    Descargar Reporte
                </button>
                <button class="btn btn-outline-primary" onclick="shareResults()">
                    <i class="fas fa-share-alt me-1"></i>
                    Compartir
                </button>
            </div>
        </div>
    `;
    
    resultsContainer.innerHTML = resultsHTML;
    resultsContainer.scrollIntoView({ behavior: 'smooth', block: 'center' });
}

/**
 * Calcular estimación de costos
 * @param {number} totalTrees - Número total de árboles
 * @returns {number} Costo estimado en MXN
 */
function calculateCostEstimate(totalTrees) {
    const costPerTree = 35; // MXN por árbol incluyendo plantación
    const sitePrepCostPerTree = 8; // MXN por árbol para preparación
    const maintenanceCostPerTree = 12; // MXN por árbol para mantenimiento
    
    return totalTrees * (costPerTree + sitePrepCostPerTree + maintenanceCostPerTree);
}

/**
 * Obtener recomendación de años de mantenimiento
 * @param {string} treeType - Tipo de árbol
 * @param {string} soilType - Tipo de suelo
 * @returns {string} Años de mantenimiento
 */
function getMaintenanceRecommendation(treeType, soilType) {
    let baseYears = 3;
    
    if (treeType === 'mahogany' || treeType === 'cedar') baseYears = 5;
    if (soilType === 'rocky' || soilType === 'sandy') baseYears += 1;
    
    return baseYears + '-' + (baseYears + 2);
}

/**
 * Mostrar/ocultar indicador de carga
 * @param {boolean} show - Mostrar o ocultar
 */
function showCalculationLoading(show) {
    const button = document.getElementById('calculateBtn');
    const spinner = '<span class="spinner-border spinner-border-sm me-2"></span>';
    
    if (show) {
        button.innerHTML = spinner + 'Calculando...';
        button.disabled = true;
    } else {
        button.innerHTML = '<i class="fas fa-calculator me-1"></i> Calcular';
        button.disabled = false;
    }
}

/**
 * Mostrar alerta personalizada
 * @param {string} message - Mensaje de alerta
 * @param {string} type - Tipo de alerta (success, danger, warning, info)
 */
function showAlert(message, type = 'info') {
    const alertContainer = document.createElement('div');
    alertContainer.className = `alert alert-${type} alert-dismissible fade show`;
    alertContainer.innerHTML = `
        ${message}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    `;
    
    // Insertar al inicio del contenedor principal
    const mainContainer = document.querySelector('.container');
    if (mainContainer) {
        mainContainer.insertBefore(alertContainer, mainContainer.firstChild);
        
        // Auto-dismiss después de 5 segundos
        setTimeout(() => {
            if (alertContainer.parentNode) {
                alertContainer.remove();
            }
        }, 5000);
    }
}

/**
 * Configurar navegación suave
 */
function setupSmoothScrolling() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
}

/**
 * Observer para animaciones de entrada
 */
function observeElements() {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-in-up');
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    });

    // Observar cards y secciones principales
    document.querySelectorAll('.card, .subject-section, .stats-card').forEach(el => {
        observer.observe(el);
    });
}

/**
 * Manejar envío de formularios con validación
 * @param {Event} event - Evento de envío
 */
function handleFormSubmit(event) {
    const form = event.target;
    
    if (!form.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
    }
    
    form.classList.add('was-validated');
}

/**
 * Cargar preferencias del usuario
 */
function loadUserPreferences() {
    // Cargar tema guardado
    const savedTheme = localStorage.getItem('reforestation_theme');
    if (savedTheme) {
        document.body.setAttribute('data-theme', savedTheme);
    }
    
    // Cargar configuraciones de calculadora
    const savedCalcSettings = localStorage.getItem('calculator_settings');
    if (savedCalcSettings) {
        const settings = JSON.parse(savedCalcSettings);
        // Aplicar configuraciones guardadas
    }
}

/**
 * Guardar preferencias del usuario
 * @param {string} key - Clave de preferencia
 * @param {*} value - Valor a guardar
 */
function saveUserPreference(key, value) {
    localStorage.setItem(key, JSON.stringify(value));
}

/**
 * Descargar resultados como PDF (simulado)
 * TODO: Implementar generación real de PDF
 */
function downloadResults() {
    showAlert('Funcionalidad de descarga en desarrollo', 'info');
    // Aquí iría la lógica para generar y descargar el PDF
}

/**
 * Compartir resultados (simulado)
 * TODO: Implementar funcionalidad real de compartir
 */
function shareResults() {
    if (navigator.share) {
        navigator.share({
            title: 'Resultados de Calculadora de Reforestación',
            text: 'Revisa estos resultados de reforestación del CBTA 35',
            url: window.location.href
        });
    } else {
        // Fallback: copiar al clipboard
        const url = window.location.href;
        navigator.clipboard.writeText(url).then(() => {
            showAlert('Enlace copiado al portapapeles', 'success');
        });
    }
}

/**
 * Cambiar idioma de la interfaz
 * @param {string} lang - Código del idioma (es/en)
 */
function changeLanguage(lang) {
    // Guardar preferencia
    saveUserPreference('preferred_language', lang);
    
    // Redirigir con parámetro de idioma
    const url = new URL(window.location);
    url.searchParams.set('lang', lang);
    window.location.href = url.toString();
}

/**
 * Validador personalizado para campos numéricos
 * @param {HTMLElement} field - Campo a validar
 * @param {number} min - Valor mínimo
 * @param {number} max - Valor máximo
 */
function validateNumericField(field, min = 0, max = Infinity) {
    const value = parseFloat(field.value);
    let isValid = true;
    let message = '';

    if (isNaN(value)) {
        isValid = false;
        message = 'Debe ser un número válido';
    } else if (value < min) {
        isValid = false;
        message = `Debe ser mayor o igual a ${min}`;
    } else if (value > max) {
        isValid = false;
        message = `Debe ser menor o igual a ${max}`;
    }

    // Mostrar/ocultar mensaje de error
    const feedback = field.parentNode.querySelector('.invalid-feedback');
    if (feedback) {
        feedback.textContent = message;
    }

    field.classList.toggle('is-invalid', !isValid);
    field.classList.toggle('is-valid', isValid);

    return isValid;
}

/**
 * Función de utilidad para formatear números
 * @param {number} num - Número a formatear
 * @param {number} decimals - Número de decimales
 * @returns {string} Número formateado
 */
function formatNumber(num, decimals = 0) {
    return new Intl.NumberFormat('es-MX', {
        minimumFractionDigits: decimals,
        maximumFractionDigits: decimals
    }).format(num);
}

/**
 * Función para obtener datos meteorológicos (simulado)
 * TODO: Integrar con API meteorológica real
 */
function getWeatherData() {
    // Datos simulados para demostración
    return {
        temperature: 24,
        humidity: 65,
        rainfall: 45,
        season: 'Seca'
    };
}

/**
 * Actualizar estadísticas en tiempo real (simulado)
 * TODO: Conectar con base de datos real
 */
function updateStatistics() {
    const stats = {
        trees_planted: 15420,
        carbon_captured: 234.6,
        area_restored: 12.3,
        survival_rate: 87
    };

    // Actualizar elementos del DOM
    Object.keys(stats).forEach(key => {
        const element = document.getElementById(`stat-${key}`);
        if (element) {
            element.textContent = formatNumber(stats[key], key.includes('rate') ? 1 : 0);
        }
    });
}

// Ejecutar actualizaciones periódicas
setInterval(() => {
    // TODO: Implementar actualizaciones automáticas
}, 30000); // Cada 30 segundos

// Exportar funciones para uso global
window.ReforestationPortal = {
    calculateReforestation,
    showAlert,
    formatNumber,
    downloadResults,
    shareResults
};

console.log('Script de reforestación cargado correctamente');

// TODO: Implementar modo offline con Service Worker
// TODO: Añadir validaciones de accesibilidad
// TODO: Implementar análisis de rendimiento
// TODO: Agregar tests automatizados