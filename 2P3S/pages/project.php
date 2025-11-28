<main class="site-content">
<!-- Hero Section del Proyecto -->
<section class="hero-section bg-success text-white py-5 ">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h2 class="display-4 fw-bold mb-3"><?php echo $translations['project_theme']; ?></h2>
                <p class="lead mb-4"><?php echo $translations['project_description']; ?></p>
                <div class="mb-3">
                    <span class="badge bg-dark text-light me-2">
                        <i class="bi bi-building"></i> <?php echo $translations['project_school']; ?>
                    </span>
                    <span class="badge bg-dark text-light me-2">
                        <i class="bi bi-person"></i> <?php echo $translations['project_student']; ?>
                    </span>
                    <span class="badge bg-dark text-light">
                        <i class="bi bi-people"></i> <?php echo $translations['project_group_label'] . ' ' . $translations['project_group_value']; ?>
                    </span>
                </div>
            </div>
            <div class="col-lg-4">
                <img src="https://cbta35.edu.mx/img/favlogo.ico" alt="<?php echo $translations['project_school_logo_alt']; ?>" class="img-fluid rounded mx-5" style="width: 600px;">
            </div>
        </div>
    </div>
</section>

<!-- Introducción al Proyecto -->
<section class="py-5 ">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="display-5 fw-bold mb-4"><?php echo $translations['project_interdisciplinary']; ?></h2>
                <p class="lead"><?php echo $translations['project_interdisciplinary_desc']; ?></p>
            </div>
        </div>
    </div>
</section>

<!-- Materias y Aplicaciones -->
<section class="py-5 bg-dark ">
    <div class="container">
        <h2 class="display-6 fw-bold text-center mb-5"><?php echo $translations['project_integration_disciplines']; ?></h2>
        
        <div class="row">
            <?php $icons = [
                'humanidades' => 'bi-people',
                'matematicas' => 'bi-calculator',
                'programacion' => 'bi-code-slash',
                'ecosistemas' => 'bi-tree',
                'lengua' => 'bi-chat-text'
            ]; ?>
            <div class="col-lg-4">
                <div class="nav flex-column nav-pills me-3" id="subjects-tab" role="tablist" aria-orientation="vertical">
                    <?php $first = true; foreach ($projectInfo['subjects'] as $key => $subject): ?>
                        <button class="nav-link d-flex align-items-center mb-2 <?php echo $first ? 'active' : ''; ?>" id="tab-<?php echo $key; ?>" data-bs-toggle="pill" data-bs-target="#tabpane-<?php echo $key; ?>" type="button" role="tab" aria-controls="tabpane-<?php echo $key; ?>" aria-selected="<?php echo $first ? 'true' : 'false'; ?>">
                            <span class="rounded-circle me-2 d-flex align-items-center justify-content-center bg-success text-white" style="width:130px;height:40px;">
                                <i class="bi <?php echo $icons[$key]; ?>"></i>
                            </span>
                            <div class="text-start">
                                <strong><?php echo $subject['title']; ?></strong>
                                <div class="small text-light"><?php echo $subject['content']; ?></div>
                            </div>
                        </button>
                    <?php $first = false; endforeach; ?>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="tab-content" id="subjects-tabContent">
                    <?php $first = true; foreach ($projectInfo['subjects'] as $key => $subject): ?>
                        <div class="tab-pane fade <?php echo $first ? 'show active' : ''; ?>" id="tabpane-<?php echo $key; ?>" role="tabpanel" aria-labelledby="tab-<?php echo $key; ?>">
                            <div class="card card-dark border-0 shadow-sm p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="rounded-circle d-flex align-items-center justify-content-center bg-success text-white me-3" style="width:90px;height:60px;">
                                        <i class="bi <?php echo $icons[$key]; ?> fs-1"></i>
                                    </div>
                                    <div>
                                        <h3 class="mb-1"><?php echo $subject['title']; ?></h3>
                                        <?php if (!empty($subject['role'])):?><p class="mb-0 text-success fw-semibold"><?php echo $subject['role']; ?></p><?php endif; ?>
                                    </div>
                                </div>
                                <p class="text-light"><?php echo $subject['content']; ?></p>
                                <?php if (!empty($subject['details'])): ?>
                                    <p class="text-light mb-2"><?php echo $subject['details']; ?></p>
                                <?php endif; ?>
                                <?php if (!empty($subject['tasks']) && is_array($subject['tasks'])): ?>
                                    <h6 class="text-success"><?php echo $translations['subject_tasks_title'] ?? 'Actividades'; ?></h6>
                                    <ul class="mb-0 ms-3">
                                        <?php foreach ($subject['tasks'] as $task): ?>
                                            <li><?php echo $task; ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>

                                <?php if (!empty($subject['objectives'])): ?>
                                    <h6 class="mt-3 text-success"><?php echo $translations['subject_objectives_title'] ?? 'Objetivos'; ?></h6>
                                    <p class="mb-0"><?php echo $subject['objectives']; ?></p>
                                <?php endif; ?>

                                <?php if (!empty($subject['methodology'])): ?>
                                    <h6 class="mt-3 text-success"><?php echo $translations['subject_methodology_title'] ?? 'Metodología'; ?></h6>
                                    <p class="mb-0"><?php echo $subject['methodology']; ?></p>
                                <?php endif; ?>

                                <?php if (!empty($subject['deliverables'])): ?>
                                    <h6 class="mt-3 text-success"><?php echo $translations['subject_deliverables_title'] ?? 'Entregables'; ?></h6>
                                    <p class="mb-0"><?php echo $subject['deliverables']; ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php $first = false; endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Objetivos del Proyecto -->
<section class="py-5 ">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h2 class="display-6 fw-bold text-center mb-5"><?php echo $translations['project_objectives']; ?></h2>
                
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <div class="bg-success rounded-circle p-3">
                                    <i class="bi bi-bullseye text-white"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5><?php echo $translations['objective_general']; ?></h5>
                                <p><?php echo $translations['objective_general_desc']; ?></p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <div class="bg-success rounded-circle p-3">
                                    <i class="bi bi-gear text-white"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5><?php echo $translations['methodology']; ?></h5>
                                <p><?php echo $translations['methodology_desc']; ?></p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <div class="bg-success rounded-circle p-3">
                                    <i class="bi bi-graph-up text-white"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5><?php echo $translations['expected_impact']; ?></h5>
                                <p><?php echo $translations['expected_impact_desc']; ?></p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <div class="bg-success rounded-circle p-3">
                                    <i class="bi bi-award text-white"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5><?php echo $translations['competencies']; ?></h5>
                                <p><?php echo $translations['competencies_desc']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Proceso de Desarrollo -->
<section class="py-5 bg-dark ">
    <div class="container">
        <h2 class="display-6 fw-bold text-center mb-5"><?php echo $translations['project_development_process']; ?></h2>
        
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="timeline">
                    <div class="timeline-item d-flex align-items-center mb-4">
                        <div class="timeline-marker bg-success rounded-circle p-3 me-4">
                            <span class="text-white fw-bold">1</span>
                        </div>
                        <div class="timeline-content card-dark-light">
                            <h5><?php echo $translations['timeline_step_1']; ?></h5>
                            <p><?php echo $translations['timeline_step_1_desc']; ?></p>
                        </div>
                    </div>
                    
                    <div class="timeline-item d-flex align-items-center mb-4">
                        <div class="timeline-marker bg-success rounded-circle p-3 me-4">
                            <span class="text-white fw-bold">2</span>
                        </div>
                        <div class="timeline-content card-dark-light">
                            <h5><?php echo $translations['timeline_step_2']; ?></h5>
                            <p><?php echo $translations['timeline_step_2_desc']; ?></p>
                        </div>
                    </div>
                    
                    <div class="timeline-item d-flex align-items-center mb-4">
                        <div class="timeline-marker bg-success rounded-circle p-3 me-4">
                            <span class="text-white fw-bold">3</span>
                        </div>
                        <div class="timeline-content card-dark-light">
                            <h5><?php echo $translations['timeline_step_3']; ?></h5>
                            <p><?php echo $translations['timeline_step_3_desc']; ?></p>
                        </div>
                    </div>
                    
                    <div class="timeline-item d-flex align-items-center">
                        <div class="timeline-marker bg-success rounded-circle p-3 me-4">
                            <span class="text-white fw-bold">4</span>
                        </div>
                        <div class="timeline-content card-dark-light">
                            <h5><?php echo $translations['timeline_step_4']; ?></h5>
                            <p><?php echo $translations['timeline_step_4_desc']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Herramientas del Proyecto -->
<section class="py-5 ">
    <div class="container">
        <h2 class="display-6 fw-bold text-center mb-5"><?php echo $translations['project_tools_developed']; ?></h2>
        
        <div class="row g-4 mb-5">
            <div class="col-lg-6">
                <div class="card border-0 shadow-lg h-100">
                    <div class="card-body card-dark p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-success rounded-circle p-3 me-3">
                                <i class="bi bi-calculator text-white fs-3"></i>
                            </div>
                            <h4 class="mb-0"><?php echo $translations['project_calc_title']; ?></h4>
                        </div>
                        <p class="text-light mb-4"><?php echo $translations['project_calc_desc']; ?></p>
                        <div class="mb-3">
                            <h6 class="text-success"><?php echo $translations['project_features_title']; ?></h6>
                            <ul class="list-unstyled ms-3">
                                <li><i class="bi bi-check text-success me-2"></i><?php echo $translations['project_feature_calc_1']; ?></li>
                                <li><i class="bi bi-check text-success me-2"></i><?php echo $translations['project_feature_calc_2']; ?></li>
                                <li><i class="bi bi-check text-success me-2"></i><?php echo $translations['project_feature_calc_3']; ?></li>
                                <li><i class="bi bi-check text-success me-2"></i><?php echo $translations['project_feature_calc_4']; ?></li>
                            </ul>
                        </div>
                        <a href="index.php?page=calculator" class="btn btn-success">
                            <i class="bi bi-calculator me-2"></i><?php echo $translations['project_use_calculator']; ?>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="card border-0 shadow-lg h-100">
                    <div class="card-body card-dark p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-success rounded-circle p-3 me-3">
                                <i class="bi bi-globe text-white fs-3"></i>
                            </div>
                            <h4 class="mb-0"><?php echo $translations['project_platform_title']; ?></h4>
                        </div>
                        <p class="text-light mb-4"><?php echo $translations['project_platform_desc']; ?></p>
                        <div class="mb-3">
                            <h6 class="text-success"><?php echo $translations['project_characteristics']; ?></h6>
                            <ul class="list-unstyled ms-3">
                                <li><i class="bi bi-check text-success me-2"></i><?php echo $translations['project_feature_platform_1']; ?></li>
                                <li><i class="bi bi-check text-success me-2"></i><?php echo $translations['project_feature_platform_2']; ?></li>
                                <li><i class="bi bi-check text-success me-2"></i><?php echo $translations['project_feature_platform_3']; ?></li>
                                <li><i class="bi bi-check text-success me-2"></i><?php echo $translations['project_feature_platform_4']; ?></li>
                            </ul>
                        </div>
                        <a href="index.php" class="btn btn-success">
                            <i class="bi bi-house me-2"></i><?php echo $translations['project_explore_platform']; ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</main>