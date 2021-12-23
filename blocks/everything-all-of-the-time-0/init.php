<?php

/**
 * Register everything-all-of-the-time-0 block
 */
add_action('init', function () {
    if( file_exists(dirname(__FILE__, 3). "/build/block-everything-all-of-the-time-0.asset.php") ) {
        register_block_type_from_metadata(__DIR__);
    }
});
