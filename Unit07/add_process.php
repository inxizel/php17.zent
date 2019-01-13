<?php
	include("database.php");

	if(isset($_POST['submit'])){
		echo $maSp = $_POST['maSp'];
		echo $name = $_POST['name'];
		echo $soLuong = $_POST['soLuong'];
		echo $donGia = $_POST['donGia'];

		$sql = "INSERT INTO product (product_id, product_name, soLuong, product_price)
				VALUES ('".$maSp."', '".$name."' , '".$soLuong."', '".$donGia."')";

		// $sql = "INSERT INTO product (product_id, product_name, soLuong, product_price)
		// 		VALUES ('1333', '333' , '545', '5454')";

		$result = $conn->query($sql);

	}
	
	header("Location: product.php");