<?php
    include_once('template/header.php');
    include_once('template/sidebar.php');
?>
    <div class="container">
        <h2 align="center">DANH SÁCH SẢN PHẨM</h2>
        <a href="?mod=product&act=add" class="btn btn-primary">Thêm mới</a>
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
                    foreach ($data as $row) :
                ?>
                  <tr>
                    <td><?=$row['code']?></td>
                    <td><?=$row['name']?></td>
                    <td><?=$row['quantity']?></td>
                    <td><?=number_format($row['price'])?> <sup>vnd</sup></td>
                    <td>
                        <a href="?mod=product&act=detail&code=<?=$row['code']?>" class="btn btn-success">Detail</a> 
                        <a href="?mod=product&act=edit&code=<?=$row['code']?>" class="btn btn-warning">Update</a>  
                        <a href="?mod=product&act=delete&code=<?=$row['code']?>" class="btn btn-danger">Delete</a>

                    </td>
                  </tr>
                <?php endforeach;?>
            </tbody>
          </table>
    </div>
<?php
    include_once('template/footer.php');
?>