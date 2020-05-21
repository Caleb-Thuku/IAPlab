<?php
	include "Crud.php";
	include_once "DBConnector.php";

	class User implements Crud{
		private $user_id;
		private $first_name;
		private $last_name;
		private $city_name;

		//We can use the class constructor to initialize our values member variables can't be instantiated from elsewhere; they're private

		function __construct($first_name,$last_name,$city_name){
			$this -> first_name = $first_name;
			$this -> last_name = $last_name;
			$this -> city_name = $city_name;
		}

		//user id setter
		public function setUserId($user_id){
			$this -> user_id = $user_id;
		}

		//user id getter
		public function getUserId()	{
			return $this -> $user_id;
		}

		public function save(){
			$fn = $this->first_name;
			$ln=$this->last_name;
			$city=$this->city_name;
			$conn =new DBConnector;
			$res = mysqli_query($conn->conn,"INSERT INTO user(first_name,last_name,user_city) VALUES ('$fn','$ln','$city')") or die ("Error" .mysql_error());
			return $res;
		}

		public function readAll(){
			$conn =new DBConnector;

			$query = mysqli_query($conn->conn,"SELECT * FROM user") or die ("Error" .mysql_error());
			return $query;
		}
		public function readUnique(){
			return null;
		}
		public function search(){
			return null;
		}
		public function update(){
			return null;
		}
		public function removeOne(){
			return null;
		}
		public function removeAll(){
			return null;
		}

	}
?>
