<?php
	
	session_start();
	$mod = isset($_GET['mod'])?$_GET['mod']:'';
	$act = isset($_GET['act'])?$_GET['act']:'';

	switch ($mod) {
		case 'cart':
			require_once('controllers/CartController.php');

			$cart_controller = new CartController();
			switch ($act) {
				case 'addToCart':
					$cart_controller->addToCart();
					break;
				case 'remove_product':
					$cart_controller->remove_product();
					break;

				case 'checkout':
					$cart_controller->checkout();
					break;
				default:
					$cart_controller->show();
					break;
			}
			break;
		case 'product':
			require_once('controllers/ProductController.php');

			$product_controller = new ProductController();
			switch ($act) {
				case 'detail':
	
					$product_controller->detail();
					break;
				default:
					break;
			}
			break;
		case 'sale':
			require_once('controllers/SaleController.php');
			$sale_controller = new SaleController();
			switch ($act) {
				case 'creat_bill':
					$sale_controller->show();
					break;
				case 'purchase':
					$sale_controller->purchase();
					break;
				case 'sale':
					$sale_controller->sale();
					break;
				case 'addToCart':
					$sale_controller->addToCart();
					break;
				case 'remove_product':
					$sale_controller->remove_product();
					break;
				case 'payment':
					$sale_controller->payment();
					break;
				
				default:
					$sale_controller->show();
					break;
			}
			break;
		default:
			require_once('controllers/ProductController.php');
			$product_controller = new ProductController();
			$product_controller->showmain();
			break;
		}

