<?php
    // php/components/form.php
    // Este componente genera un formulario HTML basado en la configuración que se le pasa en la variable $form_config.

    class Form {
        private $config;
        private $html = '';

        public function __construct(array $config) {
            $this->config = $config;
            $this->build();
        }

        private function buildAttributes(?array $attributes): string {
            if (empty($attributes)) return '';
            $parts = [];
            foreach ($attributes as $attr) {
                if (count($attr) == 2) {
                    $parts[] = sprintf('%s="%s"', $attr[0], $attr[1]);
                } else {
                    $parts[] = $attr[0];
                }
            }
            return implode(' ', $parts);
        }

        private function build(): void {
            if (!isset($this->config)) {
                throw new Exception("La configuración del formulario no está definida.");
            }

            $attr = $this->buildAttributes($this->config['attributes'] ?? []);
            $action = $this->config['action'] ?? '';
            $method = $this->config['method'] ?? 'POST';

            $this->html = "<form action=\"{$action}\" method=\"{$method}\" {$attr}>";

            foreach ($this->config['elements'] ?? [] as $element) {
                $eAttr = $this->buildAttributes($element['attributes'] ?? []);
                if (isset($element['text'])) {
                    $text = $element['text'];
                    $this->html .= "<{$element['type']} {$eAttr}>{$text}</{$element['type']}>";
                } else {
                    // self-closing for input-like elements
                    if (in_array(strtolower($element['type']), ['input', 'img', 'br', 'hr', 'meta', 'link'])) {
                        $this->html .= "<{$element['type']} {$eAttr} />";
                    } else {
                        $this->html .= "<{$element['type']} {$eAttr}></{$element['type']}>";
                    }
                }
            }

            $this->html .= "</form>";
        }

        public function getHtml(): string {
            return $this->html;
        }

        public function render() {
            $method = $this->config['include_method'] ?? 'variable';
            if ($method === 'echo') {
                echo $this->html;
                return null;
            }
            return $this->html;
        }
    }
?>