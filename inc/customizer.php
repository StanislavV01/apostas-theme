<?php
/**
 * apostas-theme Theme Customizer
 *
 * @package apostas-theme
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function apostas_theme_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'apostas_theme_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'apostas_theme_customize_partial_blogdescription',
			)
		);
	}
	$wp_customize->add_setting( 'second_tagline', array(
		'default' => '',
		'capability' => 'edit_theme_options'
		) );
	   
		$wp_customize->add_control( 'second_tagline', array(
		'label' => 'Copyright',
		'section' => 'title_tagline',
		'type' => 'text'
		) );
		$wp_customize->add_setting( 'footer_text-1', array(
			'default' => '',
			'capability' => 'edit_theme_options'
			) );
		   
		$wp_customize->add_control(  'footer_text-1', array(
			'label' => 'footer text 1',
			'section' => 'title_tagline',
			'type' => 'text'
			) );
		$wp_customize->add_setting( 'footer_text-2', array(
				'default' => '',
				'capability' => 'edit_theme_options'
				) );
			   
		$wp_customize->add_control( 'footer_text-2', array(
				'label' => 'footer text 2',
				'section' => 'title_tagline',
				'type' => 'text'
				) );
}
add_action( 'customize_register', 'apostas_theme_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function apostas_theme_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function apostas_theme_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function apostas_theme_customize_preview_js() {
	wp_enqueue_script( 'apostas-theme-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'apostas_theme_customize_preview_js' );