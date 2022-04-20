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
		
		

		$this->end_controls_section();

	}

	protected function render() {
		$settings = $this->get_settings_for_display();
	
		
	
	?>

<div class="site-section bg-image overlay counter" style="background-image: url('images/hero_1_no-text.jpg');" id="about-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-6 mb-4">
            <figure class="block-img-video-1" data-aos="fade">
              <a href="https://vimeo.com/45830194" class="popup-vimeo">
                <span class="icon"><span class="icon-play"></span></span>
                <img src="images/hero_1_no-text.jpg" alt="Image" class="img-fluid">
              </a>
            </figure>
          </div>
          <div class="col-lg-5 ml-auto align-self-lg-center">
            <h2 class="text-black mb-4 text-uppercase section-title">Our Mission</h2>
            <p class="text-black">Accusantium dignissimos voluptas rem consequatur blanditiis error ratione illo sit quasi ut, praesentium magnam, pariatur quae, necessitatibus</p>
            <p class="text-black">Dolor, eligendi voluptate ducimus itaque esse autem perspiciatis sint! Recusandae dolor aliquid inventore sit,</p>
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