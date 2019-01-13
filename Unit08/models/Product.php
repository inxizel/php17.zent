<?php
	class Product{
		function All(){
			require_once('db.php');
			$data = array();
			$sql = "SELECT * FROM PRODUCTS";
			$result = $conn->query($sql);
			while($row = $result->fetch_assoc()){
				$data[] = $row;
			}

			return $data;
		}
		function detail($code){
			require_once('db.php');
			$data = array();
			$sql = "SELECT * FROM PRODUCTS WHERE code = '".$code."' ";
			$result = $conn->query($sql)->fetch_assoc();

			return $result;
		}
		function add(){
			require_once('db.php');
			$sql  = "SELECT * FROM PRODUCTS ORDER BY CODE DESC LIMIT 1";

		    $result = $conn->query($sql);

		    $row = $result->fetch_assoc();

		    return $max_id = $row['code'] + 1;
		}
		function insert($data){
			require_once('db.php');
			$sql = "INSERT INTO products (code, name, price, quantity)
						VALUES ('".$data['code']."', '".$data['name']."' , '".$data['price']."', '".$data['quantity']."')";
			$result = $conn->query($sql);
		}
		function edit($code){
			require_once('db.php');
			$data = array();
			$sql = "SELECT * FROM PRODUCTS WHERE code = '".$code."' ";
			$result = $conn->query($sql)->fetch_assoc();

			return $result;
		}
		function update($data){
			require_once('db.php');		
			$sql = "UPDATE  PRODUCTS SET name = '".$data['name']."',quantity = '".$data['quantity']."',price = '".$data['price']."' WHERE code = '".$data['code']."' ";
			$result = $conn->query($sql);

		}
		function delete($code){
			require_once('db.php');

			if(isset($_GET['code'])){
				$code = $_GET['code'];
				$sql = "DELETE FROM PRODUCTS WHERE code = '".$code."' ";
				$result = $conn->query($sql);

			}

		}
	}