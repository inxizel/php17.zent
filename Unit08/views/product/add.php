<?php
    include_once('template/header.php');
    include_once('template/sidebar.php');
?>
    <div class="container">
        <form action="?mod=product&act=store" method="post" role="form">
            <legend><h1 class="text-center">Thong Tin San Pham</h1></legend>
            
            <div class="form-group">
                <label for="">Ma San Pham</label>
                <input type="text" class="form-control" id="" placeholder="" name="code" value="<?=$id_add?>" readonly>
            </div>
            
            <div class="form-group">
                <label for="">Ten San Pham</label>
                <input type="text" class="form-control" id="" placeholder="" name="name">
            </div>  
            <div class="form-group">
                <label for="">So Luong</label>
                <input type="text" class="form-control" id="" placeholder="" name="quantity">
            </div>
            <div class="form-group">
                <label for="">Đơn Giá</label>
                <input type="text" class="form-control" id="" placeholder="" name="price">
            </div>   
             
            <button type="submit" name ="submit" class="btn btn-primary">Thêm Sản Phẩm</button>
        </form>
    </div>
<?php
    include_once('template/footer.php');
?>