<?php
/**
 * Sistema de manejo de datos con archivos JSON
 * 
 * Esta clase maneja todas las operaciones con la "base de datos" JSON
 * incluyendo lectura, escritura y manipulación de datos de usuarios.
 * 
 * @author Proyecto Escolar CBTA 35
 */

require_once 'config.php';

class JsonDatabase {
    private $usersFile;
    
    public function __construct() {
        $this->usersFile = USERS_FILE;
        $this->initializeUsersFile();
    }
    
    /**
     * Inicializa el archivo de usuarios si no existe
     */
    private function initializeUsersFile() {
        if (!file_exists($this->usersFile)) {
            $initialData = [
                'users' => [],
                'created' => date('Y-m-d H:i:s'),
                'last_modified' => date('Y-m-d H:i:s')
            ];
            file_put_contents($this->usersFile, json_encode($initialData, JSON_PRETTY_PRINT));
        }
    }
    
    /**
     * Lee los datos del archivo JSON
     * @return array Los datos del archivo
     */
    private function readData() {
        if (!file_exists($this->usersFile)) {
            return ['users' => []];
        }
        
        $content = file_get_contents($this->usersFile);
        return json_decode($content, true) ?? ['users' => []];
    }
    
    /**
     * Escribe los datos al archivo JSON
     * @param array $data Los datos a escribir
     * @return bool True si se escribió correctamente
     */
    private function writeData($data) {
        $data['last_modified'] = date('Y-m-d H:i:s');
        return file_put_contents($this->usersFile, json_encode($data, JSON_PRETTY_PRINT)) !== false;
    }
    
    /**
     * Registra un nuevo usuario
     * @param string $username Nombre de usuario
     * @param string $email Email del usuario
     * @param string $password Contraseña sin hash
     * @return array Resultado de la operación
     */
    public function registerUser($username, $email, $password) {
        $data = $this->readData();
        
        // Verificar si el usuario ya existe
        foreach ($data['users'] as $user) {
            if ($user['username'] === $username || $user['email'] === $email) {
                return [
                    'success' => false,
                    'message' => 'Usuario o email ya existe'
                ];
            }
        }
        
        // Crear nuevo usuario
        $newUser = [
            'id' => $this->generateUserId(),
            'username' => $username,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_ALGORITHM),
            'created_at' => date('Y-m-d H:i:s'),
            'last_login' => null,
            'is_active' => true
        ];
        
        $data['users'][] = $newUser;
        
        if ($this->writeData($data)) {
            return [
                'success' => true,
                'message' => 'Usuario registrado exitosamente',
                'user_id' => $newUser['id']
            ];
        } else {
            return [
                'success' => false,
                'message' => 'Error al registrar usuario'
            ];
        }
    }
    
    /**
     * Autentica un usuario
     * @param string $username Nombre de usuario o email
     * @param string $password Contraseña
     * @return array Resultado de la autenticación
     */
    public function authenticateUser($username, $password) {
        $data = $this->readData();
        
        foreach ($data['users'] as $index => $user) {
            if (($user['username'] === $username || $user['email'] === $username) && $user['is_active']) {
                if (password_verify($password, $user['password'])) {
                    // Actualizar último login
                    $data['users'][$index]['last_login'] = date('Y-m-d H:i:s');
                    $this->writeData($data);
                    
                    return [
                        'success' => true,
                        'user' => [
                            'id' => $user['id'],
                            'username' => $user['username'],
                            'email' => $user['email'],
                            'created_at' => $user['created_at']
                        ]
                    ];
                }
            }
        }
        
        return [
            'success' => false,
            'message' => 'Credenciales incorrectas'
        ];
    }
    
    /**
     * Obtiene un usuario por ID
     * @param string $userId ID del usuario
     * @return array|null Los datos del usuario o null
     */
    public function getUserById($userId) {
        $data = $this->readData();
        
        foreach ($data['users'] as $user) {
            if ($user['id'] === $userId && $user['is_active']) {
                unset($user['password']); // No devolver la contraseña
                return $user;
            }
        }
        
        return null;
    }
    
    /**
     * Genera un ID único para usuario
     * @return string ID único
     */
    private function generateUserId() {
        return 'user_' . uniqid() . '_' . time();
    }
    
    // TODO: Implementar método para cambiar contraseña
    // TODO: Implementar método para desactivar usuario
    // TODO: Implementar método para obtener estadísticas de usuarios
    // TODO: Implementar backup automático de datos
}

/**
 * Instancia global de la base de datos
 */
$database = new JsonDatabase();
?>