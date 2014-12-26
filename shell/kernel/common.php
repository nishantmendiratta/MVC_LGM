<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * -----------------------------
 * Loading Database 
 * -----------------------------
 */

require(DBPATH.'/db_core.php');

/**
 * 
 */
if (!function_exists('class_loader')) 
{
		function &class_loader($classname)
		{

			$result = "Class Loader ".$classname;	

			return $result;
		}	
}