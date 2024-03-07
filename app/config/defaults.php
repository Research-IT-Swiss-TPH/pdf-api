<?php

// Application default settings

// Error reporting
error_reporting(0);
ini_set('display_errors', '0');
ini_set('display_startup_errors', '0');

// Timezone
date_default_timezone_set('Europe/Berlin');

$settings = [];

// Error handler
$settings['error'] = [
    // Should be set to false for the production environment
    'display_error_details' => false,
];

// Logger settings
$settings['logger'] = [
    // Log file location
    'path' => __DIR__ . '/../logs',
    // Default log level
    'level' => \Psr\Log\LogLevel::DEBUG,
];

// Database settings
$settings['db'] = [
    'host' => 'localhost',
    'encoding' => 'utf8mb4',
    'collation' => 'utf8mb4_unicode_ci',
    // PDO options
    'options' => [
        PDO::ATTR_PERSISTENT => false,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => true,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ],
];

// Twig settings
$settings['twig'] = [
    // Template paths
    'paths' => [
    __DIR__ . '/../templates',
    ],
    // Twig environment options
    'options' => [
    // Should be set to true in production
    'cache_enabled' => false,
    'cache_path' => __DIR__ . '/../tmp/twig',
    ],
];

return $settings;
