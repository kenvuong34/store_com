<?php
/*
 * Define your variables
 * */
define('P5CHILD_PATH', trailingslashit(dirname(__FILE__)));
define('P5PARENT_PATH', P5CHILD_PATH . '../p5parent/');
define('FORCE_COMPUTE_CSS', FALSE);
define('FORCE_COMPUTE_CSS_THEME', FALSE);
define('FORCE_COMPUTE_CSS_BOOTSTRAP', FALSE);
define('FORCE_COMPUTE_CSS_ROW_STYLES', FALSE);
define('FORCE_COMPUTE_CSS_ANIMATE', FALSE);

/*
Require the Page Builder Styling Class
Todo : explain why this class is important
 */
require_once dirname(__FILE__) . '/../p5parent/inc/p5library.php';
require_once dirname(__FILE__) . '/../p5parent/inc/page-builder-styling.class.php';
require_once dirname(__FILE__) . '/inc/theme-init.php';

/*
Require the child theme settings
 */
require_once dirname(__FILE__) . '/inc/theme-settings.php';

/*
Activate featured images
Most of P5 theme needs the featured images actives
 */
add_theme_support('post-thumbnails');

/*
Load the assets
 */
require_once dirname(__FILE__) . '/inc/theme-assets.php';

/*
Using the Page Builder Styling Class, we can add here as many "styles" as we need.
Each style is used for a "section" of the pages. Here is a brief explanation of how it works. Check the documentation for more informations

1. When creating a new row using Page Builder (by SiteOrigin) in WP, the editor can choose a style in the settings of the row
2. The style is then added in the "class" of the row (so that we can style it using SCSS)
3. The theme will automatically load the SCSS styles files for us
4. Therefore, a page is made of several rows (that we call sections). Each row can have its style. Styles can be used with as many rows as we want

Usage :
$pbs->add_style($style_id, $style_label);
 */
$pbs = PageBuilderStyling::get_instance();
$pbs->add_style('style1', 'P5 style 1');
$pbs->add_style('style2', 'P5 style 2');
$pbs->add_style('style3', 'P5 style 3');
$pbs->add_style('style4', 'P5 style 4');
$pbs->add_style('style5', 'P5 style 5');
