<?php
/**
 * Registers a multicheckbox field for the forms.
 *
 * @package     wp-user-manager
 * @copyright   Copyright (c) 2018, Alessandro Tesoro
 * @license     https://opensource.org/licenses/GPL-3.0 GNU Public License
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Register a multicheckbox field type.
 */
class WPUM_Field_Multicheckbox extends WPUM_Field_Type {

	public function __construct() {
		$this->name  = esc_html__( 'Checkboxes', 'wp-user-manager' );
		$this->type  = 'multicheckbox';
		$this->icon  = 'dashicons-editor-ol';
		$this->order = 3;
	}

	/**
	 * Determine output of multicheckboxes field onto profile page.
	 *
	 * @param object $field
	 * @param array $value
	 * @return string
	 */
	function get_formatted_output( $field, $value ) {

		$stored_field_options = $field->get_meta( 'dropdown_options' );
		$stored_options       = [];
		$found_options_labels = [];

		foreach ( $stored_field_options as $key => $stored_option ) {
			$stored_options[ $stored_option['value'] ] = $stored_option['label'];
		}

		$values = [];

		foreach ( $value as $user_stored_value ) {
			$values[] = $stored_options[ $user_stored_value ];
		}

		return implode( ', ', $values );

	}
}
