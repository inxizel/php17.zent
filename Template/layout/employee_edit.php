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
        <form action="../core/employee_edit_process.php" method="post" role="form">
            <legend><h1 class="text-center">Thông tin nhân viên</h1></legend>
            
            <div class="form-group">
                <label for="">Mã nhân viên</label>
                <input type="text" class="form-control" name="code" value="<?=$row['code']?>" readonly >
            </div>
            
            <div class="form-group">
                <label for="">Tên nhân viên</label>
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
            <div class="form-group">
                <label for="">Mật khẩu</label>
                <input type="text" class="form-control" id="" placeholder="" name="password" value="<?=$row['password']?>">
            </div>   
             
            <button type="submit" name ="submit" class="btn btn-primary">Sửa Nhân Viên</button>
        </form>
    </div>
