<?php

/**
 * Plugin Name: View Script Block
 */

function create_block_view_script_block_block_init()
{
    // Front end script
    wp_register_script(
        'view-script-ads',
        plugins_url('view-script-ads.js', __FILE__),
    );

    // Editor script
    wp_register_script(
        'editor-script-ads',
        plugins_url('editor.js', __FILE__),
        array('wp-block-editor', 'wp-blocks', 'wp-element'),
    );

    register_block_type(
        'create-block/view-script-block',
        array(
            'editor_script' => 'editor-script-ads',
            'view_script'   => 'view-script-ads',
        ),
    );
}
add_action('init', 'create_block_view_script_block_block_init');
