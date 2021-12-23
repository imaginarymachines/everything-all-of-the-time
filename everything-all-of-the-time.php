<?php
                

/**
* Plugin Name: Everything All Of The Time
* Plugin URI: 
* Description: 
* Version: 0.0.1
* Requires at least: 5.7
* Requires PHP:      7.1.0
* Author:            
* Author URI:        
* License:           GPL v2 or later
* License URI:       https://www.gnu.org/licenses/gpl-2.0.html
* Text Domain:       everything-all-of-the-time
* Domain Path:       /languages
*/

// Include everything-all-of-the-time-0
include_once dirname( __FILE__ ) . '/blocks/everything-all-of-the-time-0/init.php';

// Include everything-all-of-the-time-1
include_once dirname( __FILE__ ) . '/blocks/everything-all-of-the-time-1/init.php';

/**
* Include the autoloader
*/
add_action( 'plugins_loaded', function () {
    if ( file_exists(__DIR__ . '/vendor/autoload.php' ) ) {
        include __DIR__ . '/vendor/autoload.php';
    }
}, 1 );

include_once dirname( __FILE__ ). '/inc/functions.php';
include_once dirname( __FILE__ ). '/inc/hooks.php';
include_once dirname( __FILE__ ) . '/admin/everything-all-of-the-time-0/init.php';

include_once dirname( __FILE__ ) . '/admin/everything-all-of-the-time-1/init.php';

include_once dirname( __FILE__ ) . '/admin/everything-all-of-the-time-2/init.php';
