<?php
    include_once('template/header1.php');
    include_once('template/sidebar.php');
?>
    <div class="container">
        <h2 align="center">DANH SÁCH SẢN PHẨM</h2>
        
        <table class="table">
            <thead>
              <tr>
                <th>STT</th>
                <th>Mã Hóa Đơn</th>
                <th>Mã KH</th>
                <th>Tổng Tiền</th>
                <th>Date</th>
              </tr>
            </thead>
            <tbody>
                <?php 
                    foreach ($data as $row) :
                ?>
                  <tr>
                    <td><?=$row['code']?></td>
                    <td><?=$row['MaHD']?></td>
                    <td><?=$row['MaKH']?></td>
                    <td><?=number_format($row['TongTien'])?> <sup>vnd</sup></td>
                    <td>
                        <a href="?mod=bill&act=detail&code=<?=$row['MaHD']?>" class="btn btn-success">Detail</a> 
                        <a href="?mod=bill&act=xuli&code=<?=$row['MaHD']?>" class="btn btn-warning">Xử lí</a>  
                        <a href="?mod=bill&act=delete&code=<?=$row['code']?>" class="btn btn-danger">Delete</a>

                    </td>
                  </tr>
                <?php endforeach;?>
            </tbody>
          </table>
    </div>
<?php
    include_once('template/footer1.php');
?>