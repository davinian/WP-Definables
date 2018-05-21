<?php

/**
 * 
 * List of definable options for wp-config file
 * Author: David Churchill
 * Updated: 2018-05-21
 * 
 **/


/** API for Awsome Weather Widget Pro 
 * URL: https://halgatewood.com
 **/
define('AWESOME_WEATHER_PRO_LICENSE', 'awsome_weather_pro_license');
define('AWESOME_WEATHER_APPID', 'awesome_weather_appid');

/** API for Yahoo Weather (for Awsome Weather Widget Pro)
 * URL:https://developer.yahoo.com/apps/create
 * Note: Yahoo weather appears to be broken
 **/
define( 'AWESOME_WEATHER_YAHOO_CONSUMER', 'yhoo_consumer_key' );
define( 'AWESOME_WEATHER_YAHOO_SECRET', 'yhoo_secret_key' );

/** API for Weather Underground (for Awsome Weather Widget Pro)
 * URL: https://www.wunderground.com/weather/api
 **/
define('AWESOME_WUNDERGROUND_KEY', 'wundergroun_key');

/** 
 * License for Gravity Forms 
 * URL: https://gravityforms.com
 **/
 define(‘GF_LICENSE_KEY’,'gravity_forms_license_key’);

/** 
 * WordPress Stuff
 * Moving wp-content folder
 * Set WP_CONTENT_DIR to the full local path of this directory (no trailing slash)
 **/
 
/* local path */
define( 'WP_CONTENT_DIR', dirname(__FILE__) . '/blog/wp-content' );

/* full url */
define( 'WP_CONTENT_URL', 'http://example/blog/wp-content' );

/**
 * Moving plugin folder
 * Set WP_PLUGIN_DIR to the full local path of this directory (no trailing slash)
 **/

// local path
define( 'WP_PLUGIN_DIR', dirname(__FILE__) . '/blog/wp-content/plugins' );

// full url
define( 'WP_PLUGIN_URL', 'http://example/blog/wp-content/plugins' );

// If you have compability issues with plugins Set PLUGINDIR to the full local path of this directory (no trailing slash)
define( 'PLUGINDIR', dirname(__FILE__) . '/blog/wp-content/plugins' );

/**
 * Moving themes folder
 * You cannot move the themes folder because its path is hardcoded relative to the wp-content
 * However, you can register additional theme directories using register_theme_directory
 * https://codex.wordpress.org/register_theme_directory
 **/
        
/**
 * Moving uploads folder
 * Set the UPLOADS folder to media:
 **/
define( 'UPLOADS', 'wp-content/media' );

/** This path can not be absolute. It is always relative to ABSPATH, therefore does not require a leading slash. Add the define just before this: **/
/** Sets up WordPress vars and included files. **/
require_once(ABSPATH . 'wp-settings.php');
        
/**
 * Modify AutoSave Interval
 * When editing a post, WordPress uses Ajax to auto-save revisions to the post as you edit.
 * You may want to increase this setting for longer delays in between auto-saves, or decrease the setting to make sure you never lose changes. The default is 60 seconds.
 **/
define( 'AUTOSAVE_INTERVAL', 160 ); // Seconds

        
