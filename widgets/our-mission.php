<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


class Elementor_Our_Mission_Widget extends \Elementor\Widget_Base {

	
	public function get_name() {
		return 'our_mission';
	}

	
	public function get_title() {
		return esc_html__( 'Our Mission', 'qwetheme-widget' );
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
				'label' => esc_html__( 'Title and Description', 'qwetheme-widget' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);


		$this->add_control(
			'mission_title',
			[
				'label' => esc_html__( 'Mission Title', 'qwetheme-widget' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'Enter your title', 'qwetheme-widget' ),
			]
		);
		
		$this->add_control(
			'mission_description',
			[
				'label' => esc_html__( 'Description', 'qwetheme-widget' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => '',
				'placeholder' => esc_html__( 'Type your description here', 'qwetheme-widget' ),
			]
		);


		$this->add_control(
			'mission_bg',
			[
				'label' => esc_html__( 'Background', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
				'url' =>'',
				],
			]
		);




		$this->add_control(
			'mission_color',
			[
				'label' => esc_html__( 'Box Mask Color', 'qwetheme-widget' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bg-image.overlay:after' => 'background: {{VALUE}}',
				],
			]
		);





		$this->end_controls_section();

		$this->start_controls_section(
			'content_video_section',
			[
				'label' => esc_html__( 'Video', 'qwetheme-widget' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'mission_video_preview',
			[
				'label' => esc_html__( 'Video Preview', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
				'url' =>'',
				],
			]
		);

		$this->add_control(
			'mission_video_link',
			[
				'label' => esc_html__( 'Video Link', 'qwetheme-widget' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'Enter your title', 'qwetheme-widget' ),
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
			'p' => array(
				'class'=>array()
            ),
		);
	
	?>

<div class="site-section bg-image overlay counter" style="background-image: url('<?php echo esc_url($settings['mission_bg']['url']); ?>');" id="about-section">
      <div class="container">
        <div class="row mb-5">
        
		<?php if($settings['mission_video_preview']['url'] and $settings['mission_video_link']) { ?>
		
		<div class="col-lg-6 mb-4">
            <figure class="block-img-video-1" data-aos="fade">
              <a href="<?php echo esc_url($settings['mission_video_link']); ?>" class="popup-vimeo">
                <span class="icon"><span class="icon-play"></span></span>
                <img src="<?php echo esc_url($settings['mission_video_preview']['url']); ?>" alt="Image" class="img-fluid">
              </a>
            </figure>
          </div>
          <?php } ?>
		 
		 
		  <div class="col-lg-5 ml-auto align-self-lg-center">
            <h2 class="text-black mb-4 text-uppercase section-title"><?php echo esc_attr($settings['mission_title']); ?></h2>
            <?php echo wp_kses($settings['mission_description'],$allowed_html); ?>
		
		</div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-4 col-lg-0 col-lg-3">
            <div class="block-counter-1">
              <span class="number"><span data-number="15">0</span></span>
              <span class="caption text-black">Number of Orphanage</span>
            </div>
          </div>
          <div class="col-md-6 mb-4 col-lg-0 col-lg-3">
            <div class="block-counter-1">
              <span class="number"><span data-number="392">0</span></span>
              <span class="caption text-black">Number of Donations</span>
            </div>
          </div>
          <div class="col-md-6 mb-4 col-lg-0 col-lg-3">
            <div class="block-counter-1">
              <span class="number"><span data-number="3293">0</span></span>
              <span class="caption text-black">Number of Volunteers</span>
            </div>
          </div>
          <div class="col-md-6 mb-4 col-lg-0 col-lg-3">
            <div class="block-counter-1">
              <span class="number"><span data-number="1212">0</span></span>
              <span class="caption text-black">Number of Orphans</span>
            </div>
          </div>
        </div>
      </div>
    </div>


<?php 
	
		}
	}
