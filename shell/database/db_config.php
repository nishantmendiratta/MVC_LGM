<?php 	if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * -------------------------------
 * Loading Database Configuration Constants
 * -------------------------------
 */
	
	// Defining database host 
	define('DB_HOST', 'localhost');

	// Defining database user
	define('DB_USER', 'root');

	// Defining database password 
	define('DB_PASS', 'root');

	// Defining database name
	define('DB_NAME', 'droom');

	// Defining database string
	define('DB_STR', "mysql:host=".DB_HOST.";dbname=".DB_NAME);

	// This could contain TRUE/FALSE values, if it's TRUE then it will call the constructor of DBconnect class
	define('DB_ENABLE', false);