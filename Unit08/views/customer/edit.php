<?php
    include_once('template/header.php');
    include_once('template/sidebar.php');
?>
<div class="container">
    <form action="?mod=customer&act=update" method="post" role="form">
        <legend><h1 class="text-center">Thông tin khách hàng</h1></legend>
        
        <div class="form-group">
            <label for="">Mã khách hàng</label>
            <input type="text" class="form-control" name="code" value="<?=$row['code']?>" readonly >
        </div>
        
        <div class="form-group">
            <label for="">Tên khách hàng</label>
            <input type="text" class="form-control" id="" placeholder="" name="name" value="<?=$row['name']?>">
        </div>  
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" class="form-control" id="" placeholder="" name="email" value="<?=$row['email']?>">
        </div>
        <div class="form-group">
            <label for="">Số điện thoại</label>
            <input type="text" class="form-control" id="" placeholder="" name="mobile" value="<?=$row['mobile']?>">
        </div> 
        <div class="form-group">
            <label for="">Địa chỉ</label>
            <input type="text" class="form-control" id="" placeholder="" name="address" value="<?=$row['address']?>">
        </div>   
         
        <button type="submit" class="btn btn-primary">Sửa Khách Hàng</button>
    </form>
</div>
<?php
    include_once('template/footer.php');
?>