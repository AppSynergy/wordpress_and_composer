<?php
/*
Plugin Name: Restrict User Editing Own Profile
Plugin URI: http://www.philosophydesign.com
Description: Restricts users from editing their own profile information.
Author: Scott Cariss
Version: 0.1
Author URI: http://www.philosophydesign.com/scott-cariss.html
*/

add_action( 'admin_menu', 'stop_access_profile' );
function stop_access_profile() {
    //remove_menu_page( 'profile.php' );
    //remove_submenu_page( 'users.php', 'profile.php' );
    if(IS_PROFILE_PAGE === true) {
        wp_die( 'You are not permitted to change your own profile information. Please contact us if you think profile information should be changed.' );
    }
}
?>
