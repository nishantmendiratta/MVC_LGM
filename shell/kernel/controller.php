<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

echo "Hi from controller <br />";

class lgm_controller{ 	

 			function view($view_path,$params){
 				echo $params;
				echo "<br/> LGM VIEW <br/>";
		}	
}

//$app = new $controller_name;