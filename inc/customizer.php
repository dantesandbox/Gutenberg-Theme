<?php
function theme_global_options( $wp_customize ) {
// Add Customizer Content Here (i.e. Panels, Sections, Settings & Controls)


  $wp_customize->add_section( 'theme_footer_section',
     array(
        'title' => __( 'Footer Settings' ),
        'description' => esc_html__( 'Change Footer options here' ),
        'panel' => '',
        'priority' => 160,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'active_callback' => '',
        'description_hidden' => 'false',
     )
  );

  $wp_customize->add_section( 'theme_404_page',
     array(
        'title' => __( 'Error Page Settings' ),
        'description' => esc_html__( 'Change Error Page Options.' ),
        'panel' => '',
        'priority' => 180,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'active_callback' => '',
        'description_hidden' => 'false',
     )
  );

  $wp_customize->add_setting( 'theme_footer_text',
     array(
        'default' => '',
        'transport' => 'refresh',
     )
  );

  $wp_customize->add_setting( 'theme_footer_phone',
     array(
        'default' => '',
        'transport' => 'refresh',
     )
  );

  $wp_customize->add_setting( 'theme_footer_svg',
     array(
        'default' => '',
        'transport' => 'refresh',
     )
  );

  $wp_customize->add_setting( 'theme_footer_copyright',
     array(
        'default' => '',
        'transport' => 'refresh',
     )
  );


  $wp_customize->add_control( 'theme_footer_text',
     array(
        'label' => __( 'Footer E-Mail' ),
        'description' => esc_html__( 'Enter An E-Mail' ),
        'section' => 'theme_footer_section',
        'priority' => 10,
        'type' => 'text',
        'capability' => 'edit_theme_options',
        'input_attrs' => array(
           'class' => 'my-custom-class',
           'style' => 'border: 1px solid rebeccapurple',
           'placeholder' => __( 'Enter name...' ),
        ),
     )
  );

  $wp_customize->add_control( 'theme_footer_phone',
     array(
        'label' => __( 'Footer Phone Number' ),
        'description' => esc_html__( 'Enter A Phone Number' ),
        'section' => 'theme_footer_section',
        'priority' => 20,
        'type' => 'text',
        'capability' => 'edit_theme_options',
        'input_attrs' => array(
           'class' => 'my-custom-class',
           'style' => 'border: 1px solid rebeccapurple',
           'placeholder' => __( 'Enter name...' ),
        ),
     )
  );

  $wp_customize->add_control( 'theme_footer_svg',
     array(
        'label' => __( 'Footer SVG LOGO Code' ),
        'description' => esc_html__( 'Paste Optimized SVG Logo here' ),
        'section' => 'theme_footer_section',
        'priority' => 40,
        'type' => 'textarea',
        'capability' => 'edit_theme_options',
        'input_attrs' => array(
           'class' => 'my-custom-class',
           'style' => 'border: 1px solid rebeccapurple',
           'placeholder' => __( 'Enter name...' ),
        ),
     )
  );


  $wp_customize->add_control( 'theme_footer_copyright',
     array(
        'label' => __( 'Enter Copyright Title' ),
        'description' => esc_html__( 'Enter Copyright Title' ),
        'section' => 'theme_footer_section',
        'priority' => 60,
        'type' => 'text',
        'capability' => 'edit_theme_options',
        'input_attrs' => array(
           'class' => 'my-custom-class',
           'style' => 'border: 1px solid rebeccapurple',
           'placeholder' => __( 'Enter Copyright Name...' ),
        ),
     )
  );

  // Footer Section

  $wp_customize->add_setting('footer-logo', array(
      'default' => '',
      'transport' => 'refresh'
  ));

  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer-logo-control', array(
      'label' => 'Edit Footer Logo',
      'settings'  => 'footer-logo',
      'section'   => 'theme_footer_section',
      'priority' => 100,
  ) ));

  // Header Logo


  $wp_customize->add_setting( 'logo_header',
   array(
      'default' => '',
      'transport' => 'refresh',
   )
);

$wp_customize->add_control( 'logo_header',
   array(
      'label' => __( 'Header Logo Type'),
      'description' => esc_html__( '' ),
      'section' => 'title_tagline',
      'priority' => 0,
      'type' => 'radio',
      'capability' => 'edit_theme_options',
      'choices' => array(
         'header-logo' => __( 'Header Logo' ),
         'svg-logo' => __('SVG Logo')
      )
   )
);


$wp_customize->add_setting( 'theme_header_svg_logo',
   array(
      'default' => '',
      'transport' => 'refresh',
   )
);

$wp_customize->add_control( 'theme_header_svg_logo',
   array(
      'label' => __( 'Header SVG Logo' ),
      'description' => esc_html__( 'Paste SVG Code' ),
      'section' => 'title_tagline',
      'priority' => 5,
      'type' => 'textarea',
      'capability' => 'edit_theme_options',
      'input_attrs' => array(
         'class' => 'my-custom-class',
         'style' => 'border: 1px solid rebeccapurple',
         'placeholder' => __( 'Paste SVG Logo Code...' ),
      ),
   )
);

// 404 Image

$wp_customize->add_setting( 'theme_404_image',
   array(
      'default' => '',
      'transport' => 'refresh',
   )
);

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'error_404_control', array(
    'label' => 'Error Page Image',
    'settings'  => 'theme_404_image',
    'section'   => 'theme_404_page',
    'priority' => 10,
) ));

// 404 Text

$wp_customize->add_setting( 'theme_404_title',
   array(
      'default' => '',
      'transport' => 'refresh',
   )
);

$wp_customize->add_control( 'theme_404_title',
   array(
      'label' => __( 'Error Page Title' ),
      'description' => '',
      'section' => 'theme_404_page',
      'priority' => 40,
      'type' => 'text',
      'capability' => 'edit_theme_options',
      'input_attrs' => array(
         'class' => 'my-custom-class',
         'style' => 'border: 1px solid rebeccapurple',
         'placeholder' => __( 'Enter name...' ),
      ),
   )
);


// 404 Link Text

$wp_customize->add_setting( 'theme_404_link_text',
   array(
      'default' => '',
      'transport' => 'refresh',
   )
);

$wp_customize->add_control( 'theme_404_link_text',
   array(
      'label' => __( 'Error Page Link Text' ),
      'section' => 'theme_404_page',
      'priority' => 60,
      'type' => 'text',
      'capability' => 'edit_theme_options',
      'input_attrs' => array(
         'class' => 'my-custom-class',
         'style' => 'border: 1px solid rebeccapurple',
         'placeholder' => __( 'Error Link Text' ),
      ),
   )
);


  // Deactivate Customizer Sections

  $wp_customize->remove_control( 'custom_css' );
  $wp_customize->remove_panel('widgets');
	$wp_customize->remove_section('colors');
	$wp_customize->remove_section('background_image');
	$wp_customize->remove_section('static_front_page');
  $wp_customize->remove_section('cover_template_options');
  $wp_customize->remove_section('header_image');
  $wp_customize->remove_section('options');

};

add_action( 'customize_register', 'theme_global_options', 99 );

?>
