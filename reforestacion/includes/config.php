<?php
/**
 * Configuración general del sistema de Reforestación
 * Proyecto Escolar - CBTA 35
 */

// Configuración de la aplicación
define('APP_NAME', 'Sistema de Reforestación CBTA 35');
define('APP_VERSION', '1.0.0');
define('BASE_URL', '/pec/reforestacion/');

// Configuración de idiomas soportados
define('SUPPORTED_LANGUAGES', ['es', 'en']);
define('DEFAULT_LANGUAGE', 'es');

// Configuración de archivos
define('USERS_FILE', __DIR__ . '/../data/users.json');
define('LANG_DIR', __DIR__ . '/../languages/');

// Configuración de seguridad
define('PASSWORD_MIN_LENGTH', 8);
define('SESSION_TIMEOUT', 3600); // 1 hora

// Configuración de calculadora
define('TREE_TYPES', [
    'pino' => [
        'name' => ['es' => 'Pino', 'en' => 'Pine'],
        'spacing' => 3, // metros entre árboles
        'soil_efficiency' => ['arcilloso' => 0.7, 'arenoso' => 0.9, 'limoso' => 0.8, 'franco' => 0.95],
        'growth_rate' => 0.5, // metros por año
        'co2_absorption' => 22 // kg CO2 por año
    ],
    'encino' => [
        'name' => ['es' => 'Encino', 'en' => 'Oak'],
        'spacing' => 4,
        'soil_efficiency' => ['arcilloso' => 0.9, 'arenoso' => 0.6, 'limoso' => 0.9, 'franco' => 1.0],
        'growth_rate' => 0.3,
        'co2_absorption' => 18
    ],
    'cedro' => [
        'name' => ['es' => 'Cedro', 'en' => 'Cedar'],
        'spacing' => 5,
        'soil_efficiency' => ['arcilloso' => 0.8, 'arenoso' => 0.7, 'limoso' => 0.95, 'franco' => 0.9],
        'growth_rate' => 0.4,
        'co2_absorption' => 25
    ],
    'eucalipto' => [
        'name' => ['es' => 'Eucalipto', 'en' => 'Eucalyptus'],
        'spacing' => 3.5,
        'soil_efficiency' => ['arcilloso' => 0.6, 'arenoso' => 0.8, 'limoso' => 0.7, 'franco' => 0.8],
        'growth_rate' => 1.2,
        'co2_absorption' => 35
    ]
]);

// Función para obtener la URL base
function getBaseUrl() {
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https://' : 'http://';
    $host = $_SERVER['HTTP_HOST'];
    return $protocol . $host . BASE_URL;
}

// Función para sanitizar datos de entrada
function sanitizeInput($data) {
    return htmlspecialchars(strip_tags(trim($data)), ENT_QUOTES, 'UTF-8');
}

// Función para validar email
function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

// Función para generar hash de password
function hashPassword($password) {
    return password_hash($password, PASSWORD_DEFAULT);
}

// Función para verificar password
function verifyPassword($password, $hash) {
    return password_verify($password, $hash);
}

// TODO: Agregar configuración para base de datos si se migra de JSON
// TODO: Configurar logs del sistema
// TODO: Agregar configuración para email notifications
?>