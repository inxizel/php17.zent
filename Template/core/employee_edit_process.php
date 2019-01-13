<?php
	include("../core/database.php");

	if(isset($_POST['submit'])){
		$code = $_POST['code'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$address = $_POST['address'];
		$password = $_POST['password'];
		

		
		$sql = "UPDATE  EMPLOYEES SET name = '".$name."' WHERE code = '".$code."' ";
		$result = $conn->query($sql);
		$sql = "UPDATE  EMPLOYEES SET email = '".$email."' WHERE code = '".$code."' ";
		$result = $conn->query($sql);
		$sql = "UPDATE  EMPLOYEES SET mobile = '".$mobile."' WHERE code = '".$code."' ";
		$result = $conn->query($sql);
		$sql = "UPDATE  EMPLOYEES SET address = '".$address."' WHERE code = '".$code."' ";
		$result = $conn->query($sql);
		$sql = "UPDATE  EMPLOYEES SET password = '".$password."' WHERE code = '".$code."' ";
		$result = $conn->query($sql);

	}
	
	header("Location: ../admin/employee.php");