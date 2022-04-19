<?php
/**
 * Plugin Name: qweTheme Plugins
 * Description: Custom Widget for qweTheme
 * Plugin URI:  https://github.com/Alexwillhack
 * Version:     1.0.0
 * Author:      Alexwillhack
 * Author URI:  https://github.com/Alexwillhack
 * Text Domain: qwetheme-plugins
 *
 * Elementor tested up to: 3.5.0
 * Elementor Pro tested up to: 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Register oEmbed Widget.
 *
 * Include widget file and register widget class.
 *
 * @since 1.0.0
 * @param \Elementor\Widgets_Manager $widgets_manager Elementor widgets manager.
 * @return void
 */
function register_qwetheme_widget( $widgets_manager ) {

	require_once( __DIR__ . '/widgets/slider-widget.php' );
	require_once( __DIR__ . '/widgets/simple-info-widget.php' );
	$widgets_manager->register( new \Elementor_Slider_Widget() );
	$widgets_manager->register( new \Elementor_Simple_Info_Widget() );
	
}
add_action( 'elementor/widgets/register', 'register_qwetheme_widget' );

function add_elementor_widget_categories( $elements_manager ) {

	$elements_manager->add_category(
		'qweTheme',
		[
			'title' => esc_html__( 'qweTheme', 'qwetheme-plugins' ),
			'icon' => 'fa fa-plug',
		]
	);	
}
add_action( 'elementor/elements/categories_registered', 'add_elementor_widget_categories' );