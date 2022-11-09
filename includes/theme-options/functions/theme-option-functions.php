<?php
if ( !class_exists( 'EGNS_THEME_OPTIONS_Functions' ) ) {
	class EGNS_THEME_OPTIONS_Functions {
		/**
		 * This The Instance of this class.
		 *
		 * @since   1.0.0
		 * @access  public
		 * @var     Theme_Options_Functions
		 */
		public static $instance;

		/**
		 * Provides access to a single instance of a module using the singleton pattern.
		 *
		 * @since   1.0.0
		 * @return   object
		 */
		public static function get_instance() {
			if (self::$instance === null) {
				self::$instance = new self();
			}
			return self::$instance;
		}

		/**
		 * Constructor.
		 *
		 * @since    1.0.0
		 */
		public function __construct() {
			$this->actions();
		}

		/**
		 * Add actions.
		 *
		 * @since    1.0.0
		 */
		public function actions() {

		}

		

	}

	EGNS_THEME_OPTIONS_Functions::get_instance();
}
