<?php
    require_once __DIR__ . '/../utils/cookie_manager.php';
    $cookie_manager = new CookieManager();
    $cookie_manager::startSessionIfNotStarted();

    // Navbar usando el sistema de complementos genéricos
    require_once __DIR__ . '/../modules/generic.php';

    class NavBar {
        public function getConfig(): array {
            $config = [
                'type' => 'nav',
                'attributes' => [
                    ['class', 'eb-bg-dark']
                ],
                'elements' => []
            ];
            return $config;
        }
        public function render(): void {
            $config = $this->getConfig();
            $nav_component = new GenericComponent($config);
            echo $nav_component->getHtml();
        }
    }
?>