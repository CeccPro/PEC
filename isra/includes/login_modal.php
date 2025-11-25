<!-- Modal de Login -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title" id="loginModalLabel">
                    <i class="bi bi-box-arrow-in-right me-2"></i>
                    <?php echo $translations['login_title']; ?>
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="loginForm" action="login_process.php" method="POST">
                    <div class="mb-3">
                        <label for="username" class="form-label"><?php echo $translations['username']; ?></label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="password" class="form-label"><?php echo $translations['password']; ?></label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="remember" name="remember">
                        <label class="form-check-label" for="remember">
                            <?php echo $translations['remember_me']; ?>
                        </label>
                    </div>
                    
                    <div class="alert alert-danger d-none" id="loginError"></div>
                    
                    <button type="submit" class="btn btn-success w-100">
                        <i class="bi bi-box-arrow-in-right me-2"></i>
                        <?php echo $translations['login_button']; ?>
                    </button>
                </form>
                
                <hr>
                
                <div class="text-center">
                    <small class="text-muted">
                        <?php echo $translations['register_link']; ?>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#registerModal" data-bs-dismiss="modal">
                            <?php echo $translations['register_button']; ?>
                        </a>
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>