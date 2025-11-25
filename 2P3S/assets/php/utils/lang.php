<?php
    // Utilidad para manejar idiomas usando diccionarios en JSON
    // Uso:
    // $lang = new Lang($_language_code);
    // $lang->get('txt.key.identifier');

    class Lang {
        private $dictionary = [];

        public function __construct($languageCode) {
            $filePath = "C:/Users/Progra-Carlos/xampp/htdocs/pec/2p3s/assets/etc/lang/" . $languageCode . ".json";
            if (file_exists($filePath)) {
                $jsonContent = file_get_contents($filePath);
                $this->dictionary = json_decode($jsonContent, true);
            } else {
                throw new Exception("Language file not found: " . $filePath);
            }
        }

        public function get($key) {
            $dict = $this->dictionary;
            if (isset($dict["content"][$key])) {
                return $dict["content"][$key];
            } else {
                return "Lorem Ipsum"; // Fallback si la clave no existe
            }
        }
    }
    
    