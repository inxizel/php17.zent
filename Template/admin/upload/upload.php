<?php
require('../../core/database.php');

switch($config['shop']){
    case 1:
        $img_save = 'shop1';
        break;
    case 2:
        $img_save = 'shop2';
        break;
}

// Sử dụng vòng lặp for để lưu từng file trong mảng
foreach($_FILES['img_file']['name'] as $name => $value)
{
	$name_img = stripslashes($_FILES['img_file']['name'][$name]);
	$source_img = $_FILES['img_file']['tmp_name'][$name];
	
	$path_img = "../../Content/images/$img_save/" . $name_img;
	
	move_uploaded_file($source_img, $path_img);
}

?>