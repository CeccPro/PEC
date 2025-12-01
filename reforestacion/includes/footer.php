    <!-- Footer -->
    <footer class="bg-dark text-light mt-5 py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h5 class="fw-bold mb-3">
                        <i class="bi bi-tree-fill me-2 text-success"></i>
                        <?php echo $translations['app_title']; ?>
                    </h5>
                    <p class="text-muted">
                        <?php echo $translations['welcome_description']; ?>
                    </p>
                    <div class="d-flex gap-3">
                        <a href="#" class="text-light"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-light"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="text-light"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="text-light"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-6 mb-4">
                    <h6 class="fw-bold mb-3"><?php echo $translations['nav_subjects']; ?></h6>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="matematicas.php" class="text-muted text-decoration-none">
                                <?php echo $translations['subject_matematicas_title']; ?>
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="humanidades.php" class="text-muted text-decoration-none">
                                <?php echo $translations['subject_humanidades_title']; ?>
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="programacion.php" class="text-muted text-decoration-none">
                                <?php echo $translations['subject_programacion_title']; ?>
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="ecosistemas.php" class="text-muted text-decoration-none">
                                <?php echo $translations['subject_ecosistemas_title']; ?>
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="comunicacion.php" class="text-muted text-decoration-none">
                                <?php echo $translations['subject_comunicacion_title']; ?>
                            </a>
                        </li>
                    </ul>
                </div>
                
                <div class="col-lg-2 col-md-6 mb-4">
                    <h6 class="fw-bold mb-3">Enlaces Rápidos</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="about.php" class="text-muted text-decoration-none">
                                <?php echo $translations['nav_about']; ?>
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="calculator.php" class="text-muted text-decoration-none">
                                <?php echo $translations['nav_calculator']; ?>
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="cbta_project.php" class="text-muted text-decoration-none">
                                <?php echo $translations['nav_cbta_project']; ?>
                            </a>
                        </li>
                    </ul>
                </div>
                
                <div class="col-lg-4 mb-4">
                    <h6 class="fw-bold mb-3">Información del Proyecto</h6>
                    <address class="text-muted">
                        <strong><?php echo $translations['project_school']; ?></strong><br>
                        Estado de México, México<br>
                        <i class="bi bi-envelope me-2"></i> proyecto@cbta35.edu.mx<br>
                        <i class="bi bi-phone me-2"></i> +52 (55) 1234-5678
                    </address>
                </div>
            </div>
            
            <hr class="my-4">
            
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="text-muted mb-0">
                        <?php echo $translations['footer_text']; ?>
                    </p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p class="text-muted mb-0">
                        <?php echo $translations['footer_developed']; ?>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <?php if (!$isLoggedIn): ?>
        <!-- Login Modal -->
        <div class="modal fade" id="loginModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-success text-white">
                        <h5 class="modal-title">
                            <i class="bi bi-box-arrow-in-right me-2"></i>
                            <?php echo $translations['login_title']; ?>
                        </h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                    </div>
                    <form action="login_process.php" method="POST">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="loginEmail" class="form-label">
                                    <?php echo $translations['login_email']; ?>
                                </label>
                                <input type="email" class="form-control" id="loginEmail" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="loginPassword" class="form-label">
                                    <?php echo $translations['login_password']; ?>
                                </label>
                                <input type="password" class="form-control" id="loginPassword" name="password" required>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="rememberMe" name="remember">
                                <label class="form-check-label" for="rememberMe">
                                    Recordarme
                                </label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                Cancelar
                            </button>
                            <button type="submit" class="btn btn-success">
                                <i class="bi bi-box-arrow-in-right me-1"></i>
                                <?php echo $translations['login_submit']; ?>
                            </button>
                        </div>
                    </form>
                    <div class="modal-footer border-top-0 pt-0">
                        <p class="text-muted mb-0">
                            <?php echo $translations['login_no_account']; ?>
                            <a href="#" class="text-success" data-bs-toggle="modal" data-bs-target="#registerModal" data-bs-dismiss="modal">
                                <?php echo $translations['login_register_link']; ?>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Register Modal -->
        <div class="modal fade" id="registerModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title">
                            <i class="bi bi-person-plus me-2"></i>
                            <?php echo $translations['register_title']; ?>
                        </h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                    </div>
                    <form action="register_process.php" method="POST">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="registerName" class="form-label">
                                    <?php echo $translations['register_name']; ?>
                                </label>
                                <input type="text" class="form-control" id="registerName" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="registerEmail" class="form-label">
                                    <?php echo $translations['register_email']; ?>
                                </label>
                                <input type="email" class="form-control" id="registerEmail" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="registerPassword" class="form-label">
                                    <?php echo $translations['register_password']; ?>
                                </label>
                                <input type="password" class="form-control" id="registerPassword" name="password" 
                                       minlength="8" required>
                                <div class="form-text">
                                    <?php echo $translations['error_password_too_short']; ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="registerConfirmPassword" class="form-label">
                                    <?php echo $translations['register_confirm_password']; ?>
                                </label>
                                <input type="password" class="form-control" id="registerConfirmPassword" 
                                       name="confirm_password" minlength="8" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                Cancelar
                            </button>
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-person-plus me-1"></i>
                                <?php echo $translations['register_submit']; ?>
                            </button>
                        </div>
                    </form>
                    <div class="modal-footer border-top-0 pt-0">
                        <p class="text-muted mb-0">
                            <?php echo $translations['register_have_account']; ?>
                            <a href="#" class="text-primary" data-bs-toggle="modal" data-bs-target="#loginModal" data-bs-dismiss="modal">
                                <?php echo $translations['register_login_link']; ?>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="assets/js/main.js"></script>

    <!-- TODO: Agregar Google Analytics -->
    <!-- TODO: Implementar service worker para PWA -->
    <!-- TODO: Agregar chat de soporte -->
</body>
</html>