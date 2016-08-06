
add_action( 'admin_init', 'debug_menu_items' );
function debug_menu_items() {
    echo '<pre>';
    print_r( $GLOBALS[ 'menu' ], TRUE);
    echo '</pre>';
}
