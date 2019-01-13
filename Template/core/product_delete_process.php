<?php
	include("../core/database.php");

	if(isset($_GET['code'])){
		$code = $_GET['code'];
		

		
		$sql = "DELETE FROM PRODUCTS WHERE code = '".$code."' ";



		$result = $conn->query($sql);

	}
	
	header("Location: ../admin/product.php");