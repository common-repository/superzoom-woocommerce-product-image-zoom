<?php 


/*
  Plugin Name: superZoom- WooCommerce Product Image Zoom
  Plugin URI:  http://wordpress.org/extend/plugins/superZoom
  Description: superZoom Woocommerce Zoom Product image plugin allows users to zoom product image on hover.
  Author: Somy Kamble, India
  Author URI:http://modernmonks.in/
  License: GPLv2 or later
  Version: 1.0
  
 */	
/**
 * The plugin methods will not be changed until a new release of wordpress.
 *
 * @api
 *
 * @author somy kamble, India
 * 
 * @license GPL
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 */

function swpizsk_img_zoom(){
	
	wp_enqueue_script('init.min_js', plugin_dir_url( __FILE__ ).'/mdb_js/init.js',array('jquery'));
	wp_enqueue_script('device.min_js', plugin_dir_url( __FILE__ ).'/mdb_js/device.min.js',array('jquery'));	
	wp_enqueue_script('elevate.min_js', plugin_dir_url( __FILE__ ).'/mdb_js/jquery.elevateZoom-3.0.8.min.js',array('jquery'));
	
	
	
}


add_action('wp_enqueue_scripts','swpizsk_img_zoom');




