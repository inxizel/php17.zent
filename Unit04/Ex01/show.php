<?php
    session_start();
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
    <div class="container text-center" style="width: 500px;">
        <form action="" method="post" role="form">
            <legend><h1 >Thong Tin Sinh Vien</h1></legend>
            <div class="text-center">
            <div class="row">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" style="text-align: right;">
                    <i class="fa fa-key" aria-hidden="true"></i> Ma Sinh Vien
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12" style="text-align: left;">
                    <?=$_SESSION['maSv']?>
                </div>
            </div>
            
            <div class="row">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" style="text-align: right;">
                    <i class="fa fa-key" aria-hidden="true"></i> Ten Sinh Vien
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12" style="text-align: left;">
                    <?=$_SESSION['name']?>
                </div>
            </div>
            <div class="row">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" style="text-align: right;">
                    <i class="fa fa-key" aria-hidden="true"></i> So Dien Thoai
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12" style="text-align: left;">
                    <?=$_SESSION['phone']?>
                </div>
            </div>
            <div class="row">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" style="text-align: right;">
                    <i class="fa fa-key" aria-hidden="true"></i> Email
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12"style="text-align: left;">
                    <?=$_SESSION['email']?>
                </div>
            </div>
            <div class="row">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" style="text-align: right;">
                    <i class="fa fa-key" aria-hidden="true"></i> Gioi Tinh
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12"style="text-align: left;">
                    <?=$_SESSION['gioitinh']?>
                </div>
            </div>
            <div class="row">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" style="text-align: right;">
                    <i class="fa fa-key" aria-hidden="true"></i> Dia Chi
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12" style="text-align: left;">
                    <?=$_SESSION['add']?>
                </div>
            </div> 
        </div>
        </form>
    </div>
</body>
</html>