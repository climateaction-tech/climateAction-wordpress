<?php
/**
 * Customisations to the footer
 *
 * @package CAT
 */

add_filter( 'theme_mod_footer_copyright_content', 'cat_footer_copyright' );

/**
 * Set the copyright text in the footer, keeping the year current.
 *
 * Neve only lets you edit this text in the Customizer with Neve Pro,
 * so we override the saved setting here instead.
 *
 * @param string $content The copyright text saved in the Customizer.
 */
function cat_footer_copyright( $content ) {

	return '<p>&copy; 2017 - ' . esc_html( gmdate( 'Y' ) ) . ' ClimateAction.tech</p>';
}
