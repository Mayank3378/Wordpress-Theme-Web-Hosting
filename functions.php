<?php
/**
 * Theme Functions
 *
 * @package Phox
 * @author WHMCSdes
 * @link https://whmcsdes.com
 */



if( ! defined('WDES_THEME_DIR' ) ){
    define( 'WDES_THEME_DIR', get_template_directory() );
}

if( ! defined('WDES_THEME_URI' ) ){
    define( 'WDES_THEME_URI', get_template_directory_uri() );
}

if(! defined('WDES_THEME_NAME') ){
    define( 'WDES_THEME_NAME', 'phox' );
}

if(! defined('WDES_THEME_VERSION') ){
    define( 'WDES_THEME_VERSION', '2.3.6' );
}

if(! defined('WDES_ASSETS_DIR') ){
    define( 'WDES_ASSETS_DIR', WDES_THEME_DIR .'/assets' );
}

if(! defined('	WDES_ASSETS_URI') ){
    define( 'WDES_ASSETS_URI', WDES_THEME_URI .'/assets' );
}

if(! defined('WDES_INC_DIR') ){
    define( 'WDES_INC_DIR', WDES_THEME_DIR .'/includes' );
}

if(! defined('WDES_INC_URI') ){
    define( 'WDES_INC_URI', WDES_THEME_URI .'/includes' );
}

if(! defined('WDES_CORE_ASSETS_URI') ){
    define( 'WDES_CORE_ASSETS_URI', WDES_INC_URI .'/core/assets' );
}

if(! defined('WDES_ADMIN_DIR') ){
    define( 'WDES_ADMIN_DIR', WDES_INC_DIR .'/core/admin/panel' );
}

if(! defined('WDES_ADMIN_URI') ){
    define( 'WDES_ADMIN_URI', WDES_INC_URI .'/core/admin/panel' );
}

if(! defined('WDES_ADMIN_ASSETS_URI') ){
    define( 'WDES_ADMIN_ASSETS_URI', WDES_ADMIN_URI .'/assets' );
}

if(! defined('WDES_ADMIN_ASSETS_DIR') ){
    define( 'WDES_ADMIN_ASSETS_DIR', WDES_ADMIN_DIR .'/assets' );
}

if (! defined('WDES_OPTIONS_DIR')) {
    // trailingslashit is function in wordpress it use to add slash
    define('WDES_OPTIONS_DIR', WDES_ADMIN_DIR . "/wdes_options" );
}

if (! defined('WDES_OPTIONS_URI')) {
    define('WDES_OPTIONS_URI', WDES_ADMIN_URI . "/wdes_options/");
}

if (! defined('WDES_LANG_DIR')) {
    define('WDES_LANG_DIR', WDES_THEME_DIR . "/languages");
}


/* Load Theme Text Domain */
load_theme_textdomain('phox', WDES_LANG_DIR);


/* Autoloader and Require Files*/
require_once WDES_THEME_DIR. '/vendor/autoload.php';

/* Loader */
require_once WDES_INC_DIR. '/Load_files.php';

