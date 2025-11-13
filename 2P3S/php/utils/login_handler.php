<?php
    require_once __DIR__ . '/cookie_manager.php';

    $cookieManager = new CookieManager();

    function load_tokens() {
        $f = __DIR__ . '/../../json/access_db.json';
        $data = @file_get_contents($f);
        return $data ? json_decode($data, true) : [];
    }

    function hash_credentials($username, $password) {
        $hashed_username = hash('sha512', $username);
        $hashed_password = hash('sha512', $password);
        return [$hashed_username, $hashed_password];
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';

        $tokens = load_tokens();

        list($hashed_username, $hashed_password) = hash_credentials($username, $password);

        $is_authenticated = false;
        foreach ($tokens as $token_pair) {
            if ($token_pair[0] === $hashed_username && $token_pair[1] === $hashed_password) {
                $is_authenticated = true;
                break;
            }
        }

        $cookieManager::startSessionIfNotStarted();

        if ($is_authenticated) {
            // Set a session or cookie to indicate successful login
            $_SESSION['logged_in'] = true;
            $_SESSION['username'] = $username;
            $_SESSION['hashed_username'] = $hashed_username;
            $_SESSION['hashed_password'] = $hashed_password;

            // Redirect to a protected page or dashboard
            header('Location: ../pages/dashboard.php');
            exit();
        } else {
            // Authentication failed, redirect back to login with error
            $_SESSION['hashed_username'] = $hashed_username;
            $_SESSION['hashed_password'] = $hashed_password;
            header('Location: ../../index.php?error=invalid_credentials');
            exit();
        }
    } else {
        // Si alguien accede a esta página sin enviar el formulario de login, redirigir al índice
        header('Location: ../../index.php');
        exit();
    }
?>