<?php
                

/**
* Plugin Name: Everything All Of The Time
* Plugin URI: https://pluginmachine.com
* Description: Example of Plugin Machine generated plugin with many features on.
* Version: 0.0.1
* Requires at least: 5.7
* Requires PHP:      7.1.0
* Author:            Josh Pollock
* Author URI:        https://JoshPress.net
* License:           GPL v2 or later
* License URI:       https://www.gnu.org/licenses/gpl-2.0.html
* Text Domain:       everything-all-of-the-time
* Domain Path:       /languages
*/

/**
* Include the autoloader
*/
add_action('plugins_loaded', function () {
    if (file_exists(__DIR__ . '/vendor/autoload.php')) {
        include __DIR__ . '/vendor/autoload.php';
    }
});

include_once dirname( __FILE__ ). '/inc/functions.php';
include_once dirname( __FILE__ ). '/inc/hooks.php';
// Include first-block
include_once dirname( __FILE__ ) . '/blocks/first-block/init.php';

// Include php-block
include_once dirname( __FILE__ ) . '/blocks/php-block/init.php';

include_once dirname( __FILE__ ) . '/admin/everything-all-of-the-time-react/init.php';

include_once dirname( __FILE__ ) . '/admin/everything-all-of-the-time-2/init.php';
