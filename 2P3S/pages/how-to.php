<main class="site-content container py-7">
    <!-- Header -->
    <div class="row">
        <div class="col-lg-8 mx-auto text-center mb-5">
            <h2 class="display-4 fw-bold text-success mb-4">
                <?php echo $translations['how_help_title']; ?>
            </h2>
            <p class="lead text-light">
                <?php echo $translations['how_lead']; ?>
            </p>
        </div>
    </div>
    
    <!-- Formas de Ayudar -->
    <div class="row g-4 mb-5 page-section">
        <div class="col-lg-6">
            <div class="card h-100 border-success shadow-sm">
                <div class="card-header bg-success text-white">
                    <h4 class="mb-0">
                        <i class="bi bi-tree me-2"></i>
                        <?php echo $translations['plant_trees']; ?>
                    </h4>
                </div>
                <div class="card-body card-dark">
                    <p class="mb-3"><?php echo $translations['plant_trees_desc']; ?></p>
                    
                    <h6 class="text-success"><?php echo $translations['how_start_label']; ?></h6>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <i class="bi bi-check-circle text-success me-2"></i>
                            <?php echo $translations['how_plant_step_1']; ?>
                        </li>
                        <li class="mb-2">
                            <i class="bi bi-check-circle text-success me-2"></i>
                            <?php echo $translations['how_plant_step_2']; ?>
                        </li>
                        <li class="mb-2">
                            <i class="bi bi-check-circle text-success me-2"></i>
                            <?php echo $translations['how_plant_step_3']; ?>
                        </li>
                        <li class="mb-2">
                            <i class="bi bi-check-circle text-success me-2"></i>
                            <?php echo $translations['how_plant_step_4']; ?>
                        </li>
                    </ul>
                    
                    <div class="mt-3">
                        <span class="badge bg-success"><?php echo $translations['how_level_beginner']; ?></span>
                        <span class="badge bg-outline-success"><?php echo $translations['how_impact_high']; ?></span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-6">
            <div class="card h-100 border-success shadow-sm">
                <div class="card-header bg-success text-white">
                    <h4 class="mb-0">
                        <i class="bi bi-heart me-2"></i>
                        <?php echo $translations['donate']; ?>
                    </h4>
                </div>
                <div class="card-body card-dark">
                    <p class="mb-3"><?php echo $translations['donate_desc']; ?></p>
                    
                    <h6 class="text-success"><?php echo $translations['how_recommended_orgs']; ?></h6>
                    <div class="row g-2 mb-3">
                        <div class="col-6">
                            <div class="p-2 bg-dark rounded text-center">
                                <small class="fw-bold">One Tree Planted</small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-2 bg-dark rounded text-center">
                                <small class="fw-bold">Trees for the Future</small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-2 bg-dark rounded text-center">
                                <small class="fw-bold">Eden Projects</small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-2 bg-dark rounded text-center">
                                <small class="fw-bold">Plant-for-the-Planet</small>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card card-dark p-2 bg-dark rounded">
                        <small>
                            <i class="bi bi-info-circle me-1"></i>
                            <?php echo $translations['donate_info']; ?>
                        </small>
                    </div>
                    
                    <div class="mt-3">
                        <span class="badge bg-success"><?php echo $translations['how_level_easy']; ?></span>
                        <span class="badge bg-outline-success"><?php echo $translations['how_impact_global']; ?></span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-6">
            <div class="card h-100 border-success shadow-sm">
                <div class="card-header bg-success text-white">
                    <h4 class="mb-0">
                        <i class="bi bi-recycle me-2"></i>
                        <?php echo $translations['reduce_consume']; ?>
                    </h4>
                </div>
                <div class="card-body card-dark">
                    <p class="mb-3"><?php echo $translations['reduce_desc']; ?></p>
                    
                    <h6 class="text-success"><?php echo $translations['how_practical_actions']; ?></h6>
                    <div class="row g-2">
                        <div class="col-12">
                            <div class="d-flex align-items-start p-2 bg-dark rounded">
                                <i class="bi bi-newspaper text-success me-2 mt-1"></i>
                                <div>
                                    <small class="fw-bold"><?php echo $translations['how_reduce_paper']; ?></small>
                                    <br><small class="text-light"><?php echo $translations['how_reduce_paper_desc']; ?></small>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-start p-2 bg-dark rounded">
                                <i class="bi bi-cart text-success me-2 mt-1"></i>
                                <div>
                                    <small class="fw-bold"><?php echo $translations['how_buy_sustainably']; ?></small>
                                    <br><small class="text-light"><?php echo $translations['how_buy_sustainably_desc']; ?></small>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-start p-2 bg-dark rounded">
                                <i class="bi bi-house text-success me-2 mt-1"></i>
                                <div>
                                    <small class="fw-bold"><?php echo $translations['how_green_construction']; ?></small>
                                    <br><small class="text-light"><?php echo $translations['how_green_construction_desc']; ?></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-3">
                        <span class="badge bg-success"><?php echo $translations['how_level_intermediate']; ?></span>
                        <span class="badge bg-outline-success"><?php echo $translations['how_impact_preventive']; ?></span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-6">
            <div class="card h-100 border-success shadow-sm">
                <div class="card-header bg-success text-white">
                    <h4 class="mb-0">
                        <i class="bi bi-megaphone me-2"></i>
                        <?php echo $translations['educate']; ?>
                    </h4>
                </div>
                <div class="card-body card-dark">
                    <p class="mb-3"><?php echo $translations['educate_desc']; ?></p>
                    
                    <h6 class="text-success"><?php echo $translations['how_educate_methods']; ?></h6>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <i class="bi bi-share text-success me-2"></i>
                            <?php echo $translations['how_share_social']; ?>
                        </li>
                        <li class="mb-2">
                            <i class="bi bi-people text-success me-2"></i>
                            <?php echo $translations['how_organize_talks']; ?>
                        </li>
                        <li class="mb-2">
                            <i class="bi bi-book text-success me-2"></i>
                            <?php echo $translations['how_teach_children']; ?>
                        </li>
                        <li class="mb-2">
                            <i class="bi bi-camera text-success me-2"></i>
                            <?php echo $translations['how_document_projects']; ?>
                        </li>
                    </ul>
                    
                    <!-- TODO: Agregar herramientas de compartir en redes sociales -->
                    <div class="mt-3 p-2 bg-dark rounded">
                        <small class="text-light">
                            <i class="bi bi-info-circle me-1"></i>
                            <?php echo $translations['how_coming_soon_toolkit']; ?>
                        </small>
                    </div>
                    
                    <div class="mt-3">
                        <span class="badge bg-success"><?php echo $translations['how_level_all']; ?></span>
                        <span class="badge bg-outline-success"><?php echo $translations['how_impact_multiplier']; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Guía paso a paso -->
    <section class="py-5 bg-dark rounded mb-5 page-section">
        <div class="container">
            <h2 class="text-center text-success mb-5"><?php echo $translations['how_guide_title']; ?></h2>
            
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="timeline-marker bg-success">1</div>
                            <div class="timeline-content bg-dark-light">
                                <h5 class="text-success"><?php echo $translations['how_timeline_research']; ?></h5>
                                <p><?php echo $translations['how_timeline_research_desc']; ?></p>
                                <small class="text-light"><?php echo $translations['how_timeline_estimated_1']; ?></small>
                            </div>
                        </div>
                        
                        <div class="timeline-item">
                            <div class="timeline-marker bg-success">2</div>
                            <div class="timeline-content bg-dark-light">
                                <h5 class="text-success"><?php echo $translations['how_timeline_planning']; ?></h5>
                                <p><?php echo $translations['how_timeline_planning_desc']; ?></p>
                                <small class="text-light"><?php echo $translations['how_timeline_estimated_2']; ?></small>
                            </div>
                        </div>
                        
                        <div class="timeline-item">
                            <div class="timeline-content bg-dark-light">
                                <h5 class="text-success"><?php echo $translations['how_timeline_execution']; ?></h5>
                                <p><?php echo $translations['how_timeline_execution_desc']; ?></p>
                                <small class="text-light"><?php echo $translations['how_timeline_estimated_3']; ?></small>
                            </div>
                        </div>
                        
                        <div class="timeline-item">
                            <div class="timeline-content bg-dark-light">
                                <h5 class="text-success"><?php echo $translations['how_timeline_followup']; ?></h5>
                                <p><?php echo $translations['how_timeline_followup_desc']; ?></p>
                                <small class="text-light"><?php echo $translations['how_timeline_estimated_4']; ?></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Recursos y herramientas -->
    <section class="mb-5 page-section">
        <h2 class="text-center text-success mb-5"><?php echo $translations['resources_tools_title']; ?></h2>
        
        <div class="row g-4">
            <div class="col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body card-dark text-center">
                        <i class="bi bi-phone text-success" style="font-size: 3rem;"></i>
                        <h5 class="text-success mt-3"><?php echo $translations['apps_title']; ?></h5>
                        <ul class="list-unstyled text-start">
                            <li>• PlantNet (identificación)</li>
                            <li>• Forest (motivación)</li>
                            <li>• iNaturalist (biodiversidad)</li>
                            <li>• Ecosia (buscador)</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body card-dark text-center">
                        <i class="bi bi-book text-success" style="font-size: 3rem;"></i>
                        <h5 class="text-success mt-3"><?php echo $translations['pdf_guides_title']; ?></h5>
                        <ul class="list-unstyled text-start">
                            <li>• Manual de plantación</li>
                            <li>• Especies nativas por región</li>
                            <li>• Cuidados post-plantación</li>
                            <li>• Medición de impacto</li>
                        </ul>
                        <!-- TODO: Agregar enlaces de descarga reales -->
                        <button class="btn btn-outline-success btn-sm mt-2">
                            <?php echo $translations['download_guides']; ?>
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body card-dark text-center">
                        <i class="bi bi-people text-success" style="font-size: 3rem;"></i>
                        <h5 class="text-success mt-3"><?php echo $translations['community_title']; ?></h5>
                        <ul class="list-unstyled text-start">
                            <li>• Foro de reforestadores</li>
                            <li>• Grupo de WhatsApp</li>
                            <li>• Red de voluntarios</li>
                            <li>• Eventos mensuales</li>
                        </ul>
                        <!-- TODO: Implementar sistema de comunidad -->
                        <button class="btn btn-outline-success btn-sm mt-2">
                            <?php echo $translations['join_community']; ?>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Call to action final -->
    <section class="py-5 bg-success text-white rounded text-center page-section">
        <div class="container">
            <h2 class="mb-3"><?php echo $translations['cta_title']; ?></h2>
            <p class="lead mb-4"><?php echo $translations['cta_text']; ?></p>
            <div class="row g-3 justify-content-center">
                <div class="col-auto">
                    <button class="btn btn-light btn-lg">
                        <i class="bi bi-tree me-2"></i>
                        <?php echo $translations['cta_plant_now']; ?>
                    </button>
                </div>
                <div class="col-auto">
                    <button class="btn btn-outline-light btn-lg">
                        <i class="bi bi-heart me-2"></i>
                        <?php echo $translations['cta_donate']; ?>
                    </button>
                </div>
                <div class="col-auto">
                    <a href="index.php?page=contact" class="btn btn-outline-light btn-lg">
                        <i class="bi bi-envelope me-2"></i>
                        <?php echo $translations['cta_contact']; ?>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<style>
.timeline {
    position: relative;
    padding: 0;
    list-style: none;
}

.timeline-item {
    position: relative;
    margin-bottom: 2rem;
    padding-left: 4rem;
}

.timeline-item:not(:last-child):before {
    content: '';
    position: absolute;
    left: 1.5rem;
    top: 3rem;
    height: calc(100% + 1rem);
    width: 2px;
    background-color: var(--brand);
}

.timeline-marker {
    position: absolute;
    left: 0;
    top: 0;
    width: 3rem;
    height: 3rem;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-weight: bold;
    font-size: 1.2rem;
}

.timeline-content bg-dark-light {
    background: white;
    padding: 1.5rem;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}
</style>