<?php

	include('product.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>

<body class="container">
<h1 class =" text-center">Danh sách giỏ hàng</h1>
<table class="table table-striped table-vcenter">
<thead>
<tr>
<th>Ma SP</th>
<th>Ten SP</th>
<th>So Luong</th>
<th>Đơn giá</th>
<th>Gia</th>


</tr>
</thead>
<tbody>


<?php 

	foreach ($_SESSION['cart'] as $key => $value):

	$arr = $value;
	
?>


<tr>
    <td class="text-primary"><?=$arr['maSp']?></td>
	<td class="text-primary"><?=$arr['name']?></td>
	<td class="text-primary"><?=$arr['soluong']?></td>
	<td class="text-primary"><?=number_format($arr['gia'])?></td>
	<td class="text-primary"><?=number_format($arr['gia']*$arr['soluong'])?> <sup>vnđ</sup></td>

</tr>

<?php endforeach;?>
  

  

     

                                 
</tbody>
</table>
</body>
</html>