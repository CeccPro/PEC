<?php
/**
 * Cerrar sesión
 * Destruye la sesión y cookies
 */

require_once 'config.php';

// Destruir sesión
session_unset();
session_destroy();

// Eliminar cookie de recordar
if (isset($_COOKIE['remember_token'])) {
    setcookie('remember_token', '', time() - 3600, '/');
}

// Iniciar nueva sesión para mensaje
session_start();
$_SESSION['lang'] = $_GET['lang'] ?? 'es';

// Redireccionar a login
header('Location: login.php');
exit;
?>
