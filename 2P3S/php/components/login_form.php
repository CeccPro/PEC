<?php
require_once __DIR__ . '/../modules/form.php';
require_once __DIR__ . '/../modules/container.php';

class LoginForm {
    public function getConfig(): array {
        return [
            'attributes' => [
                ['class', 'd-flex flex-column w-50 mx-auto mt-5'],
                ['id', 'loginForm']
            ],
            'action' => './php/login_handler.php',
            'method' => 'POST',
            'include_method' => 'variable',
            'elements' => [
                [
                    'type' => 'h1',
                    'text' => 'Welcome to EcoBlog',
                    'attributes' => [
                        ['class', 'text-center mb-4 text-success']
                    ]
                ],
                [
                    'type' => 'label',
                    'text' => 'Username:',
                    'attributes' => [
                        ['for', 'username'],
                        ['class', 'mb-2']
                    ]
                ],
                [
                    'type' => 'input',
                    'attributes' => [
                        ['type', 'text'],
                        ['required'],
                        ['name', 'username'],
                        ['id', 'username'],
                        ['class', 'form-control mb-3']
                    ]
                ],
                [
                    'type' => 'label',
                    'text' => 'Password:',
                    'attributes' => [
                        ['for', 'password']
                    ]
                ],
                [
                    'type' => 'input',
                    'attributes' => [
                        ['type', 'password'],
                        ['required'],
                        ['name', 'password'],
                        ['id', 'password'],
                        ['class', 'form-control mb-3']
                    ]
                ],
                [
                    'type' => 'button',
                    'text' => 'Login',
                    'attributes' => [
                        ['type', 'submit'],
                        ['class', 'btn btn-success mt-3 w-25 text-center mx-auto']
                    ]
                ]
            ]
        ];
    }

    public function render(): void {
        $formConfig = $this->getConfig();
        $form = new Form($formConfig);
        $form_html = $form->getHtml();

        $container_config = [
            'include_method' => 'variable',
            'attributes' => [
                ['class', 'text-center mt-5 w-50 mx-auto p-1 pb-4 border rounded bg-light'],
            ],
            'content_html' => [$form_html]
        ];

        $container = new Container($container_config);
        echo $container->getHtml();
    }
}
?>