<?php
	include("database.php");

	if(isset($_POST['submit'])){
		$maSp = $_POST['maSp'];
		$name = $_POST['name'];
		$soLuong = $_POST['soLuong'];
		$donGia = $_POST['donGia'];
		

		
		$sql = "UPDATE  PRODUCT SET product_name = '".$name."' WHERE product_id = '".$maSp."' ";
		$result = $conn->query($sql);
		$sql = "UPDATE  PRODUCT SET soLuong = '".$soLuong."' WHERE product_id = '".$maSp."' ";
		$result = $conn->query($sql);
		$sql = "UPDATE  PRODUCT SET product_price = '".$donGia."' WHERE product_id = '".$maSp."' ";




		$result = $conn->query($sql);

	}
	
	header("Location: product.php");