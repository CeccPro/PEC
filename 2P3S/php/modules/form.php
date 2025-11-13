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
            // Render elements (support nested elements recursively)
            foreach ($this->config['elements'] ?? [] as $element) {
                $this->html .= $this->renderElement($element);
            }

            $this->html .= "</form>";
        }

        public function getHtml(): string {
            return $this->html;
        }

        public function render(): void {
            echo $this->html;
        }

        /**
         * Renderiza un elemento (y sus hijos) de forma recursiva para formularios.
         */
        private function renderElement(array $element): string {
            $type = $element['type'] ?? 'div';
            $eAttr = $this->buildAttributes($element['attributes'] ?? []);
            $attrPrefix = $eAttr !== '' ? " {$eAttr}" : '';

            if (isset($element['text'])) {
                return "<{$type}{$attrPrefix}>{$element['text']}</{$type}>";
            }

            if (in_array(strtolower($type), ['input', 'img', 'br', 'hr', 'meta', 'link'])) {
                return "<{$type}{$attrPrefix} />";
            }

            $inner = '';
            if (isset($element['content_html'])) {
                if (is_array($element['content_html'])) {
                    foreach ($element['content_html'] as $c) {
                        $inner .= $c;
                    }
                } else {
                    $inner .= $element['content_html'];
                }
            }

            foreach ($element['elements'] ?? [] as $child) {
                $inner .= $this->renderElement($child);
            }

            return "<{$type}{$attrPrefix}>{$inner}</{$type}>";
        }
    }
?>