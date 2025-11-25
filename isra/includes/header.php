<header class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container-fluid px-4">
        <a class="navbar-brand fw-bold text-success" href="index.php">
            <i class="bi bi-tree-fill me-2"></i>
            <?php echo $translations['site_name']; ?>
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto flex-grow-1 justify-content-center">
                <li class="nav-item">
                    <a class="nav-link <?php echo $page === 'home' ? 'active' : ''; ?>" href="index.php">
                        <?php echo $translations['nav_home']; ?>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $page === 'about' ? 'active' : ''; ?>" href="index.php?page=about">
                        <?php echo $translations['nav_about']; ?>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $page === 'benefits' ? 'active' : ''; ?>" href="index.php?page=benefits">
                        <?php echo $translations['nav_benefits']; ?>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $page === 'how-to' ? 'active' : ''; ?>" href="index.php?page=how-to">
                        <?php echo $translations['nav_how_to']; ?>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $page === 'contact' ? 'active' : ''; ?>" href="index.php?page=contact">
                        <?php echo $translations['nav_contact']; ?>
                    </a>
                </li>                <li class="nav-item">
                    <a class="nav-link <?php echo $page === 'project' ? 'active' : ''; ?>" href="index.php?page=project">
                        <i class="bi bi-journal-text me-1"></i>
                        <?php echo $translations['nav_project']; ?>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $page === 'calculator' ? 'active' : ''; ?>" href="index.php?page=calculator">
                        <i class="bi bi-calculator me-1"></i>
                        <?php echo $translations['nav_calculator']; ?>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <!-- Selector de idiomas -->
                <li class="nav-item dropdown me-2">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        <i class="bi bi-globe me-1"></i>
                        <?php echo strtoupper($lang); ?>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <?php foreach ($language->getAvailableLanguages() as $langCode): ?>
                            <li>
                                <a class="dropdown-item <?php echo $lang === $langCode ? 'active' : ''; ?>" 
                                   href="?<?php echo http_build_query(array_merge($_GET, ['lang' => $langCode])); ?>">
                                    <?php echo $language->getLanguageName($langCode); ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </li>
                
                <!-- Usuario logueado o botón de login -->
                <?php if ($isLoggedIn): ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-success fw-bold" href="#" role="button" data-bs-toggle="dropdown">
                            <i class="bi bi-person-circle me-1"></i>
                            <?php echo htmlspecialchars($user['username']); ?>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <h6 class="dropdown-header">
                                    <?php echo $translations['welcome_user'] . ', ' . htmlspecialchars($user['username']); ?>
                                </h6>
                            </li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="logout.php">
                                <i class="bi bi-box-arrow-right me-2"></i>
                                <?php echo $translations['nav_logout']; ?>
                            </a></li>
                        </ul>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#loginModal">
                            <i class="bi bi-box-arrow-in-right me-1"></i>
                            <?php echo $translations['nav_login']; ?>
                        </button>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</header>