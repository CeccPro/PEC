<footer class="bg-dark text-light py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-4">
                <h5 class="text-success">
                    <i class="bi bi-tree-fill me-2"></i>
                    <?php echo $translations['site_name']; ?>
                </h5>
                <p class="text-light">
                    <?php echo $translations['what_is_content']; ?>
                </p>                <div class="social-links">
                    <!-- TODO: Reemplazar "#" con URLs reales de redes sociales -->
                    <a href="#" class="text-success me-3"><i class="bi bi-facebook fs-4"></i></a>
                    <a href="#" class="text-success me-3"><i class="bi bi-twitter fs-4"></i></a>
                    <a href="#" class="text-success me-3"><i class="bi bi-instagram fs-4"></i></a>
                </div>
            </div>
            
            <div class="col-lg-2 mb-4">
                <h6 class="text-success"><?php echo $translations['nav_home']; ?></h6>                <ul class="list-unstyled">
                    <li><a href="index.php" class="text-light text-decoration-none"><?php echo $translations['nav_home']; ?></a></li>
                    <li><a href="index.php?page=about" class="text-light text-decoration-none"><?php echo $translations['nav_about']; ?></a></li>
                    <li><a href="index.php?page=benefits" class="text-light text-decoration-none"><?php echo $translations['nav_benefits']; ?></a></li>
                </ul>
            </div>
            
            <div class="col-lg-2 mb-4">
                <h6 class="text-success"><?php echo $translations['nav_how_to']; ?></h6>
                <ul class="list-unstyled">
                    <li><a href="index.php?page=how-to" class="text-light text-decoration-none"><?php echo $translations['how_help_title']; ?></a></li>
                    <li><a href="index.php?page=contact" class="text-light text-decoration-none"><?php echo $translations['nav_contact']; ?></a></li>
                </ul>
            </div>
              <div class="col-lg-4 mb-4">
                <h6 class="text-success"><?php echo $translations['contact_title']; ?></h6>
                <p class="text-light mb-1">
                    <i class="bi bi-envelope me-2"></i>
                    israel.hz240795@cbta35.edu.mx
                </p>
                <p class="text-light mb-1">
                    <i class="bi bi-telephone me-2"></i>
                    [Placeholder]
                </p>
                <p class="text-light">
                    <i class="bi bi-geo-alt me-2"></i>
                    Carretera federal México - Puebla Km. 22.5 Colonia San Juan Tlalpizáhuac, Valle de Chalco Solidaridad C.P. 56618
                </p>
            </div>
        </div>
        
        <hr class="border-success">
          <div class="row align-items-center">
            <div class="col-md-6">
                <p class="text-light mb-0">
                    <?php echo $translations['footer_copy']; ?>
                </p>
            </div>
            <div class="col-md-6 text-md-end">
                <p class="text-light mb-0">
                    <?php echo $translations['footer_made']; ?>
                </p>
            </div>
        </div>
    </div>
</footer>