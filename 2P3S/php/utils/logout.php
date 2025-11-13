<?php
    require_once __DIR__ . '/cookie_manager.php';
    $cookie_manager = new CookieManager();
    $cookie_manager::startSessionIfNotStarted();    

    function logout() {
        // Destroy the session and redirect to login page
        $_SESSION = [];
        session_destroy();
        header('Location: ../../index.php');
        exit();
    }

    if (($_SERVER['REQUEST_METHOD'] === 'POST' && (isset($_POST['logout']))) || (isset($_GET['logout']) && $_GET['logout'] === '1')) {
        logout();
    }

    // Si alguien accede a esta página sin enviar el formulario de logout, redirigir al índice
    header('Location: ../../index.php');
    exit();
?>