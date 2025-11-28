<?php
/**
 * Archivo de configuración principal del proyecto de Reforestación
 * 
 * Este archivo contiene todas las configuraciones globales de la aplicación,
 * incluyendo rutas, configuraciones de sesión y constantes del sistema.
 * 
 * @author Proyecto Escolar CBTA 35
 * @version 1.0
 */

// Iniciar sesión si no está iniciada
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Configuración de rutas
define('BASE_PATH', dirname(__DIR__));
define('DATA_PATH', BASE_PATH . '/data/');
define('USERS_FILE', DATA_PATH . 'users.json');

// Configuración de la aplicación
define('APP_NAME', 'Proyecto Reforestación CBTA 35');
define('APP_VERSION', '1.0');

// Configuración de idioma por defecto
if (!isset($_SESSION['language'])) {
    $_SESSION['language'] = 'es'; // Español por defecto
}

// Configuración de cookies
define('COOKIE_LIFETIME', 30 * 24 * 60 * 60); // 30 días

// Configuración de seguridad para passwords
define('PASSWORD_ALGORITHM', PASSWORD_DEFAULT);

// Configuración de debugging (cambiar a false en producción)
define('DEBUG_MODE', true);

// Función para manejar errores en modo debug
if (DEBUG_MODE) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
}

// TODO: Añadir configuración de base de datos MySQL si se requiere en el futuro
// TODO: Implementar configuración de mailer para recuperación de contraseñas
// TODO: Añadir configuración de logging para auditoria de acciones

/**
 * Función para obtener el idioma actual
 * @return string Código del idioma actual
 */
function getCurrentLanguage() {
    return $_SESSION['language'] ?? 'es';
}

/**
 * Función para verificar si los directorios necesarios existen
 */
function checkDirectories() {
    if (!is_dir(DATA_PATH)) {
        mkdir(DATA_PATH, 0755, true);
    }
}

// Verificar directorios al cargar la configuración
checkDirectories();
?>