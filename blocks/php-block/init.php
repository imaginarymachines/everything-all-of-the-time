<?php
/**
 * Register PHP Block block
 */
add_action('init', 'everything_all_of_the_time_init_php_block' );
function everything_all_of_the_time_init_php_block () {
    $handle = 'php-block';
    wp_register_script(
        $handle,
        plugins_url("index.js", __FILE__),
        [
            'wp-element',
            'wp-blocks',
            'wp-components',
            'wp-block-editor',
            'wp-server-side-render'
        ]
    );
    register_block_type( 'everything-all-of-the-time/php-block', [
        'editor_script' => $handle,
        'render_callback' => 'everything_all_of_the_time_render_php_block',
        'attributes' => [
            'message' => [
                'type' => 'string'
            ]
        ]
    ]);
}

/**
 * Render PHP Block block
 */
function everything_all_of_the_time_render_php_block($attrs){
    $message= isset($atts['message']) && ! empty($atts['message']) ? $atts['message'] : 'Hi Roy';

    ob_start();
    ?>
        <p>
            <?php echo esc_html( $message ); ?>
        </p>
    <?php
    return ob_get_clean();
}
