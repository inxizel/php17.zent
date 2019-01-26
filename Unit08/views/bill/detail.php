<?php
    include_once('template/header1.php');
    include_once('template/sidebar.php');
?>
<div class="container">
    <h2 align="center">DANH SÁCH KHÁCH HÀNG</h2>
    <a href="?mod=bill" class="btn btn-primary">Trở lại</a>
    <table class="table" id="myTable">
        <thead>
          <tr>
            <th>Mã Sản Phẩm</th>
            <th>Số lượng</th>
            <th>Đơn Giá</th>
            <th>Tổng Tiền</th>
          </tr>
        </thead>
        <tbody>
            <?php 
                foreach ($data as $row) :
            ?>
              <tr>
                <td><?=$row['MaSP']?></td>
                <td><?=$row['quantity']?></td>
                <td><?=$row['price']?></td>
                <td><?=$row['TongTien']?></td>
              </tr>
            <?php endforeach;?>
        </tbody>
      </table>
</div>
<?php
    include_once('template/footer1.php');
?>