# Block themes will not often need to include images, except in patterns.

`<img src="<?php echo esc_url( get_parent_theme_file_uri( 'assets/img/example.webp' ) ); ?>" alt="" />`


# Including fonts

Typically, you would expect fonts to fall directly under the assets documentation. But WordPress has special methods for loading fonts via the theme.json file that integrates with the editor. 