<?php
    include('../core/database.php');
    if(isset($_GET['code'])){

        $code = $_GET['code'];
    }
    $sql  = "SELECT * FROM EMPLOYEES where code = '".$code."' ";

    $result = $conn->query($sql);

    $row = $result->fetch_assoc(); 
?>

    <div class="container">

        <form action="" method="post" role="form">
            <legend><h1 class="text-center">Thông tin nhân viên</h1></legend>
            
            <div class="form-group">
                <label for="">Mã nhân viên</label>
                <input type="text" class="form-control" value="<?=$row['code']?>" readonly >
            </div>
            
            <div class="form-group">
                <label for="">Tên nhân viên</label>
                <input type="text" class="form-control" value="<?=$row['name']?>" readonly>
            </div>  
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" value="<?=$row['email']?>" readonly>
            </div>
            <div class="form-group">
                <label for="">Số điện thoại</label>
                <input type="text" class="form-control" value="<?=$row['mobile']?>" readonly>
            </div> 
            <div class="form-group">
                <label for="">Địa chỉ</label>
                <input type="text" class="form-control" value="<?=$row['address']?>" readonly>
            </div>
            <div class="form-group">
                <label for="">Mật khẩu</label>
                <input type="text" class="form-control" value="<?=$row['password']?>" readonly>
            </div>  
             
            
        </form>
        <button class="btn btn-success"><a href="../admin/employee.php" style="color: #fff">Về danh sách nhân viên</a></button>
    </div>
