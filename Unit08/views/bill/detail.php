<?php
    include_once('template/header.php');
    include_once('template/sidebar.php');
?>

<div class="container">

    <form action="" method="post" role="form">
        <legend><h1 class="text-center">Thông tin hóa đơn</h1></legend>
        
        <div class="form-group">
            <label for="">Mã hóa đơn</label>
            <input type="text" class="form-control" value="<?=$row['MaHD']?>" readonly >
        </div>
        
        <div class="form-group">
            <label for="">Mã khách hàng</label>
            <input type="text" class="form-control" value="<?=$row['MaKH']?>" readonly>
        </div>  
        <div class="form-group">
            <label for="">Mã nhân viên</label>
            <input type="text" class="form-control" value="<?=$row['MaNV']?>" readonly>
        </div>
        <div class="form-group">
            <label for="">Tổng tiền</label>
            <input type="text" class="form-control" value="<?=$row['TongTien']?>" readonly>
        </div> 
        <div class="form-group">
            <label for="">Date</label>
            <input type="text" class="form-control" value="<?=$row['Date']?>" readonly>
        </div>   
         
        
    </form>
    <button class="btn btn-success"><a href="?mod=customer" style="color: #fff">Xem chi tiết hóa đơn</a></button>
</div>
<?php
    include_once('template/footer.php');
?>