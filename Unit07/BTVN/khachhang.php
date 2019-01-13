<?php
    include('database.php');
    $sql  = "SELECT * FROM khachhang";
    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Zent Group</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h2 align="center">DANH SÁCH KHÁCH HÀNG</h2>
        <a href="add.php" class="btn btn-primary">Thêm mới</a>
        <table class="table">
            <thead>
              <tr>
                <th>Mã khách hàng</th>
                <th>Tên khách hàng</th>
                <th>Tuổi</th>
                <th>Địa chỉ</th>
                <!-- <th>Action</th> -->
              </tr>
            </thead>
            <tbody>
                <?php 
                    while($row = $result->fetch_assoc()) :
                ?>
                  <tr>
                    <td><?=$row['khachhang_id']?></td>
                    <td><?=$row['khachhang_name']?></td>
                    <td><?=$row['khachhang_age']?></td>
                    <td><?=$row['khachhang_add']?></td>
                    <!-- <td>
                        <a href="add.php" class="btn btn-success">Detail</a> 
                         <a href="update.php?id=<?=$row['product_id']?>" class="btn btn-warning">Update</a>  
                        <a href="delete_process.php?id=<?=$row['product_id']?>" class="btn btn-danger">Delete</a>

                    </td> -->
                  </tr>
                <?php endwhile;?>
            </tbody>
          </table>
    </div>
</body>
</html>