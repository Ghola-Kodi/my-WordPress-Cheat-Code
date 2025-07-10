/**
 * Cleaning up the <head> section
 * Because WordPress comes with some unnecessary baggage
 */
function clean_up_head() {
    // Remove really simple discovery link
    remove_action('wp_head', 'rsd_link');
    
    // Remove wlwmanifest link
    remove_action('wp_head', 'wlwmanifest_link');
    
    // Remove shortlink
    remove_action('wp_head', 'wp_shortlink_wp_head');
    
    // Remove REST API link
    remove_action('wp_head', 'rest_output_link_wp_head');
}
add_action('init', 'clean_up_head');
