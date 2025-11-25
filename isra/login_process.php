<?php
session_start();
require_once 'includes/config.php';
require_once 'includes/auth.php';
require_once 'includes/language.php';

// Iniciar sistema de idiomas para respuestas localizadas
$language = new Language();
$lang = $language->getCurrentLanguage();
$translations = $language->getTranslations($lang);

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => t('error_method_not_allowed')]);
    exit;
}

$username = trim($_POST['username'] ?? '');
$password = $_POST['password'] ?? '';
$remember = isset($_POST['remember']);

if (empty($username) || empty($password)) {
    echo json_encode(['success' => false, 'message' => t('error_username_password_required')]);
    exit;
}

$auth = new Auth();

if ($auth->login($username, $password, $remember)) {
    echo json_encode([
        'success' => true, 
        'message' => t('login_success'),
        'redirect' => 'index.php'
    ]);
} else {
    echo json_encode([
        'success' => false, 
        'message' => t('login_invalid_credentials')
    ]);
}
?>