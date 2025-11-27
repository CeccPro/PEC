<footer class="site-footer bg-dark text-light pb-4">
    <div class="container">
        <div class="row gy-4">
            <div class="col-md-6 col-lg-4">
                <h5 class="text-success mb-3"><i class="bi bi-tree-fill me-2"></i><?php echo $translations['site_name']; ?></h5>
                <p class="small text-light mb-3"><?php echo $translations['what_is_content']; ?></p>
                <div class="social-links d-flex gap-2">
                    <a href="#" class="btn btn-outline-light btn-sm rounded-circle"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="btn btn-outline-light btn-sm rounded-circle"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="btn btn-outline-light btn-sm rounded-circle"><i class="bi bi-instagram"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-2">
                <h6 class="text-success">Enlaces</h6>
                <ul class="list-unstyled small">
                    <li><a href="index.php" class="text-light text-decoration-none"><?php echo $translations['nav_home']; ?></a></li>
                    <li><a href="index.php?page=about" class="text-light text-decoration-none"><?php echo $translations['nav_about']; ?></a></li>
                    <li><a href="index.php?page=benefits" class="text-light text-decoration-none"><?php echo $translations['nav_benefits']; ?></a></li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-3">
                <h6 class="text-success">Recursos</h6>
                <ul class="list-unstyled small">
                    <li><a href="index.php?page=how-to" class="text-light text-decoration-none"><?php echo $translations['how_help_title']; ?></a></li>
                    <li><a href="index.php?page=contact" class="text-light text-decoration-none"><?php echo $translations['nav_contact']; ?></a></li>
                    <li><a href="index.php?page=project" class="text-light text-decoration-none"><?php echo $translations['nav_project']; ?></a></li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-3">
                <h6 class="text-success"><?php echo $translations['contact_title']; ?></h6>
                <p class="small text-light mb-1"><i class="bi bi-envelope me-2"></i> carlos.cs240021@cbta35.edu.mx</p>
                <p class="small text-light mb-1"><i class="bi bi-telephone me-2"></i> [Placeholder]</p>
                <p class="small text-light mb-0"><i class="bi bi-geo-alt me-2"></i> Carretera federal México - Puebla Km. 22.5, Col. San Juan Tlalpizáhuac</p>
            </div>
        </div>
        <hr class="my-4 border-secondary">
        <div class="row align-items-center">
            <div class="col-md-6">
                <p class="small mb-0 text-light"><?php echo $translations['footer_copy']; ?></p>
            </div>
            <div class="col-md-6 text-md-end">
                <p class="small mb-0 text-light"><?php echo $translations['footer_made']; ?></p>
            </div>
        </div>
    </div>
</footer>