<?php
/*
Plugin Name: TRIAD Sidebar Ads Widget
Plugin URI: http://www.triadadv.com/
Description: Add custom sidebar ads as widgets
Version: 1.0
Author: TRIAD
Author URI: http://www.triadadv.com/
License: GPL2
*/


// Load back-end scripts
function triad_sidebar_ads_admin_scripts() {
	wp_enqueue_script( 'triad_sidebar_ads_admin_js', plugins_url( 'triad-sidebar-ad-widget/inc/scripts.js' ), array( 'jquery' ) );
}
add_action( 'admin_enqueue_scripts', 'triad_sidebar_ads_admin_scripts' );


// Create new class for widget
class Triad_Sidebar_Ads extends WP_Widget {
    
    // Run class constructor
    function triad_sidebar_ads() {
        $widget_ops = array(
            'classname' => 'triad-sidebar-ad',
            'description' => 'Add a custom sidebar ad'
        );
        parent::__construct( false, 'Sidebar Ads', $widget_ops );
    }
    
    // Front-end function
    function widget( $args, $instance ) {
        extract( $args );
        
        // Set variables to instance content
        $title = $instance['title'];
        $copy = $instance['copy'];
        $url = $instance['url'];
        $url_copy = $instance['url_copy'];
        $new_window = $instance['new_window'];
        $special_class = $instance['special_class'];
        
        // Require the front-end display template
        require( 'inc/template-display.php' );
    }
    
    // Update action function
    function update( $new_instance, $old_instance ) {
        // Instantiate a new variable containing the old content
        $instance = $old_instance;
        
        // Update old content with submitted content
        $instance['title'] = strip_tags( $new_instance['title'] );
        $instance['copy'] = strip_tags( $new_instance['copy'] );
        $instance['url'] = strip_tags( $new_instance['url'] );
        $instance['url_copy'] = strip_tags( $new_instance['url_copy'] );
        $instance['new_window'] = strip_tags( $new_instance['new_window'] );
        $instance['special_class'] = strip_tags( $new_instance['special_class'] );
        
        // Return new content
        return $instance;        
    }
    
    // Back-end form function
    function form( $instance ) {
        // Create variables for widget fields
        $title = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';
        $copy = isset( $instance['copy'] ) ? esc_attr( $instance['copy'] ) : '';
        $url = isset( $instance['url'] ) ? esc_attr( $instance['url'] ) : '';
        $url_copy = isset( $instance['url_copy'] ) ? esc_attr( $instance['url_copy'] ) : '';
        $new_window = isset( $instance['new_window'] ) ? esc_attr( $instance['new_window'] ) : '';
        $special_class = isset( $instance['special_class'] ) ? esc_attr( $instance['special_class'] ) : '';
		
        // Require the back-end widget form
		require( 'inc/template-widget-form.php' );
    }
    
}

function triad_register_widgets() {
    register_widget( 'Triad_Sidebar_Ads' );
}

add_action( 'widgets_init', 'triad_register_widgets' );