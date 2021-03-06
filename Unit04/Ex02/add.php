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
                <label for="">Ma Sinh Vien</label>
                <input type="text" class="form-control" id="" placeholder="Nhập tên đăng nhập" name="maSv">
            </div>
            
            <div class="form-group">
                <label for="">Ho Va Ten</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào mật khẩu" name="name">
            </div>  
            <div class="form-group">
                <label for="">So Dien Thoai</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào mật khẩu" name="phone">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào mật khẩu" name="email">
            </div>   
            <div class="form-group">
	            <label class="radio-inline"><input type="radio" name="gioitinh" value="Nam"> Nam</label>
				<label class="radio-inline"><input type="radio" name="gioitinh" value="Nu"> Nu</label>
				<label class="radio-inline"><input type="radio" name="gioitinh" value="Khac"> Khac</label>
			</div>
            <div class="form-group">
                <label for="">Dia Chi</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào mật khẩu" name="add">
            </div>   
            <button type="submit" name ="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</body>
</html>