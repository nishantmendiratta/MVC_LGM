<?php 	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
/**
 * -----------------------------
 * Loading Global Functions
 * -----------------------------
 */

 require(KERNELPATH.'/common.php');

/**
 * -----------------------------
 * Loading Database
 * -----------------------------
 */

$result =& class_loader('Test');

echo $result;
