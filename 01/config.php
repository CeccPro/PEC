<?php
/**
 * Archivo de configuración principal
 * Configuraciones globales y constantes del proyecto
 */

// Iniciar sesión si no está iniciada
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Configuraciones de base de datos (JSON)
define('USERS_FILE', __DIR__ . '/data/users.json');
define('DATA_DIR', __DIR__ . '/data');

// Crear directorio de datos si no existe
if (!file_exists(DATA_DIR)) {
    mkdir(DATA_DIR, 0777, true);
}

// Inicializar archivo de usuarios si no existe
if (!file_exists(USERS_FILE)) {
    file_put_contents(USERS_FILE, json_encode([], JSON_PRETTY_PRINT));
}

// Configuración de idioma por defecto
if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'es';
}

// Timezone
date_default_timezone_set('America/Mexico_City');

// Configuración de errores (modo desarrollo)
// TODO: Cambiar a false en producción
ini_set('display_errors', 1);
error_reporting(E_ALL);

?>
