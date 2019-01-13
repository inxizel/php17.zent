<?php
	session_start();
	if(isset($_POST['submit'])){

		$maSv = $_POST['maSv'];
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$gioitinh = $_POST['gioitinh'];
		$add = $_POST['add'];

		$sv = array();

		$sv['maSv'] = $maSv;
		$sv['name'] = $name;
		$sv['phone'] = $phone;
		$sv['email'] = $email;
		$sv['gioitinh'] = $gioitinh;
		$sv['add'] = $add;

		if(!empty($maSv)&& !empty($name) && !empty($phone) && !empty($email) && !empty($gioitinh) && !empty($add)){
			$_SESSION['student'][$maSv] = $sv;
			
		}else{
			$_SESSION['err'] = true;
		}

		header("Location: list.php");
	}
?>