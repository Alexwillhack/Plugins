<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


class Elementor_Slider_Widget extends \Elementor\Widget_Base {

	
	public function get_name() {
		return 'Slider';
	}

	
	public function get_title() {
		return esc_html__( 'Slider', 'qwetheme-widget' );
	}

	
	public function get_icon() {
		return 'eicon-code';
	}

	

	public function get_categories() {
		return [ 'general' ];
	}

	

	protected function register_controls() {

		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__( 'Content', 'qwetheme-widget' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'url',
			[
				'label' => esc_html__( 'URL to embed', 'qwetheme-widget' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'input_type' => 'url',
				'placeholder' => esc_html__( 'https://your-link.com', 'qwetheme-widget' ),
			]
		);

		$this->end_controls_section();

	}

	
	protected function render() {

		$settings = $this->get_settings_for_display();
		
        echo $settings['url'];

	}

}