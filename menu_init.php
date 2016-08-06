/*
Hide or show menu pages if user has custom role
Include in functions.php
-------------------------------- */

add_action( 'admin_init', 'custom_role_menu_init' );
function custom_role_menu_init() {

    global $user_ID;
    $has_custom_role = user_has_custom_role($user_ID,'my_custom_role'); // change 'my_custom_role' into your role

    if ( $has_custom_role ) {

      remove_menu_page('edit.php');
      remove_menu_page('upload.php');
      remove_menu_page('link-manager.php');
      remove_menu_page('edit-comments.php');
      remove_menu_page('edit.php?post_type=page');
      remove_menu_page('plugins.php');
      remove_menu_page('themes.php');
      remove_menu_page('users.php');
      remove_menu_page('tools.php');
      remove_menu_page('options-general.php');

    }

}


// check if user has role
// ---------------------------------------------
function user_has_custom_role( $user_ID , $custom_role ) {
     $user_has_custom_role = false;
   	 $user = new WP_User( $user_ID );
     if ( !empty( $user->roles ) && is_array( $user->roles ) ) {
        foreach ( $user->roles as $role ) {
        	if($role == $custom_role) {  $user_has_custom_role = true; }
     	}
     }
     return $user_has_custom_role;
}
