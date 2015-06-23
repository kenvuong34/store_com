<?php
if ( ! defined( 'ABSPATH' ) ) exit;

/*
The following function overrides the features that the theme must activate
*/
function p5child_config( $return, $test ) {
	switch( $test ) {
		case 'font-awesome':		$return = '4.2.0'; break;
		case 'elegant-icon' :       $return = true; break;
		case 'modernizr' :       	$return = true; break;
		case 'p5flexslidercss': 	$return = true; break;
		case 'FlowType' :           $return = true; break;
	}
	return $return;
}
add_filter('p5theme_use', 'p5child_config', 10, 2); 