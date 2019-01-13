<?php
    include('../core/database.php');
    if(isset($_GET['code'])){

        $code = $_GET['code'];
    }
    $sql  = "SELECT * FROM CUSTOMERS where code = '".$code."' ";

    $result = $conn->query($sql);

    $row = $result->fetch_assoc(); 
?>

    <div class="container">
        <form action="../core/customer_delete_process.php" method="post" role="form">
            <legend><h1 class="text-center">Xoá khách hàng</h1></legend>
            
            <div class="form-group">
                <input type="hidden" class="form-control" name="code" value="<?=$row['code']?>" readonly >
            </div>
            
            <div class="alert alert-warning">
              <strong>Warning!</strong> Nhấn xác nhận để xoá khách hàng <?=$row['name']?>.
            </div>
             
            <button type="submit" name ="submit" class="btn btn-primary">Xoá Khách Hàng</button>
        </form>
    </div>
