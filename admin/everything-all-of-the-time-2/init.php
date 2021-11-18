<?php

//Register assets for PHP Page
add_action('init', function () {
    $handle = 'everything-all-of-the-time-2';
    if( file_exists(dirname(__FILE__, 3). "/build/admin-page-$handle.asset.php")){
        $assets = include dirname(__FILE__, 3). "/build/admin-page-$handle.asset.php";
        $dependencies = $assets['dependencies'];
        $dependencies[] = 'jquery';
        wp_register_script(
            $handle,
            plugins_url("/build/admin-page-$handle.js", dirname(__FILE__, 2)),
            $dependencies,
            $assets['version']
        );
    }

});

//Enqueue assets for PHP Page on admin page only
add_action('admin_enqueue_scripts', function ($hook) {
    if ('toplevel_page_everything-all-of-the-time-2' != $hook) {
        return;
    }
    wp_enqueue_script('everything-all-of-the-time-2');
});

//Register PHP Page menu page
add_action('admin_menu', function () {
    add_menu_page(
        __('PHP Page', 'everything-all-of-the-time'),
        __('PHP Page', 'everything-all-of-the-time'),
        'manage_options',
        'everything-all-of-the-time-2',
        function () {
            include_once dirname(__FILE__) . '/template.php';
        }
    );
});
