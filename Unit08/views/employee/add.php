<?php
    include_once('template/header.php');
    include_once('template/sidebar.php');
?>
<div class="container">
    <form action="?mod=employee&act=store" method="post" role="form">
        <legend><h1 class="text-center">Thêm Nhân Viên</h1></legend>
        
        <div class="form-group">
            <label for="">Mã nhân viên</label>
            <input type="text" class="form-control" id="" placeholder="" name="code" value="<?=$id_add?>" readonly>
        </div>
        
        <div class="form-group">
            <label for="">Tên nhân viên</label>
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
        <div class="form-group">
            <label for="">Mật khẩu</label>
            <input type="text" class="form-control" id="" placeholder="" name="password">
        </div>
         
        <button type="submit" name ="submit" class="btn btn-primary">Thêm Nhân Viên</button>
    </form>
</div>
<?php
    include_once('template/footer.php');
?>