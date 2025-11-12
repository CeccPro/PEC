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

            foreach ($this->config['elements'] ?? [] as $element) {
                $eAttr = $this->buildAttributes($element['attributes'] ?? []);
                if (isset($element['text'])) {
                    $this->html .= "<{$element['type']} {$eAttr}>{$element['text']}</{$element['type']}>";
                } else {
                    if (in_array(strtolower($element['type']), ['input', 'img', 'br', 'hr', 'meta', 'link'])) {
                        $this->html .= "<{$element['type']} {$eAttr} />";
                    } else {
                        $this->html .= "<{$element['type']} {$eAttr}></{$element['type']}>";
                    }
                }
            }

            $this->html .= "</{$tag}>";
        }

        public function getHtml(): string {
            return $this->html;
        }
    }

?>