<?php
	include("../core/database.php");

	if(isset($_POST['submit'])){
		$code = $_POST['code'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$address = $_POST['address'];
		

		
		$sql = "UPDATE  CUSTOMERS SET name = '".$name."' WHERE code = '".$code."' ";
		$result = $conn->query($sql);
		$sql = "UPDATE  CUSTOMERS SET email = '".$email."' WHERE code = '".$code."' ";
		$result = $conn->query($sql);
		$sql = "UPDATE  CUSTOMERS SET mobile = '".$mobile."' WHERE code = '".$code."' ";
		$result = $conn->query($sql);
		$sql = "UPDATE  CUSTOMERS SET address = '".$address."' WHERE code = '".$code."' ";
		$result = $conn->query($sql);

	}
	
	header("Location: ../admin/customer.php");