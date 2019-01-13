<?php
    include('database.php');
    $sql  = "SELECT * FROM PRODUCT";
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
        <h2 align="center">DANH SÁCH SẢN PHẨM</h2>
        <a href="add.php" class="btn btn-primary">Thêm mới</a>
        <table class="table">
            <thead>
              <tr>
                <th>Mã sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Số lượng</th>
                <th>Đơn giá</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                <?php 
                    while($row = $result->fetch_assoc()) :
                ?>
                  <tr>
                    <td><?=$row['product_id']?></td>
                    <td><?=$row['product_name']?></td>
                    <td><?=$row['soLuong']?></td>
                    <td><?=number_format($row['product_price'])?> <sup>vnd</sup></td>
                    <td>
                        <!-- <a href="add.php" class="btn btn-success">Detail</a>  -->
                         <a href="update.php?id=<?=$row['product_id']?>" class="btn btn-warning">Update</a>  
                        <a href="delete_process.php?id=<?=$row['product_id']?>" class="btn btn-danger">Delete</a>

                    </td>
                  </tr>
                <?php endwhile;?>
            </tbody>
          </table>
    </div>
</body>
</html>