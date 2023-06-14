<?php
/**
 * Master generated style function
 *
 * @package Sculpt
 */

/**
 * Add body classes to identify the child theme
 */
function sculpt_body_classes( $classes ) {
	$classes[] = strtolower( wp_get_theme() ) . '-child';
	return $classes;
}
add_filter( 'body_class', 'sculpt_body_classes', 15 );

/**
 * Dynamic styles for the frontend
 */
function sculpt_custom_styling() {
    $options = cryout_get_option();
    extract($options);

    ob_start(); ?>

    /* Sculpt custom style */

	#site-title span a:hover::before {
		width: calc(100% - <?php echo floatval( $theme_titleaccent ) ?>em);
	}

	#access ul.sub-menu li a:hover,
	#access ul.children li a:hover {
		color: <?php echo esc_html( $theme_submenutext ) ?>;
	}

	.lp-block .lp-block-title::after {
		background-color: <?php echo esc_html( $theme_accent2 ) ?>;
	}

	a.continue-reading-link {
		border-color: <?php echo esc_html( $theme_accent2 ) ?>;
		color: <?php echo esc_html( $theme_accent2 ) ?>;
	}

	a.continue-reading-link:hover {
		border-color: <?php echo esc_html( $theme_accent1 ) ?>;
		color: <?php echo esc_html( $theme_accent1 ) ?>;
	}

	.lp-boxes-static .box-overlay {
		background-color: <?php echo esc_html( $theme_accent2 ) ?>;
	}

	.lp-box-readmore {
		color: <?php echo esc_html( $theme_accent2 ) ?>;
	}

	a.staticslider-button:nth-child(odd),
   .seriousslider-theme .seriousslider-caption-buttons a.seriousslider-button:nth-child(odd),
   a.staticslider-button:nth-child(odd):hover,
   .seriousslider-theme .seriousslider-caption-buttons a.seriousslider-button:nth-child(odd) :hover {
		background-color: <?php echo esc_html( $theme_accent2 ) ?>;
	}

	a.staticslider-button:hover,
	.seriousslider-theme .seriousslider-caption-buttons a:hover {
		background-color: <?php echo esc_html( $theme_accent1 ) ?>;
	}


	.widget-title,
	#comments-title,
	#reply-title,
	.related-posts .related-main-title,
	.main .page-title,
	#nav-below em,
	.lp-text .lp-text-title,
	.lp-boxes-animated .lp-box-title {
		background-image: linear-gradient(to bottom, rgba(<?php echo  esc_html( cryout_hex2rgb( $theme_accent2 ) ) ?>,0.4) 0%, rgba(<?php echo esc_html( cryout_hex2rgb( $theme_accent2 ) ) ?>,0.4) 100%);
	}

	strong > span > .cry-single,
	strong > span > .cry-double {
		color: <?php echo esc_html( $theme_accent2 ) ?> !important;
	}




    /* end Sculpt custom style */
    <?php
    return preg_replace( '/((background-)?color:\s*?)[;}]/i', '', ob_get_clean() );

} // sculpt_custom_styling()


/**
 * Load custom styles
 */
function sculpt_custom_styles( $style = '' ) {

	return $style . sculpt_custom_styling();

} // sculpt_custom_styles()
// this filer is applied in sculpt_setup()


/* FIN */
