<?php
	session_start();
	if(isset($_POST['submit'])){

		$maSv = $_POST['maSv'];
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$gioitinh = $_POST['gioitinh'];
		$add = $_POST['add'];

		if(!empty($maSv)&& !empty($name) && !empty($phone) && !empty($email) && !empty($gioitinh) && !empty($add)){
			$_SESSION['maSv'] = $maSv;
			$_SESSION['name'] = $name;
			$_SESSION['phone'] = $phone;
			$_SESSION['email'] = $email;
			$_SESSION['gioitinh'] = $gioitinh;
			$_SESSION['add'] = $add;

			$_SESSION['err'] = false;
		}else{
			$_SESSION['err'] = true;
		}

		header("Location: show.php");
	}
?>