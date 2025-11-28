<main class="site-content container py-7 mt-4">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="text-center mb-5">
                <h2 class="display-4 fw-bold text-success mb-4">
                    <?php echo $translations['nav_about']; ?>
                </h2>
                <p class="lead text-light">
                    <?php echo $translations['about_lead']; ?>
                </p>
            </div>
        </div>
    </div>
    
    <div class="row mb-5">
        <div class="col-lg-6 mb-4">
            <!-- Placeholder para imagen -->
            <div class="image-placeholder">
                <div class="text-success text-center">
                    <img src="https://www.un.org/sites/un2.un.org/files/field/image/landscape-4350845_1920.jpg" alt="<?php echo $translations['alt_reforestation']; ?>" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <h2 class="text-success mb-4"><?php echo $translations['about_importance_title']; ?></h2>
            <p class="mb-3">
                Los bosques cubren aproximadamente el 31% de la superficie terrestre global y albergan 
                más del 80% de la biodiversidad terrestre. Son ecosistemas complejos que proporcionan 
                servicios ambientales esenciales para la vida en la Tierra.
            </p>
            <p class="mb-4">
                La deforestación ha reducido significativamente la cobertura forestal mundial, 
                especialmente en las últimas décadas. La reforestación emerge como una solución 
                crucial para restaurar estos ecosistemas vitales.
            </p>
            
            <div class="row g-3">
                <div class="col-sm-6">
                    <div class="d-flex align-items-center p-3 bg-dark rounded">
                        <div class="bg-success rounded-circle p-2 me-3">
                            <i class="bi bi-globe text-white"></i>
                        </div>
                        <div>
                            <h6 class="mb-0">15.3 billones</h6>
                            <small class="text-light"><?php echo $translations['about_stats_trees_world']; ?></small>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="d-flex align-items-center p-3 bg-dark rounded">
                        <div class="bg-success rounded-circle p-2 me-3">
                            <i class="bi bi-tree text-white"></i>
                        </div>
                        <div>
                            <h6 class="mb-0">10 millones</h6>
                            <small class="text-light"><?php echo $translations['about_stats_lost_per_year']; ?></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Qué es la Reforestación -->
    <section class="mb-5">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center mb-4">
                <h2 class="display-5 text-success mb-3"><?php echo $translations['what_is_title']; ?></h2>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body card-dark text-center">
                        <div class="bg-success rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="white" class="bi bi-leaf" viewBox="0 0 16 16">
                                <path d="M1.4 1.7c.216.289.65.84 1.725 1.274 1.093.44 2.884.774 5.834.528l.37-.023c1.823-.06 3.117.598 3.956 1.579C14.16 6.082 14.5 7.41 14.5 8.5c0 .58-.032 1.285-.229 1.997q.198.248.382.54c.756 1.2 1.19 2.563 1.348 3.966a1 1 0 0 1-1.98.198c-.13-.97-.397-1.913-.868-2.77C12.173 13.386 10.565 14 8 14c-1.854 0-3.32-.544-4.45-1.435-1.125-.887-1.89-2.095-2.391-3.383C.16 6.62.16 3.646.509 1.902L.73.806zm-.05 1.39c-.146 1.609-.008 3.809.74 5.728.457 1.17 1.13 2.213 2.079 2.961.942.744 2.185 1.22 3.83 1.221 2.588 0 3.91-.66 4.609-1.445-1.789-2.46-4.121-1.213-6.342-2.68-.74-.488-1.735-1.323-1.844-2.308-.023-.214.237-.274.38-.112 1.4 1.6 3.573 1.757 5.59 2.045 1.227.215 2.21.526 3.033 1.158.058-.39.075-.782.075-1.158 0-.91-.288-1.988-.975-2.792-.626-.732-1.622-1.281-3.167-1.229l-.316.02c-3.05.253-5.01-.08-6.291-.598a5.3 5.3 0 0 1-1.4-.811"/>
                            </svg>
                        </div>
                        <h5 class="text-success"><?php echo $translations['about_plantation_title']; ?></h5>
                        <p class="text-light small"><?php echo $translations['about_plantation_desc']; ?></p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body card-dark text-center">
                        <div class="bg-success rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                            <i class="bi bi-arrow-clockwise text-white fs-2"></i>
                        </div>
                        <h5 class="text-success"><?php echo $translations['about_restoration_title']; ?></h5>
                        <p class="text-light small"><?php echo $translations['about_restoration_desc']; ?></p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body card-dark text-center">
                        <div class="bg-success rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                            <i class="bi bi-shield-check text-white fs-2"></i>
                        </div>
                        <h5 class="text-success"><?php echo $translations['about_conservation_title']; ?></h5>
                        <p class="text-light small"><?php echo $translations['about_conservation_desc']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Tipos de Reforestación -->
    <section class="py-5 bg-dark rounded">
        <div class="container">
            <h2 class="text-center text-success mb-5"><?php echo $translations['about_types_title']; ?></h2>
            
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="card h-100 border-success">
                        <div class="card-header bg-success text-white">
                            <h5 class="mb-0">
                                <i class="bi bi-tree me-2"></i>
                                <?php echo $translations['about_natural_title']; ?>
                            </h5>
                        </div>
                        <div class="card-body card-dark">
                            <p class="mb-3">
                                <?php echo $translations['about_natural_desc']; ?>
                            </p>
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <i class="bi bi-check-circle text-success me-2"></i>
                                    <?php echo $translations['about_natural_li_regeneration']; ?>
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check-circle text-success me-2"></i>
                                    <?php echo $translations['about_natural_li_low_cost']; ?>
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check-circle text-success me-2"></i>
                                    <?php echo $translations['about_natural_li_diversity']; ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6 mb-4">
                    <div class="card h-100 border-success">
                        <div class="card-header bg-success text-white">
                            <h5 class="mb-0">
                                <i class="bi bi-person-workspace me-2"></i>
                                <?php echo $translations['about_artificial_title']; ?>
                            </h5>
                        </div>
                        <div class="card-body card-dark">
                            <p class="mb-3">
                                <?php echo $translations['about_artificial_desc']; ?>
                            </p>
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <i class="bi bi-check-circle text-success me-2"></i>
                                    <?php echo $translations['about_artificial_li_species_control']; ?>
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check-circle text-success me-2"></i>
                                    <?php echo $translations['about_artificial_li_fast_results']; ?>
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check-circle text-success me-2"></i>
                                    <?php echo $translations['about_artificial_li_specialized_management']; ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Proceso de Reforestación -->
    <section class="py-5 ">
        <h2 class="text-center text-success mb-5"><?php echo $translations['about_process_title']; ?></h2>
        
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="text-center">
                    <div class="bg-success rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 100px; height: 100px;">
                        <span class="text-white fw-bold fs-3">1</span>
                    </div>
                    <h5 class="text-success"><?php echo $translations['about_step_1_title']; ?></h5>
                    <p class="text-light small"><?php echo $translations['about_step_1_desc']; ?></p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="text-center">
                    <div class="bg-success rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 100px; height: 100px;">
                        <span class="text-white fw-bold fs-3">2</span>
                    </div>
                    <h5 class="text-success"><?php echo $translations['about_step_2_title']; ?></h5>
                    <p class="text-light small"><?php echo $translations['about_step_2_desc']; ?></p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="text-center">
                    <div class="bg-success rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 100px; height: 100px;">
                        <span class="text-white fw-bold fs-3">3</span>
                    </div>
                    <h5 class="text-success"><?php echo $translations['about_step_3_title']; ?></h5>
                    <p class="text-light small"><?php echo $translations['about_step_3_desc']; ?></p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="text-center">
                    <div class="bg-success rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 100px; height: 100px;">
                        <span class="text-white fw-bold fs-3">4</span>
                    </div>
                    <h5 class="text-success"><?php echo $translations['about_step_4_title']; ?></h5>
                    <p class="text-light small"><?php echo $translations['about_step_4_desc']; ?></p>
                </div>
            </div>
        </div>
    </section>
</main>