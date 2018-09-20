<?php
/**
 * aadf_2018 Theme Customizer
 *
 * @package aadf_2018
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function aadf_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'aadf_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'aadf_customize_partial_blogdescription',
		) );
	}

	//Options for custom bg color
/*	$wp_customize->add_setting('theme_bg_color',  array(
		//'default-image'          => '',
		'default' => '#fff',
		'transport'     => 'postMessage',
		'type'          => 'theme_mod',
	  'sanitize_callback' => 'sanitize_hex_color',
	));
	//control the custom bg color
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'theme_bg_color', array(
				'label' => _('Header and footer bg color', 'aadf'),
				'section' => 'colors',
				'settings' => 'theme_bg_color'
			)
		)
	);
	*/
}
add_action( 'customize_register', 'aadf_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function aadf_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function aadf_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function aadf_customize_preview_js() {
	wp_enqueue_script( 'aadf-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'aadf_customize_preview_js' );
