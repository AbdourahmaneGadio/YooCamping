<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Theme Palace
 * @subpackage Travel Master
 * @since Travel Master 1.0.0
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function travel_master_body_classes( $classes ) {
	$options = travel_master_get_theme_options();

	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Add a class for layout
	$classes[] = esc_attr( $options['site_layout'] );

	// Add a class for sidebar
	$sidebar_position = travel_master_layout();
	$sidebar = 'sidebar-1';
	$travel_archive_sidebar = 'wp-travel-archive-sidebar';
	if ( is_singular() || is_home() ) {
		$id = ( is_home() && ! is_front_page() ) ? get_option( 'page_for_posts' ) : get_the_id();
	  	$sidebar = get_post_meta( $id, 'travel-master-selected-sidebar', true );
	  	$sidebar = ! empty( $sidebar ) ? $sidebar : 'sidebar-1';
	}
	
	if ( is_active_sidebar( $sidebar ) ) {
		$classes[] = esc_attr( $sidebar_position );
	} elseif( class_exists( 'WP_Travel' ) ){
			if ( ( WP_Travel::is_page( 'archive' ) || WP_Travel::is_page( 'search' ) ) && ! is_admin() && is_active_sidebar( 'wp-travel-archive-sidebar' ) ) {
				$classes[] = esc_attr( $sidebar_position );
			}
	}else {
		$classes[] = 'no-sidebar';
	}

	if( class_exists( 'WP_Travel' ) ){
		if ( ( WP_Travel::is_page( 'single' ) ) ) {
			$classes[] = esc_attr( $sidebar_position );
		}
	}

	$slider_enable =  $options['slider_section_enable'] ;
	if ( true == $slider_enable ) {
		$classes[] = 'featured-slider-enabled';
	} else {
		$classes[] = 'featured-slider-disabled';
	}

	return $classes;
}
add_filter( 'body_class', 'travel_master_body_classes' );
