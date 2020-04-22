<?php
	define('DB_SERVER', 'localhost');//local machine
	define('DB_USER', 'root');//root user
	define('DB_PASS','');//password not set
	define('DB_NAME','btc3205');//DB name

	class DBConnector{
		public $conn;//We connect to the DB inside our class constructor so we can always cause a DB connection whenever an object is created
		function __construct(){
			$this->conn = new mysqli(DB_SERVER, DB_USER,DB_PASS) or die ("Error:" .mysql_error());
			mysqli_select_db($this->conn,DB_NAME);
		}
		//Once done with DB reads, updates, deletes, this public function closes the connection
		public function closeDatabase(){
			mysqli_close($this->conn);
		}
	}
?>
