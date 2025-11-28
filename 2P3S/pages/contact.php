<main class="site-content container py-7">
    <!-- Header -->
    <div class="row mt-4">
        <div class="col-lg-8 mx-auto text-center mb-5">
            <h2 class="display-4 fw-bold text-success mb-4">
                <?php echo $translations['contact_title']; ?>
            </h2>
            <p class="lead text-light">
                <?php echo $translations['contact_desc']; ?>
            </p>
        </div>
    </div>
    
    <div class="row ">
        <!-- Formulario de contacto -->
        <div class="col-lg-8 mb-5">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-success text-white">
                    <h4 class="mb-0">
                        <i class="bi bi-envelope me-2"></i>
                        <?php echo $translations['contact_send_msg_title']; ?>
                    </h4>
                </div>
                <div class="card-body card-dark p-4">
                    <form id="contactForm">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="name" class="form-label"><?php echo $translations['contact_name_label']; ?></label>
                                <input type="text" class="form-control text-light bg-dark" id="name" name="name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label"><?php echo $translations['contact_email_label']; ?></label>
                                <input type="email" class="form-control text-light bg-dark" id="email" name="email" required>
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="form-label"><?php echo $translations['contact_phone_label']; ?></label>
                                <input type="tel" class="form-control text-light bg-dark" id="phone" name="phone">
                            </div>
                            <div class="col-md-6">
                                <label for="subject" class="form-label"><?php echo $translations['contact_subject_label']; ?></label>
                                <select class="form-select text-light bg-dark" id="subject" name="subject" required>
                                    <option value=""><?php echo $translations['contact_subject_placeholder']; ?></option>
                                    <option value="general"><?php echo $translations['contact_subject_general']; ?></option>
                                    <option value="volunteer"><?php echo $translations['contact_subject_volunteer']; ?></option>
                                    <option value="donation"><?php echo $translations['contact_subject_donation']; ?></option>
                                    <option value="partnership"><?php echo $translations['contact_subject_partnership']; ?></option>
                                    <option value="education"><?php echo $translations['contact_subject_education']; ?></option>
                                    <option value="other"><?php echo $translations['contact_subject_other']; ?></option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="message" class="form-label"><?php echo $translations['contact_message_label']; ?></label>
                                <textarea class="form-control text-light bg-dark" id="message" name="message" rows="5" 
                                         placeholder="<?php echo $translations['contact_message_placeholder']; ?>" required></textarea>
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="newsletter" name="newsletter">
                                    <label class="form-check-label" for="newsletter">
                                        <?php echo $translations['contact_newsletter_label']; ?>
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="privacy" name="privacy" required>
                                    <label class="form-check-label" for="privacy">
                                        <?php echo $translations['contact_privacy_label']; ?>
                                    </label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="alert alert-success d-none" id="contactSuccess">
                            <i class="bi bi-check-circle me-2"></i>
                            <?php echo $translations['contact_success_message']; ?>
                        </div>
                        
                        <div class="alert alert-danger d-none" id="contactError">
                            <i class="bi bi-exclamation-triangle me-2"></i>
                            <?php echo $translations['contact_error_message']; ?>
                        </div>
                        
                        <div class="d-grid mt-4">
                            <button type="submit" class="btn btn-success btn-lg">
                                <i class="bi bi-send me-2"></i>
                                <?php echo $translations['contact_send_button']; ?>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <!-- Información de contacto -->
        <div class="col-lg-4">
            <div class="row g-4">
                <!-- Información general -->
                <div class="col-12">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body card-dark text-center">
                            <div class="bg-success rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                <i class="bi bi-geo-alt text-white fs-4"></i>
                            </div>
                            <h5 class="text-success"><?php echo $translations['contact_location_title']; ?></h5>
                            <p class="text-light mb-0">
                                Carretera federal México - Puebla Km. 22.5<br>
                                Colonia San Juan Tlalpizáhuac,<br>
                                Valle de Chalco Solidaridad C.P. 56618<br>
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="col-12">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body card-dark text-center">
                            <div class="bg-success rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                <i class="bi bi-telephone text-white fs-4"></i>
                            </div>
                            <h5 class="text-success"><?php echo $translations['contact_phone_title']; ?></h5>
                            <p class="text-light mb-0">
                                +52 55 4950 3492<br>
                                <small>Lun-Vie: 7:00 AM - 3:00 PM</small>
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="col-12">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body card-dark text-center">
                            <div class="bg-success rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                <i class="bi bi-envelope text-white fs-4"></i>
                            </div>
                            <h5 class="text-success"><?php echo $translations['contact_email_title']; ?></h5>
                            <p class="text-light mb-0">
                                carlos.cs240021@cbta35.edu.mx<br>
                                <small>Respuesta en 24 horas</small>
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Redes sociales -->
                <div class="col-12">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body card-dark text-center">                            <h5 class="text-success mb-3"><?php echo $translations['contact_follow_us_title']; ?></h5>
                            <div class="d-flex justify-content-center gap-3">
                                <!-- TODO: Agregar enlaces reales a redes sociales -->
                                <a href="#" class="btn btn-outline-success rounded-circle" style="width: 50px; height: 50px;">
                                    <i class="bi bi-facebook"></i>
                                </a>
                                <a href="#" class="btn btn-outline-success rounded-circle" style="width: 50px; height: 50px;">
                                    <i class="bi bi-twitter"></i>
                                </a>
                                <a href="#" class="btn btn-outline-success rounded-circle" style="width: 50px; height: 50px;">
                                    <i class="bi bi-instagram"></i>
                                </a>
                                <a href="#" class="btn btn-outline-success rounded-circle" style="width: 50px; height: 50px;">
                                    <i class="bi bi-linkedin"></i>
                                </a>
                            </div>
                            <p class="text-light small mt-3 mb-0">
                                <?php echo $translations['contact_follow_us_text']; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <section class="py-5 ">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center text-success mb-4"><?php echo $translations['contact_find_us_title']; ?></h3>
                <div class="image-placeholder" style="height: 400px;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3764.922880582406!2d-98.9597183214264!3d19.329152471565283!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2smx!4v1764005184485!5m2!1ses!2smx" height="400" width="1300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
    
    <!-- FAQ -->
    <section class="py-5 rounded ">
        <div class="container">
            <h3 class="text-center text-success mb-5"><?php echo $translations['contact_faq_title']; ?></h3>
            
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item bg-dark-light text-light">
                            <h2 class="accordion-header">
                                <button class="accordion-button bg-dark text-light" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                    <?php echo $translations['faq_q1']; ?>
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <?php echo $translations['faq_a1']; ?>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item bg-dark-light text-light">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed bg-dark text-light" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                    <?php echo $translations['faq_q2']; ?>
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <?php echo $translations['faq_a2']; ?>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item bg-dark-light text-light">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed bg-dark text-light" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                    <?php echo $translations['faq_q3']; ?>
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <?php echo $translations['faq_a3']; ?>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item bg-dark-light text-light">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed bg-dark text-light" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                    <?php echo $translations['faq_q4']; ?>
                                </button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <?php echo $translations['faq_a4']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </main>

<!-- Información Adicional -->
<section class="py-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h3 class="text-success mb-4"><?php echo $translations['contact_about_project_title']; ?></h3>
                <p class="lead text-light mb-4">
                    <?php echo $translations['contact_about_project_content']; ?>
                </p>
                
                <div class="row g-3 justify-content-center">
                    <div class="col-auto">
                        <span class="badge bg-success fs-6 px-3 py-2">
                            <i class="bi bi-mortarboard me-1"></i>
                            <?php echo $translations['contact_edu_badge']; ?>
                        </span>
                    </div>
                    <div class="col-auto">
                        <span class="badge bg-success fs-6 px-3 py-2">
                            <i class="bi bi-gear me-1"></i>
                            <?php echo $translations['contact_dev_badge']; ?>
                        </span>
                    </div>
                    <div class="col-auto">
                        <span class="badge bg-success fs-6 px-3 py-2">
                            <i class="bi bi-tree me-1"></i>
                            <?php echo $translations['contact_env_badge']; ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
// Manejo del formulario de contacto
document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const formData = new FormData(this);
    const submitBtn = this.querySelector('button[type="submit"]');
    const originalText = submitBtn.innerHTML;
    const successAlert = document.getElementById('contactSuccess');
    const errorAlert = document.getElementById('contactError');
    
    // Limpiar alertas previas
    successAlert.classList.add('d-none');
    errorAlert.classList.add('d-none');
    
    // Mostrar loading
    submitBtn.innerHTML = `<span class="spinner-border spinner-border-sm me-2"></span>${window.translations?.contact_sending || 'Sending...'}`;
    submitBtn.disabled = true;
    
    // TODO: Implementar envío real del formulario
    // Simulación de envío
    setTimeout(() => {
        // Simulamos éxito (en producción, esto sería una llamada AJAX real)
        successAlert.classList.remove('d-none');
        this.reset();
        
        // Restaurar botón
        submitBtn.innerHTML = originalText;
        submitBtn.disabled = false;
        
        // Scroll al mensaje de éxito
        successAlert.scrollIntoView({ behavior: 'smooth', block: 'center' });
    }, 2000);
});
</script>