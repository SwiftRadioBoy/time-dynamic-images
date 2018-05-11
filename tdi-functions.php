<?php
/*
Plugin Name: Time Dynamic Images
Plugin URI: http://fun927.com/public-release/time-dynamic-images
Description: Time Dynamic Images allows you to select what images show at a certain time.
Author: SwiftRadioBoy
Version: 0.1b
Text Domain: time-dynamic-images
Author URI: http://fun927.com/
*/

// reg&load widget
function wpb_load_widget() {
    register_widget( 'wpb_widget' );
}
add_action( 'widgets_init', 'wpb_load_widget' );
 
// widget creation
class wpb_widget extends WP_Widget {
 
function __construct() {
parent::__construct(
 
// base ID
'wpb_widget', 
 
// UI name
__('Time Dynamic Images', 'wpb_widget_domain'), 
 
// Widget description
array( 'description' => __( 'Time Dynamic Images allows images to change based on system clock.', 'wpb_widget_domain' ), ) 
);
}
 
// widget front-end creation
 
public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );
 
// before and after widget arguments are defined by themes
echo $args['before_widget'];
if ( ! empty( $title ) )
echo $args['before_title'] . $title . $args['after_title'];
 
// Require from API.
require_once("main_api.php")

// admin form slot
?>
<?php
//place title information here
?>
<?php 
}
     
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
return $instance;
}
}
// widget end. honeybun hf, swiftradioboy github
//charger is gay