<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package mozammel
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function mozammel_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'mozammel_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function mozammel_jetpack_setup
add_action( 'after_setup_theme', 'mozammel_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function mozammel_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function mozammel_infinite_scroll_render
