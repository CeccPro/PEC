<header class="site-header sticky-top shadow-sm bg-white border-bottom <?php echo 'dark'; ?>">
    <div class="container-fluid px-4">
        <div class="d-flex align-items-center justify-content-between py-2">
            <a class="navbar-brand d-flex align-items-center gap-2 mb-0 text-decoration-none" href="index.php">
                <i class="bi bi-tree-fill fs-4 text-success"></i>
                <span class="h5 mb-0 fw-bold <?php echo 'text-light'; ?>"><?php echo $translations['site_name']; ?></span>
            </a>

            <nav class="main-nav d-none d-lg-block">
                <ul class="nav gap-3 align-items-center mb-0">
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
            </nav>
            <div class="d-flex align-items-center gap-2">
                <div class="dropdown me-2">
                    <a class="btn btn-sm btn-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        <i class="bi bi-globe"></i>
                        <span class="ms-1 text-uppercase"><?php echo strtoupper($lang); ?></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <?php foreach ($language->getAvailableLanguages() as $langCode): ?>
                            <li>
                                <a class="dropdown-item <?php echo $lang === $langCode ? 'active' : ''; ?>" href="?<?php echo http_build_query(array_merge($_GET, ['lang' => $langCode])); ?>"><?php echo $language->getLanguageName($langCode); ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                
                <?php if ($isLoggedIn): ?>
                    <div class="dropdown">
                        <a class="btn btn-sm btn-link dropdown-toggle text-success d-flex align-items-center gap-2" href="#" role="button" data-bs-toggle="dropdown">
                            <i class="bi bi-person-circle fs-5"></i>
                            <span><?php echo htmlspecialchars($user['username']); ?></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li class="dropdown-header"><?php echo $translations['welcome_user'] . ', ' . htmlspecialchars($user['username']); ?></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="logout.php"><i class="bi bi-box-arrow-right me-2"></i><?php echo $translations['nav_logout']; ?></a></li>
                        </ul>
                    </div>
                <?php else: ?>
                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#loginModal">
                        <i class="bi bi-box-arrow-in-right me-1"></i>
                        <?php echo $translations['nav_login']; ?>
                    </button>
                <?php endif; ?>
            <button class="btn btn-light d-lg-none ms-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileNav">
                <i class="bi bi-list fs-4"></i>
            </button>
        </div>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="mobileNav">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title"><?php echo $translations['site_name']; ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="nav flex-column gap-1">
                    <li class="nav-item"><a class="nav-link <?php echo $page === 'home' ? 'active' : ''; ?>" href="index.php"><?php echo $translations['nav_home']; ?></a></li>
                    <li class="nav-item"><a class="nav-link <?php echo $page === 'about' ? 'active' : ''; ?>" href="index.php?page=about"><?php echo $translations['nav_about']; ?></a></li>
                    <li class="nav-item"><a class="nav-link <?php echo $page === 'benefits' ? 'active' : ''; ?>" href="index.php?page=benefits"><?php echo $translations['nav_benefits']; ?></a></li>
                    <li class="nav-item"><a class="nav-link <?php echo $page === 'how-to' ? 'active' : ''; ?>" href="index.php?page=how-to"><?php echo $translations['nav_how_to']; ?></a></li>
                    <li class="nav-item"><a class="nav-link <?php echo $page === 'contact' ? 'active' : ''; ?>" href="index.php?page=contact"><?php echo $translations['nav_contact']; ?></a></li>
                    <li class="nav-item"><a class="nav-link <?php echo $page === 'project' ? 'active' : ''; ?>" href="index.php?page=project"><?php echo $translations['nav_project']; ?></a></li>
                    <li class="nav-item"><a class="nav-link <?php echo $page === 'calculator' ? 'active' : ''; ?>" href="index.php?page=calculator"><?php echo $translations['nav_calculator']; ?></a></li>
                </ul>
                <div class="mt-3">
                    <?php if ($isLoggedIn): ?>
                        <p class="mb-2"><?php echo $translations['welcome_user'] . ', ' . htmlspecialchars($user['username']); ?></p>
                        <a href="logout.php" class="btn btn-outline-danger w-100"><i class="bi bi-box-arrow-right me-2"></i><?php echo $translations['nav_logout']; ?></a>
                    <?php else: ?>
                        <button class="btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#loginModal"><?php echo $translations['nav_login']; ?></button>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</header>
    </div>
</header>