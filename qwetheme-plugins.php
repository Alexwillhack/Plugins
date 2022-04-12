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

	require_once( __DIR__ . '/widgets/qwetheme-widget.php' );

	$widgets_manager->register( new \Qwetheme_Plugins() );

}
add_action( 'elementor/widgets/register', 'register_qwetheme_widget' );