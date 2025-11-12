# Uso de cookies en PHP — descripción detallada

Una cookie es un pequeño fragmento de texto que el servidor solicita al navegador almacenar y enviar en cada petición posterior al mismo dominio. En PHP se manejan principalmente con la función setcookie() y la superglobal $_COOKIE. A continuación se explica su uso, funciones, parámetros y buenas prácticas.

## Principios básicos
- Las cookies se envían en las cabeceras HTTP: setcookie() debe llamarse **antes** de cualquier salida al cliente (antes de imprimir HTML).
- Las cookies no son seguras por sí mismas: el cliente puede modificar o eliminar cookies. No guardar información sensible sin protegerla.
- Cookies y sesiones: la sesión (session) almacena datos en servidor y usa típicamente una cookie (por ejemplo PHPSESSID) solo para el identificador. Para datos sensibles, preferir sesiones o almacenar solo referencia/ID en la cookie.

## Funciones principales
- setcookie(string $name, string $value = "", int|array $options = []) — enviar cookie al navegador.
    - Firma clásica (compatibilidad): setcookie(string $name, string $value, int $expire, string $path, string $domain, bool $secure, bool $httponly)
    - Firma moderna (PHP ≥ 7.3): setcookie(string $name, string $value, array $options) donde options puede incluir expires, path, domain, secure, httponly, samesite.
- setrawcookie(): igual que setcookie pero no aplica URL encoding al valor.
- $_COOKIE: arreglo asociativo leído por PHP con las cookies enviadas por el cliente en la petición actual.
- Para borrar una cookie: volver a enviar la cookie con fecha de expiración en el pasado.

## Parámetros importantes de setcookie
- name (string): nombre de la cookie.
- value (string): valor (usar strings; para objetos/arrays convertir a JSON o serializar).
- expires / expire (int): timestamp Unix de expiración. 0 o no poner => cookie de sesión (se borra al cerrar navegador). Ejemplo: time() + 3600 (1 hora).
- path (string): ruta en la que la cookie es válida (p. ej. "/").
- domain (string): dominio (p. ej. "example.com"). Para subdominios, usar ".example.com".
- secure (bool): solo enviar en conexiones HTTPS.
- httponly (bool): disponible sólo vía HTTP, no accesible desde JavaScript (mitiga XSS).
- samesite (string): 'Lax' | 'Strict' | 'None' — controla envío en peticiones cross-site (mitiga CSRF). 'None' requiere secure=true.

## Ejemplos

Enviar cookie (PHP ≥ 7.3):
```php
// Debe ejecutarse antes de cualquier salida
setcookie('usuario', 'carlos', [
    'expires' => time() + 3600, // 1 hora
    'path' => '/',
    'domain' => 'example.com', // opcional
    'secure' => true,          // solo HTTPS
    'httponly' => true,        // no accesible por JS
    'samesite' => 'Lax'        // Lax|Strict|None
]);
```

Leer cookie:
```php
if (isset($_COOKIE['usuario'])) {
        $usuario = $_COOKIE['usuario'];
} else {
        $usuario = null;
}
```

Eliminar cookie:
```php
// Enviar la misma cookie con expiración pasada
setcookie('usuario', '', [
    'expires' => time() - 3600,
    'path' => '/',
    'domain' => 'example.com',
    'secure' => true,
    'httponly' => true,
    'samesite' => 'Lax'
]);
unset($_COOKIE['usuario']); // opcional para el ciclo de vida de este script
```

Actualizar cookie:
- Llamar a setcookie() con mismo nombre y nuevos parámetros. Nota: la superglobal $_COOKIE no se actualiza automáticamente; puede asignarse manualmente si se necesita leer en la misma petición:
```php
setcookie('tema', 'oscuro', ['expires' => time()+3600, 'path' => '/']);
$_COOKIE['tema'] = 'oscuro'; // para usar en el mismo ciclo
```

Almacenar estructuras:
- Convertir arrays/objetos a JSON o serializar. Evitar serializar datos críticos sin firmar/encriptar.
```php
$prefs = ['lang'=>'es','compact'=>true];
setcookie('prefs', json_encode($prefs), ['expires'=>time()+86400,'path'=>'/']);
```

## Buenas prácticas de seguridad y privacidad
- Usar secure=true en producción (HTTPS obligatorio).
- Usar httponly=true para cookies que no deban ser accedidas por JavaScript (p. ej. identificadores).
- Aplicar SameSite=Lax o Strict para reducir riesgo CSRF; si necesita cross-site (p. ej. SSO), usar SameSite=None y secure.
- No guardar contraseñas, tokens de largo plazo ni datos sensibles en texto plano en cookies.
- Considerar firmar (HMAC) o encriptar el contenido de la cookie para detectar/manipulación:
    - server: value = base64_encode(json) . '.' . hash_hmac('sha256', json, SECRET_KEY)
    - al leer, verificar hmac antes de confiar los datos.
- Evitar cookies demasiado grandes: límite común ~4 KB por cookie y número limitado de cookies por dominio (implementaciones varían).
- Minimizar datos en cookies (cada petición HTTP enviará la cookie, afectando rendimiento).
- Implementar consentimiento cuando sea requerido por leyes (GDPR/CCPA) y mostrar política de cookies.
- Validar y sanitizar valores leídos desde $_COOKIE antes de usarlos.

## Consideraciones técnicas y límites
- Cookies se envían en cada petición al dominio/ruta que coincida; afectan ancho de banda.
- Tamaño máximo recomendado por cookie: 4 KB (varía entre navegadores).
- Número de cookies por dominio limitado (e.g., 20–180 dependiendo del navegador).
- setcookie() solo añade encabezados; la cookie estará disponible en $_COOKIE en la siguiente petición del cliente (a menos que la asignemos manualmente en el script).

## Ejemplo completo mínimo
```php
<?php
// Sin salida previa
// Crear cookie segura y firmada
$data = ['uid'=>123, 'role'=>'user'];
$json = json_encode($data);
$hmac = hash_hmac('sha256', $json, 'MI_SECRETO');
$value = base64_encode($json) . '.' . $hmac;

setcookie('session_data', $value, [
    'expires' => time() + 3600,
    'path' => '/',
    'secure' => true,
    'httponly' => true,
    'samesite' => 'Lax'
]);

// Al leer en próxima petición:
// $raw = $_COOKIE['session_data'] ?? '';
// list($b64, $hmac) = explode('.', $raw, 2);
// $json = base64_decode($b64);
// if (hash_equals(hash_hmac('sha256', $json, 'MI_SECRETO'), $hmac)) {
//     $data = json_decode($json, true);
// } else {
//     // manipulado: ignorar o invalidar
// }
?>
```

Resumen rápido de reglas:
- Llamar setcookie() antes de cualquier salida.
- Usar secure, httponly y samesite apropiados.
- No almacenar datos sensibles sin protección.
- Validar firmas y/o encriptar si confías en datos cliente.
- Mantener cookies pequeñas y limitar su uso para rendimiento.

Fin.