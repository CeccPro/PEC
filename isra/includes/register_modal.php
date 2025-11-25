<!-- Modal de Registro -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title" id="registerModalLabel">
                    <i class="bi bi-person-plus me-2"></i>
                    <?php echo $translations['register_title']; ?>
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="registerForm" action="register_process.php" method="POST">
                    <div class="mb-3">
                        <label for="register_username" class="form-label"><?php echo $translations['username'] ?? 'Usuario'; ?></label>
                        <input type="text" class="form-control" id="register_username" name="username" required>
                    </div>

                    <div class="mb-3">
                        <label for="register_email" class="form-label"><?php echo $translations['email'] ?? 'Email'; ?></label>
                        <input type="email" class="form-control" id="register_email" name="email" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="register_password" class="form-label"><?php echo $translations['password'] ?? 'Contraseña'; ?></label>
                        <input type="password" class="form-control" id="register_password" name="password" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="register_confirm_password" class="form-label"><?php echo $translations['confirm_password'] ?? 'Confirmar Contraseña'; ?></label>
                        <input type="password" class="form-control" id="register_confirm_password" name="confirm_password" required>
                    </div>
                    
                    <div class="alert alert-danger d-none" id="registerError"></div>
                    <div class="alert alert-success d-none" id="registerSuccess"></div>
                    
                    <button type="submit" class="btn btn-success w-100">
                        <i class="bi bi-person-plus me-2"></i>
                        <?php echo $translations['register_button']; ?>
                    </button>
                </form>
                
                <hr>
                
                <div class="text-center">
                    <small class="text-muted">
                        <?php echo $translations['register_already']; ?>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#loginModal" data-bs-dismiss="modal">
                            <?php echo $translations['login_button'] ?? 'Iniciar sesión'; ?>
                        </a>
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>