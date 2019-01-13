<?php
	include("../core/database.php");

	if(isset($_POST['submit'])){
		$code = $_POST['code'];
		

		
		$sql = "DELETE FROM CUSTOMERS WHERE code = '".$code."' ";



		$result = $conn->query($sql);

	}
	
	header("Location: ../admin/customer.php");