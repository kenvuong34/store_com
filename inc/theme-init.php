<?php

/*
Activate featured images
Most of P5 theme needs the featured images actives
 */
add_theme_support('post-thumbnails');

/*
Enable the support for menus
 */
add_theme_support('menus');

/*
Register two menu locations (main_menu, footer_menu)
 */
register_nav_menus(
	array(
		'main_menu' => 'Main menu',
		'footer_menu' => 'Footer menu',
	)
);

// Removes ul class from wp_nav_menu
function remove_ul($menu) {
	return preg_replace(array('#^<ul[^>]*>#', '#</ul>$#'), '', $menu);
}
add_filter('wp_nav_menu', 'remove_ul');