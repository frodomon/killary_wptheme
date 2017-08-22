<?php
function mytheme_scripts() {
    wp_enqueue_style( 'style-font-awesome', '//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css');
    wp_enqueue_style( 'fonts-lobster', 'https://fonts.googleapis.com/css?family=Lobster' );
    wp_enqueue_style( 'fonts-arimo', 'https://fonts.googleapis.com/css?family=Arimo' );
    wp_enqueue_script( 'script-jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), '3.1.1', true );
    wp_enqueue_script( 'script-fixed', get_template_directory_uri() . '/js/fixed.js', array(), '1.0.0', true );
    wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'mytheme_scripts' );

add_filter ('__after_header', 'qtrans_lang_chooser');
function qtrans_lang_chooser() {
	if (function_exists('qtrans_generateLanguageSelectCode')) {
		ob_start();
		echo qtrans_generateLanguageSelectCode('image');
		$output = ob_get_contents();
		ob_end_clean();
		echo $output;
	}
}
?>