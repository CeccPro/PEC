<!-- Dark Themed Home Page -->
<main class="site-content hero-dark page-section">
    <div class="container">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6 d-flex flex-column gap-3">
                <h2 class="display-5 fw-bold mb-3 text-light text-justify"><?php echo $translations['hero_title']; ?></h2>
                <p class="lead text-light-dark mb-4"><?php echo $translations['hero_subtitle']; ?></p>
                <div class="d-flex gap-3">
                    <a href="index.php?page=how-to" class="btn btn-dark-accent btn-lg">
                        <i class="bi bi-tree-fill me-2"></i><?php echo $translations['hero_cta']; ?>
                    </a>
                    <a href="#learn-more" class="btn btn-dark-outline align-items-center d-flex">
                        <?php echo $translations['hero_cta_details'] ?? $translations['hero_cta']; ?>
                    </a>
                </div>

                <div class="d-flex gap-3 mt-4">
                    <div class="stat px-4 py-3 rounded card-dark">
                        <small class="d-block text-light-dark"><?php echo $translations['stat_trees_planted_label'] ?? 'Árboles plantados'; ?></small>
                        <strong class="h4 mb-0 text-light"><?php echo $translations['stat_trees_planted_value'] ?? '1200'; ?></strong>
                    </div>
                    <div class="stat px-4 py-3 rounded card-dark">
                        <small class="d-block text-light-dark"><?php echo $translations['stat_areas_restored_label'] ?? 'Áreas restauradas'; ?></small>
                        <strong class="h4 mb-0 text-light"><?php echo $translations['stat_areas_restored_value'] ?? '12'; ?></strong>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card card-dark rounded shadow-sm">
                    <div class="card-body card-dark">
                        <div class="ratio ratio-16x9">
                            <img src="https://placehold.co/1000x620/0b1412/FFFFFF?text=Reforestación+Oscura" class="img-fluid rounded" alt="<?php echo $translations['hero_image_alt'] ?? 'Bosque'; ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section id="learn-more" class="py-5">
            <div class="row gy-4 align-items-center">
                <div class="col-lg-7">
                    <h2 class="h2 fw-bold text-light text-center"><?php echo $translations['what_is_title']; ?></h2>
                    <p class="lead text-light-dark"><?php echo $translations['what_is_content']; ?></p>
                    <div class="row g-3">
                        <div class="col-md-4">
                            <div class="info-box p-3 rounded card-dark">
                                <h6 class="fw-bold text-light mb-1"><?php echo $translations['goal_absorption']; ?></h6>
                                <small class="text-light-dark"><?php echo $translations['goal_absorption_desc']; ?></small>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info-box p-3 rounded card-dark">
                                <h6 class="fw-bold text-light mb-1"><?php echo $translations['goal_oxygen']; ?></h6>
                                <small class="text-light-dark"><?php echo $translations['goal_oxygen_desc']; ?></small>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info-box p-3 rounded card-dark">
                                <h6 class="fw-bold text-light mb-1"><?php echo $translations['goal_habitat']; ?></h6>
                                <small class="text-light-dark"><?php echo $translations['goal_habitat_desc']; ?></small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="rounded card-dark p-3 text-center">
                        <img src="https://placehold.co/700x460/071012/FFFFFF?text=Operación+de+plantación+Oscura" class="img-fluid rounded" alt="<?php echo $translations['alt_reforestation']; ?>">
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card card-dark h-100 text-center p-3 rounded">
                        <ul class="list-unstyled mb-0">
                        <li><div class="icon-circle-dark mb-3"><i class="bi bi-thermometer-half fs-3"></i></div>
                        <h5 class="text-light"><?php echo $translations['climate_regulation']; ?></h5></li>
                        <li><p class="text-light-dark small"><?php echo $translations['climate_desc']; ?></p></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card card-dark h-100 text-center p-3 rounded">
                        <ul class="list-unstyled mb-0">
                        <li><div class="icon-circle-dark mb-3"><i class="bi bi-bug fs-3"></i></div>
                        <h5 class="text-light"><?php echo $translations['biodiversity']; ?></h5></li>
                        <li><p class="text-light-dark small"><?php echo $translations['biodiversity_desc']; ?></p></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card card-dark h-100 text-center p-3 rounded">
                        <ul class="list-unstyled mb-0">
                        <li><div class="icon-circle-dark mb-3"><i class="bi bi-droplet fs-3"></i></div>
                        <h5 class="text-light"><?php echo $translations['water_protection']; ?></h5></li>
                        <li><p class="text-light-dark small"><?php echo $translations['water_desc']; ?></p></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card card-dark h-100 text-center p-3 rounded">
                        <ul class="list-unstyled mb-0">
                        <li><div class="icon-circle-dark mb-3"><i class="bi bi-currency-dollar fs-3"></i></div>
                        <h5 class="text-light"><?php echo $translations['economic_benefits']; ?></h5></li>
                        <li><p class="text-light-dark small"><?php echo $translations['economic_desc']; ?></p></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5 text-center">
            <div class="card card-dark p-4 rounded shadow-sm">
                <h3 class="text-light mb-3"><?php echo $translations['cta_title']; ?></h3>
                <p class="text-light-dark mb-4"><?php echo $translations['cta_text']; ?></p>
                <a href="index.php?page=how-to" class="btn btn-dark-accent btn-lg">
                    <i class="bi bi-hand-thumbs-up me-2"></i><?php echo $translations['hero_cta']; ?>
                </a>
            </div>
        </section>

    </div>
</main>