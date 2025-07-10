/**
 * Get portfolio items with some special requirements
 */
function get_featured_portfolio_items($count = 3) {
    $args = array(
        'post_type'      => 'portfolio',
        'posts_per_page' => $count,
        'meta_key'       => 'featured_item',
        'meta_value'     => '1',
        'orderby'        => 'menu_order',
        'order'          => 'ASC',
    );
    
    $query = new WP_Query($args);
    
    // If we got results, return them. Otherwise, return false.
    return $query->have_posts() ? $query : false;
}
