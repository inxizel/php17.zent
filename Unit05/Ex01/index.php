<?php
	include('product.php');

	echo "<pre>";
		print_r($_SESSION['product']);
	echo "</pre>";
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
<h1 class =" text-center">Danh sách sản phẩm</h1>
<button type="button" class="btn btn-success"><a  href="cart.php">Giỏ Hàng</a></button>
<table class="table table-striped table-vcenter">
<thead>
<tr>
<th>Ma SP</th>
<th>Ten SP</th>
<th>So Luong</th>
<th>Gia</th>

<th>Action</th>

</tr>
</thead>
<tbody>


<?php 

	foreach ($_SESSION['product'] as $key => $value):

	$arr = $value;
	
?>


<tr>
    <td class="text-primary"><?=$arr['maSp']?></td>
	<td class="text-primary"><?=$arr['name']?></td>
	<td class="text-primary"><?=$arr['soluong']?></td>
	<td class="text-primary"><?=number_format($arr['gia'])?> <sup>vnđ</sup></td>

 
	<td class="text-success">
		<a href="cart_action.php?code=<?=$arr['maSp']?>" class="label label-success">Them vao gio</a>
		
	</td>
</tr>

<?php endforeach;?>
  

  

     

                                 
</tbody>
</table>
</body>
</html>