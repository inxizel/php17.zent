<?php
	include("../core/database.php");

	if(isset($_POST['submit'])){
		echo $code = $_POST['code'];
		echo $name = $_POST['name'];
		echo $price = $_POST['price'];
		echo $quantity = $_POST['quantity'];

		$sql = "INSERT INTO products (code, name, price, quantity)
				VALUES ('".$code."', '".$name."' , '".$price."', '".$quantity."')";

		// $sql = "INSERT INTO product (product_id, product_name, soLuong, product_price)
		// 		VALUES ('1333', '333' , '545', '5454')";

		$result = $conn->query($sql);

	}
	
	header("Location: ../admin/product.php");