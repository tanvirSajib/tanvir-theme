<?php

add_action( 'wp_enqueue_scripts', 'theme_slug_enqueue_scripts' );


function theme_slug_enqueue_scripts() {
	wp_enqueue_script(
		'theme-slug-navigation',
		get_parent_theme_file_uri( 'assets/js/navigation.js' ),
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);

	wp_add_inline_script(
		'theme-slug-navigation',
		'console.log( "Testing inline js" );',
		false
	);
}
