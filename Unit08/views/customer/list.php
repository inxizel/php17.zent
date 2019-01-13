<?php
    include_once('template/header.php');
    include_once('template/sidebar.php');
?>
<div class="container">
    <h2 align="center">DANH SÁCH KHÁCH HÀNG</h2>
    <a href="?mod=customer&act=add" class="btn btn-primary">Thêm mới</a>
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
                foreach ($data as $row) :
            ?>
              <tr>
                <td><?=$row['code']?></td>
                <td><?=$row['name']?></td>
                <td><?=$row['email']?></td>
                <td><?=$row['mobile']?></td>
                <td><?=$row['address']?></td>
                <td>
                    <a href="?mod=customer&act=detail&code=<?=$row['code']?>" class="btn btn-success">Detail</a> 
                    <a href="?mod=customer&act=edit&code=<?=$row['code']?>" class="btn btn-warning">Update</a>  
                    <a href="?mod=customer&act=delete&code=<?=$row['code']?>" class="btn btn-danger">Delete</a>

                </td>
              </tr>
            <?php endforeach;?>
        </tbody>
      </table>
</div>
<?php
    include_once('template/footer.php');
?>