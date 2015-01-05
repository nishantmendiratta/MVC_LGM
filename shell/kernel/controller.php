<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//echo "Hi from controller <br />";

/**
 * -----------------------------
 * Core controller 
 * ----------------------------- 
 *
 * This class helps in multilevel inheritance - 
 *
 * lgm_controller is extended by lgm_model and lgm_mvc is extending lgm_model
 * 
 * This controller will be extended by every new controller created in application folder
 * 
 */
class lgm_controller
{ 		
		//public $model;
		/**
		 * [view This function is called from controller to set a view]
		 * @param  [string] $view_name [This param will accept view name]
		 * @param  [array] 	$params    [This will include all data of variables used in view]
		 * @return [none]            	 [none]
		 */
 		function view($view_name,$params=null)
 		{		
 			// Calling load view function of this class
 			$this->load_view($view_name,$params);
		}	

		/**
		 * [load_view This function will show the respective view with data]
		 * @param  [type] $view_name [view name received from controller]
		 * @param  [type] $params    [view data received from controller]
		 * @return [none]            [none]
		 */
		function load_view($view_name,$params=null)
		{	
			// This will fetch view with name recieved from /application/views folder
			class_loader(APPVIEWS.'/',$view_name,$params);
		}
}
