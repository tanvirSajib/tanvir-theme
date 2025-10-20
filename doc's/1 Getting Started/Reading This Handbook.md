# Reading This Handbook

- You can absolutely create a theme with no coding knowledge. But you will find it much easier to familiarize yourself with a few web languages. 

### How to read code examples

- The handbook will use a consistent “namespace” or “prefix” throughout its pages, generally seen as theme_slug or theme-slug.  
- This namespace is meant to be replaced in your theme with one that is unique to it. 

### But how do you know what your namespace is? 
- The most straightforward way is to use your theme’s name. 
- If your theme is titled Fabled Sunset, you would convert it to the appropriate format for the use case. For example, it would become fabled_sunset when used in a PHP function name or fabled-sunset as a handle/slug/ID.
- The practice of “namespacing” code is decades old. Essentially, a namespace is an identifier for a group of objects created so that they do not conflict with objects in other namespaces.

- WordPress has a vast ecosystem of plugins and themes. Each needs a way to distinguish itself from the others. Without unique namespaces, it would get a bit chaotic and errors would arise. 

### Namespacing examples
```php
wp_enqueue_script( 'fabled-sunset-editor', ... );

wp_enqueue_style( 'fabled-sunset-main', ... );

esc_html_e( 'Hello, world!', 'fabled-sunset' );

function fabled_sunset_func() {
	// ...
}

class Fabled_Sunset_Class() {
	// ...
}

```