<?php
    include_once('template/header.php');
    include_once('template/sidebar.php');
?>
<div class="container">
    <form action="?mod=customer&act=store" method="post" role="form">
        <legend><h1 class="text-center">Thêm Khách Hàng</h1></legend>
        
        <div class="form-group">
            <label for="">Mã khách hàng</label>
            <input type="text" class="form-control" id="" placeholder="" name="code" value="<?=$id_add?>" readonly>
        </div>
        
        <div class="form-group">
            <label for="">Tên khách hàng</label>
            <input type="text" class="form-control" id="" placeholder="" name="name">
        </div>  
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" class="form-control" id="" placeholder="" name="email">
        </div>
        <div class="form-group">
            <label for="">Số điện thoại</label>
            <input type="text" class="form-control" id="" placeholder="" name="mobile">
        </div>
        <div class="form-group">
            <label for="">Địa chỉ</label>
            <input type="text" class="form-control" id="" placeholder="" name="address">
        </div>     
         
        <button type="submit" class="btn btn-primary">Thêm Khách Hàng</button>
    </form>
</div>
<?php
    include_once('template/footer.php');
?>