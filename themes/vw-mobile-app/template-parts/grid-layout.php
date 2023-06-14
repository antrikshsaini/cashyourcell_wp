<?php
/**
 * The template part for displaying Post
 *
 * @package VW Mobile App
 * @subpackage vw-mobile-app
 * @since VW Mobile App 1.0
 */
?>

<?php 
  $vw_mobile_app_archive_year  = get_the_time('Y'); 
  $vw_mobile_app_archive_month = get_the_time('m'); 
  $vw_mobile_app_archive_day   = get_the_time('d'); 
?> 

<div class="col-lg-4 col-md-6">
	<article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
	    <div class="post-main-box wow bounceInDown delay-1000" data-wow-duration="2s">
	      	<div class="box-image">
	          	<?php 
		            if(has_post_thumbnail() && get_theme_mod( 'vw_mobile_app_featured_image_hide_show',true) == 1) { 
		              the_post_thumbnail(); 
		            }
	          	?>
	        </div>
	        <h2 class="section-title"><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
	        <?php if( get_theme_mod( 'vw_mobile_app_grid_postdate',true) == 1 || get_theme_mod( 'vw_mobile_app_grid_author',true) == 1 || get_theme_mod( 'vw_mobile_app_grid_comments',true) == 1) { ?>
	            <div class="post-info">
	                <?php if(get_theme_mod('vw_mobile_app_grid_postdate',true)==1){ ?>
	                    <i class="<?php echo esc_attr(get_theme_mod('vw_mobile_app_grid_postdate_icon','fas fa-calendar-alt')); ?>"></i><span class="entry-date"><a href="<?php echo esc_url( get_day_link( $vw_mobile_app_archive_year, $vw_mobile_app_archive_month, $vw_mobile_app_archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span>
	                <?php } ?>

	                <?php if(get_theme_mod('vw_mobile_app_grid_author',true)==1){ ?>
	                    <span><?php echo esc_html(get_theme_mod('vw_mobile_app_single_post_meta_field_separator', '|'));?></span> <i class="<?php echo esc_attr(get_theme_mod('vw_mobile_app_grid_author_icon','far fa-user')); ?>"></i><span class="entry-author"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span>
	                <?php } ?>

	                <?php if(get_theme_mod('vw_mobile_app_grid_comments',true)==1){ ?>
	                    <span><?php echo esc_html(get_theme_mod('vw_mobile_app_single_post_meta_field_separator', '|'));?></span> <i class="<?php echo esc_attr(get_theme_mod('vw_mobile_app_grid_comments_icon','fa fa-comments')); ?>" aria-hidden="true"></i><span class="entry-comments"><?php comments_number( __('0 Comment', 'vw-mobile-app'), __('0 Comments', 'vw-mobile-app'), __('% Comments', 'vw-mobile-app') ); ?> </span>
	                <?php } ?>
	            </div>
        	<?php } ?>
	        <div class="new-text">
	          	<div class="entry-content">
	          		<p>
			          <?php $vw_mobile_app_excerpt = get_the_excerpt(); echo esc_html( vw_mobile_app_string_limit_words( $vw_mobile_app_excerpt, esc_attr(get_theme_mod('vw_mobile_app_related_posts_excerpt_number','30')))); ?> <?php echo esc_html( get_theme_mod('vw_mobile_app_excerpt_suffix','') ); ?>
			        </p>
	          	</div>
	        </div>
	        <?php if( get_theme_mod('vw_mobile_app_button_text','Read More') != ''){ ?>
	        	<a class="content-bttn" href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small" title="<?php esc_attr_e( 'Read More','vw-mobile-app' ); ?>"><?php echo esc_html(get_theme_mod('vw_mobile_app_button_text',__('Read More','vw-mobile-app')));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('vw_mobile_app_button_text',__('Read More','vw-mobile-app')));?></span></a>
	        <?php } ?>
	    </div>
	    <div class="clearfix"></div>
  	</article>
</div>