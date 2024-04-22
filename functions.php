
  function add_custom_css() {
    wp_enqueue_style( 'my-custom-css', get_template_directory_uri() . 'style.css', array(), '1.0.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'add_custom_css' );

