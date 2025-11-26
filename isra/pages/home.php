<!-- Hero Section -->
<section class="hero-section bg-success text-white py-5">
    <div class="container">
        <div class="row align-items-center min-vh-75">
            <div class="col-lg-6">
                <h1 class="display-4 fw-bold mb-4">
                    <?php echo $translations['hero_title']; ?>
                </h1>
                <p class="lead mb-4">
                    <?php echo $translations['hero_subtitle']; ?>
                </p>
                <a href="#learn-more" class="btn btn-light btn-lg">
                    <i class="bi bi-arrow-down-circle me-2"></i>
                    <?php echo $translations['hero_cta']; ?>
                </a>
            </div>
            <div class="col-lg-6">
                <div class="text-center">
                    <div class="" style="height: 400px; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 8px rgba(0,0,0,0.1); border-radius: 8px; overflow: hidden;">
                        <!-- Carousel de placeholders con colores distintos -->
                        <div id="heroCarousel" class="carousel slide w-100 h-100" data-bs-ride="carousel" aria-label="<?php echo $translations['hero_carousel_label'] ?? 'Carrusel de imágenes'; ?>">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner h-100">
                                <div class="carousel-item active h-100">
                                    <img src="https://placehold.co/600x400/4aa44a/FFFFFF/?text=Placeholder+1" class="d-block w-100 h-100 img-fluid object-fit-cover rounded shadow" alt="<?php echo $translations['hero_image_alt'] ?? 'Bosque Verde'; ?> - 1" style="object-fit: cover;">
                                </div>
                                <div class="carousel-item h-100">
                                    <img src="https://placehold.co/600x400/2e8b57/FFFFFF/?text=Placeholder+2" class="d-block w-100 h-100 img-fluid object-fit-cover rounded shadow" alt="<?php echo $translations['hero_image_alt'] ?? 'Bosque Verde'; ?> - 2" style="object-fit: cover;">
                                </div>
                                <div class="carousel-item h-100">
                                    <img src="https://placehold.co/600x400/66cdaa/FFFFFF/?text=Placeholder+3" class="d-block w-100 h-100 img-fluid object-fit-cover rounded shadow" alt="<?php echo $translations['hero_image_alt'] ?? 'Bosque Verde'; ?> - 3" style="object-fit: cover;">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ¿Qué es la Reforestación? -->
<section id="learn-more" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="display-5 fw-bold text-success mb-4">
                    <?php echo $translations['what_is_title']; ?>
                </h2>
                <p class="lead text-muted mb-5">
                    <?php echo $translations['what_is_content']; ?>
                </p>
            </div>
        </div>        <div class="row">
            <div class="col-lg-6 mb-4">
                <!-- TODO-P: Añadir imagen real de plantación de árboles o proceso de reforestación -->
                <div class="bg-light rounded p-4 h-100 d-flex align-items-center justify-content-center">
                    <div class="text-success text-center">
                        <img src="https://www.bbva.com/wp-content/uploads/2021/11/reforestacio%CC%81n_sostenibilidad-bosques-naturaleza-medioambiente-1024x629.jpg" alt="<?php echo $translations['alt_reforestation']; ?>" class="img-fluid rounded shadow">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h3 class="text-success mb-3"><?php echo $translations['importance_title']; ?></h3>
                <p class="text-muted">
                    <?php echo $translations['importance_content']; ?>
                </p>
                <div class="mt-4">
                    <div class="d-flex align-items-start mb-3">
                        <div class="bg-success rounded-circle p-2 me-3">
                            <i class="bi bi-check-lg text-white"></i>
                        </div>
                        <div>
                            <h6 class="mb-1"><?php echo $translations['goal_absorption']; ?></h6>
                                <small class="text-muted"><?php echo $translations['goal_absorption_desc']; ?></small>
                        </div>
                    </div>
                    <div class="d-flex align-items-start mb-3">
                        <div class="bg-success rounded-circle p-2 me-3">
                            <i class="bi bi-check-lg text-white"></i>
                        </div>
                        <div>
                            <h6 class="mb-1"><?php echo $translations['goal_oxygen']; ?></h6>
                                <small class="text-muted"><?php echo $translations['goal_oxygen_desc']; ?></small>
                        </div>
                    </div>
                    <div class="d-flex align-items-start">
                        <div class="bg-success rounded-circle p-2 me-3">
                            <i class="bi bi-check-lg text-white"></i>
                        </div>
                        <div>
                            <h6 class="mb-1"><?php echo $translations['goal_habitat']; ?></h6>
                                <small class="text-muted"><?php echo $translations['goal_habitat_desc']; ?></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Beneficios Principales -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center mb-5">
                <h2 class="display-5 fw-bold text-success">
                    <?php echo $translations['importance_title']; ?>
                </h2>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center">
                        <div class="bg-success rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                            <i class="bi bi-thermometer-half text-white fs-2"></i>
                        </div>
                        <h5 class="text-success"><?php echo $translations['climate_regulation']; ?></h5>
                        <p class="text-muted small"><?php echo $translations['climate_desc']; ?></p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center">
                        <div class="bg-success rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                            <i class="bi bi-bug text-white fs-2"></i>
                        </div>
                        <h5 class="text-success"><?php echo $translations['biodiversity']; ?></h5>
                        <p class="text-muted small"><?php echo $translations['biodiversity_desc']; ?></p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center">
                        <div class="bg-success rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                            <i class="bi bi-droplet text-white fs-2"></i>
                        </div>
                        <h5 class="text-success"><?php echo $translations['water_protection']; ?></h5>
                        <p class="text-muted small"><?php echo $translations['water_desc']; ?></p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center">
                        <div class="bg-success rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                            <i class="bi bi-currency-dollar text-white fs-2"></i>
                        </div>
                        <h5 class="text-success"><?php echo $translations['economic_benefits']; ?></h5>
                        <p class="text-muted small"><?php echo $translations['economic_desc']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-5 bg-dark text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h3 class="text-success mb-2"><?php echo $translations['cta_title']; ?></h3>
                <p class="mb-0"><?php echo $translations['cta_text']; ?></p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="index.php?page=how-to" class="btn btn-success btn-lg">
                    <i class="bi bi-hand-thumbs-up me-2"></i>
                    <?php echo $translations['hero_cta']; ?>
                </a>
            </div>
        </div>
    </div>
</section>