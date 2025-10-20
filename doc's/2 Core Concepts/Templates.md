# Templates

In block themes, templates are made up of a collection of blocks. 

### What are templates?
- Theme templates represent the markup of the webpage. 
- They create the document structure and 
- print both static data (e.g., paragraph text) and dynamic data (e.g., post content) to the front end of your site.

Appearance > Editor > Templates > Single Posts
- Some of them are in placeholder states and will dynamically display content based on what page is being viewed on the front end of the site.
- Ultimately, the template produces HTML markup on the front end 
- WordPress automatically handles the final markup for you, so all you need to do is create the templates.

### How the templating system works
- Whenever you visit a page on the front end of your website, WordPress must determine which template file to load. In the example above, the Single post template (single.html) is used to display the content of single blog posts.

- But there are many other types of templates. For example, you might have a Page template (page.html) for displaying the content of your site’s pages or an Author template (author.html) for displaying post author archives.

- WordPress uses the template hierarchy to determine which template file to load. It is essentially a set of rules that defines which template to use based on the web page being viewed. If a template doesn’t exist, WordPress will continue looking down through the hierarchy until it finds one that does. 

- If no specific template is found, it will fall back to the Index template: index.html. As you learned in Theme Structure, this is the minimum required template for a block theme to function.