<main class="site-content container py-7">
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
                            <i class="bi bi-seedling text-white fs-2"></i>
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
    <section class="py-5 page-section">
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