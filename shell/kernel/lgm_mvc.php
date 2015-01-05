<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

echo "Hi from core mvc <br />";

/**
 * -----------------------------
 * Core MVC class
 * -----------------------------
 *
 * This class helps in multilevel inheritance - 
 *
 * lgm_controller is extended by lgm_model and lgm_mvc is extending lgm_model
 * 
 */
class lgm_mvc extends lgm_model
{	
	// Class variable used to call core controller and model methods, Used in application
	// Used in /application/controllers/welcome.php
	public $load;

	// Once this class is executed instance is required in class variable
	function __construct()
	{
		// Calling getInstance defined in this class
		$this->getInstance();
	}

	/**
	 * [getInstance This is very important as it will pass instance of this class in class variable]
	 * @return [none] [none]
	 */
	function getInstance()
	{
		// Class variable gets instance of mvc
		$this->load = new lgm_model;
	}

}
