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
        <form action="../core/employee_delete_process.php" method="post" role="form">
            <legend><h1 class="text-center">Xoá nhân viên</h1></legend>
            
            <div class="form-group">
                <input type="hidden" class="form-control" name="code" value="<?=$row['code']?>" readonly >
            </div>
            
            <div class="alert alert-warning">
              <strong>Warning!</strong> Nhấn xác nhận để xoá nhân viên <?=$row['name']?>.
            </div>
             
            <button type="submit" name ="submit" class="btn btn-primary">Xoá Nhân Viên</button>
        </form>
    </div>
