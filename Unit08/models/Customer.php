<?php
	class Customer{
		function All(){
			require_once('db.php');
			$data = array();
			$sql = "SELECT * FROM CUSTOMERS";
			$result = $conn->query($sql);
			while($row = $result->fetch_assoc()){
				$data[] = $row;
			}

			return $data;
		}

		function detail($code){
			require_once('db.php');
			$data = array();
			$sql = "SELECT * FROM CUSTOMERS WHERE code = '".$code."' ";
			$result = $conn->query($sql)->fetch_assoc();

			return $result;
		}
		function add(){
			require_once('db.php');
			$sql  = "SELECT * FROM CUSTOMERS ORDER BY CODE DESC LIMIT 1";

		    $result = $conn->query($sql);

		    $row = $result->fetch_assoc();

		    return $max_id = $row['code'] + 1;
		}
		function insert($data){
			require_once('db.php');
			$sql = "INSERT INTO CUSTOMERS (code, name, email, mobile, address)
				VALUES ('".$data['code']."', '".$data['name']."' , '".$data['email']."', '".$data['mobile']."',  '".$data['address']."')";
			$result = $conn->query($sql);
		}
		function edit($code){
			require_once('db.php');
			$data = array();
			$sql = "SELECT * FROM CUSTOMERS WHERE code = '".$code."' ";
			$result = $conn->query($sql)->fetch_assoc();

			return $result;
		}
		function update($data){
			require_once('db.php');		 
			$sql = "UPDATE  CUSTOMERS SET name = '".$data['name']."', email = '".$data['email']."',mobile = '".$data['mobile']."',address = '".$data['address']."' WHERE code = '".$data['code']."' ";

			$result = $conn->query($sql);

		}
		function delete($code){
			require_once('db.php');

			if(isset($_GET['code'])){
				$code = $_GET['code'];
				$sql = "DELETE FROM CUSTOMERS WHERE code = '".$code."' ";
				$result = $conn->query($sql);

			}

		}

	}