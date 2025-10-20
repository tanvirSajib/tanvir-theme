<?php

function tanvir_theme_assets() {

		// get_stylesheet_uri() gets the URL for the theme's root style.css file.
		wp_enqueue_style(
			'tanvir-theme-main-style', // A unique name for this stylesheet
			get_stylesheet_uri(),
			array(), // An array of dependencies, if any
			'1.0' // The version number of the stylesheet
		);

		// get_theme_file_uri() is perfect for any asset in your theme folder.
		// Let's assume you have a file at: /assets/css/custom.css
		wp_enqueue_style(
			'tanvir-theme-custom-style',
			get_theme_file_uri( 'assets/css/custom.css' ),
			array( 'tanvir-theme-main-style' ), // This style depends on the main style
			'1.0'
		);
}
	// This action hook tells WordPress to run our function at the right time.
	add_action( 'wp_enqueue_scripts', 'tanvir_theme_assets' );




	/**
	 * Load custom WooCommerce helper functions.
 *
	 * get_theme_file_path() generates the correct, absolute server path
	 * to the file inside our theme, no matter where WordPress is installed.
	 */
	$woocommerce_helpers_path = get_theme_file_path( '/inc/woocommerce-helpers.php' );

	// Always check if the file exists before trying to include it.
if ( file_exists( $woocommerce_helpers_path ) ) {
	require_once $woocommerce_helpers_path;
}

	/**
	 * Load the template functions file from the PARENT theme.
	 *
	 * get_parent_theme_file_path() looks inside the parent theme's folder
	 * ('twentytwentyfour') to find the file we need.
	 */
	$parent_template_functions_path = get_parent_theme_file_path( '/inc/template-functions.php' );

if ( file_exists( $parent_template_functions_path ) ) {
	require_once $parent_template_functions_path;
}
