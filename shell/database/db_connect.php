<?php 	if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * -----------------------------
 * Database Connection Class
 * -----------------------------
 *
 * This class includes CRUD functions 
 */

class DBconnect
{
	static $db_obj;

	/**
	 * [__construct initialize the connection]
	 */
	public function __construct()
	{
		// Calling initializeDB method 
		self::initializeDB();
	}

	public function initializeDB()
	{
		try 
		{	
			// Defining connection string
			$conn = new PDO(DB_STR, DB_USER, DB_PASS);

    	// Set the PDO error mode to exception
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			// 
			return $db_obj;
		}
		catch(PDOException $e)
		{	
			// Error message
			$failed_msg = "Connection failed: " . $e->getMessage(); 
			return $failed_msg;
		}
	}
}

// Check if Database
if (DB_ENABLE) {
	new DBconnect();
}
