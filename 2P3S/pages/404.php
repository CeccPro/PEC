<main class="site-content container py-7">
    <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
            <div class="mb-5 ">
                <!-- Ilustración 404 -->
                <div class="display-1 text-success mb-4" style="font-size: 8rem; font-weight: bold;">
                    4<i class="bi bi-tree-fill mx-3"></i>4
                </div>
                <h2 class="display-4 text-success mb-3"><?php echo $translations['404_title']; ?></h2>
                <p class="lead text-light mb-4">
                    <?php echo $translations['404_message']; ?>
                </p>
            </div>
            
            <!-- Sugerencias -->
            <div class="card border-success shadow-sm mb-4 ">
                <div class="card-body card-dark">
                    <h5 class="text-success mb-3"><?php echo $translations['404_what_to_do']; ?></h5>
                    <div class="d-grid gap-2">
                        <a href="index.php" class="btn btn-success">
                            <i class="bi bi-house me-2"></i>
                            <?php echo $translations['404_back_home']; ?>
                        </a>
                        <a href="index.php?page=about" class="btn btn-outline-success">
                            <i class="bi bi-info-circle me-2"></i>
                            <?php echo $translations['404_about_reforestation']; ?>
                        </a>
                        <a href="index.php?page=how-to" class="btn btn-outline-success">
                            <i class="bi bi-hand-thumbs-up me-2"></i>
                            <?php echo $translations['404_how_to_help']; ?>
                        </a>
                        <a href="index.php?page=contact" class="btn btn-outline-success">
                            <i class="bi bi-envelope me-2"></i>
                            <?php echo $translations['404_contact_us']; ?>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Mensaje motivacional -->
            <div class="alert alert-success border-0">
                <i class="bi bi-lightbulb me-2"></i>
                <strong><?php echo $translations['404_did_you_know']; ?></strong> <?php echo $translations['404_did_you_know_sentence']; ?>
            </div>
            
            <!-- Búsqueda simple -->
            <div class="card border-0 bg-dark ">
                <div class="card-body card-dark">
                    <h6 class="text-success mb-3"><?php echo $translations['404_search_prompt']; ?></h6>
                    <div class="input-group">
                        <input type="text" class="form-control text-light bg-dark" placeholder="<?php echo $translations['404_search_placeholder']; ?>" id="searchInput">
                        <button class="btn btn-success" type="button" id="searchBtn">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                    <div class="mt-3">
                        <small class="text-light">
                            <?php echo $translations['404_popular_terms']; ?>: 
                            <a href="index.php?page=benefits" class="text-success text-decoration-none"><?php echo $translations['404_popular_term_benefits']; ?></a>, 
                            <a href="index.php?page=how-to" class="text-success text-decoration-none"><?php echo $translations['404_popular_term_plant']; ?></a>, 
                            <a href="index.php?page=about" class="text-success text-decoration-none"><?php echo $translations['404_popular_term_reforestation']; ?></a>
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </main>

<script>
const translations404 = <?php echo json_encode([
    'popular_benefits' => $translations['404_popular_term_benefits'],
    'popular_plant' => $translations['404_popular_term_plant'],
    'popular_reforestation' => $translations['404_popular_term_reforestation'],
    'popular_contact' => $translations['404_contact_us'],
    'popular_about' => $translations['404_about_reforestation'],
    'search_help' => $translations['404_search_term_help'],
    'search_about' => $translations['404_search_term_about']
]); ?>;
// Funcionalidad básica de búsqueda
document.getElementById('searchBtn').addEventListener('click', function() {
    const searchTerm = document.getElementById('searchInput').value.toLowerCase();
    
    // TODO: Implementar búsqueda real en el contenido
    if (searchTerm.includes(translations404.popular_benefits.toLowerCase())) {
        window.location.href = 'index.php?page=benefits';
    } else if (searchTerm.includes(translations404.search_help.toLowerCase()) || searchTerm.includes(translations404.popular_plant.toLowerCase())) {
        window.location.href = 'index.php?page=how-to';
    } else if (searchTerm.includes(translations404.popular_contact.toLowerCase())) {
        window.location.href = 'index.php?page=contact';
    } else if (searchTerm.includes(translations404.search_about.toLowerCase()) || searchTerm.includes(translations404.popular_about.toLowerCase())) {
        window.location.href = 'index.php?page=about';
    } else {
        window.location.href = 'index.php';
    }
});

// Búsqueda con Enter
document.getElementById('searchInput').addEventListener('keypress', function(e) {
    if (e.key === 'Enter') {
        document.getElementById('searchBtn').click();
    }
});
</script>