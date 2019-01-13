<?php
    include('../core/database.php');
    $sql  = "SELECT * FROM PRODUCTS";
    $result = $conn->query($sql);
?>

    <div class="container">
        <h2 align="center">DANH SÁCH SẢN PHẨM</h2>
        <a href="product_add.php" class="btn btn-primary">Thêm mới</a>
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
                    <td><?=$row['code']?></td>
                    <td><?=$row['name']?></td>
                    <td><?=$row['quantity']?></td>
                    <td><?=number_format($row['price'])?> <sup>vnd</sup></td>
                    <td>
                        <a href="add.php" class="btn btn-success">Detail</a> 
                        <a href="product_edit.php?code=<?=$row['code']?>" class="btn btn-warning">Update</a>  
                        <a href="../core/delete_process.php?code=<?=$row['code']?>" class="btn btn-danger">Delete</a>

                    </td>
                  </tr>
                <?php endwhile;?>
            </tbody>
          </table>
    </div>
