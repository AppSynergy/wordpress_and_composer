<?php

// ENVIROMENT VARIABLES
require __DIR__ . '/vendor/autoload.php';
$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

// DATABASE
$table_prefix = $_ENV['DB_PREFIX'];
define('DB_NAME', $_ENV['DB_NAME']);
define('DB_USER', $_ENV['DB_USER']);
define('DB_PASSWORD', $_ENV['DB_PASSWORD']);
define('DB_HOST', $_ENV['DB_HOST']);
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

// SALTING
define('AUTH_KEY', $_ENV['KEY_1']);
define('SECURE_AUTH_KEY', $_ENV['KEY_2']);
define('LOGGED_IN_KEY', $_ENV['KEY_3']);
define('NONCE_KEY', $_ENV['KEY_4']);
define('AUTH_SALT', $_ENV['KEY_5']);
define('SECURE_AUTH_SALT', $_ENV['KEY_6']);
define('LOGGED_IN_SALT', $_ENV['KEY_7']);
define('NONCE_SALT', $_ENV['KEY_8']);

// ARCHITECTURE
define('WP_HOME', $_ENV['HOME']);
define('WP_SITEURL', WP_HOME.'/wp');
define('WP_CONTENT_DIR', dirname(__FILE__).'/public/content');
define('WP_CONTENT_URL', WP_HOME.'/content');

// OPTIMIZATION
define('WP_MEMORY_LIMIT', '64M');
define('WP_DEBUG', false);
define('DISALLOW_FILE_EDIT', true);

// CORE
require_once ABSPATH.'wp-settings.php';
