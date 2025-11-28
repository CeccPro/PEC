<?php
/**
 * Sistema de internacionalización (i18n) para el proyecto de reforestación
 * 
 * Este archivo contiene todos los textos de la aplicación en español e inglés,
 * permitiendo cambiar el idioma dinámicamente.
 * 
 * @author Proyecto Escolar CBTA 35
 */

/**
 * Diccionario de traducciones
 * Estructura: $translations[idioma][clave] = texto
 */
$translations = [
    'es' => [
        // Navegación y menús
        'nav_home' => 'Inicio',
        'nav_about' => 'Acerca del Proyecto',
        'nav_disciplines' => 'Disciplinas',
        'nav_calculator' => 'Calculadora',
        'nav_cbta_case' => 'Caso CBTA 35',
        'nav_login' => 'Iniciar Sesión',
        'nav_register' => 'Registrarse',
        'nav_logout' => 'Cerrar Sesión',
        'nav_profile' => 'Perfil',
        
        // Títulos principales
        'site_title' => 'Proyecto de Reforestación CBTA 35',
        'site_subtitle' => 'Un enfoque multidisciplinario para la restauración forestal',
        'welcome_title' => 'Bienvenido al Proyecto de Reforestación',
        'about_title' => 'Acerca del Proyecto',
        'disciplines_title' => 'Enfoque Multidisciplinario',
        'calculator_title' => 'Calculadora de Reforestación',
        'cbta_title' => 'Caso de Estudio: Reforestación en CBTA 35',
        
        // Contenido principal
        'intro_text' => 'La reforestación representa una estrategia fundamental para abordar crisis ambientales críticas del siglo XXI, incluyendo cambio climático, pérdida de biodiversidad y degradación de servicios ecosistémicos.',
        'project_description' => 'Este proyecto escolar integra múltiples disciplinas académicas para abordar la reforestación de manera holística, combinando conocimientos de matemáticas, ciencias naturales, humanidades, tecnología y comunicación.',
        
        // Disciplinas
        'math_title' => 'Matemáticas en la Reforestación',
        'math_description' => 'Las matemáticas son fundamentales para calcular áreas de plantación, espaciamiento óptimo entre árboles, estimaciones de crecimiento y análisis estadísticos de supervivencia.',
        'humanities_title' => 'Humanidades y Aspectos Sociales',
        'humanities_description' => 'Las humanidades nos ayudan a entender el impacto social, cultural e histórico de la deforestación y la importancia de involucrar a las comunidades locales.',
        'programming_title' => 'Programación y Tecnología',
        'programming_description' => 'La tecnología nos permite crear herramientas de cálculo, sistemas de monitoreo y plataformas educativas como esta página web.',
        'ecosystems_title' => 'Estudio de Ecosistemas',
        'ecosystems_description' => 'El conocimiento profundo de los ecosistemas es crucial para seleccionar especies apropiadas y entender las interacciones ecológicas.',
        'communication_title' => 'Lengua y Comunicación',
        'communication_description' => 'La comunicación efectiva es esencial para educar, sensibilizar y coordinar esfuerzos de reforestación con diferentes audiencias.',
        
        // Calculadora
        'calc_area_title' => 'Cálculo de Árboles por Área',
        'calc_area_label' => 'Área (hectáreas):',
        'calc_spacing_label' => 'Espaciamiento (metros):',
        'calc_tree_type_label' => 'Tipo de árbol:',
        'calc_soil_type_label' => 'Tipo de suelo:',
        'calc_calculate_btn' => 'Calcular',
        'calc_results_title' => 'Resultados del Cálculo',
        'calc_trees_per_area' => 'Árboles por área:',
        'calc_efficiency' => 'Eficiencia estimada:',
        'calc_survival_rate' => 'Tasa de supervivencia esperada:',
        
        // Formularios de autenticación
        'login_title' => 'Iniciar Sesión',
        'register_title' => 'Registro de Usuario',
        'username_label' => 'Nombre de usuario:',
        'email_label' => 'Correo electrónico:',
        'password_label' => 'Contraseña:',
        'confirm_password_label' => 'Confirmar contraseña:',
        'remember_me' => 'Recordarme',
        'login_btn' => 'Iniciar Sesión',
        'register_btn' => 'Registrarse',
        'have_account' => '¿Ya tienes cuenta? Inicia sesión',
        'no_account' => '¿No tienes cuenta? Regístrate',
        
        // Caso CBTA 35
        'cbta_intro' => 'Plan de reforestación específico para el terreno del CBTA 35, considerando las características locales del sitio.',
        'cbta_step1' => 'Evaluación del sitio',
        'cbta_step2' => 'Selección de especies nativas',
        'cbta_step3' => 'Preparación del terreno',
        'cbta_step4' => 'Plantación y establecimiento',
        'cbta_step5' => 'Monitoreo y mantenimiento',
        
        // Mensajes del sistema
        'success' => 'Éxito',
        'error' => 'Error',
        'warning' => 'Advertencia',
        'info' => 'Información',
        'loading' => 'Cargando...',
        'save' => 'Guardar',
        'cancel' => 'Cancelar',
        'delete' => 'Eliminar',
        'edit' => 'Editar',
        'view' => 'Ver',
        'back' => 'Volver',
        'next' => 'Siguiente',
        'previous' => 'Anterior',
        
        // Footer
        'footer_text' => 'Proyecto escolar desarrollado por estudiantes del CBTA 35',
        'footer_year' => '2024 - Todos los derechos reservados'
    ],
    
    'en' => [
        // Navigation and menus
        'nav_home' => 'Home',
        'nav_about' => 'About Project',
        'nav_disciplines' => 'Disciplines',
        'nav_calculator' => 'Calculator',
        'nav_cbta_case' => 'CBTA 35 Case',
        'nav_login' => 'Login',
        'nav_register' => 'Register',
        'nav_logout' => 'Logout',
        'nav_profile' => 'Profile',
        
        // Main titles
        'site_title' => 'CBTA 35 Reforestation Project',
        'site_subtitle' => 'A multidisciplinary approach to forest restoration',
        'welcome_title' => 'Welcome to the Reforestation Project',
        'about_title' => 'About the Project',
        'disciplines_title' => 'Multidisciplinary Approach',
        'calculator_title' => 'Reforestation Calculator',
        'cbta_title' => 'Case Study: CBTA 35 Reforestation',
        
        // Main content
        'intro_text' => 'Reforestation represents a fundamental strategy to address critical environmental crises of the 21st century, including climate change, biodiversity loss, and degradation of ecosystem services.',
        'project_description' => 'This school project integrates multiple academic disciplines to address reforestation holistically, combining knowledge from mathematics, natural sciences, humanities, technology, and communication.',
        
        // Disciplines
        'math_title' => 'Mathematics in Reforestation',
        'math_description' => 'Mathematics is fundamental for calculating planting areas, optimal tree spacing, growth estimates, and statistical analysis of survival rates.',
        'humanities_title' => 'Humanities and Social Aspects',
        'humanities_description' => 'Humanities help us understand the social, cultural, and historical impact of deforestation and the importance of involving local communities.',
        'programming_title' => 'Programming and Technology',
        'programming_description' => 'Technology allows us to create calculation tools, monitoring systems, and educational platforms like this website.',
        'ecosystems_title' => 'Ecosystem Studies',
        'ecosystems_description' => 'Deep knowledge of ecosystems is crucial for selecting appropriate species and understanding ecological interactions.',
        'communication_title' => 'Language and Communication',
        'communication_description' => 'Effective communication is essential for educating, raising awareness, and coordinating reforestation efforts with different audiences.',
        
        // Calculator
        'calc_area_title' => 'Trees per Area Calculation',
        'calc_area_label' => 'Area (hectares):',
        'calc_spacing_label' => 'Spacing (meters):',
        'calc_tree_type_label' => 'Tree type:',
        'calc_soil_type_label' => 'Soil type:',
        'calc_calculate_btn' => 'Calculate',
        'calc_results_title' => 'Calculation Results',
        'calc_trees_per_area' => 'Trees per area:',
        'calc_efficiency' => 'Estimated efficiency:',
        'calc_survival_rate' => 'Expected survival rate:',
        
        // Authentication forms
        'login_title' => 'Login',
        'register_title' => 'User Registration',
        'username_label' => 'Username:',
        'email_label' => 'Email:',
        'password_label' => 'Password:',
        'confirm_password_label' => 'Confirm password:',
        'remember_me' => 'Remember me',
        'login_btn' => 'Login',
        'register_btn' => 'Register',
        'have_account' => 'Already have an account? Login',
        'no_account' => "Don't have an account? Register",
        
        // CBTA 35 Case
        'cbta_intro' => 'Specific reforestation plan for CBTA 35 land, considering local site characteristics.',
        'cbta_step1' => 'Site assessment',
        'cbta_step2' => 'Native species selection',
        'cbta_step3' => 'Land preparation',
        'cbta_step4' => 'Planting and establishment',
        'cbta_step5' => 'Monitoring and maintenance',
        
        // System messages
        'success' => 'Success',
        'error' => 'Error',
        'warning' => 'Warning',
        'info' => 'Information',
        'loading' => 'Loading...',
        'save' => 'Save',
        'cancel' => 'Cancel',
        'delete' => 'Delete',
        'edit' => 'Edit',
        'view' => 'View',
        'back' => 'Back',
        'next' => 'Next',
        'previous' => 'Previous',
        
        // Footer
        'footer_text' => 'School project developed by CBTA 35 students',
        'footer_year' => '2024 - All rights reserved'
    ]
];

/**
 * Obtiene una traducción por clave
 * @param string $key Clave de traducción
 * @param string $lang Idioma (opcional, usa el idioma de sesión por defecto)
 * @return string Texto traducido
 */
function t($key, $lang = null) {
    global $translations;
    
    if ($lang === null) {
        $lang = getCurrentLanguage();
    }
    
    if (isset($translations[$lang][$key])) {
        return $translations[$lang][$key];
    }
    
    // Fallback al español si no existe en el idioma solicitado
    if ($lang !== 'es' && isset($translations['es'][$key])) {
        return $translations['es'][$key];
    }
    
    // Si no existe en ningún idioma, devolver la clave
    return $key;
}

/**
 * Cambia el idioma de la aplicación
 * @param string $lang Código del idioma ('es' o 'en')
 */
function setLanguage($lang) {
    if (in_array($lang, ['es', 'en'])) {
        $_SESSION['language'] = $lang;
    }
}

/**
 * Obtiene los idiomas disponibles
 * @return array Lista de idiomas disponibles
 */
function getAvailableLanguages() {
    return [
        'es' => 'Español',
        'en' => 'English'
    ];
}

// TODO: Implementar carga dinámica de traducciones desde archivos JSON
// TODO: Añadir más idiomas (francés, portugués)
// TODO: Implementar pluralización de textos
// TODO: Añadir soporte para formateo de fechas por idioma
// TODO: Implementar cache de traducciones para mejor rendimiento
?>