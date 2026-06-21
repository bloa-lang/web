<?php
/**
 * Configuration file for BLOA Website
 * Contains all important settings for the application
 */

// Determine environment
define('ENV', getenv('APP_ENV') ?: 'production');
define('DEBUG', ENV === 'development' ? true : false);

// Website Information
define('SITE_NAME', 'BLOA');
define('SITE_TITLE', 'BLOA - Modern Programming Language');
define('SITE_DESCRIPTION', 'BLOA is a modern programming language with elegant syntax and powerful features');
define('SITE_URL', getenv('SITE_URL') ?: 'https://bloa.dev');
define('SITE_EMAIL', 'hello@bloa.dev');

// Path Configuration
define('ROOT_PATH', dirname(__DIR__));
define('APP_PATH', ROOT_PATH . '/src');
define('PUBLIC_PATH', ROOT_PATH . '/public');
define('VENDOR_PATH', ROOT_PATH . '/vendor');

// Database Configuration
define('DB_HOST', getenv('DB_HOST') ?: 'localhost');
define('DB_PORT', getenv('DB_PORT') ?: 3306);
define('DB_NAME', getenv('DB_NAME') ?: 'bloa_db');
define('DB_USER', getenv('DB_USER') ?: 'root');
define('DB_PASS', getenv('DB_PASS') ?: '');
define('DB_CHARSET', 'utf8mb4');

// Cache Configuration
define('CACHE_DRIVER', getenv('CACHE_DRIVER') ?: 'file');
define('CACHE_TTL', 3600); // 1 hour

// Session Configuration
ini_set('session.name', 'BLOA_SESSION');
ini_set('session.cookie_httponly', 1);
ini_set('session.cookie_samesite', 'Strict');
ini_set('session.cookie_secure', ENV === 'production' ? 1 : 0);
session_start();

// Security Settings
define('CSRF_TOKEN_LENGTH', 32);
define('CORS_ALLOWED_ORIGINS', [
    'https://bloa.dev',
    'https://www.bloa.dev',
]);

// API Configuration
define('API_VERSION', '1.0.0');
define('API_RATE_LIMIT', 100); // requests per hour
define('API_TIMEOUT', 30); // seconds

// Feature Flags
define('FEATURES', [
    'maintenance_mode' => false,
    'registration' => true,
    'comments' => true,
    'newsletter' => true,
]);

// Analytics
define('ANALYTICS_ENABLED', ENV === 'production');
define('GA_ID', getenv('GA_ID') ?: '');

// Error Handling
if (DEBUG) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else {
    error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT);
    ini_set('display_errors', 0);
    ini_set('log_errors', 1);
}

// Set default timezone
date_default_timezone_set('UTC');

// Helper Functions
if (!function_exists('env')) {
    /**
     * Get environment variable
     */
    function env($key, $default = null) {
        $value = getenv($key);
        return $value === false ? $default : $value;
    }
}

if (!function_exists('config')) {
    /**
     * Get configuration value using dot notation
     */
    function config($key, $default = null) {
        global $config;
        $keys = explode('.', $key);
        $value = $config ?? [];
        foreach ($keys as $k) {
            if (!is_array($value) || !isset($value[$k])) {
                return $default;
            }
            $value = $value[$k];
        }
        return $value;
    }
}

if (!function_exists('url')) {
    /**
     * Generate URL
     */
    function url($path = '') {
        return rtrim(SITE_URL, '/') . '/' . ltrim($path, '/');
    }
}

if (!function_exists('asset')) {
    /**
     * Generate asset URL
     */
    function asset($path) {
        return url('/public/' . ltrim($path, '/'));
    }
}

if (!function_exists('csrf_token')) {
    /**
     * Generate CSRF token
     */
    function csrf_token() {
        if (empty($_SESSION['csrf_token'])) {
            $_SESSION['csrf_token'] = bin2hex(random_bytes(CSRF_TOKEN_LENGTH));
        }
        return $_SESSION['csrf_token'];
    }
}

if (!function_exists('verify_csrf_token')) {
    /**
     * Verify CSRF token
     */
    function verify_csrf_token($token) {
        return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
    }
}

if (!function_exists('escape')) {
    /**
     * HTML escape output
     */
    function escape($string) {
        return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
    }
}

if (!function_exists('dump')) {
    /**
     * Debug dump (development only)
     */
    function dump(...$vars) {
        if (DEBUG) {
            echo '<pre style="background: #f5f5f5; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">';
            foreach ($vars as $var) {
                var_dump($var);
            }
            echo '</pre>';
        }
    }
}

if (!function_exists('dd')) {
    /**
     * Debug dump and die
     */
    function dd(...$vars) {
        dump(...$vars);
        die();
    }
}

// Error handler
set_error_handler(function($errno, $errstr, $errfile, $errline) {
    if (!(error_reporting() & $errno)) {
        return false;
    }

    $error_types = [
        E_ERROR => 'Error',
        E_WARNING => 'Warning',
        E_PARSE => 'Parse Error',
        E_NOTICE => 'Notice',
        E_CORE_ERROR => 'Core Error',
        E_CORE_WARNING => 'Core Warning',
        E_COMPILE_ERROR => 'Compile Error',
        E_COMPILE_WARNING => 'Compile Warning',
        E_USER_ERROR => 'User Error',
        E_USER_WARNING => 'User Warning',
        E_USER_NOTICE => 'User Notice',
        E_STRICT => 'Strict',
        E_RECOVERABLE_ERROR => 'Recoverable Error',
        E_DEPRECATED => 'Deprecated',
        E_USER_DEPRECATED => 'User Deprecated',
    ];

    $type = $error_types[$errno] ?? 'Unknown Error';
    
    if (DEBUG) {
        error_log("[$type] $errstr in $errfile on line $errline");
    }

    return false;
});

// Exception handler
set_exception_handler(function($exception) {
    if (DEBUG) {
        echo '<div style="background: #f8d7da; border: 1px solid #f5c6cb; padding: 10px; border-radius: 4px; margin: 10px;">';
        echo '<h3>Exception: ' . $exception->getMessage() . '</h3>';
        echo '<p><strong>File:</strong> ' . $exception->getFile() . ' (Line ' . $exception->getLine() . ')</p>';
        echo '<pre>' . htmlspecialchars($exception->getTraceAsString()) . '</pre>';
        echo '</div>';
    } else {
        error_log($exception);
        header('HTTP/1.1 500 Internal Server Error');
        include 'src/500.php';
    }
});

// Output all errors to log file if in production
if (!DEBUG) {
    ini_set('error_log', ROOT_PATH . '/storage/logs/error.log');
}

return true;
