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
		return [ 'qweTheme' ];
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
			'image',
			[
				'label' => esc_html__( 'Choose Image', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);



		$this->add_control(
			'list',
			[
				'label' => esc_html__( 'List', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => [
					[
						'name' => 'text',
						'label' => esc_html__( 'Text', 'plugin-name' ),
						'type' => \Elementor\Controls_Manager::TEXT,
						'placeholder' => esc_html__( 'List Item', 'plugin-name' ),
						'default' => esc_html__( 'List Item', 'plugin-name' ),
					],
					[
						'name' => 'link',
						'label' => esc_html__( 'Link', 'plugin-name' ),
						'type' => \Elementor\Controls_Manager::URL,
						'placeholder' => esc_html__( 'https://your-link.com', 'plugin-name' ),
					],
				],
				'default' => [
					[
						'text' => esc_html__( 'List Item #1', 'plugin-name' ),
						'link' => 'https://elementor.com/',
					],
					[
						'text' => esc_html__( 'List Item #2', 'plugin-name' ),
						'link' => 'https://elementor.com/',
					],
				],
				'title_field' => '{{{ text }}}',
			]
		);






















		$this->end_controls_section();

	}

	
	protected function render() {

		$settings = $this->get_settings_for_display();
		
        echo $settings['url'];

	}

}