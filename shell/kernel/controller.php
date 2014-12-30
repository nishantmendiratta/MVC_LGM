<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

echo "Hi from controller <br />";

class lgm_controller{ 	

 		function view($view_name,$params){

 				$this->load_view($view_name,$params);
				//echo "<br/> LGM VIEW <br/>";
		}	

		function load_view($view_name,$params){
			class_loader(APPVIEWS.'/',$view_name,$params);
		}
}

//$app = new $controller_name;