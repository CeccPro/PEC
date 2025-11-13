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
                    ['class', 'navbar navbar-expand-lg navbar-dark bg-dark d-flex']
                ],
                'elements' => [
                    [
                        'type' => 'a',
                        'text' => 'EcoBlog',
                        'attributes' => [
                            ['class', 'navbar-brand m-3 text-success'],
                            ['href', '../../php/pages/dashboard.php']
                        ]
                    ],
                    [
                        'type' => 'div',
                        'attributes' => [
                            ['class', 'collapse navbar-collapse']
                        ],
                        'elements' => [
                            [
                                'type' => 'ul',
                                'attributes' => [
                                    ['class', 'navbar-nav ml-auto']
                                ],
                                'elements' => [
                                    [
                                        'type' => 'li',
                                        'attributes' => [
                                            ['class', 'nav-item']
                                        ],
                                        'elements' => [
                                            [
                                                'type' => 'a',
                                                'text' => 'Logout',
                                                'attributes' => [
                                                    ['class', 'nav-link text-danger m-3 flex-end'],
                                                    ['href', '../../php/utils/logout.php?logout=1']
                                                ]
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
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