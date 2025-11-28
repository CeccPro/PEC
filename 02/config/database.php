<?php
/**
 * Sistema de Base de Datos No-SQL (JSON)
 * Manejo de usuarios con passwords hasheadas y sesiones
 * 
 * @author: Estudiante CBTA 35
 * @date: November 2025
 */

// Archivo JSON para almacenar usuarios
define('USERS_FILE', __DIR__ . '/users.json');

/**
 * Inicializar archivo de usuarios si no existe
 */
function initializeUsersFile() {
    if (!file_exists(USERS_FILE)) {
        $initial_data = [
            'users' => [],
            'last_id' => 0,
            'created_at' => date('Y-m-d H:i:s')
        ];
        file_put_contents(USERS_FILE, json_encode($initial_data, JSON_PRETTY_PRINT));
    }
}

/**
 * Leer datos de usuarios del archivo JSON
 * @return array
 */
function readUsersData() {
    initializeUsersFile();
    $content = file_get_contents(USERS_FILE);
    return json_decode($content, true) ?? ['users' => [], 'last_id' => 0];
}

/**
 * Escribir datos de usuarios al archivo JSON
 * @param array $data
 * @return bool
 */
function writeUsersData($data) {
    return file_put_contents(USERS_FILE, json_encode($data, JSON_PRETTY_PRINT)) !== false;
}

/**
 * Registrar nuevo usuario
 * @param string $username
 * @param string $email
 * @param string $password
 * @return array
 */
function registerUser($username, $email, $password) {
    // Validaciones básicas
    if (strlen($username) < 3) {
        return ['success' => false, 'message' => 'El nombre de usuario debe tener al menos 3 caracteres'];
    }
    
    if (strlen($password) < 6) {
        return ['success' => false, 'message' => 'La contraseña debe tener al menos 6 caracteres'];
    }
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return ['success' => false, 'message' => 'Email inválido'];
    }
    
    $data = readUsersData();
    
    // Verificar si el usuario ya existe
    foreach ($data['users'] as $user) {
        if ($user['username'] === $username) {
            return ['success' => false, 'message' => 'El nombre de usuario ya existe'];
        }
        if ($user['email'] === $email) {
            return ['success' => false, 'message' => 'El email ya está registrado'];
        }
    }
    
    // Crear nuevo usuario
    $new_user = [
        'id' => ++$data['last_id'],
        'username' => $username,
        'email' => $email,
        'password' => password_hash($password, PASSWORD_DEFAULT), // Hash seguro de la contraseña
        'created_at' => date('Y-m-d H:i:s'),
        'last_login' => null,
        'role' => 'student', // Rol por defecto
        'preferences' => [
            'language' => 'es',
            'theme' => 'default'
        ]
    ];
    
    $data['users'][] = $new_user;
    
    if (writeUsersData($data)) {
        return [
            'success' => true, 
            'message' => 'Usuario registrado exitosamente',
            'user_id' => $new_user['id']
        ];
    } else {
        return ['success' => false, 'message' => 'Error al guardar el usuario'];
    }
}

/**
 * Autenticar usuario (login)
 * @param string $username
 * @param string $password
 * @return array
 */
function loginUser($username, $password) {
    $data = readUsersData();
    
    foreach ($data['users'] as $index => $user) {
        if ($user['username'] === $username) {
            if (password_verify($password, $user['password'])) {
                // Actualizar último login
                $data['users'][$index]['last_login'] = date('Y-m-d H:i:s');
                writeUsersData($data);
                
                // Remover password del array de retorno por seguridad
                unset($user['password']);
                
                return [
                    'success' => true,
                    'message' => 'Login exitoso',
                    'user' => $user
                ];
            } else {
                return ['success' => false, 'message' => 'Contraseña incorrecta'];
            }
        }
    }
    
    return ['success' => false, 'message' => 'Usuario no encontrado'];
}

/**
 * Obtener información de usuario por ID
 * @param int $user_id
 * @return array|null
 */
function getUserById($user_id) {
    $data = readUsersData();
    
    foreach ($data['users'] as $user) {
        if ($user['id'] === $user_id) {
            unset($user['password']); // Remover password por seguridad
            return $user;
        }
    }
    
    return null;
}

/**
 * Actualizar preferencias de usuario
 * @param int $user_id
 * @param array $preferences
 * @return bool
 */
function updateUserPreferences($user_id, $preferences) {
    $data = readUsersData();
    
    foreach ($data['users'] as $index => $user) {
        if ($user['id'] === $user_id) {
            $data['users'][$index]['preferences'] = array_merge(
                $user['preferences'], 
                $preferences
            );
            return writeUsersData($data);
        }
    }
    
    return false;
}

/**
 * Obtener estadísticas de usuarios para el panel de administración
 * TODO: Implementar panel de administración
 * @return array
 */
function getUserStats() {
    $data = readUsersData();
    
    return [
        'total_users' => count($data['users']),
        'users_last_month' => count(array_filter($data['users'], function($user) {
            return strtotime($user['created_at']) > strtotime('-1 month');
        })),
        'active_users' => count(array_filter($data['users'], function($user) {
            return $user['last_login'] && strtotime($user['last_login']) > strtotime('-7 days');
        }))
    ];
}

/**
 * Validar sesión de usuario
 * @return bool
 */
function validateUserSession() {
    if (!isset($_SESSION['user'])) {
        return false;
    }
    
    // Verificar si el usuario aún existe en la base de datos
    $user = getUserById($_SESSION['user']['id']);
    if (!$user) {
        session_destroy();
        return false;
    }
    
    return true;
}

// TODO: Implementar funciones de recuperación de contraseña
// TODO: Implementar sistema de roles y permisos
// TODO: Implementar logging de acciones de usuario
// TODO: Implementar backup automático del archivo de usuarios
// TODO: Implementar validación adicional de seguridad (rate limiting, etc.)

/**
 * Función de utilidad para hashear contraseñas en batch
 * Útil para migración o actualizaciones
 */
function rehashPasswords() {
    $data = readUsersData();
    $updated = false;
    
    foreach ($data['users'] as $index => $user) {
        // Solo rehashear si la contraseña no está hasheada con password_hash
        if (!password_get_info($user['password'])['algo']) {
            $data['users'][$index]['password'] = password_hash($user['password'], PASSWORD_DEFAULT);
            $updated = true;
        }
    }
    
    if ($updated) {
        writeUsersData($data);
    }
    
    return $updated;
}

/**
 * Generar token para recuperación de contraseña
 * TODO: Implementar completamente
 * @param string $email
 * @return string|false
 */
function generatePasswordResetToken($email) {
    // Esta función se implementará cuando se añada el sistema de email
    return false;
}

// Inicializar el archivo de usuarios al incluir este archivo
initializeUsersFile();
?>