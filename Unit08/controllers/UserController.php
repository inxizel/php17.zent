<?php

	require_once('models/User.php');

	class UserController{

		var $model;
		function __construct(){
			$this->model = new User();
		}
		function show(){
			require_once('views/pages/login.php');
		}
		function login(){
			$data = array();
			$data['email'] = $_POST['email'];
			$data['password'] = $_POST['password'];

			if(empty($data['email']) || empty($data['password'])){
				header("Location: user.php?mod=login&err=1");
			}else{
				$user = $this->model->login($data);
				if(!empty($user['email'])){
					$_SESSION['user'] = $user;
					header("Location: index.php");
				}else{
					header("Location: user.php?mod=login&err=2");
				}
			}

		}
		function logout(){
			unset($_SESSION['user']);
			header("Location: index.php");
		}
	}
?>