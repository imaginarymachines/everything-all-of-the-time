<?php
//Register assets for adminPage 1
add_action('init', function () {
    $handle = 'everything-all-of-the-time-1';
    if( file_exists(dirname(__FILE__, 3). "/build/admin-page-$handle.asset.php" ) ){
        $assets = include dirname(__FILE__, 3). "/build/admin-page-$handle.asset.php";
        $dependencies = $assets['dependencies'];
        wp_register_script(
            $handle,
            plugins_url("/build/admin-page-$handle.js", dirname(__FILE__, 2)),
            $dependencies,
            $assets['version']
        );
    }
});

//Enqueue assets for adminPage 1 on admin page only
add_action('admin_enqueue_scripts', function ($hook) {
    if ('toplevel_page_everything-all-of-the-time-1' != $hook) {
        return;
    }
    wp_enqueue_script('everything-all-of-the-time-1');
});

//Register adminPage 1 menu page
add_action('admin_menu', function () {
    add_menu_page(
        __('adminPage 1', 'everything-all-of-the-time'),
        __('adminPage 1', 'everything-all-of-the-time'),
        'manage_options',
        'everything-all-of-the-time-1',
        function () {
            //React root
            echo '<div id="everything-all-of-the-time-1"></div>';
        }
    );
});
