<?php

add_action( 'wp_enqueue_scripts', 'theme_slug_enqueue_style' );

function theme_slug_enqueue_style() {
	wp_enqueue_style(
		'theme-slug-style',
		get_stylesheet_uri(),
	);

	wp_enqueue_style(
		'theme-slug-primary',
		get_parent_theme_file_uri( 'assets/css/primary.css' ),
	);

	wp_add_inline_style(
		'theme-slug-primary',
		'body{background:#ff00ee}'
	);
}
