<?php

class Two_Factor_Email extends Two_Factor_Provider {

	static function get_instance() {
		static $instance;
		$class = __CLASS__;
		if ( ! is_a( $instance, $class ) ) {
			$instance = new $class;
		}
		return $instance;
	}

	function get_label() {
		return _x( 'Email', 'Provider Label', 'two-factor' );
	}

	function authentication_page() {}
	function validate_authentication_page() {}

}