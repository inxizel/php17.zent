<?php
    include('../core/database.php');
    $sql  = "SELECT * FROM employees";
    $result = $conn->query($sql);
?>

<div class="container">
        <h2 align="center">DANH SÁCH NHÂN VIÊN</h2>
        <a href="employee_add.php" class="btn btn-primary">Thêm mới</a>
        <table class="table" id="myTable">
            <thead>
              <tr>
                <th>Mã nhân viên</th>
                <th>Tên nhân viên</th>
                <th>Email</th>
                <th>Điện thoại</th>
                <th>Địa chỉ</th>
                <th>Mật khẩu</th>
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
                    <td><?=$row['password']?></td>
                    <td>
                        <a href="employee_detail.php?code=<?=$row['code']?>" class="btn btn-success">Detail</a> 
                         <a href="employee_edit.php?code=<?=$row['code']?>" class="btn btn-warning">Update</a>  
                        <a href="employee_delete.php?code=<?=$row['code']?>" class="btn btn-danger">Delete</a>

                    </td>
                  </tr>
                <?php endwhile;?>
            </tbody>
          </table>
    </div>