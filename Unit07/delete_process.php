<?php
	include("database.php");

	if(isset($_GET['id'])){
		$maSp = $_GET['id'];
		

		
		$sql = "DELETE FROM PRODUCT WHERE product_id = '".$maSp."' ";



		$result = $conn->query($sql);

	}
	
	header("Location: product.php");