<?php

/**
 * -----------------------------
 * Shell Environments 
 * -----------------------------
 *
 * It may include following environments.
 * 1. Dev
 * 2. Test
 * 3. Prod
 *
 * NOTE : If you change this it will change the error_reporting() function.
 */
define('ENVIRONMENT', 'Dev');

/**
 * -----------------------------
 * Error Reporting
 * -----------------------------
 *
 * Enabling or Disabling error reporting on the basis of environment 
 *
 * NOTE : By default 
 */
if (defined('ENVIRONMENT')) 
{
		switch (ENVIRONMENT) {
			case 'Dev':
				error_reporting( E_ALL );
    			ini_set( "display_errors", 1 );
				break;
			
			case 'Test':
			case 'Prod':
				error_reporting(0);
				break;

			default:
				exit('The application environment is not set correctly.');
		}
}

/**
 * -----------------------------
 * Shell Folder Name 
 * -----------------------------
 *
 * This variable will include the name of shell folder 
 *
 * NOTE : Includes folder path only if shell folder is not in same directory as this file
 */

$shell_path = 'shell';

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

	// Path to the shell folder
	define('BASEPATH', str_replace("\\", "/", $shell_path));

	// Path to core file in kernel folder 
	define('KERNELPATH', BASEPATH.'/kernel/');

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
 * -----------------------------
 * Loading Bootstrap File
 * -----------------------------
 *  
 * 
 */
require_once(KERNELPATH.'core.php');

echo " Hello from Index";

/*
 * END OF index.php FILE
 * LOCATION /index.php
 */

