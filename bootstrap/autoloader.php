<?php

define('APP_START_TIME', microtime(true));

/*
 * @const APP_START_MEMORY The memory usage at the start of the application, used for profiling
 */
define('APP_START_MEMORY', memory_get_usage());

// Then register the Composer autoloader
require dirname(__DIR__).'/vendor/autoload.php';

// Load environment
try {
    (new Dotenv\Dotenv(dirname(app_path())))->load();
} catch (Dotenv\Exception\InvalidPathException $e) {
    echo $e->getMessage() . '<br>';
    echo '<pre>' . $e->getTraceAsString() . '</pre>';
    // Skip
}
