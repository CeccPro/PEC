<?php
session_start();
require_once 'includes/config.php';
require_once 'includes/auth.php';
require_once 'includes/language.php';

// Verificar que sea una petición POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

$auth = new Auth();
$language = new Language();
$translations = $language->getTranslations();

$name = sanitizeInput($_POST['name'] ?? '');
$email = sanitizeInput($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';
$confirmPassword = $_POST['confirm_password'] ?? '';

// Validar que las contraseñas coincidan
if ($password !== $confirmPassword) {
    $_SESSION['error'] = $translations['error_password_mismatch'];
    $_SESSION['error_type'] = 'danger';
    header('Location: index.php');
    exit;
}

// Procesar registro
$result = $auth->register($name, $email, $password);

if ($result['success']) {
    $_SESSION['message'] = $translations[$result['message']];
    $_SESSION['message_type'] = 'success';
    header('Location: index.php');
} else {
    $_SESSION['error'] = $translations[$result['message']];
    $_SESSION['error_type'] = 'danger';
    header('Location: index.php');
}
exit;
?>