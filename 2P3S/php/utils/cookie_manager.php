<?php

class CookieManager {
    public static function setCookie(string $name, string $value, int $expire = 0, string $path = "/", string $domain = "", bool $secure = false, bool $httponly = false): void {
        setcookie($name, $value, $expire, $path, $domain, $secure, $httponly);
    }

    public static function getCookie(string $name): ?string {
        return $_COOKIE[$name] ?? null;
    }

    public static function deleteCookie(string $name, string $path = "/", string $domain = ""): void {
        setcookie($name, "", time() - 3600, $path, $domain);
        unset($_COOKIE[$name]);
    }
    public static function cookieExists(string $name): bool {
        return isset($_COOKIE[$name]);
    }
    public static function listCookies(): array {
        return $_COOKIE;
    }
    public static function startSessionIfNotStarted(): void {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }
}   
?>