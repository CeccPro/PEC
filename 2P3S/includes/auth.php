<?php
class Auth {
    private $usersFile;
    
    public function __construct() {
        $this->usersFile = USERS_FILE;
        $this->initializeUsersFile();
    }

    private function initializeUsersFile() {
        if (!file_exists($this->usersFile)) {
            // Crear archivo con usuario admin por defecto
            $users = [
                'admin' => [
                    'username' => 'admin',
                    'email' => 'admin@reforestacion.com',
                    'password' => password_hash('admin123', PASSWORD_DEFAULT),
                    'role' => 'admin',
                    'created_at' => date('Y-m-d H:i:s'),
                    'last_login' => null
                ],
                'ceccpro' => [
                    'username' => 'ceccpro',
                    'email' => 'ceccpro@reforestacion.com',
                    'password' => password_hash('123456', PASSWORD_DEFAULT),
                    'role' => 'admin',
                    'created_at' => date('Y-m-d H:i:s'),
                    'last_login' => null
                ],
                'user' => [
                    'username' => 'user',
                    'email' => 'user@reforestacion.com',
                    'password' => password_hash('user123', PASSWORD_DEFAULT),
                    'role' => 'user',
                    'created_at' => date('Y-m-d H:i:s'),
                    'last_login' => null
                ]
            ];
            file_put_contents($this->usersFile, json_encode($users, JSON_PRETTY_PRINT));
        }
    }
    
    public function login($username, $password, $remember = false) {
        $users = $this->getUsers();
        
        if (isset($users[$username])) {
            $user = $users[$username];
            if (password_verify($password, $user['password'])) {
                // Actualizar último login
                $users[$username]['last_login'] = date('Y-m-d H:i:s');
                file_put_contents($this->usersFile, json_encode($users, JSON_PRETTY_PRINT));
                
                // Crear sesión
                $_SESSION['user_logged_in'] = true;
                $_SESSION['username'] = $username;
                $_SESSION['login_time'] = time();
                
                // Cookie de recordar si está marcado
                if ($remember) {
                    $token = $this->generateRememberToken($username);
                    setcookie('remember_token', $token, time() + COOKIE_LIFETIME, '/');
                }
                
                return true;
            }
        }
        return false;
    }

    public function updateUsersFile(array $user) {
        $users = $this->getUsers();
        $users[] = $user;
        file_put_contents($this->usersFile, json_encode($users, JSON_PRETTY_PRINT));
        return 0;
    }
    
    public function logout() {
        // Limpiar sesión
        session_destroy();
        
        // Limpiar cookie de recordar
        if (isset($_COOKIE['remember_token'])) {
            setcookie('remember_token', '', time() - 3600, '/');
        }
        
        // Redirigir al home
        header('Location: index.php');
        exit;
    }
    
    public function isLoggedIn() {
        // Verificar sesión activa
        if (isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in']) {
            // Verificar tiempo de sesión
            if (time() - $_SESSION['login_time'] < SESSION_LIFETIME) {
                return true;
            }
        }
        
        // Verificar cookie de recordar
        if (isset($_COOKIE['remember_token'])) {
            return $this->validateRememberToken($_COOKIE['remember_token']);
        }
        
        return false;
    }
    
    public function getCurrentUser() {
        if ($this->isLoggedIn() && isset($_SESSION['username'])) {
            $users = $this->getUsers();
            return isset($users[$_SESSION['username']]) ? $users[$_SESSION['username']] : null;
        }
        return null;
    }
    
    public function register($username, $email, $password) {
        $users = $this->getUsers();
        
        // Verificar si el usuario ya existe
        if (isset($users[$username])) {
            return false;
        }
        
        // Crear nuevo usuario
        $users[$username] = [
            'username' => $username,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'role' => 'user',
            'created_at' => date('Y-m-d H:i:s'),
            'last_login' => null
        ];
        
        return file_put_contents($this->usersFile, json_encode($users, JSON_PRETTY_PRINT));
    }
    
    private function getUsers() {
        if (file_exists($this->usersFile)) {
            $content = file_get_contents($this->usersFile);
            return json_decode($content, true) ?: [];
        }
        return [];
    }
    
    private function generateRememberToken($username) {
        $token = bin2hex(random_bytes(32));
        // TODO: Almacenar token en archivo para validación posterior
        return base64_encode($username . ':' . $token);
    }
    
    private function validateRememberToken($token) {
        // TODO: Implementar validación completa de tokens
        $decoded = base64_decode($token);
        $parts = explode(':', $decoded);
        
        if (count($parts) === 2) {
            $username = $parts[0];
            $users = $this->getUsers();
            
            if (isset($users[$username])) {
                // Restaurar sesión
                $_SESSION['user_logged_in'] = true;
                $_SESSION['username'] = $username;
                $_SESSION['login_time'] = time();
                return true;
            }
        }
        
        return false;
    }
}
?>