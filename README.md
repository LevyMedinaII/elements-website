# elements-website
Celadon Elements Website Repository

The theme has the following:

  -header which contains the navigation bar
  
  -sidebar which lists the latest articles
  
  -footer 
  
  -category template which is the template used for the magazine sections such as Buhay Celadon, People, etc. to display the articles specific to that section
  
  -index template which is the template for the home page
  
  -single template which is the template for the individual articles
  
  -functions.php which is the file where you activate some built-in wordpress functions
  
  -style.css which is the file where you customize the look of the theme parts, this will overwrite the bootstrap css
  
  -bootstrap folder which contains the css and js framework used to make our lives easier

For guidelines in editting the theme, go to http://codex.wordpress.org/ 

*Using the theme*

(1) Adding a section (category)

  -In your dashboard, go to categories and select 'Add New.' Input the name of the section and slug (optional). Slug equivalents to the url of your section, i.e. 'buhay-celadon' will give you http://localhost/wordpress/categories/buhay-celadon. Next create the page for your section. Go to pages and select 'Add New.' Input the name of the page exactly as the name of the section or category. Select 'category.php' as the template so that the page will function as a section page.
  
(2) Adding an article (post)

-In your dashboard, go to posts and select 'Add New.' Input the name of the article and the content. To set the thumbnail or the featured image go to the lower right portion of the page and select 'Set featured image'. You may upload a new file or select one from your media library. You may add additonal images through the content of the post itself. The syntax is as follows:

img src="/directory/file.jpg"

You may set the image to certain sizes by adding a class and setting the size in the stylesheet for that class or you can simple add a code like this [ style="width:100px;" ] within the tag.
Select 'single.php' as the template.

(3) Adding a menu item

- In your dashboard, go to Appearance > Editor. Then, go to the header.php file where the navigation menu is located. To add a menu item, insert the following code inside the unordered list: (include <>)

   li class="nav-item"><a href="#">*Name of List Item</a></li

