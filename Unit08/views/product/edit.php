<?php
    include_once('template/header.php');
    include_once('template/sidebar.php');
?>
<div class="container">
    <form action="?mod=product&act=update" method="post" role="form">
        <legend><h1 class="text-center">Thong Tin San Pham</h1></legend>
        
        <div class="form-group">
            <label for="">Ma San Pham</label>
            <input type="text" class="form-control" name="code" value="<?=$row['code']?>" readonly >
        </div>
        
        <div class="form-group">
            <label for="">Ten San Pham</label>
            <input type="text" class="form-control" id="" placeholder="" name="name" value="<?=$row['name']?>">
        </div>  
        <div class="form-group">
            <label for="">So Luong</label>
            <input type="text" class="form-control" id="" placeholder="" name="quantity" value="<?=$row['quantity']?>">
        </div>
        <div class="form-group">
            <label for="">Đơn Giá</label>
            <input type="text" class="form-control" id="" placeholder="" name="price" value="<?=$row['price']?>">
        </div>   
         
        <button type="submit" class="btn btn-primary">Sửa Sản Phẩm</button>
    </form>
</div>
<?php
    include_once('template/footer.php');
?>