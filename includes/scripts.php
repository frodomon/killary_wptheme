<?php
function mytheme_scripts() {
    wp_enqueue_style( 'style-reset', get_template_directory_uri().'/css/reset.css' );
    wp_enqueue_style( 'style-bootstrap', get_template_directory_uri().'/css/bootstrap.css' );

    wp_enqueue_style( 'style-font-awesome', '//netdna.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.css');
    wp_enqueue_style( 'style-googlefonts', 'https://fonts.googleapis.com/css?family=Lobster' );
    wp_enqueue_script( 'script-jquery', get_template_directory_uri() . '/js/jquery-3.0.0.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'script-bxslider', get_template_directory_uri() . '/js/jquery.bxslider.js', array(), '1.0.0', true );
    wp_enqueue_script( 'script-superfish', get_template_directory_uri() . '/js/superfish.js', array(), '1.0.0', true );
    wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'mytheme_scripts' );
?>
