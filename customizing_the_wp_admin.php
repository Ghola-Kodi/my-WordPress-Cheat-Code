/**
 * Making the WordPress admin have a pleasant look
 */
function customize_admin_dashboard() {
    // Remove default dashboard widgets
    remove_action('welcome_panel', 'wp_welcome_panel');
    remove_meta_box('dashboard_primary', 'dashboard', 'side');
    
    // Add our own custom dashboard widget
    wp_add_dashboard_widget(
        'custom_dashboard_widget',
        __('Site Overview', 'my-theme'),
        'render_custom_dashboard_widget'
    );
}

function render_custom_dashboard_widget() {
    // Display whatever helpful info you want here
    echo '<p>' . __('Welcome to your site dashboard! Here are some quick stats:', 'my-theme') . '</p>';
    // Add your custom content here
}
add_action('wp_dashboard_setup', 'customize_admin_dashboard');
