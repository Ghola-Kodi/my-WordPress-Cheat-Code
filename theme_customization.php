/**
 * Proper way to enqueue scripts and styles in your theme
 * Like a good neighbor, these files are there - but only when needed!
 */
function my_theme_scripts() {
    // Main stylesheet - the foundation of our look
    wp_enqueue_style('main-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'));
    
    // Our custom JavaScript file - loaded in footer for better performance
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true);
    
    // Only load this on contact page - because we're considerate like that
    if (is_page('contact')) {
        wp_enqueue_script('contact-js', get_template_directory_uri() . '/js/contact.js', array(), '1.0.0', true);
    }
}
add_action('wp_enqueue_scripts', 'my_theme_scripts');
