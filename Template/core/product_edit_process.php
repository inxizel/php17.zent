<?php
	include("../core/database.php");

	if(isset($_POST['submit'])){
		$code = $_POST['code'];
		$name = $_POST['name'];
		$quantity = $_POST['quantity'];
		$price = $_POST['price'];
		

		
		$sql = "UPDATE  PRODUCTS SET name = '".$name."' WHERE code = '".$code."' ";
		$result = $conn->query($sql);
		$sql = "UPDATE  PRODUCTS SET quantity = '".$quantity."' WHERE code = '".$code."' ";
		$result = $conn->query($sql);
		$sql = "UPDATE  PRODUCTS SET price = '".$price."' WHERE code = '".$code."' ";




		$result = $conn->query($sql);

	}
	
	header("Location: ../admin/product.php");