<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//echo "Hi from loader <br />";

/**
 * [Loading all class files]
 * @var [array]
 */
foreach ($core_classes as $path => $class) 
{	
	// Check if path ezists or not
	if (!$path) {
		$path = KERNELPATH;
		// For core class files
		foreach ($class as $name ) {
			class_loader($path,$name);
		}
	}else{
		// For other application class files 
		class_loader($path,$class);
	}
}
