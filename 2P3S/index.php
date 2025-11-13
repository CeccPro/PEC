<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>EcoBlog</title>
        <link rel="stylesheet" href="./css/bootstrap.min.css">  
        <link rel="stylesheet" href="./css/styles.css">
    </head>
    <body>
    <?php
        // Forzar a recargar la página y evitar caché
        header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP

        require_once('./php/utils/cookie_manager.php');
        CookieManager::startSessionIfNotStarted();

        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
            // User is already logged in, redirect to dashboard
            header('Location: ./php/pages/dashboard.php');
            exit();
        }

        $error = isset($_GET['error']) && $_GET['error'] === 'invalid_credentials';

        require_once('./php/components/login_form.php');
        $login = new LoginForm();
        $login->render($error);
    ?>
    </body>
</html>