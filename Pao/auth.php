<?php
session_start();

// Verificar si el usuario está loggeado, y si no, redireccionar al login
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: index.php');
    exit();
}
?>
