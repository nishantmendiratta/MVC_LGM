<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

echo "Hi from core model <br />";

class lgm_model extends lgm_controller
{
	function model($model_name,$params)
	{
			$this->load_model($model_name,$params);
	}

	function load_model($model_name,$params)
	{
		// This will fetch view with name recieved from /application/views folder
		class_loader(APPMODELS.'/',$model_name,$params);
	}

	function get_data_model(){
		echo "get_data_model <br />";
	}

}