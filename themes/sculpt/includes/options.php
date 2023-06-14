<?php

/**
 * Defaults
 */
function sculpt_defaults( $defaults = array() ) {

	$sculpt_defaults = array(

		"theme_sitelayout"			=> '2cSr',
		"theme_sitewidth"  			=> 1240,
		"theme_magazinelayout"		=> 2,

		"theme_menustyle"			=> 1,

		"theme_headerfullscreen"	=> 2, // homepage only
		"theme_headerheight"		=> 800,
		"theme_titleaccent"			=> 1,
		"theme_lpsliderimage"		=> esc_url( get_stylesheet_directory_uri() ) . '/resources/images/slider/sculpt.jpg',

		"theme_sitebackground" 		=> "#e6e8e6",
		"theme_sitetext" 			=> "#2d3142",
		"theme_titletext"			=> "#332142",
		"theme_headingstext"		=> "#2d3142",
		"theme_contentbackground"	=> "#FFFFFF",
		"theme_accent1" 			=> "#332142",
		"theme_accent2" 			=> "#f18f01",

		"theme_menubackground"		=> "#FFFFFF",
		"theme_menutext" 			=> "#444444",
		"theme_submenutext" 		=> "#FFFFFF",
		"theme_submenubackground"	=> "#40436b",
		"theme_activeitemtext"		=> "#343957",

		"theme_overlaybackground1"			=> "#f18f01",
		"theme_overlaybackgroundposition1"	=> 0,
		"theme_overlaybackground2"			=> "#332142",
		"theme_overlaybackgroundposition2"	=> 100,
		"theme_overlayangle"  				=> 180,
		"theme_overlayopacity"  			=> 50,

		"theme_footerbackground"	=> "#000000",
		"theme_footertext"			=> "#969696",
		"theme_lppostsbg"			=> "#F3F7F6",

		"theme_fgeneral" 			=> 'Noto Sans/gfont',
		// "theme_fgeneralgoogle"	=> '',
		"theme_fgeneralsize" 		=> '16',
		"theme_fgeneralweight" 		=> '400',

		"theme_fsitetitle"			=> 'inherit',
		//"theme_fsitetitlegoogle"	=> '',
		"theme_fsitetitlesize" 		=> 1.2,
		"theme_fsitetitleweight"	=> '700',
		"theme_fsitetitlevariant" 	=> 'uppercase',

		"theme_fmenu" 			=> 'inherit',
		//"theme_fmenugoogle"	=> '',
		"theme_fmenusize" 		=> 2.5,
		"theme_fmenuweight"		=> '700',
		"theme_fmenuvariant" 	=> 'uppercase',

		"theme_ftitles" 		=> 'inherit',
		//"theme_ftitlesgoogle"	=> '',
		"theme_ftitlessize" 	=> 1.7,
		"theme_ftitlesweight"	=> '900',

		"theme_meta" 				=> 'Muli/gfont',
		//"theme_metatitlesgoogle"	=> '',
		"theme_metatitlessize" 		=> 1,
		"theme_metatitlesweight"		=> '300',
		"theme_metatitlesvariant"	=> 'none',

		"theme_singletitle" 		=> 'Oswald/gfont',
		//"theme_singletitlegoogle"	=> '',
		"theme_singletitlesize" 	=> 6.0,
		"theme_singletitleweight"	=> '900',
		"theme_singletitlevariant"	=> 'uppercase',
		"theme_singletitlelineheight" => 1.15,

		"theme_singlemeta" 			=> 'Muli/gfont',
		//"theme_singlemetagoogle"	=> '',
		"theme_singlemetasize" 		=> 0.9,
		"theme_singlemetaweight"	=> '300',
		"theme_singlemetavariant"	=> '',

		"theme_fheadings" 			=> 'inherit',
		//"theme_fheadingsgoogle"	=> '',
		"theme_fheadingssize" 		=> 100,
		"theme_fheadingsweight"		=> '900',
		"theme_fheadingsvariant"	=> 'uppercase',
		"theme_fheadingslineheight" => 1.2,
		"theme_fheadingsspace" => 0.5,

		"theme_fwtitle" 			=> 'inherit',
		//"theme_fwtitlegoogle"		=> '',
		"theme_fwtitlesize" 		=> 1.1,
		"theme_fwtitleweight"		=> '700',
		"theme_fwtitlevariant"		=> 'uppercase',
		"theme_fwtitlelineheight" 	=> 2,

		"theme_fwcontent" 			=> 'inherit',
		//"theme_fwcontentgoogle"	=> '',
		"theme_fwcontentsize" 		=> 1,
		"theme_fwcontentweight"		=> '400',
		"theme_fwcontentlineheight" => 1.8,

		"theme_excerptlength"	=> 25,
		"theme_excerptcont"		=> 'Read more'

	); // sculpt_defaults array

	$result = array_merge( $defaults, $sculpt_defaults );

	return $result;

} // sculpt_defaults()
add_filter( 'bravada_option_defaults_array', 'sculpt_defaults' );

// needed? for the .org preview
function sculpt_filter_defaults(){
	add_filter( 'bravada_option_defaults_array', 'sculpt_defaults' );
} // sculpt_filter_defaults()
add_action( 'customize_register', 'sculpt_filter_defaults' );


/**
 * Handle theme labels in customize panels
 */
function sculpt_about_theme_name( $initial ) {
	return __( 'About Sculpt', 'sculpt' );
} // sculpt_about_theme_name()
add_filter( 'cryout_about_theme_name', 'sculpt_about_theme_name' );

function sculpt_about_theme_plus_desc( $initial ) {
	$theme = wp_get_theme();
	// translators: %1$s is the name of the child theme, %2$s is the name of the parent theme
	return '<h3>' . sprintf( esc_html__( '%1$s is a child theme of %2$s', 'sculpt' ), esc_html( $theme->get( 'Name' ) ), ucwords( esc_html( $theme->get( 'Template' ) ) ) ) . '</h3>' . $initial;
} // sculpt_about_theme_plus_desc()
add_filter( 'cryout_about_theme_plus_desc', 'sculpt_about_theme_plus_desc' );

function sculpt_about_theme_slug_swap( $initial ){
	return str_replace( array( 'bravada', 'Bravada' ), array( 'sculpt', 'Sculpt' ), $initial );
} // sculpt_about_theme_slug_swap()
add_filter( 'cryout_about_theme_review_link', 'sculpt_about_theme_slug_swap' );
add_filter( 'cryout_about_theme_manage_link', 'sculpt_about_theme_slug_swap' );

// FIN
