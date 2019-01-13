<?php
	include("../core/database.php");

	if(isset($_POST['submit'])){
		echo $code = $_POST['code'];
		echo $name = $_POST['name'];
		echo $email = $_POST['email'];
		echo $mobile = $_POST['mobile'];
		echo $address = $_POST['address'];

		$sql = "INSERT INTO customers (code, name, email, mobile, address)
				VALUES ('".$code."', '".$name."' , '".$email."', '".$mobile."',  '".$address."')";

		// $sql = "INSERT INTO product (product_id, product_name, soLuong, product_price)
		// 		VALUES ('1333', '333' , '545', '5454')";

		$result = $conn->query($sql);

	}
	
	header("Location: ../admin/customer.php");