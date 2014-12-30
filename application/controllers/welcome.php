 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//echo "Hi From Welcome";

 //$controller_name = 'welcome';
 //$controller_function_name = 'index';


//$app = new $controller_name;
//$app->$controller_function_name();

class welcome extends lgm_controller {

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
		$this->view('welcome_message','Data');
		//$this->load->view('welcome_message');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */