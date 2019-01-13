<?php
	class Employee{
		function All(){
			require_once('db.php');
			$data = array();
			$sql = "SELECT * FROM EMPLOYEES";
			$result = $conn->query($sql);
			while($row = $result->fetch_assoc()){
				$data[] = $row;
			}

			return $data;
		}

		function detail($code){
			require_once('db.php');
			$data = array();
			$sql = "SELECT * FROM EMPLOYEES WHERE code = '".$code."' ";
			$result = $conn->query($sql)->fetch_assoc();

			return $result;
		}
		function add(){
			require_once('db.php');
			$sql  = "SELECT * FROM EMPLOYEES ORDER BY CODE DESC LIMIT 1";

		    $result = $conn->query($sql);

		    $row = $result->fetch_assoc();

		    return $max_id = $row['code'] + 1;
		}
		function insert($data){
			require_once('db.php');
			$sql = "INSERT INTO employees (code, name, email, mobile, address, password)
				VALUES ('".$data['code']."', '".$data['name']."' , '".$data['email']."', '".$data['mobile']."',  '".$data['address']."',  '".$data['password']."')";
			$result = $conn->query($sql);
		}
		function edit($code){
			require_once('db.php');
			$data = array();
			$sql = "SELECT * FROM EMPLOYEES WHERE code = '".$code."' ";
			$result = $conn->query($sql)->fetch_assoc();

			return $result;
		}
		function update($data){
			require_once('db.php');		
			// var_dump($data);
			// die; 
			$sql = "UPDATE  EMPLOYEES SET name = '".$data['name']."', email = '".$data['email']."',mobile = '".$data['mobile']."',address = '".$data['address']."', password = '".$data['password']."'  WHERE code = '".$data['code']."' ";

			$result = $conn->query($sql);

			// var_dump($result);
			// die;

		}
		function delete($code){
			require_once('db.php');

			if(isset($_GET['code'])){
				$code = $_GET['code'];
				$sql = "DELETE FROM EMPLOYEES WHERE code = '".$code."' ";
				$result = $conn->query($sql);

			}

		}

	}