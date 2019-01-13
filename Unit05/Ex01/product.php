<?php
	session_start();

	$product = array();

	$product[100] = array('maSp'=> 100, 'name' => 'Iphone X', 'soluong' => 100, 'gia' => 5000000);
	$product[101] = array('maSp'=> 101, 'name' => 'Iphone Xs', 'soluong' => 50, 'gia' => 10000000);
	$product[102] = array('maSp'=> 102, 'name' => 'Iphone Xs Max', 'soluong' => 20, 'gia' => 20000000);

	$_SESSION['product'] = $product;

