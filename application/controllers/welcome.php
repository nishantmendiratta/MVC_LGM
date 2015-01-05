<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//echo "Hi From Welcome <br />";

class welcome extends lgm_mvc
{	
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * 
	 */
	public function index()
	{	
		// This is an example to load a model 
		// This function accepts min 1 param i.e model_name and 2nd param includes the params 
		$this->load->model('welcome_message_model');

		// This is an example to load a view 
		// This function accepts min 1 param i.e view_name and 2nd param includes the params 
		$this->load->view('welcome_message_view','(View Data)');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */