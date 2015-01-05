<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//echo "Hi from core model <br />";

/**
 * -----------------------------
 * Core model 
 * -----------------------------
 *
 * This class helps in multilevel inheritance - 
 *
 * lgm_controller is extended by lgm_model and lgm_mvc is extending lgm_model
 * 
 * This class includes all core model functions 
 */
class lgm_model extends lgm_controller
{	
	// Class variable used to call model methods
	public $method;

	/**
	 * [model Called from application/controller]
	 * @param  [string] $model_name [This variable accepts model name]
	 * @param  [array] 	$params     [This variable accepts model params]
	 * @return [none]             	[none]
	 */
	function model($model_name,$params=null)
	{		
			// This will call core load model function in this class
			$this->load_model($model_name,$params);

			// This will be used to call model methods
			$this->method = new $model_name;
	}

	/**
	 * [load_model Core load model function to include file]
	 * @param  [string] $model_name [This variable accepts model name]
	 * @param  [array] 	$params     [This variable accepts model params]
	 * @return [none]             	[none]
	 */
	function load_model($model_name,$params=null)
	{
		// This will fetch model with name recieved, from /application/models folder
		class_loader(APPMODELS.'/',$model_name,$params);
	}

}
