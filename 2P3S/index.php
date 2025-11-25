<?php
    require_once __DIR__ . '/assets/php/utils/lang.php';

    // Configuración del idioma (podría venir de una configuración del usuario o del sistema)
    $_language_code = 'es'; // Ejemplo: 'es' para español, 'en' para inglés

    try {
        $lang = new Lang($_language_code);
        echo $lang->get('txt.ecoblog.title');
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
?>