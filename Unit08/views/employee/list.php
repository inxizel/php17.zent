<?php
    include_once('template/header.php');
    include_once('template/sidebar.php');
?>
<div class="container">
        <h2 align="center">DANH SÁCH NHÂN VIÊN</h2>
        <a href="?mod=employee&act=add" class="btn btn-primary">Thêm mới</a>
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
                    foreach ($data as $row ):
                    
                ?>
                  <tr>
                    <td><?=$row['code']?></td>
                    <td><?=$row['name']?></td>
                    <td><?=$row['email']?></td>
                    <td><?=$row['mobile']?></td>
                    <td><?=$row['address']?></td>
                    <td><?=md5($row['password'])?></td>
                    <td>
                        <a href="?mod=employee&act=detail&code=<?=$row['code']?>" class="btn btn-success">Detail</a> 
                        <a href="?mod=employee&act=edit&code=<?=$row['code']?>" class="btn btn-warning">Update</a>  
                        <a href="?mod=employee&act=delete&code=<?=$row['code']?>" class="btn btn-danger">Delete</a>

                    </td>
                  </tr>
                <?php endforeach;?>
            </tbody>
          </table>
    </div>
<?php
    include_once('template/footer.php');
?>