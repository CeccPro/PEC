<?php
    require_once __DIR__ . '/../utils/cookie_manager.php';
    $cookie_manager = new CookieManager();
    $cookie_manager::startSessionIfNotStarted();

    require_once __DIR__ . '/../modules/html_header.php';
    HTMLHeader::render('Dashboard');

    if ( !isset( $_SESSION['logged_in'] ) || $_SESSION['logged_in'] !== true) {
        // User is not logged in, redirect to login page
        header('Location: ../../index.php');
        exit();
    }

    require_once __DIR__ . '/../components/nav.php';
    $nav = new NavBar();
    $nav->render();
?>