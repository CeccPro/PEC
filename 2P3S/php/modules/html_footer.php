<?php
    class HTMLFooter {
        public static function render(array $scripts = []): void {
            foreach ($scripts as $script) {
                $script_path = "/pec/2p3s/js/" . $script;
                echo "<script src=\"$script_path\"></script>\n";
            }
            echo <<<EOF
            </body>
        </html>
        EOF;
        }
    }
?>