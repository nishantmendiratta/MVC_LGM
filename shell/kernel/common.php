<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('class_loader')) 
{
		function &class_loader($classname)
		{
			$result = "Class Loader ".$classname;	
			return $result;
		}	
}