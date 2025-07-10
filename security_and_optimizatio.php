/**
 * This code will hel you keep your WordPress secure
 */
function enhance_wordpress_security() {
    // Remove WordPress version number 
    remove_action('wp_head', 'wp_generator');
    
    // Disable XML-RPC - unless you really need it
    add_filter('xmlrpc_enabled', '__return_false');
    
    // Hide login errors - no need to tell attackers if they got the username right
    add_filter('login_errors', function() {
        return __('Something went wrong. Please try again.', 'my-theme');
    });
}
add_action('init', 'enhance_wordpress_security');
