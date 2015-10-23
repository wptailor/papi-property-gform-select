<?php

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

/**
 * Property GForm_Select
 */

class Papi_Property_Gform_Select extends Papi_Property_Dropdown {

	/**
	 * Get dropdown items.
	 *
	 * @return array
	 */
	protected function get_items() {
		$gforms = GFAPI::get_forms();

		return array_reduce( $gforms, function( $result, $form ) {
			$result[$form['title']] = $form['id'];
			return $result;
		}, array() );
	}
}
