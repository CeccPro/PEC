<?php
/**
 * Página de Logout
 * Cierra la sesión del usuario y redirige
 */

require_once 'config.php';

// Destruir todas las variables de sesión
$_SESSION = array();

// Destruir la cookie de sesión si existe
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time()-42000, '/');
}

// Destruir la sesión
session_destroy();

// Redirigir a la página principal
header('Location: index.php?logged_out=1');
exit;
?>
