<?php
    include('../core/database.php');
    if(isset($_GET['code'])){

        $code = $_GET['code'];
    }
    $sql  = "SELECT * FROM EMPLOYEES ORDER BY CODE DESC LIMIT 1";

    $result = $conn->query($sql);

    $row = $result->fetch_assoc();

    $max_id = $row['code'] + 1;

?>
<div class="container">
    <form action="../core/employee_add_process.php" method="post" role="form">
        <legend><h1 class="text-center">Thêm Nhân Viên</h1></legend>
        
        <div class="form-group">
            <label for="">Mã nhân viên</label>
            <input type="text" class="form-control" id="" placeholder="" name="code" value="<?=$max_id?>" readonly>
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
