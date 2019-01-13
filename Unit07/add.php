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
        <form action="add_process.php" method="post" role="form">
            <legend><h1 class="text-center">Thong Tin Sinh Vien</h1></legend>
            
            <div class="form-group">
                <label for="">Ma San Pham</label>
                <input type="text" class="form-control" id="" placeholder="Nhập tên đăng nhập" name="maSp">
            </div>
            
            <div class="form-group">
                <label for="">Ten San Pham</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào mật khẩu" name="name">
            </div>  
            <div class="form-group">
                <label for="">So Luong</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào mật khẩu" name="soLuong">
            </div>
            <div class="form-group">
                <label for="">Đơn Giá</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào mật khẩu" name="donGia">
            </div>   
             
            <button type="submit" name ="submit" class="btn btn-primary">Thêm Sản Phẩm</button>
        </form>
    </div>
</body>
</html>