# Custom Functionality (functions.php)

### What is functions.php?

- The functions.php essentially acts like a WordPress plugin, letting you add custom PHP functions, classes, interfaces, and more. It opens up the entirety of the PHP programming language to your theme.
- WordPress automatically loads the functions.php file (if it exists) as soon as it loads the theme on all page views on both the admin and front-end of the website. So it provides you with a lot of power to build unique features around WordPress.
- The only caveat to that rule is when a child theme is active. In that case, WordPress loads the child theme’s functions.php just before loading the parent theme’s functions.php.

### Common uses for functions.php

- Adding actions or filters to hooks, hooks are a part of the Plugin API
- Despite being in the Plugin API, hooks are also extremely useful in the context of themes. Like plugins, you should always run your code on a hook so that it performs its functionality at the appropriate point in the load process.

### Theme setup function
- One common use case for many themes is adding a setup function, which is generally used to register theme-supported features with WordPress

### Loading scripts and styles
- If you are familiar with HTML, you will likely have come across adding JavaScript via the &lt;script> tag or stylesheets via the &lt;link rel=”stylesheet”/> or &lt;style>  tags.

- WordPress provides helper functions and specific action hooks for loading scripts and styles. This ensures that they are injected at the appropriate place in the document output. WordPress creates the appropriate HTML markup for you.
- It is not uncommon when building block themes to have no need of including additional scripts/styles. Some themes rely entirely on Global Settings and Styles for the front-end design.

### Including other PHP files
WordPress will automatically load your theme’s functions.php for you, but you are not limited to only adding custom PHP code in that file. You can load other files with PHP interfaces, classes, traits, and functions from elsewhere in your theme.

`include get_parent_theme_file_path( 'inc/helpers.php' );`