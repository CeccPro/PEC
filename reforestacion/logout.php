<?php
session_start();
require_once 'includes/config.php';
require_once 'includes/auth.php';
require_once 'includes/language.php';

$auth = new Auth();
$language = new Language();
$translations = $language->getTranslations();

$result = $auth->logout();

$_SESSION['message'] = $translations[$result['message']];
$_SESSION['message_type'] = 'info';

header('Location: index.php');
exit;
?>