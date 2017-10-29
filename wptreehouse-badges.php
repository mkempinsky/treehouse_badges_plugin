<?php
/*
Plugin Name: Official Treehouse Badges Plugin
Plugin URI: http://wptreehouse.com/wptreehouse-badges-plugin
Description: Provides both widget and shortcodes to help you display your Treehouse profile badges on our website
Version: 1.0
Author: Michele Kempinsky
Author URI: https://automattic.com/wordpress-plugins/
License: GPLv2 or later
*/


/*
	Assign Global Variables
*/

	$plugin_url = WP_PLUGIN_URL . '/wptreehouse-badges';

/*
Add a link to our plugin in the admin menu
under 'settings' > Treehouse Badges
*/

function wptreehouse_badges_menu(){

	/*use the add_options_page function
		add_options_page accepts the following peramiters:
			$page_title
			$menu_title
			$capability (level of user that is allowed to access plugin page)
			$menu-slug
			$function (the function we want to call, which tells us what we want to appear on options page)
	 */


	add_options_page(
		'Official Treehouse Badges Plugin',
		'Treehouse Badges',
		'manage_options',
		'wptreehouse-badges',
		'wptreehouse_badges_option_page'
		);
}


add_action( 'admin_menu', 'wptreehouse_badges_menu' );

function wptreehouse_badges_option_page(){

	if(!current_user_can( 'manage_options' )){
		wp_die('You do not have sufficient permissions to access this page.' );
	}

	global $plugin_url;
	
	require('inc/options-page-wrapper.php');
}




?>		