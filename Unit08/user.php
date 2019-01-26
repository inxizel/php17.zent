<?php
	
	session_start();
	$mod = isset($_GET['mod'])?$_GET['mod']:'';
	$act = isset($_GET['act'])?$_GET['act']:'';

	switch ($mod) {
		case 'login':

			require_once('controllers/UserController.php');
			$user_controller = new UserController();
			switch ($act) {
				case 'login':
					$user_controller->login();

					break;
				case 'logout':
					$user_controller->logout();

					break;
				default:
					$user_controller->show();
					break;
			}
			break;
	
		default:
			require_once('controllers/UserController.php');
			$user_controller = new UserController();
			$user_controller->show();
			break;
		}

