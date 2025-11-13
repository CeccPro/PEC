<?php
    // php/components/container.php
    // Este componente genera un contenedor HTML usando divs basado en la configuración que se le pasa en la variable $container_config.

    
    class Container {
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
                throw new Exception("La configuración del contenedor no está definida.");
            }

            $attr = $this->buildAttributes($this->config['attributes'] ?? []);
            $this->html = "<div {$attr}>";

            // Render elements (support nested elements recursively)
            foreach ($this->config['elements'] ?? [] as $element) {
                $this->html .= $this->renderElement($element);
            }

            if (isset($this->config['content_html']) && is_array($this->config['content_html'])) {
                foreach ($this->config['content_html'] as $content) {
                    $this->html .= $content;
                }
            } elseif (isset($this->config['content_html'])) {
                $this->html .= $this->config['content_html'];
            }

            $this->html .= "</div>";
        }

        /**
         * Renderiza un elemento (y sus hijos) de forma recursiva para el contenedor.
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

        public function getHtml(): string {
            return $this->html;
        }

        public function render(): void {
            echo $this->html;
        }
    }
?>