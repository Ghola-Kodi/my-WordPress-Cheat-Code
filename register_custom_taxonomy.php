/**
 * Adding project types to our portfolio
 * ie when you have different projects to showcase
 */
function create_portfolio_taxonomy() {
    $labels = array(
        'name'              => __('Project Types', 'my-theme'),
        'singular_name'     => __('Project Type', 'my-theme'),
        'search_items'      => __('Search Project Types', 'my-theme'),
        'all_items'         => __('All Project Types', 'my-theme'),
        // ... more labels as needed
    );
    
    $args = array(
        'labels'            => $labels,
        'hierarchical'      => true, // Like categories, not tags
        'show_admin_column' => true, // Show up in the admin table
        'rewrite'           => array('slug' => 'project-type'),
        'show_in_rest'      => true, // Needed for Gutenberg
    );
    
    register_taxonomy('project_type', 'portfolio', $args);
}
add_action('init', 'create_portfolio_taxonomy');
