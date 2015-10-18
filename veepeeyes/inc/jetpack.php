<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * @package veepeeyes
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function veepeeyes_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'veepeeyes_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function veepeeyes_jetpack_setup
add_action( 'after_setup_theme', 'veepeeyes_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function veepeeyes_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function veepeeyes_infinite_scroll_render
