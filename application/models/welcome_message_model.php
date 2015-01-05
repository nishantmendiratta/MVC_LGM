<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//echo "Hi from get data model";

/**
 * Welcome Model 
 */
class welcome_message_model extends lgm_model
{
	/**
	 * [get user defined function]
	 * @return [none] [none]
	 */
	function get()
	{ 
		// Welcome message
		echo "Hi From Welcome Method - Inside Model<br />";
	}
}