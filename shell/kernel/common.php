<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//echo "Hi from common <br/>";

/**
 * ----------------------------- 
 * Loading Configuration 
 * -----------------------------
 */
require(KERNELPATH.'/config.php');

/**
 * Function to include classes 
 */
if (!function_exists('class_loader')) 
{
		function class_loader($classpath, $classname, $params = null)
		{	
			if(!file_exists(strtolower($classpath.$classname.EXT)))
			{
				echo 'Invalid Class Name : ' . $classname;	
				return;
			}

			require(strtolower($classpath.$classname.EXT));
				
		}	
} 

/**
 * ----------------------------- 
 * Loading MVC Classes  
 * -----------------------------
 */
require(KERNELPATH.'/loader.php');

