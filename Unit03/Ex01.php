<?php
	$str = "Xin chao cac ban!";
	$str_1 = explode(" ", $str);

	echo "<pre>";
		print_r($str_1);
	echo "</pre>";

	$str_2 = implode("&&&", $str_1);

	echo "<br>".$str_2;

	echo "<br>".strlen($str);

	echo "<br>".str_replace("a", "b", $str);