<?php
// Configuración general del sitio
define('SITE_NAME', 'Ecoblog');
define('SITE_VERSION', '1.0.0');

// Configuración de archivos de datos
define('DATA_DIR', __DIR__ . '/../data/');
define('USERS_FILE', DATA_DIR . 'users.json');
define('LANGUAGES_DIR', __DIR__ . '/../languages/');

// Configuración de sesiones y cookies
define('SESSION_LIFETIME', 3600 * 24 * 7); // 7 días
define('COOKIE_LIFETIME', 3600 * 24 * 30); // 30 días

// Configuración de idiomas disponibles
define('AVAILABLE_LANGUAGES', ['es', 'en']);
define('DEFAULT_LANGUAGE', 'es');

// Crear directorio de datos si no existe
if (!is_dir(DATA_DIR)) {
    mkdir(DATA_DIR, 0755, true);
}

// Función para debug (TODO: Remover en producción)
function debug_log($message) {
    if (defined('DEBUG') && DEBUG) {
        _log($message);
    }
}
?>