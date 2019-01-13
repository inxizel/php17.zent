<?php
    include('database.php');
    if(isset($_GET['id'])){

        $maSp = $_GET['id'];
    }
    $sql  = "SELECT * FROM PRODUCT where product_id = '".$maSp."' ";

    $result = $conn->query($sql);

    $row = $result->fetch_assoc(); 
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
<body>
    <div class="container">
        <form action="update_process.php" method="post" role="form">
            <legend><h1 class="text-center">Thong Tin Sinh Vien</h1></legend>
            
            <div class="form-group">
                <label for="">Ma San Pham</label>
                <input type="text" class="form-control" id="" placeholder="Nhập tên đăng nhập" name="maSp" value="<?=$row['product_id']?>">
            </div>
            
            <div class="form-group">
                <label for="">Ten San Pham</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào mật khẩu" name="name" value="<?=$row['product_name']?>">
            </div>  
            <div class="form-group">
                <label for="">So Luong</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào mật khẩu" name="soLuong" value="<?=$row['soLuong']?>">
            </div>
            <div class="form-group">
                <label for="">Đơn Giá</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào mật khẩu" name="donGia" value="<?=$row['product_price']?>">
            </div>   
             
            <button type="submit" name ="submit" class="btn btn-primary">Sửa Sản Phẩm</button>
        </form>
    </div>
</body>
</html>