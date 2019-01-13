<?php
	session_start();
	echo "<pre>";
		print_r($_SESSION);
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

<button type="button" class="btn btn-primary"><a  href="add.php">Add</a></button>
<table class="table table-striped table-vcenter">
<thead>
<tr>
<th>MaSv</th>
<th>Name</th>
<th>Phone</th>
<th>Email</th>
<th>Gioi tinh</th>
<th>Add</th>
<th>Action</th>

</tr>
</thead>
<tbody>


<?php 

	foreach ($_SESSION['student'] as $key => $value):

	$arr = $value;
	
?>


<tr>
    <td class="text-primary"><?=$arr['maSv']?></td>
	<td class="text-primary"><?=$arr['name']?></td>
	<td class="text-primary"><?=$arr['phone']?></td>
	<td class="text-primary"><?=$arr['email']?></td>
	<td class="text-primary"><?=$arr['gioitinh']?></td>
	<td class="text-primary"><?=$arr['add']?></td>
 
	<td class="text-success">
		<a href="detail.php?code=<?=$arr['maSv']?>" class="label label-success">Xem Thong Tin</a>
		<a href="delete.php?code=<?=$arr['maSv']?>" class="label label-danger">Delete</a>
	</td>
</tr>

<?php endforeach;?>
  

  

     

                                 
</tbody>
</table>
</body>
</html>