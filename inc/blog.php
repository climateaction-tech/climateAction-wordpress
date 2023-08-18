<?php
/**
 * Customisations to the blog posts
 */

add_action( 'neve_after_post_content', 'cat_output_blog_footer' );

/**
 * Output widget area at the bottom of a single blog post.
 */
function cat_output_blog_footer() {
	if ( is_active_sidebar( 'cat-blog-footer' ) && is_singular( 'post' ) ) :

		echo '<div class="widget-area" role="complementary">';
		dynamic_sidebar( 'cat-blog-footer' );
		echo '</div>';

	endif;
}

/**
 * Add coauthors (Coauthors Plus plugin must be activated)
 */
add_filter( 'the_author_posts_link', function( $markup ) {
	if ( ! function_exists( 'coauthors_posts_links' ) ) {
		return $markup;
	}

	ob_start();
	coauthors_posts_links();
	$output = ob_get_contents();
	ob_end_clean();
	return $output;
} );
