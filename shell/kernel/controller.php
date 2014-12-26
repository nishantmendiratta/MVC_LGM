<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class lgm_controller{

	private static $instance;

	public function __construct()
	{
		self::$instance =& $this;
	}

	public static function &getInstance()
	{
		return self::$instance;
	}
}