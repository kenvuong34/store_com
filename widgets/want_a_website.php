<?php

/**
** http://stackoverflow.com/questions/13863087/wordpress-custom-widget-image-upload
** http://www.codigonexo.com/blog/cajon-de-sastre/use-the-file-uploader-in-wordpress-plugins-for-the-admin-panel/
**
**
**
**/

require_once(P5PARENT_PATH . 'widgets/widget.helper.php');

class WantAWebsite extends P5_Widget {

	/**
	 * Sets up the widgets name etc
	 */
	public function __construct() {
		// widget actual processes
		parent::__construct(
			'want_a_website', // Base ID
			__('Want a Website', 'p5theme'), // Name
			array( 'description' => __( 'Call to action Want a Website like this', 'p5theme' ), ) // Args
		);
	}

	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {

		//wp_enqueue_script( 'reveal-by-button', get_template_directory_uri() . '/widgets/js/image.js',  array('jquery'), null, true);
		//wp_enqueue_style( 'reveal-by-button', get_template_directory_uri() . '/widgets/css/image.css');

		$text = ($instance['text']) ? $instance['text'] : 'You want a website like this?';
		$button = ($instance['button']) ? $instance['button'] : "<i class=\"icon_comment_alt\"></i> Let's talk";


		echo '<div class="want_a_website"><div class="container_fluid">
	<div class="row">
		<div class="col-sm-7"><h2>'.$text.'</h2></div>
		<div class="col-sm-5"><a data-target="#contact" data-toggle="modal" class="btn btn-primary btn-lg btn-xlg" href="#contact">'.$button.'</a></div>
	</div>
</div>';

	}

	/**
	 * Outputs the options form on admin
	 *
	 * @param array $instance The widget options
	 */
	public function form( $instance ) {
		echo $this->add_text_field('text', 'Text of CTA', $instance, '', 'Leave empty for default');
		echo $this->add_text_field('button', 'Button text of CTA', $instance, '', 'Leave empty for default');
	}

}

add_action( 'widgets_init', function(){
     register_widget( 'WantAWebsite' );
});
