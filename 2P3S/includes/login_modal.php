<!-- Modal de Login -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content dark-modal">
                <div class="modal-header dark-modal">
                <h5 class="modal-title" id="loginModalLabel">
                    <i class="bi bi-box-arrow-in-right me-2"></i>
                    <?php echo $translations['login_title']; ?>
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                    <div class="row g-0">
                        <div class="col-md-5 d-none d-md-flex align-items-stretch">
                            <div class="p-4 m-2 login-gradient d-flex flex-column justify-content-center text-white h-100 rounded-start">
                                <h4 class="mb-3"><?php echo $translations['login_welcome'] ?? 'Bienvenido de nuevo'; ?></h4>
                                <p class="mb-0 text-light-dark small"><?php echo $translations['login_note'] ?? 'Inicia sesión para acceder a tu cuenta y participar.'; ?></p>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <form id="loginForm" action="login_process.php" method="POST">
                            <div class="mb-3">
                                <label for="username" class="form-label"><?php echo $translations['username']; ?></label>
                                <input type="text" class="form-control text-light bg-dark dark-input" id="username" name="username" required>
                            </div>
                    
                            <div class="mb-3">
                                <label for="password" class="form-label"><?php echo $translations['password']; ?></label>
                                <input type="password" class="form-control text-light bg-dark dark-input" id="password" name="password" required>
                            </div>
                    
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                    <label class="form-check-label text-light-dark" for="remember"><?php echo $translations['remember_me']; ?></label>
                                </div>
                                <a href="index.php?page=contact" class="small text-light-dark"><?php echo $translations['forgot_password'] ?? '¿Olvidaste tu contraseña?'; ?></a>
                            </div>
                    
                            <div class="alert alert-danger d-none" id="loginError"></div>
                            <button type="submit" class="btn btn-dark-accent w-100">
                                <i class="bi bi-box-arrow-in-right me-2"></i>
                                <?php echo $translations['login_button']; ?>
                            </button>
                        </form>
                    </div>
                </div>
                
                <hr class="border-secondary border-opacity-25">
                <div class="text-center">
                    <small class="text-light-dark">
                        <?php echo $translations['register_link']; ?>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#registerModal" data-bs-dismiss="modal" class="text-decoration-underline text-light">
                            <?php echo $translations['register_button']; ?>
                        </a>
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>