# Including Assets

- Many block themes do not need to load any assets. For design aspects, specifically, much of this can be handled through the Global Settings and Styles system. But there are times when you might need to include a CSS stylesheet, custom JavaScript file, or even other types of media.

- If you are familiar with HTML, you might be accustomed to including CSS stylesheets via the &lt;link rel=”stylesheet”/> or &lt;style> tags. The same might be true for including JavaScript via the &lt;script> tag. But you should never manually hard code these HTML elements in your theme. 

- WordPress has specific hooks for determining when to load scripts/styles and functions for generating the markup. This ensures that WordPress, any active plugins, and your theme all play nicely together.

### URL and directory path functions
some of the utility functions that WordPress provides for getting URLs and directory paths within a theme.

Three of the primary URL helper functions are:

- get_stylesheet_uri() : http://testplugins.test/wp-content/themes/tanvir-theme/style.css
- get_theme_file_uri( $file )
- get_parent_theme_file_uri( $file )

For directory paths
- get_theme_file_path( $file )
- get_parent_theme_file_path( $file )

### Inline styles
There are times when you might need to add some inline CSS to the &lt;head> area on the front end. WordPress has the wp_add_inline_style() function for this specific scenario.