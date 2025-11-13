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
        require_once('./php/components/login_form.php');
        $login = new LoginForm();
        $login->render();
    ?>
    </body>
</html>