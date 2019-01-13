<?php
    include('../core/database.php');
    if(isset($_GET['code'])){

        $code = $_GET['code'];
    }
    $sql  = "SELECT * FROM CUSTOMERS ORDER BY CODE DESC LIMIT 1";

    $result = $conn->query($sql);

    $row = $result->fetch_assoc();

    $max_id = $row['code'] + 1;

?>
<div class="container">
    <form action="../core/customer_add_process.php" method="post" role="form">
        <legend><h1 class="text-center">Thêm Khách Hàng</h1></legend>
        
        <div class="form-group">
            <label for="">Mã khách hàng</label>
            <input type="text" class="form-control" id="" placeholder="" name="code" value="<?=$max_id?>" readonly>
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
         
        <button type="submit" name ="submit" class="btn btn-primary">Thêm Khách Hàng</button>
    </form>
</div>
