<?php
    // php/modules/generic.php
    // Este módulo genera componentes HTML genéricos basados en la configuración que se le pasa en la variable $generic_config.
    
    class GenericComponent {
        protected $config;
        protected $html = '';

        public function __construct(array $config) {
            $this->config = $config;
            $this->build();
        }

        protected function buildAttributes(?array $attributes): string {
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

        protected function build(): void {
            if (!isset($this->config)) {
                throw new Exception("La configuración del componente genérico no está definida.");
            }

            $tag = $this->config['type'] ?? 'div';
            $attr = $this->buildAttributes($this->config['attributes'] ?? []);
            $this->html = "<{$tag} {$attr}>";

            if (isset($this->config['content_html'])) {
                $this->html .= $this->config['content_html'];
            }

            if (isset($this->config['text'])) {
                $this->html .= $this->config['text'];
            }

            // Render elements (supports nested elements recursively)
            foreach ($this->config['elements'] ?? [] as $element) {
                $this->html .= $this->renderElement($element);
            }

            $this->html .= "</{$tag}>";
        }

        /**
         * Renderiza un elemento (y sus hijos) de forma recursiva.
         * Acepta keys: type, attributes, text, content_html, elements
         */
        protected function renderElement(array $element): string {
            $type = $element['type'] ?? 'div';
            $eAttr = $this->buildAttributes($element['attributes'] ?? []);
            $attrPrefix = $eAttr !== '' ? " {$eAttr}" : '';

            // Texto directo
            if (isset($element['text'])) {
                return "<{$type}{$attrPrefix}>{$element['text']}</{$type}>";
            }

            // Elementos autocerrados
            if (in_array(strtolower($type), ['input', 'img', 'br', 'hr', 'meta', 'link'])) {
                return "<{$type}{$attrPrefix} />";
            }

            // Contenido interno: content_html y elementos hijos
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