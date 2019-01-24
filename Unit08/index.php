<?php
	session_start();
	$mod = isset($_GET['mod'])?$_GET['mod']:'';
	$act = isset($_GET['act'])?$_GET['act']:'';

	switch ($mod) {
		case 'product':
			require_once('controllers/ProductController.php');

			$product_controller = new ProductController();
			switch ($act) {
				case 'list':
					$product_controller->show();
					break;
				case 'detail':
					$product_controller->detail();
					break;
				case 'add':
					$product_controller->add();
					break;
				case 'store':
					$product_controller->store();
					break;
				case 'edit':
					$product_controller->edit();
					break;
				case 'update':
					$product_controller->update();
					break;
				case 'delete':
					$product_controller->delete();
					break;
				default:
					$product_controller->show();
					break;
			}
			break;
		case 'employee':
			require_once('controllers/EmployeeController.php');

			$employee_controller = new EmployeeController();
			switch ($act) {
				case 'list':
					$employee_controller->show();
					break;
				case 'detail':
					$employee_controller->detail();
					break;
				case 'add':
					$employee_controller->add();
					break;
				case 'store':
					$employee_controller->store();
					break;
				case 'edit':
					$employee_controller->edit();
					break;
				case 'update':
					$employee_controller->update();
					break;
				case 'delete':
					$employee_controller->delete();
					break;
				default:
					$employee_controller->show();
					break;
			}
			break;
		case 'customer':
			require_once('controllers/CustomerController.php');

			$customer_controller = new CustomerController();
			switch ($act) {
				case 'list':
					$customer_controller->show();
					break;
				case 'detail':
					$customer_controller->detail();
					break;
				case 'add':
					$customer_controller->add();
					break;
				case 'store':
					$customer_controller->store();
					break;
				case 'edit':
					$customer_controller->edit();
					break;
				case 'update':
					$customer_controller->update();
					break;
				case 'delete':
					$customer_controller->delete();
					break;
				default:
					$customer_controller->show();
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
		case 'bill':
			require_once('controllers/BillController.php');

			$bill_controller = new BillController();
			switch ($act) {
				case 'list':
					$bill_controller->show();
					break;
				case 'detail':
					$bill_controller->detail();
					break;
				case 'add':
					$bill_controller->add();
					break;
				case 'store':
					$bill_controller->store();
					break;
				case 'edit':
					$bill_controller->edit();
					break;
				case 'update':
					$bill_controller->update();
					break;
				case 'delete':
					$bill_controller->delete();
					break;
				default:
					$bill_controller->show();
					break;
			}
			break;
		default:
			echo "Main page";
			break;
	}

