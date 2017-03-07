<?php
/**
 * Elite Theme Customizer.
 *
 * @package Elite
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function elite_customize_register( $wp_customize ) {
	// echo "<pre>";
	// var_dump($wp_customize);
	// echo "</pre>";
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->default = '#ffffff';

	// edit tagline label
	$wp_customize->get_control( 'blogdescription' )->label = 'Welcome Title';
	$wp_customize->get_control( 'blogdescription' )->section = 'header_image';
	$wp_customize->get_control( 'blogdescription' )->priority = 0;
	// edit check box label for front text
	
	
	// Site details section settings
	$wp_customize->get_section('title_tagline')->title = ('Site Logo , Name and Description');

	// add settings to header area
	$wp_customize->get_section('header_image')->title = ('Header Settings');
	$wp_customize->get_section('header_image')->description = ('You can Edit the Header text color and Download button settings from here.');
	
	$wp_customize->get_control('header_textcolor')->section = 'header_image';

	// Move background color to background area and rename the section
	$wp_customize->get_section('background_image')->title = ('Background Styles');
	$wp_customize->get_control('background_color')->section = 'background_image';

	// remove check box for tagline control
	

	
	// add edit feature for header text body
	
	  $wp_customize->add_setting(
	      'elite_header_text',
	      array(
	          'default'           => __( 'Custom Header text', 'elite' ),
	          'sanitize_callback' => 'sanitize_text'          
	      )
	  );
	  $wp_customize->add_control(
	        new WP_Customize_Control(
	            $wp_customize,
	            'custom_header_text',
	            array(
	                'label'          => __( 'Header Text', 'elite' ),
	                'section'        => 'header_image',
	                'settings'       => 'elite_header_text',
	                'type'           => 'textarea',
	                'priority'		=> 0 
	            )
	        )
	   );   

	  // header button text 
	   $wp_customize->add_setting(
	      'elite_header_button_text',
	      array(
	          'default'           => __( 'Custom Header Button text', 'elite' ),
	          'sanitize_callback' => 'sanitize_text'          
	      )
	  );
	  $wp_customize->add_control(
	        new WP_Customize_Control(
	            $wp_customize,
	            'custom_header_button_text',
	            array(
	                'label'          => __( 'Insert Button Text', 'elite' ),
	                'section'        => 'header_image',
	                'settings'       => 'elite_header_button_text',
	                'type'           => 'text',
	                'priority'		=> 0 
	            )
	        )
	   );   

	   // header button link 
	   $wp_customize->add_setting(
	      'elite_header_button_link',
	      array(
	          'default'           => __( 'Custom Header Button link', 'elite' ),
	          'sanitize_callback' => 'sanitize_text'          
	      )
	  );
	  $wp_customize->add_control(
	        new WP_Customize_Control(
	            $wp_customize,
	            'custom_header_button_link',
	            array(
	                'label'          => __( 'Insert Button Link', 'elite' ),
	                'section'        => 'header_image',
	                'settings'       => 'elite_header_button_link',
	                'type'           => 'text',
	                'priority'		=> 0 
	            )
	        )
	   );   



	  // Add Custom Footer Text
	  $wp_customize->add_section( 'elite_custom_footer' , array(
	    'title'      => __('Footer Settings','elite'), 
	    'priority'   => 1000    
	  ) );  
	  $wp_customize->add_setting(
	      'elite_footer_text',
	      array(
	          'default'           => __( 'Custom footer text', 'elite' ),
	          'transport'         => 'postMessage',
	          'sanitize_callback' => 'sanitize_text'          
	      )
	  );
	  $wp_customize->add_control(
	        new WP_Customize_Control(
	            $wp_customize,
	            'elite_custom_footer',
	            array(
	                'label'          => __( 'Footer Text', 'elite' ),
	                'section'        => 'elite_custom_footer',
	                'settings'       => 'elite_footer_text',
	                'type'           => 'text'
	            )
	        )
	   );   

	  // Facebook handler

	  $wp_customize->add_setting(
	      'elite_facebook_link',
	      array(
	          'default'           => __( 'http://www.facebook.com', 'elite' ),
	          'transport'         => 'postMessage',
	          'sanitize_callback' => 'sanitize_text'          
	      )
	  );
	  $wp_customize->add_control(
	        new WP_Customize_Control(
	            $wp_customize,
	            'elite_custom_facebook_footer',
	            array(
	                'label'          => __( 'Facebook link', 'elite' ),
	                'section'        => 'elite_custom_footer',
	                'settings'       => 'elite_facebook_link',
	                'type'           => 'text'
	            )
	        )
	   );   

	  // Twitter handler

	  $wp_customize->add_setting(
	      'elite_custom_twitter_footer',
	      array(
	          'default'           => __( 'http://www.twitter.com', 'elite' ),
	          'transport'         => 'postMessage',
	          'sanitize_callback' => 'sanitize_text'          
	      )
	  );
	  $wp_customize->add_control(
	        new WP_Customize_Control(
	            $wp_customize,
	            'elite_custom_twitter_footer',
	            array(
	                'label'          => __( 'Twitter link', 'elite' ),
	                'section'        => 'elite_custom_footer',
	                'settings'       => 'elite_custom_twitter_footer',
	                'type'           => 'text'
	            )
	        )
	   );   

	  // Google+ handler

	  $wp_customize->add_setting(
	      'elite_custom_google_footer',
	      array(
	          'default'           => __( 'https://plus.google.com', 'elite' ),
	          'transport'         => 'postMessage',
	          'sanitize_callback' => 'sanitize_text'          
	      )
	  );
	  $wp_customize->add_control(
	        new WP_Customize_Control(
	            $wp_customize,
	            'elite_custom_google_footer',
	            array(
	                'label'          => __( 'Google Plus link', 'elite' ),
	                'section'        => 'elite_custom_footer',
	                'settings'       => 'elite_custom_google_footer',
	                'type'           => 'text'
	            )
	        )
	   );   

	  // Add Custom CSS TextField 
	  $wp_customize->add_section( 'custom_css_field' , array(
	  	'title'			=> __('Custom CSS' , 'elite'),
	  	'priority'		=> 2000
	  	));

	  $wp_customize->add_setting('elite_custom_css', array(
	  	'sanitize_callback'		=> 'sanitize_textarea'
	  	));

	  $wp_customize->add_control(
	  	new WP_Customize_Control(
	  		$wp_customize,
	  		'custom_css', array(
	  			'label'			=> __('Add Your Custom Css Here', 'elite'), 
	  			'section'		=> 'custom_css_field',
	  			'settings'		=> 'elite_custom_css',
	  			'type'			=> 'textarea'
	  			)
	  		)
	  	);

	  // add services settings
 	$wp_customize->add_section( 'custom_services_section' , array(
	    'title'      => __('Services section Settings','elite'), 
	    'priority'   => 200    
	  ) );  
	  $wp_customize->add_setting(
	      'elite_custom_services_title',
	      array(
	          'default'           => __( 'Take a look at our services', 'elite' ),
	          'sanitize_callback' => 'sanitize_text'          
	      )
	  );
	  $wp_customize->add_control(
	        new WP_Customize_Control(
	            $wp_customize,
	            'custom_services_title',
	            array(
	                'label'          => __( 'Section Heading', 'elite' ),
	                'section'        => 'custom_services_section',
	                'settings'       => 'elite_custom_services_title',
	                'type'           => 'text'
	            )
	        )
	   );   

	    $wp_customize->add_setting(
	      'elite_custom_services_body',
	      array(
	          'default'           => __( 'Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.', 'elite' ),
	          'sanitize_callback' => 'sanitize_textarea'          
	      )
	  );
	  $wp_customize->add_control(
	        new WP_Customize_Control(
	            $wp_customize,
	            'custom_services_body',
	            array(
	                'label'          => __( 'Section body Text', 'elite' ),
	                'section'        => 'custom_services_section',
	                'settings'       => 'elite_custom_services_body',
	                'type'           => 'textarea'
	            )
	        )
	   );   

	   $wp_customize->add_setting(
	      'elite_custom_services_background_color',
	      array(
	          'default'           =>'#f8db19'
	      )
	  );
	  $wp_customize->add_control(
	        new WP_Customize_Color_Control(
	            $wp_customize,
	            'custom_services_color',
	            array(
	                'label'          => __( 'Section Background Color', 'elite' ),
	                'section'        => 'custom_services_section',
	                'settings'       => 'elite_custom_services_background_color',
	            )
	        )
	   ); 

	 /**
	  * Add Team Settings
	  */
 	$wp_customize->add_section( 'custom_team_section' , array(
	    'title'      => __('Team section Settings','elite'), 
	    'priority'   => 200    
	  ) );  
	  $wp_customize->add_setting(
	      'elite_custom_Team_title',
	      array(
	          'default'           => __( 'This is our team', 'elite' ),
	          'sanitize_callback' => 'sanitize_text'          
	      )
	  );
	  $wp_customize->add_control(
	        new WP_Customize_Control(
	            $wp_customize,
	            'custom_team_title',
	            array(
	                'label'          => __( 'Section Heading', 'elite' ),
	                'section'        => 'custom_team_section',
	                'settings'       => 'elite_custom_Team_title',
	                'type'           => 'text'
	            )
	        )
	   );   

	  $wp_customize->add_setting(
	      'elite_custom_Team_background',
	      array(
	          'default'           => get_template_directory_uri().'/images/client.jpg',
	          'sanitize_callback' => 'sanitize_text'          
	      )
	  );

	  $wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'custom_team_section',
           array(
               'label'      => __( 'Upload your background', 'elite' ),
               'section'    => 'custom_team_section',
               'settings'   => 'elite_custom_Team_background',
               'context'    => 'elite-team-background-ak' 
           )
       )
   );

	  /**
	  * Add Works Settings
	  */
 	$wp_customize->add_section( 'custom_works_section' , array(
	    'title'      => __('Works section Settings','elite'), 
	    'priority'   => 200    
	  ) );  
	  $wp_customize->add_setting(
	      'elite_custom_work_title',
	      array(
	          'default'           => __( 'Take a look at our works', 'elite' ),
	          'sanitize_callback' => 'sanitize_text'          
	      )
	  );
	  $wp_customize->add_control(
	        new WP_Customize_Control(
	            $wp_customize,
	            'custom_work_title',
	            array(
	                'label'          => __( 'Section Heading', 'elite' ),
	                'section'        => 'custom_works_section',
	                'settings'       => 'elite_custom_work_title',
	                'type'           => 'text'
	            )
	        )
	   );   

	    $wp_customize->add_setting(
	      'elite_custom_works_body',
	      array(
	          'default'           => __( 'Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.', 'elite' ),
	          'sanitize_callback' => 'sanitize_textarea'          
	      )
	  );
	  $wp_customize->add_control(
	        new WP_Customize_Control(
	            $wp_customize,
	            'custom_works_body',
	            array(
	                'label'          => __( 'Section body Text', 'elite' ),
	                'section'        => 'custom_works_section',
	                'settings'       => 'elite_custom_works_body',
	                'type'           => 'textarea'
	            )
	        )
	   );

	   // add Testimonials settings
 	$wp_customize->add_section( 'custom_testimonials_section' , array(
	    'title'      => __('Testimonials section Settings','elite'), 
	    'priority'   => 200    
	  ) );  
	  $wp_customize->add_setting(
	      'elite_custom_testimonials_title',
	      array(
	          'default'           => __( 'Our clients’ testimonials', 'elite' ),
	          'sanitize_callback' => 'sanitize_text'          
	      )
	  );
	  $wp_customize->add_control(
	        new WP_Customize_Control(
	            $wp_customize,
	            'custom_testimonials_title',
	            array(
	                'label'          => __( 'Section Heading', 'elite' ),
	                'section'        => 'custom_testimonials_section',
	                'settings'       => 'elite_custom_testimonials_title',
	                'type'           => 'text'
	            )
	        )
	   );   


	   $wp_customize->add_setting(
	      'elite_custom_testimonials_background_color',
	      array(
	          'default'           =>'#000000'
	      )
	  );
	  $wp_customize->add_control(
	        new WP_Customize_Color_Control(
	            $wp_customize,
	            'custom_testimonials_color',
	            array(
	                'label'          => __( 'Section Background Color', 'elite' ),
	                'section'        => 'custom_testimonials_section',
	                'settings'       => 'elite_custom_testimonials_background_color',
	            )
	        )
	   ); 
	
}
add_action( 'customize_register', 'elite_customize_register' );

/**
 * This function adds some styles to the WordPress Customizer
 */
function elite_customizer_styles() {
	wp_register_style( 'elite-customizer-css', get_template_directory_uri() . '/css/customizer-styles.css', NULL, NULL, 'all' );
	wp_enqueue_style( 'elite-customizer-css' );

}
add_action( 'customize_controls_print_styles', 'elite_customizer_styles', 999 );



/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function elite_customize_preview_js() {
	wp_enqueue_script( 'elite_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'elite_customize_preview_js' );
