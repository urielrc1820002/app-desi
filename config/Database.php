<?php
class Database {
	private $_connection;
	private static $_instance; //The single instance
	private $_host = "us-cdbr-east-06.cleardb.net";
	private $_username = "b9c28cbf4adf72";
	private $_password = "1b37ac79";
	private $_database = "heroku_0ff8aba676bf77f";
	
	/*
	Get an instance of the Database
	@return Instance
	*/
	public static function getInstance() {
		if(!self::$_instance) { // If no instance then make one
			self::$_instance = new self();
		}
		return self::$_instance;
	}
	// Constructor
	public function __construct() {
		$this->_connection = new mysqli($this->_host, $this->_username,	$this->_password, $this->_database);
	
		// Error handling
		if(mysqli_connect_error()) {
			trigger_error("Failed to conencto to MySQL: " . mysqli_connect_error(),
				 E_USER_ERROR);
		}
	}
	// Magic method clone is empty to prevent duplication of connection
	private function __clone() { }
	// Get mysqli connection
	public function getConnection() {
		return $this->_connection;
	}
}


?>