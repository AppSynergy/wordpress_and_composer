<?php
/*
Plugin Name: Restrict User Editing Own Profile
Plugin URI: http://www.appsynergy.net
Description: Restricts users from editing their own profile information.
Author: Adam Marshall & Scott Cariss
Version: 0.2
Author URI: http://www.philosophydesign.com/scott-cariss.html
*/


add_action('after_setup_theme', 'profiles_disable_admin_bar');
add_action('admin_menu', 'profiles_disable_menu' );
add_action('admin_menu', 'profiles_disable_die' );


function profiles_disable_admin_bar() {
  if (!current_user_can('administrator') && !is_admin()) {
    show_admin_bar(false);
  }
}


function profiles_disable_menu() {
  remove_menu_page('profile.php');
  remove_submenu_page('users.php', 'profile.php');
}


function profiles_disable_die() {
  if (!current_user_can('administrator') && !is_admin()) {
    if(defined('IS_PROFILE_PAGE') && IS_PROFILE_PAGE === true) {
        wp_die('You are not permitted to change your own profile information. Please contact us if you think profile information should be changed.');
    }
  }
}


?>
