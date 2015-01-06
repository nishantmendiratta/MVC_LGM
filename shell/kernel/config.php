<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//echo "Hi from config <br />";

/**
 * -----------------------------
 * Application Folder Name
 * -----------------------------
 *
 * This variable will include the name of application folder 
 *
 * NOTE : Includes folder path only if application folder is not in same directory as this file
 */

$application_path = 'application';

/**
 * -----------------------------
 * Setting main path constraints
 * -----------------------------
 */
	
	// The name of THIS file
	define('SELF', pathinfo(__FILE__, PATHINFO_BASENAME));

	// The PHP file extension
	// this global constant is deprecated.
	define('EXT', '.php');

	// Path to application folder
	define('APPPATH', str_replace("\\", "/", $application_path));

	// Path to application controllers folder
	define('APPCONTROLLERS', APPPATH.'/controllers');

	// Path to application views folder
	define('APPVIEWS', APPPATH.'/views');

	// Path to application models folder
	define('APPMODELS', APPPATH.'/models');

	// Path to database folder
	define('DBPATH', BASEPATH.'/database/');
	

/**
 * [$core_classes defining all core classes to be loaded on initialization]
 * @var array
 */
$core_classes = array(
				false => array('controller','model','lgm_mvc','route'),
				DBPATH => '/db_core' 
				);
/**
 * ----------------------------- 
 * Routing array 
 * -----------------------------
 */
$route = array(); 