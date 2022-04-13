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
				'label' => esc_html__( 'Slider Images', 'qwetheme-widget' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		



		$this->add_control(
			'list',
			[
				'label' => esc_html__( 'List', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => [
					
					[
						'name' => 'image',
						'label' => esc_html__( 'Choose Image', 'qwetheme-widget' ),
				        'type' => \Elementor\Controls_Manager::MEDIA,
				        'url' => '',
				    ],
					
					
					
				],
				'default' => [
					
				    [
						'image' => '',
				    ],
			

		   	        
				],
				'title_field' => __('Slider Image','qwetheme-widget' ),
			]
		);




		$this->end_controls_section();

	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		
        if( $settings['list']){
             echo '<div class="owl-carousel slide-one-item">';
			
			 foreach ($settings['list'] as $slide){
				echo '<a href="#"><img src="'. $slide['image']['url'] .'" alt="'.esc_html__('Image','qwetheme-widget') .'" class="img-fluid"></a>';
			}
	 echo '</div>';
        }
	}
	
}