<?php
session_start();
require_once 'includes/config.php';
require_once 'includes/auth.php';
require_once 'includes/language.php';

// Inicializar sistema de idiomas
$language = new Language();
$lang = $language->getCurrentLanguage();
$translations = $language->getTranslations($lang);

// Verificar si el usuario está logueado
$auth = new Auth();
$isLoggedIn = $auth->isLoggedIn();
$user = $isLoggedIn ? $auth->getCurrentUser() : null;

// Información del proyecto escolar
$projectInfo = [
    'school' => $translations['project_school'],
    'student' => $translations['project_student'],
    'group' => $translations['project_group_value'],
    'theme' => $translations['project_theme'],
    'description' => $translations['project_description'],
    'subjects' => [
        'humanidades' => [
            'title' => $translations['subject_humanidades_title'],
            'content' => $translations['subject_humanidades_content']
        ],
        'matematicas' => [
            'title' => $translations['subject_matematicas_title'],
            'content' => $translations['subject_matematicas_content']
        ],
        'programacion' => [
            'title' => $translations['subject_programacion_title'],
            'content' => $translations['subject_programacion_content']
        ],
        'ecosistemas' => [
            'title' => $translations['subject_ecosistemas_title'],
            'content' => $translations['subject_ecosistemas_content']
        ],
        'lengua' => [
            'title' => $translations['subject_lengua_title'],
            'content' => $translations['subject_lengua_content']
        ]
    ]
];

// Obtener página actual
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$allowedPages = ['home', 'about', 'benefits', 'how-to', 'contact', 'project', 'calculator'];

if (!in_array($page, $allowedPages)) {
    $page = 'home';
}
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $translations['site_title']; ?></title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <?php include 'includes/header.php'; ?>
    
    <!-- Main Content -->
    <main>
        <?php 
        $pageFile = "pages/{$page}.php";
        if (file_exists($pageFile)) {
            include $pageFile;
        } else {
            include 'pages/404.php';
        }
        ?>
    </main>
    
    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>
    
    <!-- Modals -->
    <?php if (!$isLoggedIn): ?>
        <?php include 'includes/login_modal.php'; ?>
        <?php include 'includes/register_modal.php'; ?>
    <?php endif; ?>
    
    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        window.translations = <?php echo json_encode($translations); ?>;
    </script>
    <script src="assets/js/main.js"></script>
</body>
</html>