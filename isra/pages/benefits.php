<div class="container py-5">
    <!-- Header de la página -->
    <div class="row">
        <div class="col-lg-8 mx-auto text-center mb-5">
            <h1 class="display-4 fw-bold text-success mb-4">
                <?php echo $translations['benefits_title']; ?>
            </h1>
            <p class="lead text-muted">
                <?php echo $translations['benefits_lead']; ?>
            </p>
        </div>
    </div>
    
    <!-- Beneficios Ambientales -->
    <section class="mb-5">
        <div class="row align-items-center mb-5">
            <div class="col-lg-6">
                <h2 class="text-success mb-4">
                    <i class="bi bi-leaf me-3"></i>
                    <?php echo $translations['environmental_benefits']; ?>
                </h2>
                <p class="mb-4">
                    <?php echo $translations['env_intro']; ?>
                </p>
                
                <div class="accordion" id="environmentalAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1">
                                <?php echo $translations['env_capture_title']; ?>
                            </button>
                        </h2>
                        <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#environmentalAccordion">
                            <div class="accordion-body">
                                <?php echo $translations['env_capture_desc']; ?>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2">
                                <?php echo $translations['env_water_regulation_title']; ?>
                            </button>
                        </h2>
                        <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#environmentalAccordion">
                            <div class="accordion-body">
                                <?php echo $translations['env_water_regulation_desc']; ?>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3">
                                <?php echo $translations['env_biodiversity_title']; ?>
                            </button>
                        </h2>
                        <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#environmentalAccordion">
                            <div class="accordion-body">
                                <?php echo $translations['env_biodiversity_desc']; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="https://www.itto.int/files/topics/5825_ext_03_es_0.jpg" alt="<?php echo $translations['alt_environmental_benefits']; ?>" class="img-fluid rounded shadow">
            </div>
        </div>
        
        <!-- Estadísticas ambientales -->
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="card text-center border-0 bg-light h-100">
                    <div class="card-body">
                        <i class="bi bi-cloud text-success" style="font-size: 3rem;"></i>
                        <h3 class="text-success mt-3">48 lbs</h3>
                        <p class="text-muted"><?php echo $translations['stat_co2_absorbed']; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card text-center border-0 bg-light h-100">
                    <div class="card-body">
                        <i class="bi bi-droplet text-success" style="font-size: 3rem;"></i>
                        <h3 class="text-success mt-3">260 lbs</h3>
                        <p class="text-muted"><?php echo $translations['stat_oxygen_produced']; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card text-center border-0 bg-light h-100">
                    <div class="card-body">
                        <i class="bi bi-thermometer text-success" style="font-size: 3rem;"></i>
                        <h3 class="text-success mt-3">9°F</h3>
                        <p class="text-muted"><?php echo $translations['stat_temp_reduction']; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card text-center border-0 bg-light h-100">
                    <div class="card-body">
                        <i class="bi bi-bug text-success" style="font-size: 3rem;"></i>
                        <h3 class="text-success mt-3">80%</h3>
                        <p class="text-muted"><?php echo $translations['stat_biodiversity_percentage']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Beneficios Sociales -->
    <section class="py-5 bg-light rounded mb-5">
        <div class="container">
                <h2 class="text-center text-success mb-5">
                <i class="bi bi-people me-3"></i>
                    <?php echo $translations['social_benefits']; ?>
            </h2>
            
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <div class="bg-success rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                                <i class="bi bi-heart text-white fs-2"></i>
                            </div>
                            <h5 class="text-success"><?php echo $translations['social_benefit_health_title']; ?></h5>
                            <p class="text-muted"><?php echo $translations['social_benefit_health_desc']; ?></p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <div class="bg-success rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                                <i class="bi bi-house text-white fs-2"></i>
                            </div>
                            <h5 class="text-success"><?php echo $translations['social_benefit_environment_title']; ?></h5>
                            <p class="text-muted"><?php echo $translations['social_benefit_environment_desc']; ?></p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <div class="bg-success rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                                <i class="bi bi-book text-white fs-2"></i>
                            </div>
                            <h5 class="text-success"><?php echo $translations['social_benefit_education_title']; ?></h5>
                            <p class="text-muted"><?php echo $translations['social_benefit_education_desc']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Beneficios Económicos -->
    <section class="mb-5">
        <div class="row align-items-center">            <div class="col-lg-6">
                <img src="https://media.istockphoto.com/id/519358895/vector/vector-money-tree-symbol-of-successful-business.jpg?s=612x612&w=0&k=20&c=TKVQdQk9vBoSk7rIxS2tpa9-45ulXeTxlUbA9k1H1os=" alt="<?php echo $translations['alt_economic_benefits']; ?>" class="img-fluid rounded shadow">
            </div>
            
            <div class="col-lg-6">
                <h2 class="text-success mb-4">
                    <i class="bi bi-graph-up me-3"></i>
                    <?php echo $translations['economic_benefits_full']; ?>
                </h2>
                <p class="mb-4">
                    <?php echo $translations['econ_intro']; ?>
                </p>
                
                <div class="row g-3">
                    <div class="col-12">
                        <div class="d-flex align-items-start p-3 border-start border-success border-4 bg-light">
                            <div class="bg-success rounded-circle p-2 me-3 flex-shrink-0">
                                <i class="bi bi-briefcase text-white"></i>
                            </div>
                            <div>
                                <h6 class="mb-1"><?php echo $translations['economic_benefit_jobs']; ?></h6>
                                <small class="text-muted">
                                    <?php echo $translations['economic_benefit_jobs_desc']; ?>
                                </small>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12">
                        <div class="d-flex align-items-start p-3 border-start border-success border-4 bg-light">
                            <div class="bg-success rounded-circle p-2 me-3 flex-shrink-0">
                                <i class="bi bi-tree text-white"></i>
                            </div>
                            <div>
                                <h6 class="mb-1"><?php echo $translations['economic_benefit_products']; ?></h6>
                                <small class="text-muted">
                                    <?php echo $translations['economic_benefit_products_desc']; ?>
                                </small>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12">
                        <div class="d-flex align-items-start p-3 border-start border-success border-4 bg-light">
                            <div class="bg-success rounded-circle p-2 me-3 flex-shrink-0">
                                <i class="bi bi-camera text-white"></i>
                            </div>
                            <div>
                                <h6 class="mb-1"><?php echo $translations['economic_benefit_ecotourism']; ?></h6>
                                <small class="text-muted">
                                    <?php echo $translations['economic_benefit_ecotourism_desc']; ?>
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Impacto Global -->
    <section class="py-5 bg-dark text-white rounded">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="text-success mb-3"><?php echo $translations['global_impact_title']; ?></h2>
                <p class="lead"><?php echo $translations['global_impact_lead']; ?></p>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mb-3">
                        <i class="bi bi-globe text-success" style="font-size: 3rem;"></i>
                    </div>
                    <h3 class="text-success">350M</h3>
                    <p class="mb-0"><?php echo $translations['global_restore_area']; ?></p>
                </div>
                
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mb-3">
                        <i class="bi bi-people text-success" style="font-size: 3rem;"></i>
                    </div>
                    <h3 class="text-success">1.6B</h3>
                    <p class="mb-0"><?php echo $translations['global_people_depend']; ?></p>
                </div>
                
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mb-3">
                        <i class="bi bi-currency-dollar text-success" style="font-size: 3rem;"></i>
                    </div>
                    <h3 class="text-success">$150B</h3>
                    <p class="mb-0"><?php echo $translations['global_economic_value']; ?></p>
                </div>
                
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mb-3">
                        <i class="bi bi-lightning text-success" style="font-size: 3rem;"></i>
                    </div>
                    <h3 class="text-success">1.6GT</h3>
                    <p class="mb-0"><?php echo $translations['global_co2_captured']; ?></p>
                </div>
            </div>
        </div>
    </section>
</div>