<?php
class Language {
    private $currentLanguage;
    private $translations;
    

    public function __construct() {
        $this->currentLanguage = $this->detectLanguage();
        $this->loadTranslations();
    }
    
    private function detectLanguage() {
        // Prioridad: GET > SESSION > COOKIE > BROWSER > DEFAULT
        
        // 1. Parámetro GET
        if (isset($_GET['lang']) && in_array($_GET['lang'], AVAILABLE_LANGUAGES)) {
            $_SESSION['language'] = $_GET['lang'];
            setcookie('language', $_GET['lang'], time() + COOKIE_LIFETIME, '/');
            return $_GET['lang'];
        }
        
        // 2. Sesión
        if (isset($_SESSION['language']) && in_array($_SESSION['language'], AVAILABLE_LANGUAGES)) {
            return $_SESSION['language'];
        }
        
        // 3. Cookie
        if (isset($_COOKIE['language']) && in_array($_COOKIE['language'], AVAILABLE_LANGUAGES)) {
            $_SESSION['language'] = $_COOKIE['language'];
            return $_COOKIE['language'];
        }
        
        // 4. Idioma del navegador
        if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
            $browserLang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
            if (in_array($browserLang, AVAILABLE_LANGUAGES)) {
                $_SESSION['language'] = $browserLang;
                return $browserLang;
            }
        }
        
        // 5. Idioma por defecto
        $_SESSION['language'] = DEFAULT_LANGUAGE;
        return DEFAULT_LANGUAGE;
    }
    
    private function loadTranslations() {
        $langFile = LANGUAGES_DIR . $this->currentLanguage . '.json';
        
        if (file_exists($langFile)) {
            $content = file_get_contents($langFile);
            $this->translations = json_decode($content, true);
        } else {
            // Cargar idioma por defecto si no existe el archivo
            $defaultFile = LANGUAGES_DIR . DEFAULT_LANGUAGE . '.json';
            if (file_exists($defaultFile)) {
                $content = file_get_contents($defaultFile);
                $this->translations = json_decode($content, true);
            } else {
                $this->translations = [];
            }
        }
    }
    
    public function getCurrentLanguage() {
        return $this->currentLanguage;
    }
    
    public function getTranslations($lang = null) {
        if ($lang && $lang !== $this->currentLanguage) {
            $langFile = LANGUAGES_DIR . $lang . '.json';
            if (file_exists($langFile)) {
                $content = file_get_contents($langFile);
                return json_decode($content, true);
            }
        }
        return $this->translations;
    }
    
    public function translate($key, $default = '') {
        return isset($this->translations[$key]) ? $this->translations[$key] : ($default ?: $key);
    }
    
    public function getAvailableLanguages() {
        return AVAILABLE_LANGUAGES;
    }
      public function getLanguageName($langCode) {
        $names = [
            'es' => 'Español',
            'en' => 'English'
        ];
        return isset($names[$langCode]) ? $names[$langCode] : $langCode;
    }
}

// Función global para traducir
function t($key, $default = '') {
    global $language;
    return $language ? $language->translate($key, $default) : ($default ?: $key);
}
?>