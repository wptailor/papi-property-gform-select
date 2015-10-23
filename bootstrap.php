<?php

/*
 * Plugin Name: Papi: Property Gform_Select
 * Description: Papi select control for available GravityForms
 * Version: 1.0.0
 * Author: WPTailor <info@wptailor.com>
 */

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

/**
 * Include Property Gravity Form_Select upon GravityForms load.
 */
add_action( 'gform_loaded', function() {

	add_action( 'papi/include', function () {
	  require_once 'class-papi-property-gform_select.php';
	}, 15 );
} );
