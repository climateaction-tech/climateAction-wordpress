<?php
/**
 * All the analytics we're adding through the code in one place (hopefully!)
 *
 * @package CAT
 */

add_action( 'wp_footer', 'cat_analytics', 10 );

/**
 * Function to load required analytics programs into site.
 * Currently just using Cabin analytics.
 * Public dashboard is here: https://withcabin.com/public/SLBfduNc4DDE
 * Ask Hannah or Chris is you want access to the admin version.
 */
function cat_analytics() {
	?>

	<script async defer src="https://scripts.withcabin.com/hello.js"></script>

	<?php
}
