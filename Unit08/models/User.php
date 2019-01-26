<?php
	require_once('models/Model.php');
	class User extends Model{
		
			var $conn;
			var $table_name = 'EMPLOYEES';
			var $primary_key = 'code';

			function login($data){

			$sql = "SELECT * FROM ".$this->table_name." WHERE email = '".$data['email']."' AND password = '".$data['password']."' LIMIT 1 ";
			
			$result = $this->conn->query($sql)->fetch_assoc();
			return $result;
		}
		
	}

