<?php

	session_start();

    $code = $_GET['code'];

	unset($_SESSION['student'][$code]);

	header("Location: list.php");