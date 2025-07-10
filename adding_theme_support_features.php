/**
 * If you want to furthure cusomize your theme use the following pieces of code
 */
function my_theme_setup() {
    // Let WordPress handle the document title 
    add_theme_support('title-tag');
    
    // Enable featured images 
    add_theme_support('post-thumbnails');
    
    // Add custom image sizes - one for the portfolio, one for the blog
    add_image_size('portfolio-large', 1200, 800, true);
    add_image_size('blog-medium', 600, 400, true);
    
    // Register navigation menus 
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'my-theme'),
        'footer'  => __('Footer Menu', 'my-theme')
    ));
}
add_action('after_setup_theme', 'my_theme_setup');
