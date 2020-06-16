<?php
/**
 * Configuration overrides for WP_ENV === 'development'
 */

use Roots\WPConfig\Config;

Config::define('SAVEQUERIES', getenv('SAVEQUERIES'));
Config::define('WP_DEBUG', getenv('WP_DEBUG'));
Config::define('WP_DEBUG_DISPLAY', getenv('WP_DEBUG_DISPLAY'));
Config::define('WP_DISABLE_FATAL_ERROR_HANDLER', getenv('WP_DISABLE_FATAL_ERROR_HANDLER'));
Config::define('SCRIPT_DEBUG', getenv('SCRIPT_DEBUG'));

ini_set('display_errors', '1');

// Enable plugin and theme updates and installation from the admin
Config::define('DISALLOW_FILE_MODS', false);