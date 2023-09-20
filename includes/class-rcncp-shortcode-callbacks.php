<?php
/**
 * The file that defines all the shortcode callbacks
 *
 * A class that includes all shortcode callbacks used across both the
 * public-facing side of the site and the admin area.
 *
 * @link       https://developer.wordpress.org/plugins/shortcodes/
 * @since      1.0.0
 *
 * @package    Rcncp
 * @subpackage Rcncp/includes
 */

/**
 * The the this class works
 *
 * This class doesn't take any arguments
 * Each method inside this class acts as a callback for a function
 *
 * @package    Rcncp
 * @subpackage Rcncp/public
 * @author     Junaid Bin Jaman <me@junaidbinjaman.com>
 */
class Rcncp_Shortcode_Callbacks {

	/**
	 * Multi step form container div.
	 *
	 * This is a public facing callback
	 * This function displays an empty div into the screen.
	 * React calls the div and render the multi step form inside it
	 *
	 * @param array  $atts User provided attributes on shortcode.
	 * @param string $content Contents between enclosing tag.
	 * @param string $tag The shortcode tag itself.
	 *
	 * @since    1.0.0
	 * @return string The div where react will render the form
	 */
	public static function multi_step_application( $atts = array(), $content, $tag ) {

		// Get User provided form id.
		$form_id = isset( $atts['form_id'] ) ? $atts['form_id'] : '';

		// Check if the form id is provided or not.
		if ( ! empty( $form_id ) ) {
			// Change attribute to lowercase.
			$atts = array_change_key_case( $atts, CASE_LOWER );

			// If string is provides instead of number.
			if ( intval( $form_id ) === 0 ) {
				return '<p> Please add a number in attribute... </p>';
			}
		}

		// Process attribute data.
		$provided_atts = shortcode_atts(
			array(
				'form_id' => '<p>Please add <code>form_id</code> shortcode attribute...</p>',
			),
			$atts,
			$tag
		);

		// Return a div to render the multi step form.
		return '<div class="rcncp-multi-step-form">' . $provided_atts['form_id'] . '</div>';
	}
}
