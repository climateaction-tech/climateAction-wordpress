<?php
/**
 * Functions that change the behaviour of the WordPress default editor (Gutenberg).
 *
 * @package CAT
 */

if ( is_admin() ) {
	/**
	 * Disable the full screen / distraction free editing mode.
	 */
	function jba_disable_editor_fullscreen_by_default() {
		$script = "jQuery( window ).load(function() { const isFullscreenMode = wp.data.select( 'core/edit-post' ).isFeatureActive( 'fullscreenMode' ); if ( isFullscreenMode ) { wp.data.dispatch( 'core/edit-post' ).toggleFeature( 'fullscreenMode' ); } });";
		wp_add_inline_script( 'wp-blocks', $script );
	}

	add_action( 'enqueue_block_editor_assets', 'jba_disable_editor_fullscreen_by_default' );
}
