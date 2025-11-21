<?php
    class HTMLHeader {
        public static function render(string $title, array $additional_css = []): void {

        $css_files = '';

        foreach ($additional_css as $css_file) {
            $css_path = "/pec/2p3s/css/" . $css_file;
            $css_files .= "<link rel=\"stylesheet\" href=\"$css_path\">\n";
        }

        $title = " - " . $title;
        $_bootstrap_css = "/pec/2p3s/css/bootstrap.min.css";
        $_styles_css = "/pec/2p3s/css/styles.css";
        
        // php/modules/html_header.php
        echo <<<HEADER
        <!DOCTYPE html>
        <html lang="es">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>EcoBlog $title</title>
                <link rel="stylesheet" href="$_bootstrap_css">  
                <link rel="stylesheet" href="$_styles_css">
                $css_files
            </head>
            <body>
        HEADER;
        }
    }
?>