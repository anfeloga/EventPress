<?php
/**
 * Core file. Initializes constants, loads required files.
 *
 * @package EventPress
 * @subpackage core
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
require 'includes/kb-at.php';
require 'includes/kb-plugin.php';
require 'includes/kb-cpt.php';
require 'includes/kb-admin.php';
require 'includes/kb-setting.php';
require 'includes/kb-config.php';
require 'includes/kb-meta-box.php';
/**#@-*/

/**#@+
 * Load EventPress's files
 */
require 'ep-setting.php';
require 'ep-config.php';
require 'ep-events.php';
require 'ep-time-mb.php';
require 'ep-reg-mb.php';
/**#@-*/

/** 
 * The EventPress Class -- brings it all together.
 */
class EventPress extends KB_Plugin {

	public function __construct() {
		parent::__construct(); 

		do_action( "EP_init" );
	}
}

/**
 * Initialize EventPress.
 */
new EventPress();

