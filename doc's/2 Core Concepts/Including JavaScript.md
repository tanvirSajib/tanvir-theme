# Including JavaScript


`wp_enqueue_script( 
	string $handle, 
	string $src           = '', 
	string[] $deps        = array(), 
	string|bool|null $ver = false, 
	array|bool $in_footer = false
);`


- $handle: A unique name/ID for the script and should be prefixed with your theme slug.
- $src: The file URL of your script. While it is technically an optional parameter, it is required to actually load a specific script
- $deps: An optional array of other script handles that your script is dependent upon.
- $ver: Sets the version number of your script and is used for cache busting. Defaults to the current WordPress version.
- $in_footer: Determines whether to load the script in the header or footer. As of WordPress 6.3, this parameter accepts an array of values:
- - strategy: Accepts either 'defer' (default) or 'async' to set the script-loading strategy.
-  - in_footer: A boolean value to determine whether to load the script in the header or footer.
-  

### Front-end JavaScript

`add_action( 'wp_enqueue_scripts', 'theme_slug_enqueue_scripts' );`


### Inline JavaScript

`wp_add_inline_script( 
	string $handle, 
	string $data, 
	string $position = 'after' 
);

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
		'console.log( "Testing" );'
	);
}`

### Editor JavaScript

`add_action( 'enqueue_block_editor_assets', 'theme_slug_enqueue_editor_scripts' );`

### Default WordPress scripts

WordPress bundles many custom and third-party scripts. You should always use these scripts if you need one of them instead of loading a custom version. This ensures that you avoid conflicts with plugins. 