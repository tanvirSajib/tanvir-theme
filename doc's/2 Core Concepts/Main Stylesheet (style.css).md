# Main Stylesheet (style.css)

**style.css** file. Its most important function is to **“register”** the theme with WordPress through configuration data at the top of the file

### “register”
 - In WordPress, "registering" a theme means providing WordPress with the necessary metadata for it to recognize, display, and  manage your theme within the admin dashboard.
- This is done through a special comment block at the very top of your theme's style.css file. WordPress automatically scans the folders inside /wp-content/themes. When it finds a style.css file with this specific header, it reads the information  and adds the theme to the list of available themes under "Appearance > Themes".
- Without this header, WordPress would not see your theme, and you wouldn't be able to activate it.

### File Header
- The style.css file header is used to configure data about the theme. WordPress uses this information to determine how some features work and displays some of this data under the Appearance > Themes screen for users.

- When determining which themes are available to activate, WordPress searches through each folder under /wp-content/themes, looking for a style.css file. If one is found, it pulls the first 8kb of data from the file and determines if there is a file header with standard fields defined.

### Custom CSS

- The style.css file is not merely a configuration file. You can also use it to write custom CSS code to alter the design of your theme, assuming the file is properly loaded.

- With block themes, most or all of the design is ideally handled through the theme.json file, 
