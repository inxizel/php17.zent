<?php

	require_once('models/Cart.php');
	require_once('models/Product.php');

	require_once('models/Bill.php');
	require_once('models/BillDetail.php');
	class CartController{

		var $model;
		function __construct(){
			$this->model = new Cart();
		}
		function show(){
			$data = $_SESSION['cart'];
			require_once('views/pages/cart.php');
		}
		function checkout(){
			$user = $_SESSION['user'];
			if($user){

				$bill_controller = new Bill();
				$MaHD = time();

				$data = array();

				$data['MaHD'] = $MaHD;
				$data['MaKH'] = "KH_".$user['code'];
				$data['Date'] = date("Y-m-d H:i:s");
 
				$bill_controller->insert($data);

				$cart = $_SESSION['cart'];
				$tongtien = 0;
				foreach ($cart as $row) {
					$bill_detail = array();
					$bill_detail['MaHD'] = $MaHD;
					$bill_detail['MaSP'] = $row['code'];
					$bill_detail['quantity'] = $row['quantity'];
					$bill_detail['price'] = $row['price'];
					$bill_detail['TongTien'] = $row['price'] * $row['quantity'];

					$tongtien += $bill_detail['TongTien'];

					$billdetail_controller = new BillDetail();
					$billdetail_controller->insert($bill_detail);
				}
				$data1 = array();
				$data1['MaHD'] =  $MaHD;
				$data1['status'] =  0;
				$data1['TongTien'] = $tongtien;

				$bill_controller->update($data1);

				unset($_SESSION['cart']);
				header("Location: index.php");
			}
			else
				header("Location: user.php");

		}
		function addToCart(){
			$maSp = $_GET['code'];
			if (isset($_SESSION['cart'][$maSp])) {
				$_SESSION['cart'][$maSp]['quantity'] = $_SESSION['cart'][$maSp]['quantity'] + 1;
			}else{
				$productModel = new Product();
				$product = $productModel->detail($maSp);
				$product['quantity'] = 1;
				$_SESSION['cart'][$maSp] = $product;
			}
			header("Location: ?mod=cart");
		}
		function remove_product(){
			$maSp = $_GET['code'];
			if ($_SESSION['cart'][$maSp]['quantity'] == 1 ) {
				unset($_SESSION['cart'][$maSp]);
			}else{
				$_SESSION['cart'][$maSp]['quantity'] = $_SESSION['cart'][$maSp]['quantity'] - 1;
			}
			header("Location: ?mod=cart");

		}
	}