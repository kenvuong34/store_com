<?php
if (!defined('ABSPATH')) {
	exit;
}

/**
 * Header Template
 *
 *
 */

?><!DOCTYPE html>
<html id="top" <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset');?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link rel="shortcut icon" href="favicon.ico" title="favicon" />
    <title><?php p5theme_title(true);?></title>
    <?php wp_head();?>
</head>
<body <?php body_class();?>>
	<div id="navHeight" class="p5theme-row-p5style1 clear sticky-navigation">

	        <nav class="navbar navbar-default">
			  <div class="container">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar top-bar"></span>
                        <span class="icon-bar middle-bar"></span>
                        <span class="icon-bar bottom-bar"></span>
                    </button>

                    <div class="menu-name visible-xs">
                        Menu
                    </div>


                    <a class="navbar-brand" href="/">

<?php
$header_logo_image = get_theme_mod('header_logo_image');
if (!empty($header_logo_image)) {
	?>
    <img alt="Logo" class="img-responsive" src="<?php echo get_theme_mod('header_logo_image');?>">
    <?php
}
?>


			      </a>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav navbar-right">
			        <!-- <li><a href="#">Link</a></li> -->
			        <?php wp_nav_menu(array(
	'theme_location' => 'main_menu',
	'container' => '',
));?>
<!--			        <li class="lang">-->
                    </li>
                      <?php
if (function_exists('pll_the_languages')) {
	pll_the_languages(array(
		'hide_current' => true,
	));
}
?>
			      </ul>
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>

	</div>