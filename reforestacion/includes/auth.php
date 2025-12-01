<?php
/**
 * Sistema de autenticación de usuarios
 * Maneja login, registro, sesiones y cookies
 */

class Auth {
    private $usersFile;

    public function __construct() {
        $this->usersFile = USERS_FILE;
        
        // Crear archivo de usuarios si no existe
        if (!file_exists($this->usersFile)) {
            $this->createUsersFile();
        }
    }

    /**
     * Crear archivo inicial de usuarios
     */
    private function createUsersFile() {
        $initialData = [
            'users' => [],
            'created' => date('Y-m-d H:i:s')
        ];
        
        $dir = dirname($this->usersFile);
        if (!is_dir($dir)) {
            mkdir($dir, 0755, true);
        }
        
        file_put_contents($this->usersFile, json_encode($initialData, JSON_PRETTY_PRINT));
    }

    /**
     * Cargar datos de usuarios
     */
    private function loadUsers() {
        if (!file_exists($this->usersFile)) {
            return ['users' => []];
        }
        
        $content = file_get_contents($this->usersFile);
        return json_decode($content, true) ?: ['users' => []];
    }

    /**
     * Guardar datos de usuarios
     */
    private function saveUsers($data) {
        return file_put_contents($this->usersFile, json_encode($data, JSON_PRETTY_PRINT)) !== false;
    }

    /**
     * Registrar nuevo usuario
     */
    public function register($name, $email, $password) {
        // Validar datos
        if (empty($name) || empty($email) || empty($password)) {
            return ['success' => false, 'message' => 'error_required_fields'];
        }

        if (!validateEmail($email)) {
            return ['success' => false, 'message' => 'error_invalid_email'];
        }

        if (strlen($password) < PASSWORD_MIN_LENGTH) {
            return ['success' => false, 'message' => 'error_password_too_short'];
        }

        // Cargar usuarios existentes
        $data = $this->loadUsers();
        
        // Verificar si el usuario ya existe
        foreach ($data['users'] as $user) {
            if ($user['email'] === $email) {
                return ['success' => false, 'message' => 'error_user_exists'];
            }
        }

        // Crear nuevo usuario
        $newUser = [
            'id' => uniqid(),
            'name' => sanitizeInput($name),
            'email' => sanitizeInput($email),
            'password' => hashPassword($password),
            'created' => date('Y-m-d H:i:s'),
            'last_login' => null
        ];

        // Agregar usuario
        $data['users'][] = $newUser;
        
        if ($this->saveUsers($data)) {
            return ['success' => true, 'message' => 'success_registration'];
        } else {
            return ['success' => false, 'message' => 'Error al guardar usuario'];
        }
    }

    /**
     * Iniciar sesión
     */
    public function login($email, $password) {
        if (empty($email) || empty($password)) {
            return ['success' => false, 'message' => 'error_required_fields'];
        }

        $data = $this->loadUsers();
        
        // Buscar usuario
        foreach ($data['users'] as &$user) {
            if ($user['email'] === $email && verifyPassword($password, $user['password'])) {
                // Actualizar último login
                $user['last_login'] = date('Y-m-d H:i:s');
                $this->saveUsers($data);
                
                // Crear sesión
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_name'] = $user['name'];
                $_SESSION['user_email'] = $user['email'];
                $_SESSION['login_time'] = time();
                
                // Crear cookie de recordar (opcional)
                if (isset($_POST['remember'])) {
                    $token = bin2hex(random_bytes(32));
                    setcookie('remember_token', $token, time() + (30 * 24 * 60 * 60), '/');
                    // TODO: Guardar token en base de datos para validación
                }
                
                return ['success' => true, 'message' => 'success_login'];
            }
        }
        
        return ['success' => false, 'message' => 'error_invalid_credentials'];
    }

    /**
     * Cerrar sesión
     */
    public function logout() {
        // Limpiar sesión
        $_SESSION = array();
        
        // Destruir cookie de sesión
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }
        
        // Destruir sesión
        session_destroy();
        
        // Limpiar cookie de recordar
        setcookie('remember_token', '', time() - 3600, '/');
        
        return ['success' => true, 'message' => 'success_logout'];
    }

    /**
     * Verificar si el usuario está logueado
     */
    public function isLoggedIn() {
        if (!isset($_SESSION['user_id'])) {
            return false;
        }

        // Verificar timeout de sesión
        if (isset($_SESSION['login_time'])) {
            if (time() - $_SESSION['login_time'] > SESSION_TIMEOUT) {
                $this->logout();
                return false;
            }
        }

        return true;
    }

    /**
     * Obtener información del usuario actual
     */
    public function getCurrentUser() {
        if (!$this->isLoggedIn()) {
            return null;
        }

        return [
            'id' => $_SESSION['user_id'],
            'name' => $_SESSION['user_name'],
            'email' => $_SESSION['user_email']
        ];
    }

    /**
     * Obtener usuario por ID
     */
    public function getUserById($id) {
        $data = $this->loadUsers();
        
        foreach ($data['users'] as $user) {
            if ($user['id'] === $id) {
                // No devolver password
                unset($user['password']);
                return $user;
            }
        }
        
        return null;
    }

    /**
     * Actualizar último acceso (renovar sesión)
     */
    public function renewSession() {
        if ($this->isLoggedIn()) {
            $_SESSION['login_time'] = time();
        }
    }

    /**
     * Obtener estadísticas de usuarios
     */
    public function getUserStats() {
        $data = $this->loadUsers();
        
        return [
            'total_users' => count($data['users']),
            'created' => $data['created'] ?? 'Unknown'
        ];
    }
}

// TODO: Implementar tokens de recuperación de contraseña
// TODO: Agregar sistema de roles y permisos
// TODO: Implementar límites de intentos de login
// TODO: Agregar logs de seguridad
// TODO: Implementar validación de email por token
?>