<?php
/**
 * Pet Animal Store Theme Customizer
 *
 * @package Pet Animal Store
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function pet_animal_store_customize_register( $wp_customize ) {

	//add home page setting pannel
	$wp_customize->add_panel( 'pet_animal_store_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Theme Settings', 'pet-animal-store' ),
	    'description' => __( 'Description of what this panel does.', 'pet-animal-store' )
	) );

	//Layouts
	$wp_customize->add_section( 'pet_animal_store_left_right', array(
    	'title'      => __( 'Theme Layout Settings', 'pet-animal-store' ),
		'priority'   => 30,
		'panel' => 'pet_animal_store_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('pet_animal_store_theme_options',array(
	        'default' => __( 'Right Sidebar', 'pet-animal-store' ),
	        'sanitize_callback' => 'pet_animal_store_sanitize_choices'
	    )
    );

	$wp_customize->add_control('pet_animal_store_theme_options',
	    array(
	        'type' => 'radio',
	        'label' => __( 'Do you want this section', 'pet-animal-store' ),
	        'section' => 'pet_animal_store_left_right',
	        'choices' => array(
	            'Left Sidebar' => __('Left Sidebar','pet-animal-store'),
	            'Right Sidebar' => __('Right Sidebar','pet-animal-store'),
	            'One Column' => __('One Column','pet-animal-store'),
	            'Three Columns' => __('Three Columns','pet-animal-store'),
	            'Four Columns' => __('Four Columns','pet-animal-store'),
	            'Grid Layout' => __('Grid Layout','pet-animal-store')
	        ),
	    )
    );

    //Social Icons(topbar)
	$wp_customize->add_section('pet_animal_store_topbar',array(
		'title'	=> __('Top Header','pet-animal-store'),
		'description'	=> __('Add Header Content here','pet-animal-store'),
		'priority'	=> null,
		'panel' => 'pet_animal_store_panel_id',
	));

    $wp_customize->add_setting('pet_animal_store_mail',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('pet_animal_store_mail',array(
		'label'	=> __('Email','pet-animal-store'),
		'section'	=> 'pet_animal_store_topbar',
		'setting'	=> 'pet_animal_store_mail',
		'type'	=> 'text'
	));

    $wp_customize->add_setting('pet_animal_store_call',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('pet_animal_store_call',array(
		'label'	=> __('Phone','pet-animal-store'),
		'section'	=> 'pet_animal_store_topbar',
		'setting'	=> 'pet_animal_store_call',
		'type'	=> 'text'
	));

	//Social Icons(topbar)
	$wp_customize->add_section('pet_animal_store_topbar_header',array(
		'title'	=> __('Social Icon Section','pet-animal-store'),
		'description'	=> __('Add Header Content here','pet-animal-store'),
		'priority'	=> null,
		'panel' => 'pet_animal_store_panel_id',
	));

	$wp_customize->add_setting('pet_animal_store_youtube_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	
	$wp_customize->add_control('pet_animal_store_youtube_url',array(
		'label'	=> __('Add Youtube link','pet-animal-store'),
		'section'	=> 'pet_animal_store_topbar_header',
		'setting'	=> 'pet_animal_store_youtube_url',
		'type'		=> 'url'
	));

	$wp_customize->add_setting('pet_animal_store_facebook_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	
	$wp_customize->add_control('pet_animal_store_facebook_url',array(
		'label'	=> __('Add Facebook link','pet-animal-store'),
		'section'	=> 'pet_animal_store_topbar_header',
		'setting'	=> 'pet_animal_store_facebook_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('pet_animal_store_twitter_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	
	$wp_customize->add_control('pet_animal_store_twitter_url',array(
		'label'	=> __('Add Twitter link','pet-animal-store'),
		'section'	=> 'pet_animal_store_topbar_header',
		'setting'	=> 'pet_animal_store_twitter_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('pet_animal_store_rss_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	
	$wp_customize->add_control('pet_animal_store_rss_url',array(
		'label'	=> __('Add RSS link','pet-animal-store'),
		'section'	=> 'pet_animal_store_topbar_header',
		'setting'	=> 'pet_animal_store_rss_url',
		'type'	=> 'url'
	));

	//home page slider
	$wp_customize->add_section( 'pet_animal_store_slidersettings' , array(
    	'title'      => __( 'Slider Settings', 'pet-animal-store' ),
		'priority'   => 30,
		'panel' => 'pet_animal_store_panel_id'
	) );

	for ( $count = 1; $count <= 4; $count++ ) {

		// Add color scheme setting and control.
		$wp_customize->add_setting( 'pet_animal_store_slidersettings-page-' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'absint'
		) );

		$wp_customize->add_control( 'pet_animal_store_slidersettings-page-' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'pet-animal-store' ),
			'section'  => 'pet_animal_store_slidersettings',
			'type'     => 'dropdown-pages'
		) );

	}	

	//Our Product
	$wp_customize->add_section('pet_animal_store_product',array(
		'title'	=> __('Featured Products','pet-animal-store'),
		'description'=> __('This section will appear below the slider.','pet-animal-store'),
		'panel' => 'pet_animal_store_panel_id',
	));

	$wp_customize->add_setting('pet_animal_store_sec1_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('pet_animal_store_sec1_title',array(
		'label'	=> __('Section Title','pet-animal-store'),
		'section'=> 'pet_animal_store_product',
		'setting'=> 'pet_animal_store_sec1_title',
		'type'=> 'text'
	));	
	
	for ( $count = 0; $count <= 0; $count++ ) {

		$wp_customize->add_setting( 'pet_animal_store_product_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'absint'
		));
		$wp_customize->add_control( 'pet_animal_store_product_page' . $count, array(
			'label'    => __( 'Select Product Page', 'pet-animal-store' ),
			'section'  => 'pet_animal_store_product',
			'type'     => 'dropdown-pages'
		));
	}

	//Footer
	$wp_customize->add_section('pet_animal_store_footer_section',array(
		'title'	=> __('Copyright','pet-animal-store'),
		'description'	=> '',
		'priority'	=> null,
		'panel' => 'pet_animal_store_panel_id',
	));
	
	$wp_customize->add_setting('pet_animal_store_footer_copy',array(
		'default'	=> '',
		'sanitize_callback'	=> 'wp_kses_post',
	));
	
	$wp_customize->add_control('pet_animal_store_footer_copy',array(
		'label'	=> __('Copyright Text','pet-animal-store'),
		'section'	=> 'pet_animal_store_footer_section',
		'type'		=> 'textarea'
	));
	/** home page setions end here**/	
}
add_action( 'customize_register', 'pet_animal_store_customize_register' );


/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class pet_animal_store_customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );
		
		// Register custom section types.
		$manager->register_section_type( 'pet_animal_store_customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new pet_animal_store_customize_Section_Pro(
				$manager,
				'example_1',
				array(
					'priority'	=> 9,
					'title'    => esc_html__( 'Pet Animal Store', 'pet-animal-store' ),
					'pro_text' => esc_html__( 'Go Pro',         'pet-animal-store' ),
					'pro_url'  => 'https://www.themescaliber.com/themes/premium-animal-pet-wordpress-theme/'
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'pet-animal-store-customize-controls', trailingslashit( get_template_directory_uri() ) . '/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'pet-animal-store-customize-controls', trailingslashit( get_template_directory_uri() ) . '/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
pet_animal_store_customize::get_instance();