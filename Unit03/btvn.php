<?php
	// Ex01
	// $str = "Nguyen Chi Van Dung";

	// $arr_str = explode(" ",$str);

	// echo "</br>Ten : ".$arr_str[count($arr_str) - 1];

	// echo "</br>Dem : ";

	// for ($i=1; $i < count($arr_str) - 1; $i++) { 
	// 	# code...
	// 	echo $arr_str[$i] . " ";
	// }

	// echo "</br>Ho : ".$arr_str[0];

	



	// // Ex 02

	// $str = "vŨ văN thƯoNg ";


	// $str1 = mb_strtolower(trim($str));

	// //echo "</br>".$str1;

	// $str2 = ucwords($str1);

	// echo "</br>".$str2.".";



	// Ex 03

	// $str = "Zent1tneZ";
	// $str = str_split($str);

	// //print_r($str);

	// $arr_len = count($str);

	// $loop = ceil($arr_len/2);

	// for ($i=0; $i < $loop; $i++) { 
	// 	# code...
	// 	if($str[$i] !== $str[$arr_len - 1 - $i]){
	// 		echo "<br>Chuoi khong doi xung"; //. $str[$i] . "    " .$str[$arr_len - 1 - $i] ;
	// 		die;
	// 	}
	// }
	// echo "<br>Chuoi doi xung";

	// Ex 04
	
	// //index.php
	
	// include_one('header.php');
	// include_one('sidebar.php');

	// include('core/main.php');

	// include_one('footer.php');

	// //users.php
	
	// include_one('header.php');
	// include_one('sidebar.php');

	// include('core/users.php');

	// include_one('footer.php');

	// // Tuong tu cac page khac


	$n = 8;
	for($i=1;$i<=$n;$i++){
		for($j=$n;$j>=1;$j--){
			if(($j+$i)<=($n+1)){
				echo "<b>#</b>&ensp;";
			}else{
				echo "&emsp;";
			}
		}
		echo "<br><br>";
	}
 ?>

