<?php
session_start();
require_once 'includes/config.php';
require_once 'includes/auth.php';
require_once 'includes/language.php';

// Inicializar idioma para respuestas JSON
$language = new Language();
$translations = $language->getTranslations();

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => t('error_method_not_allowed')]);
    exit;
}

$username = trim($_POST['username'] ?? '');
$email = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';
$confirm = $_POST['confirm_password'] ?? '';

if (empty($username) || empty($email) || empty($password) || empty($confirm)) {
    echo json_encode(['success' => false, 'message' => t('error_empty_fields')]);
    exit;
}

// Validar email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'message' => t('error_invalid_email')]);
    exit;
}

// Validar contraseñas
if ($password !== $confirm) {
    echo json_encode(['success' => false, 'message' => t('error_passwords_mismatch')]);
    exit;
}

if (strlen($password) < 6) {
    echo json_encode(['success' => false, 'message' => t('error_password_too_short')]);
    exit;
}

$auth = new Auth();

// Verificar usuario existente y registrar
if ($auth->register($username, $email, $password)) {
    // Opcional: iniciar sesión automáticamente
    $auth->login($username, $password, false);
    echo json_encode(['success' => true, 'message' => t('register_success'), 'redirect' => 'index.php']);
} else {
    echo json_encode(['success' => false, 'message' => t('error_user_exists')]);
}

?>
