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

            if (isset($this->config['content_html']) && is_array($this->config['content_html'])) {
                foreach ($this->config['content_html'] as $content) {
                    $this->html .= $content;
                }
            } elseif (isset($this->config['content_html'])) {
                $this->html .= $this->config['content_html'];
            }

            $this->html .= "</div>";
        }

        public function getHtml(): string {
            return $this->html;
        }

        public function render(): void {
            echo $this->html;
        }
    }
?>