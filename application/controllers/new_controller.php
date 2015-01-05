<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//echo "Hi From new_controller <br />";

class new_controller extends lgm_mvc
{	

	function test(){
		
		$this->load->model("get_data");
		echo $this->load->get_data->get_data();
		$this->load->view("welcome_message_view");
	}
}

