<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

echo "Hi from loader <br />";
/**
 * [Including all core classes]
 * @var [array]
 */
foreach ($core_classes as $path => $class) 
{
	if (!$path) {
		$path = KERNELPATH;
		foreach ($class as $name ) {
			class_loader($path,$name);
		}
	}else{
		class_loader($path,$class);
	}
	
}
