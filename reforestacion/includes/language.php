<?php
/**
 * Sistema de gestión de idiomas
 * Maneja la traducción de textos en español e inglés
 */

class Language {
    private $currentLanguage;
    private $translations;

    public function __construct() {
        // Inicializar idioma desde sesión, cookie o por defecto
        if (isset($_SESSION['language'])) {
            $this->currentLanguage = $_SESSION['language'];
        } elseif (isset($_COOKIE['language'])) {
            $this->currentLanguage = $_COOKIE['language'];
        } else {
            $this->currentLanguage = DEFAULT_LANGUAGE;
        }

        // Validar que el idioma esté soportado
        if (!in_array($this->currentLanguage, SUPPORTED_LANGUAGES)) {
            $this->currentLanguage = DEFAULT_LANGUAGE;
        }
    }

    /**
     * Cambiar el idioma actual
     */
    public function setLanguage($language) {
        if (in_array($language, SUPPORTED_LANGUAGES)) {
            $this->currentLanguage = $language;
            $_SESSION['language'] = $language;
            
            // Guardar en cookie por 30 días
            setcookie('language', $language, time() + (30 * 24 * 60 * 60), '/');
            
            return true;
        }
        return false;
    }

    /**
     * Obtener el idioma actual
     */
    public function getCurrentLanguage() {
        return $this->currentLanguage;
    }

    /**
     * Cargar las traducciones para un idioma específico
     */
    public function getTranslations($language = null) {
        if ($language === null) {
            $language = $this->currentLanguage;
        }

        $translationFile = LANG_DIR . $language . '.json';
        
        if (file_exists($translationFile)) {
            $content = file_get_contents($translationFile);
            return json_decode($content, true);
        }

        // Cargar idioma por defecto si no existe el archivo
        $defaultFile = LANG_DIR . DEFAULT_LANGUAGE . '.json';
        if (file_exists($defaultFile)) {
            $content = file_get_contents($defaultFile);
            return json_decode($content, true);
        }

        return [];
    }

    /**
     * Obtener una traducción específica
     */
    public function get($key, $language = null) {
        $translations = $this->getTranslations($language);
        return isset($translations[$key]) ? $translations[$key] : $key;
    }

    /**
     * Obtener todos los idiomas soportados
     */
    public function getSupportedLanguages() {
        return SUPPORTED_LANGUAGES;
    }
}

// TODO: Implementar pluralización de textos
// TODO: Agregar soporte para interpolación de variables en traducciones
// TODO: Implementar cache de traducciones para mejor rendimiento
?>