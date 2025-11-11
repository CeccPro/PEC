# Funciones PHP útiles (strings, JSON, cookies, etc.)

## Strings
- strlen($s) — longitud.
    - Para qué sirve: devuelve la longitud en bytes de la cadena.
    - Cómo se usa: strlen("hola")
    - Argumentos (tipos): $s — string
    - Valor devuelto: int
    ```php
    $len = strlen("hola"); // 4
    ```

- mb_strlen($s, 'UTF-8') — longitud multibyte.
    - Para qué sirve: devuelve la longitud en caracteres de una cadena multibyte según la codificación.
    - Cómo se usa: mb_strlen("ñá", 'UTF-8')
    - Argumentos (tipos): $s — string, $encoding — string (opcional)
    - Valor devuelto: int

- substr($s, $start, $len = null) — subcadena.
    - Para qué sirve: extrae una porción de la cadena.
    - Cómo se usa: substr("abcdef", 1, 3)
    - Argumentos (tipos): $s — string, $start — int (puede ser negativo), $len — int|null (opcional)
    - Valor devuelto: string
    ```php
    $sub = substr("abcdef", 1, 3); // "bcd"
    ```

- mb_substr($s, $start, $len = null, $encoding = null) — versión multibyte.
    - Para qué sirve: extrae subcadena teniendo en cuenta caracteres multibyte (UTF-8, etc.).
    - Cómo se usa: mb_substr("ñación", 1, 3, 'UTF-8')
    - Argumentos (tipos): $s — string, $start — int, $len — int|null (opcional), $encoding — string|null (opcional)
    - Valor devuelto: string

- strpos($haystack, $needle, $offset = 0) — posición primera ocurrencia (false si no existe).
    - Para qué sirve: busca la primera aparición de $needle en $haystack.
    - Cómo se usa: strpos("hola mundo", "mundo")
    - Argumentos (tipos): $haystack — string, $needle — string, $offset — int (opcional)
    - Valor devuelto: int|false (posición en bytes, o false si no se encuentra)

- strrpos($haystack, $needle, $offset = 0) — posición última ocurrencia.
    - Para qué sirve: busca la última aparición de $needle en $haystack.
    - Cómo se usa: strrpos("banana", "a")
    - Argumentos (tipos): $haystack — string, $needle — string, $offset — int (opcional)
    - Valor devuelto: int|false

- str_replace($buscar, $reemplazo, $texto, &$count = null) — reemplazo simple.
    - Para qué sirve: reemplaza todas las apariciones de $buscar por $reemplazo en $texto.
    - Cómo se usa: str_replace("hola", "adiós", $s)
    - Argumentos (tipos): $buscar — string|array, $reemplazo — string|array, $texto — string|array, $count — int& (opcional)
    - Valor devuelto: string|array (según $texto)
    ```php
    $nuevo = str_replace("foo", "bar", "foo baz"); // "bar baz"
    ```

- str_ireplace($buscar, $reemplazo, $texto) — reemplazo case-insensitive.
    - Para qué sirve: igual que str_replace pero sin distinguir mayúsculas/minúsculas.
    - Cómo se usa: str_ireplace("Hola", "Hey", $s)
    - Argumentos (tipos): mismos que str_replace
    - Valor devuelto: string|array

- trim($s, $charlist = " \t\n\r\0\x0B"), ltrim(), rtrim() — recortar espacios.
    - Para qué sirve: elimina caracteres de inicio/fin de una cadena (por defecto espacios).
    - Cómo se usa: trim("  texto  ")
    - Argumentos (tipos): $s — string, $charlist — string (opcional)
    - Valor devuelto: string

- explode($delim, $s, $limit = PHP_INT_MAX) — dividir en array.
    - Para qué sirve: corta una cadena en partes usando un delimitador y retorna un array.
    - Cómo se usa: explode(",", "a,b,c")
    - Argumentos (tipos): $delim — string, $s — string, $limit — int (opcional)
    - Valor devuelto: array
    ```php
    $arr = explode(",", "a,b,c"); // ["a","b","c"]
    ```

- implode($delim, $array) — unir array a string.
    - Para qué sirve: une elementos de un array en una cadena separada por $delim.
    - Cómo se usa: implode("-", ["a","b"])
    - Argumentos (tipos): $delim — string, $array — array (o en algunas versiones $pieces puede ser string|array)
    - Valor devuelto: string

- strtolower($s), strtoupper($s), ucwords($s) — cambios de caso.
    - Para qué sirven: convierten a minúsculas, mayúsculas o ponen en mayúscula palabras.
    - Cómo se usan: strtolower("ABC"), ucwords("hola mundo")
    - Argumentos (tipos): $s — string
    - Valor devuelto: string
    - Nota: para multibyte use mb_strtolower/mb_strtoupper con codificación.

- htmlspecialchars($s, $flags = ENT_QUOTES, $encoding = 'UTF-8', $double_encode = true) — escapar para HTML.
    - Para qué sirve: convierte caracteres especiales en entidades HTML para evitar XSS.
    - Cómo se usa: htmlspecialchars($input, ENT_QUOTES, 'UTF-8')
    - Argumentos (tipos): $s — string, $flags — int (constantes ENT_*), $encoding — string, $double_encode — bool
    - Valor devuelto: string

- preg_match($pattern, $s, &$m = null, $flags = 0, $offset = 0) — regex, buscar.
    - Para qué sirve: busca coincidencias de una expresión regular en una cadena.
    - Cómo se usa: preg_match('/patrón/', $s, $m)
    - Argumentos (tipos): $pattern — string (regex), $s — string, $m — array& (opcional), $flags — int (opcional), $offset — int (opcional)
    - Valor devuelto: int (1 si hay match, 0 si no) o false en error

- preg_replace($pattern, $replacement, $s, $limit = -1, &$count = null) — regex, reemplazar.
    - Para qué sirve: reemplaza coincidencias de regex por $replacement.
    - Cómo se usa: preg_replace('/\d+/', '#', $s)
    - Argumentos (tipos): $pattern — string|array, $replacement — string|array, $s — string|array, $limit — int, $count — int& (opcional)
    - Valor devuelto: string|array|null

## JSON
- json_encode($value, $flags = 0, $depth = 512) — encode.
    - Para qué sirve: convierte un valor PHP a una cadena JSON.
    - Cómo se usa: json_encode(['a' => 'ñ'], JSON_UNESCAPED_UNICODE)
    - Argumentos (tipos): $value — mixed, $flags — int (JSON_* constantes), $depth — int
    - Valor devuelto: string|false (o lanza JsonException si JSON_THROW_ON_ERROR está activo)
    ```php
    $json = json_encode(['a' => 'ñ'], JSON_UNESCAPED_UNICODE);
    ```

- json_decode($json, $assoc = false, $depth = 512, $flags = 0) — decode a array asociativo.
    - Para qué sirve: convierte una cadena JSON en valor PHP (objeto o array).
    - Cómo se usa: json_decode($json, true)
    - Argumentos (tipos): $json — string, $assoc — bool (si true devuelve array asociativo), $depth — int, $flags — int
    - Valor devuelto: mixed (array|object|null) o lanza JsonException si JSON_THROW_ON_ERROR

- json_last_error() / json_last_error_msg() — errores de JSON.
    - Para qué sirven: obtienen el último error ocurrido en operaciones JSON.
    - Cómo se usan: json_last_error()
    - Argumentos (tipos): ninguno
    - Valor devuelto: int (error code) / string (mensaje)

## Cookies y sesiones
- setcookie($name, $value = "", $expires = 0, $path = "", $domain = "", $secure = false, $httponly = false) — crear cookie.
    - Para qué sirve: envía una cookie HTTP al cliente (debe llamarse antes de output).
    - Cómo se usa: setcookie('user', 'carlos', time()+3600, '/', '', true, true)
    - Argumentos (tipos): $name — string, $value — string, $expires — int (timestamp), $path — string, $domain — string, $secure — bool, $httponly — bool
    - Valor devuelto: bool (true si la cabecera fue enviada)
    - Nota: a partir de PHP 7.3 también existe la versión con array de opciones: setcookie(name, value, ['expires'=>..., 'path'=>..., ...])

- $_COOKIE — leer cookies.
    - Para qué sirve: superglobal que contiene las cookies recibidas como array asociativo.
    - Cómo se usa: $_COOKIE['user']
    - Tipos: array<string,string>

- setrawcookie($name, $value = "", $expires = 0, $path = "", $domain = "", $secure = false, $httponly = false) — sin URL-encode del valor.
    - Para qué sirve: igual que setcookie pero no aplica rawurlencode al valor.
    - Argumentos y valor devuelto: mismos que setcookie

- session_start() — iniciar sesión.
    - Para qué sirve: inicia o reanuda una sesión de PHP; habilita $_SESSION.
    - Cómo se usa: session_start()
    - Argumentos (tipos): array $options (opcional) o ninguno
    - Valor devuelto: bool
    - $_SESSION: superglobal array donde guardar datos de sesión (array<string,mixed>).

## Otras utilidades
- filter_var($v, $filter = FILTER_DEFAULT, $options = null) — validar/filtrar.
    - Para qué sirve: valida o filtra un valor usando filtros predefinidos (ej. VALIDATE_EMAIL).
    - Cómo se usa: filter_var($email, FILTER_VALIDATE_EMAIL)
    - Argumentos (tipos): $v — mixed, $filter — int, $options — array|int|null
    - Valor devuelto: mixed (valor filtrado o false si no pasa validación)

- password_hash($pass, $algo, $options = []) — crear hash seguro.
    - Para qué sirve: genera un hash seguro para almacenar contraseñas.
    - Cómo se usa: password_hash('secreto', PASSWORD_DEFAULT)
    - Argumentos (tipos): $pass — string, $algo — int|const, $options — array (cost, salt no recomendado)
    - Valor devuelto: string (hash) o false en error

- password_verify($pass, $hash) — verificar contraseña.
    - Para qué sirve: comprueba si una contraseña coincide con un hash.
    - Cómo se usa: password_verify('secreto', $hash)
    - Argumentos (tipos): $pass — string, $hash — string
    - Valor devuelto: bool

- file_get_contents($path, $use_include_path = false, $context = null, $offset = 0, $maxlen = null)
    - Para qué sirve: lee el contenido de un archivo en una cadena.
    - Cómo se usa: file_get_contents('/ruta/archivo.txt')
    - Argumentos (tipos): $path — string, $use_include_path — bool, $context — resource|null, $offset — int, $maxlen — int|null
    - Valor devuelto: string|false

- file_put_contents($path, $data, $flags = 0, $context = null)
    - Para qué sirve: escribe datos en un archivo (crea/reescribe por defecto).
    - Cómo se usa: file_put_contents('/ruta/archivo.txt', $contenido)
    - Argumentos (tipos): $path — string, $data — string|array, $flags — int, $context — resource|null
    - Valor devuelto: int|false (bytes escritos o false)

- JsonSerializable / Serializable (interfaces) — para objetos complejos.
    - Para qué sirven: personalizar cómo se serializa un objeto a JSON (JsonSerializable) o serialización PHP (Serializable).
    - Cómo se usan:
        - JsonSerializable: implementar jsonSerialize(): mixed y luego usar json_encode($obj).
        - Serializable: implementar serialize(): string y unserialize(string $data): void (deprecated en algunos contextos; prefiera __serialize/__unserialize).
    - Argumentos (tipos): métodos de la interfaz usan tipos nativos (string, mixed).
    - Valor devuelto: jsonSerialize devuelve mixed (datos serializables), serialize devuelve string.

# Clases y componentes Bootstrap 5 (resumen)

Nota: las entradas de esta sección son clases CSS / atributos HTML de Bootstrap, no funciones PHP. Para cada una:
- Para qué sirve: define estilos/estructura/behavior en el frontend (ej. "btn" aplica estilos de botón).
- Cómo se usa: añadir la clase en el atributo class de un elemento HTML.
- Tipos de dato: se usan como strings en el HTML (clases o atributos data-bs-*), no son funciones ni requieren tipos PHP.

## Estructura y utilidades generales
- Contenedores: container, container-fluid
- Grid: row, col, col-sm-*, col-md-*, g-*, gx-*, gy-*
- Display & flex: d-flex, d-none, d-block, justify-content-*, align-items-*
- Espaciado: m-*, mt-*, mb-*, p-*, px-*, py-*
- Texto y fondo: text-*, text-center, text-muted, bg-primary, bg-light

## Botones
- btn, btn-primary, btn-secondary, btn-success, btn-danger, btn-warning, btn-info
- btn-outline-*, btn-lg, btn-sm, active, disabled
Ejemplo:
```html
<button class="btn btn-primary btn-lg">Guardar</button>
<a class="btn btn-outline-secondary" href="#">Cancelar</a>
```

## Formularios
- form-control (inputs), form-select (select), form-check, form-check-input, form-check-label
- form-floating (floating labels), input-group, input-group-text
Ejemplo:
```html
<div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" class="form-control" placeholder="name@example.com">
</div>
```

## Navegación / Navbar / Nav
- navbar, navbar-expand-lg, navbar-brand, navbar-nav, nav-item, nav-link, navbar-toggler

## Cards
- card, card-body, card-title, card-text, card-header, card-footer

## Carousel
Clases: carousel, carousel-inner, carousel-item, carousel-caption, carousel-control-prev/next, carousel-indicators
Ejemplo mínimo:
```html
<div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"></button>
        </div>
        <div class="carousel-inner">
                <div class="carousel-item active">
                        <img src="..." class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">Texto</div>
                </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
        </button>
</div>
```

## Modal
- modal, modal-dialog, modal-content, modal-header, modal-body, modal-footer, fade, show

## Alerts, badges y list-groups
- alert, alert-*, badge, badge-pill, list-group, list-group-item, active

## Tooltips & Popovers
- data-bs-toggle="tooltip" / "popover", tooltips requieren JS de Bootstrap

Notas rápidas:
- Muchas clases tienen variantes responsivas (eg. col-md-6).
- Para comportamiento (carousel, modal, tooltip) es necesario el bundle JS de Bootstrap o inicializar con data attributes / JS.