<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/i18n.php';
require_once __DIR__ . '/includes/database.php';
require_once __DIR__ . '/includes/auth.php';

$message = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirm = $_POST['confirm_password'] ?? '';

    $res = $auth->register([
        'username' => $username,
        'email' => $email,
        'password' => $password,
        'confirm_password' => $confirm
    ]);

    if ($res['success']) {
        header('Location: login.php');
        exit;
    } else {
        $message = $res['message'] ?? t('error');
    }
}
?>
<!doctype html>
<html lang="<?php echo getCurrentLanguage(); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo t('register_title'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container py-5">
    <h1><?php echo t('register_title'); ?></h1>
    <?php if ($message): ?>
        <div class="alert alert-danger"><?php echo htmlspecialchars($message); ?></div>
    <?php endif; ?>

    <form method="post" action="">
        <div class="mb-3">
            <label class="form-label"><?php echo t('username_label'); ?></label>
            <input type="text" name="username" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label"><?php echo t('email_label'); ?></label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label"><?php echo t('password_label'); ?></label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label"><?php echo t('confirm_password_label'); ?></label>
            <input type="password" name="confirm_password" class="form-control" required>
        </div>
        <button class="btn btn-success" type="submit"><?php echo t('register_btn'); ?></button>
    </form>
    <p class="mt-3"><a href="login.php"><?php echo t('have_account'); ?></a></p>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>