<?php
/**
 * Sistema de autenticación y manejo de sesiones
 * 
 * Esta clase maneja todo lo relacionado con la autenticación de usuarios,
 * incluyendo login, logout, registro y verificación de sesiones.
 * 
 * @author Proyecto Escolar CBTA 35
 */

require_once 'config.php';
require_once 'database.php';

class Authentication {
    private $database;
    
    public function __construct($database) {
        $this->database = $database;
    }
    
    /**
     * Procesa el login de usuario
     * @param string $username Usuario o email
     * @param string $password Contraseña
     * @param bool $rememberMe Si debe recordar la sesión
     * @return array Resultado del login
     */
    public function login($username, $password, $rememberMe = false) {
        $result = $this->database->authenticateUser($username, $password);
        
        if ($result['success']) {
            // Iniciar sesión
            $_SESSION['user_id'] = $result['user']['id'];
            $_SESSION['username'] = $result['user']['username'];
            $_SESSION['email'] = $result['user']['email'];
            $_SESSION['logged_in'] = true;
            $_SESSION['login_time'] = time();
            
            // Configurar cookie de "recordarme" si se solicita
            if ($rememberMe) {
                $this->setRememberMeCookie($result['user']['id']);
            }
            
            return [
                'success' => true,
                'message' => 'Inicio de sesión exitoso',
                'user' => $result['user']
            ];
        }
        
        return $result;
    }
    
    /**
     * Procesa el logout de usuario
     */
    public function logout() {
        // Limpiar variables de sesión
        $_SESSION = array();
        
        // Eliminar cookie de sesión
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }
        
        // Eliminar cookie de "recordarme"
        setcookie('remember_token', '', time() - 3600, '/');
        
        // Destruir sesión
        session_destroy();
    }
    
    /**
     * Registra un nuevo usuario
     * @param array $userData Datos del usuario
     * @return array Resultado del registro
     */
    public function register($userData) {
        // Validar datos
        $validation = $this->validateRegistrationData($userData);
        if (!$validation['valid']) {
            return [
                'success' => false,
                'message' => $validation['message']
            ];
        }
        
        return $this->database->registerUser(
            $userData['username'],
            $userData['email'],
            $userData['password']
        );
    }
    
    /**
     * Verifica si el usuario está autenticado
     * @return bool True si está autenticado
     */
    public function isLoggedIn() {
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']) {
            return true;
        }
        
        // Verificar cookie de "recordarme"
        return $this->checkRememberMeCookie();
    }
    
    /**
     * Obtiene los datos del usuario actual
     * @return array|null Datos del usuario o null
     */
    public function getCurrentUser() {
        if ($this->isLoggedIn() && isset($_SESSION['user_id'])) {
            return $this->database->getUserById($_SESSION['user_id']);
        }
        return null;
    }
    
    /**
     * Valida los datos de registro
     * @param array $data Datos a validar
     * @return array Resultado de la validación
     */
    private function validateRegistrationData($data) {
        // Validar campos requeridos
        $required = ['username', 'email', 'password', 'confirm_password'];
        foreach ($required as $field) {
            if (empty($data[$field])) {
                return [
                    'valid' => false,
                    'message' => "El campo $field es requerido"
                ];
            }
        }
        
        // Validar longitud de usuario
        if (strlen($data['username']) < 3 || strlen($data['username']) > 20) {
            return [
                'valid' => false,
                'message' => 'El nombre de usuario debe tener entre 3 y 20 caracteres'
            ];
        }
        
        // Validar formato de email
        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            return [
                'valid' => false,
                'message' => 'Formato de email inválido'
            ];
        }
        
        // Validar contraseña
        if (strlen($data['password']) < 6) {
            return [
                'valid' => false,
                'message' => 'La contraseña debe tener al menos 6 caracteres'
            ];
        }
        
        // Validar coincidencia de contraseñas
        if ($data['password'] !== $data['confirm_password']) {
            return [
                'valid' => false,
                'message' => 'Las contraseñas no coinciden'
            ];
        }
        
        return ['valid' => true];
    }
    
    /**
     * Configura la cookie de "recordarme"
     * @param string $userId ID del usuario
     */
    private function setRememberMeCookie($userId) {
        $token = bin2hex(random_bytes(32));
        $hashedToken = hash('sha256', $token);
        
        // TODO: Guardar el token hasheado en la base de datos asociado al usuario
        // Por ahora solo guardamos el user_id en la cookie (no es la práctica más segura)
        setcookie('remember_token', base64_encode($userId), time() + COOKIE_LIFETIME, '/');
    }
    
    /**
     * Verifica la cookie de "recordarme"
     * @return bool True si la cookie es válida
     */
    private function checkRememberMeCookie() {
        if (isset($_COOKIE['remember_token'])) {
            $userId = base64_decode($_COOKIE['remember_token']);
            $user = $this->database->getUserById($userId);
            
            if ($user) {
                // Restaurar sesión
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['logged_in'] = true;
                $_SESSION['login_time'] = time();
                
                return true;
            }
        }
        
        return false;
    }
    
    // TODO: Implementar recuperación de contraseña por email
    // TODO: Implementar verificación de email en registro
    // TODO: Implementar límite de intentos de login fallidos
    // TODO: Implementar logout automático por inactividad
}

/**
 * Función de ayuda para requerir autenticación en una página
 */
function requireAuth() {
    global $auth;
    if (!$auth->isLoggedIn()) {
        header('Location: login.php');
        exit;
    }
}

// Instancia global de autenticación
$auth = new Authentication($database);
?>