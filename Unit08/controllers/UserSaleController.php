<?php

	require_once('models/Sale.php');
	require_once('models/Customer.php');
	require_once('models/Product.php');
	require_once('models/Bill.php');
	require_once('models/BillDetail.php');
	
	class UserSaleController{

		var $model;
		function __construct(){
			$this->model = new Sale();
		}
		function show(){
			$customerModel = new Customer();
			$data = $customerModel->All();
			require_once('views/sale/list.php');
		}
		function purchase(){
			unset($_SESSION['cart']);
			if(isset($_GET['code'])){
				$maKH = $_GET['code'];
				$customerModel = new Customer();
				$customer = $customerModel->detail($maKH);
				$_SESSION['customer'] = $customer;
				header("Location: ?mod=sale&act=sale");
			}else{
				header("Location: ?mod=sale&act=creat_bill");
			}
		}
		function sale(){
			$noti ="";
			if(isset($_GET['err']) &&  $_GET['err'] == 1) 
				$noti ="Vui lòng thêm sản phẩm vào giỏ hàng";
			if (isset($_SESSION['customer'])) {
				$customer = $_SESSION['customer'];

				$productModel = new Product();
				$product = $productModel->All();

				$cart = array();
				if (isset($_SESSION['cart'])) {
					$cart = $_SESSION['cart'];

				}
				require_once('views/sale/sale.php');
			}else{
				header("Location : ?mod=sale&act=creat_bill");
			}
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
			header("Location: ?mod=sale&act=sale");
		}
		function remove_product(){
			$maSp = $_GET['code'];
			if ($_SESSION['cart'][$maSp]['quantity'] == 1 ) {
				unset($_SESSION['cart'][$maSp]);
			}else{
				$_SESSION['cart'][$maSp]['quantity'] = $_SESSION['cart'][$maSp]['quantity'] - 1;
			}
			header("Location: ?mod=sale&act=sale");

		}
		function TongTien(){
			$cart = $_SESSION['cart'];

			foreach ($cart as $product) {
				$pro['quantity'] = $product['quantity'];
				$pro['price'] = $product['price'];
				$pro['TongTien'] = $product['price'] * $pro['quantity'];
				$tongtien += $pro['TongTien'];
			}
			return $TongTien;
		}
		function payment(){

			if(empty($_SESSION['cart'])){
				header("Location: ?mod=sale&act=sale&err=1");
				exit();
			}

			$productModel = new Product();

			$maNV = "NV01";
			$customer = $_SESSION['customer'];

			$customer['code'] = "KH".$customer['code'];

			$cart = $_SESSION['cart'];

			$hoadon = array();
			$hoadon['MaHD'] = $customer['code'].'_'.$maNV.'_'.time();
			$hoadon['MaKH'] = $customer['code'];
			$hoadon['MaNV'] = $maNV;
			$hoadon['Date'] = date("Y-m-d H:i:s");

			$bill = new Bill();

			$bill->insert($hoadon);

			$tongtien = 0;
			foreach ($cart as $product) {
				$pro['MaHD'] = $hoadon['MaHD'];
				$pro['MaSP'] = $product['code'];
				$pro['quantity'] = $product['quantity'];
				$pro['price'] = $product['price'];

				$pro['TongTien'] = $product['price'] * $pro['quantity'];

				$tongtien += $pro['TongTien'];

				$bill_detail = new BillDetail();
				$bill_detail->insert($pro);


			}
			$ubill = array();
			$ubill['MaHD'] = $hoadon['MaHD'];
			$ubill['TongTien'] = $tongtien;

			$bill->update($ubill);

			unset($_SESSION['cart']);
			unset($_SESSION['customer']);
			
			header("Location: ?mod=bill&act=detail&code=".$hoadon['MaHD']);



		}














	}
?>