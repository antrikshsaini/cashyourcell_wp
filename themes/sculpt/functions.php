<?php
/****************************
*
* Sculpt v1.0.0 - A Bravada Child Theme
* (c) 2023 Cryout Creations
* www.cryoutcreations.eu
*
*****************************/

/**
 * Load additional theme files
 */
require_once( get_stylesheet_directory() . '/includes/admin.php' );
require_once( get_stylesheet_directory() . '/includes/options.php' );
require_once( get_stylesheet_directory() . '/includes/notices.php' );
require_once( get_stylesheet_directory() . "/includes/custom-styles.php" );

/**
 * Enqueue parent styling
 */
function sculpt_child_styling(){
	wp_enqueue_style( 'bravada-main', get_template_directory_uri() . '/style.css', array(), _CRYOUT_THEME_VERSION );  // restore correct parent stylesheet
	wp_enqueue_style( 'sculpt', get_stylesheet_directory_uri() . '/style.css', array( 'bravada-main' ), _CRYOUT_THEME_VERSION  ); 		// enqueue child stylesheet
}
add_action( 'wp_enqueue_scripts', 'sculpt_child_styling' );

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function sculpt_setup() {

	// Add support for flexible headers
	add_theme_support( 'custom-header', array(
		'default-image'	=> get_stylesheet_directory_uri() . '/resources/images/headers/sculpt.jpg',
	));

	// Default custom headers packaged with the theme.
	register_default_headers( array(
		'sculpt' => array(
			'url' => '%2$s/resources/images/headers/sculpt.jpg',
			'thumbnail_url' => '%2$s/resources/images/headers/sculpt.jpg',
			'description' => __( 'Sculpt', 'sculpt' )
		),
	) );

	// Filters
	add_filter( 'bravada_custom_styles', 'sculpt_custom_styles' );
	add_filter( 'cryout_theme_description', 'sculpt_custom_description' );
	add_filter( 'cryout_admin_version', 'sculpt_admin_version_output' );

	// Initialize first time notice
	new Cryout_Notice( array(
		'slug' => 'sculpt',
		'strings' => array(
			// translators: %1 is theme name, %2 is next string
			1 => esc_html__( 'It appears that you might have already configured %1$s. For best results it is recommended to %2$s upon child theme activation.', 'sculpt' ),
			2 => esc_html__( 'reset the theme settings', 'sculpt' ),
			3 => esc_html__( 'If you have already reset the options it is safe to dismiss this message.', 'sculpt' ),
			4 => esc_html__( 'Do not display again', 'sculpt' ),
		),
	) );

} // sculpt_setup()
add_action( 'after_setup_theme', 'sculpt_setup' );


/* FIN */
