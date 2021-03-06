<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//echo "Hi from route <br />";

/**
 * [$actual_link Extracting controller name, function name and parametners]
 * @var string
 */
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$controller_array= explode('.php/',$actual_link);

	if(isset($controller_array[1]))
		$controller_params = explode('/', $controller_array[1]);

	if(isset($controller_params[0]))
		$controller_name = $controller_params[0];

	if(isset($controller_params[1]))
		$controller_function_name = $controller_params[1];

	if(isset($controller_params[0]))
		unset($controller_params[0]);

	if(isset($controller_params[1]))
		unset($controller_params[1]);


/**
 * Default router is welcome controller
 */
if (!isset($controller_name)) 
{
		$controller_name = 'welcome';
		$controller_function_name = 'index';	
}else
{
	if (!isset($controller_function_name))
		$controller_function_name = 'index';	
	else
		$route[$controller_name] = $controller_function_name;
}


if (isset($controller_name)) {
	class_loader(APPCONTROLLERS.'/',$controller_name);
}

/**
 * [$app Creating an object which will initialize the controller]
 * @var [object]
 */
if (class_exists($controller_name)) 
{
	$app = new $controller_name;
	
	// Calling the function of respective controller if it exists or not
	if(method_exists($app,$controller_function_name))
	{
		$app->$controller_function_name();
	}	
	else
	{
		echo "Invalid Function Name : " . $controller_function_name;
	}
		
}
