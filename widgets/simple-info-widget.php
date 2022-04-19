<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


class Elementor_Simple_Info_Widget extends \Elementor\Widget_Base {

	
	public function get_name() {
		return 'simple_info';
	}

	
	public function get_title() {
		return esc_html__( 'Simple Info', 'qwetheme-widget' );
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
				'label' => esc_html__( 'Simple Info', 'qwetheme-widget' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);


		$this->add_control(
			'info_title',
			[
				'label' => esc_html__( 'Info Title', 'qwetheme-widget' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'Enter your title', 'qwetheme-widget' ),
			]
		);
		
		$this->add_control(
			'info_description',
			[
				'label' => esc_html__( 'Description', 'qwetheme-widget' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => '',
				'placeholder' => esc_html__( 'Type your description here', 'qwetheme-widget' ),
			]
		);

	
		$this->add_control(
			'info_color',
			[
				'label' => esc_html__( 'Box background', 'qwetheme-widget' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .intro-engage' => 'background-color: {{VALUE}}',
				],
			]
		);


		$this->end_controls_section();

	}

	protected function render() {
		$settings = $this->get_settings_for_display();
	
		$allowed_html =array(
		'a' => array(
			'href' => array(),
			'title' => array()
		),
		'br' => array(),
		'em' => array(),
		'strong' => array(),
		'p' => array(),
	);
	
	?>

<div class="intro-engage" style="background-color: <?php echo esc_attr($settings['info_color']); ?>">
			<?php if($settings['info_title']){ ?><h2><?php echo esc_attr($settings['info_title']); ?></h2><?php } ?>
        <?php if($settings['info_description']){ ?><p><?php echo wp_kses($settings['info_description'],$allowed_html); ?></p><?php } ?>
	</div>


<?php 
	
	
	}
}