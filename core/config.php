<?php

    /**
     * Config
     *
     * Mahan | Configuration
     *
     * @package    App\Core
     * @author     Milad Abooali <m.abooali@hotmail.com>
     * @copyright  2012 - 2020 Codebox
     * @license    http://codebox.ir/license/1_0.txt  Codebox License 1.0
     * @version    1.0.0
     */

    /**
     * Debug
     */
    error_reporting(E_ALL); // E_ALL & ~E_NOTICE
    ini_set('ignore_repeated_errors', false);
    ini_set('display_errors', true);
    ini_set('log_errors', true);

    define("LOGGER", true);  // Active Logger
    define("LOG_FORCE", false);  // 1 Force to Show Log - 0: Need add '&mLog' to URL

    /**
     * App Settings
     */
    define("APP_POR", "http://");
    define("APP_URL", APP_POR."bid2enjoy/");
    define("APP_ROOT", $_SERVER['DOCUMENT_ROOT'].'/');

    /**
     * Static files - CDN
     */
    define("SITE", [
        "lang"      => "EN", // null (IP Base) - Lang 2 char
        "them"      => "simple"
    ]);

    /**
     * Static files - CDN
     */
    define("CDN", APP_URL."assets/");
    define("CSS", CDN."css/");
    define("IMG", CDN."img/");
    define("JS", CDN."js/");

    /**
     * Database information
     */
    define("DB_INFO", [
        "hostname"  => "localhost",
        "port"      => 3306,
        "name"      => "bid2enjoy",
        "prefix"    => '',
        "username"  => "root",
        "password"  => null
    ]);

    /**
     * CSRF token & session expiration
     */
    define('SESSION_TIMEOUT', 1800); // Seconds

    /**
     * Cache settings
     */
    define("CACHE", [
        "enable"    => 0, // 0 (Off) - 1 (On)
        "minify"    => 1, // 0 (Yes) - 1 (No)
        "expire"    => 3600 // Seconds
    ]);