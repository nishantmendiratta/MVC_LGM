<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//echo "Hi from config <br />";


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