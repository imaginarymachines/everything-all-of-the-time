<?php
//Register assets for React Page
add_action('init', function () {
    $handle = 'everything-all-of-the-time-react';
    if( file_exists(dirname(__FILE__, 3). "/build/admin-page-$handle.asset.php")){
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

//Enqueue assets for React Page on admin page only
add_action('admin_enqueue_scripts', function ($hook) {
    if ('toplevel_page_everything-all-of-the-time-react' != $hook) {
        return;
    }
    wp_enqueue_script('everything-all-of-the-time-react');
});

//Register React Page menu page
add_action('admin_menu', function () {
    add_menu_page(
        __('React Page', 'everything-all-of-the-time'),
        __('React Page', 'everything-all-of-the-time'),
        'manage_options',
        'everything-all-of-the-time-react',
        function () {
            //React root
            echo '<div id="everything-all-of-the-time-react"></div>';
        }
    );
});
