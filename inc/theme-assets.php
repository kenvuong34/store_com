<?php

/*
This function loads the required scripts and styles for the child theme
It's a good place to add the loading of Google Fonts or other external libraries that we need for the front-end

 */

/**
First register the required assets for the child theme
 **/
P5Library::loadAsset('jquery');
P5Library::loadAsset('isotope');
P5Library::loadAsset('wow');
P5Library::loadAsset('imageloaded');
P5Library::loadAsset('font-awesome');
P5Library::loadAsset('font-essential-light');
P5Library::loadAsset('elegant-icon');
P5Library::loadAsset('modernizr');
P5Library::loadAsset('bootstrap');
P5Library::loadAsset('FlowType');
P5Library::loadAsset('animate.css');
P5Library::loadAsset('effect.watch-for-appearance');
P5Library::loadAsset('flexslider');
P5Library::loadAsset('JqueryMatchHeight');
P5Library::loadAsset('smoothscroll');
P5Library::loadAsset('stellar');
P5Library::loadAsset('JqueryEasing');
P5Library::loadAsset('matchMedia');
P5Library::loadAsset('setting_up');
P5Library::loadAsset('fitvids');
P5Library::loadAsset('froogaloop');
P5Library::loadAsset('lazayload');
P5Library::loadAsset('jquery-mobile');
P5Library::loadAsset('jquery-sticky');

/**
First register the required widgets for the child theme
 **/
P5Library::loadWidget('full-image-and-content-2.0');
P5Library::loadWidget('image');
P5Library::loadWidget('empty');
P5Library::loadWidget('images-and-static-content-3.0');
P5Library::loadWidget('custom-post-listing');
P5Library::loadWidget('video-embedding');
P5Library::loadWidget('kdd_middle_navigationbar');

/* Load P5 shortcode */
P5Library::loadP5Shortcodes();

/**
Using the wp_enqueue_scripts action, we can load the parent style and child style
(and enqueue custom styles and scripts as required)
 **/
function p5child_enqueue_scripts_and_styles() {
	wp_enqueue_style('source-sans-pro', 'http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,700');

	P5Library::loadParentStlye();
	P5Library::loadChildStyle();

	wp_enqueue_script('p5child', get_stylesheet_directory_uri() . '/assets/p5child.js', array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'p5child_enqueue_scripts_and_styles');