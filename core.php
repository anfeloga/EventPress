<?php
/**
 * Core file. Initializes constants, loads required files.
 *
 * @package EventPress
 */

/**
 * Load the text domain as soon as possible.
 */
load_plugin_textdomain( 'eventpress', false, basename( dirname( __FILE__ ) ) . '/lang' );

/** 
 * Get the constants.
 */
require 'constants.php'; 

/**#@+
 * Load kb-includes
 */
 
/** Custom Post Type Container */
require 'includes/kb-at.php';
require 'includes/kb-plugin.php';
require 'includes/kb-cpt.php';

/**#@-*/

/** 
 * The EventPress Class -- brings it all together.
 */
class EventPress extends KB_Plugin {

	public function __construct() {
		parent::__construct(); 
		$ep = new KB_Cpt('event'); 
	}
}

/**
 * Initialize EventPress.
 */
new EventPress();
