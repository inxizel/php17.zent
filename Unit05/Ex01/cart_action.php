<?php

	include('product.php');
	
	$code = $_GET['code'];

	if(isset($_GET['action']) && $_GET['action'] == 'down'){
		if($_SESSION['cart'][$code]['soluong']<=0)
			$_SESSION['cart'][$code]['soluong'] = 0;
		else
			$_SESSION['cart'][$code]['soluong'] --;
	}else{
		if(isset($_SESSION['cart'][$code])){
		$_SESSION['cart'][$code]['soluong'] ++;
		}else{
			$sp = array();
			$sp['maSp'] = $code;
			$sp['name'] = $product[$code]['name'];
			$sp['soluong'] = 1;
			$sp['gia'] = $product[$code]['gia'];


			$_SESSION['cart'][$code] = $sp;
		}
	}
	
	echo "<pre>";
		print_r($_SESSION['cart']);
	echo "</pre>";

	header("Location: cart.php");
?>