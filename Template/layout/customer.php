<?php
    include('../core/database.php');
    $sql  = "SELECT * FROM customers";
    $result = $conn->query($sql);
?>

<div class="container">
        <h2 align="center">DANH SÁCH KHÁCH HÀNG</h2>
        <a href="customer_add.php" class="btn btn-primary">Thêm mới</a>
        <table class="table" id="myTable">
            <thead>
              <tr>
                <th>Mã khách hàng</th>
                <th>Tên khách hàng</th>
                <th>Email</th>
                <th>Điện thoại</th>
                <th>Địa chỉ</th>
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
                    <td><?=$row['email']?></td>
                    <td><?=$row['mobile']?></td>
                    <td><?=$row['address']?></td>
                    <td>
                        <a href="customer_detail.php?code=<?=$row['code']?>" class="btn btn-success">Detail</a> 
                         <a href="customer_edit.php?code=<?=$row['code']?>" class="btn btn-warning">Update</a>  
                        <a href="customer_delete.php?code=<?=$row['code']?>" class="btn btn-danger">Delete</a>

                    </td>
                  </tr>
                <?php endwhile;?>
            </tbody>
          </table>
    </div>