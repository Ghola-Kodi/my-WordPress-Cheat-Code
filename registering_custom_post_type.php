/**
 * Creating a custom post type for our portfolio items
 */
function create_portfolio_post_type() {
    $labels = array(
        'name'               => __('Portfolio Items', 'my-theme'),
        'singular_name'      => __('Portfolio Item', 'my-theme'),
        'menu_name'          => __('Portfolio', 'my-theme'),
        'add_new_item'       => __('Add New Portfolio Item', 'my-theme'),
        // ... more labels as needed
    );
    
    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'has_archive'        => true,
        'rewrite'            => array('slug' => 'portfolio'),
        'menu_icon'           => 'dashicons-portfolio',
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt'),
        'show_in_rest'        => true, // Gutenberg support - keeping up with the times
    );
    
    register_post_type('portfolio', $args);
}
add_action('init', 'create_portfolio_post_type');
