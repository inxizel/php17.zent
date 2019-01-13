<?php
    include_once('template/header.php');
    include_once('template/sidebar.php');
?>
<div class="container">

    <form action="" method="post" role="form">
        <legend><h1 class="text-center">Thông tin sản phẩm</h1></legend>
        
        <div class="form-group">
            <label for="">Mã sản phẩm</label>
            <input type="text" class="form-control" value="<?=$row['code']?>" readonly >
        </div>
        
        <div class="form-group">
            <label for="">Tên sản phẩm</label>
            <input type="text" class="form-control" value="<?=$row['name']?>" readonly>
        </div>  
        <div class="form-group">
            <label for="">Số lượng</label>
            <input type="text" class="form-control" value="<?=$row['quantity']?>" readonly>
        </div>
        <div class="form-group">
            <label for="">Đơn giá</label>
            <input type="text" class="form-control" value="<?=$row['price']?>" readonly>
        </div> 
         
         
        
    </form>
    <button class="btn btn-success"><a href="?mod=product" style="color: #fff">Về danh sách sản phẩm</a></button>
</div>

<?php
    include_once('template/footer.php');
?>