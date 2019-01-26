<?php
    include_once('template/header1.php');
    include_once('template/sidebar.php');
?>	
	<div class="container">
    	<div class="row">
    		<div class="col-md-12">
				<h2 align="center"><?=$noti?></h2>
			</div>
		</div>
    	<div class="row">
	    	<div class="col-md-6">
		        
		        <table class="table" id="myTable">
		            <thead>
		              <tr>
		                <th>Mã sản phẩm</th>
		                <th>Tên sản phẩm</th>
		                <th>Số lượng</th>
		                <th>Đơn giá</th>
		               	<th>Action</th>
		              </tr>
		            </thead>
		            <tbody>
		                <?php 
		                    foreach ($product as $row) :
		                ?>
		                  <tr>
		                    <td><?=$row['code']?></td>
		                    <td><?=$row['name']?></td>
		                    <td><?=$row['quantity']?></td>
		                    <td><?=number_format($row['price'])?> <sup>vnd</sup></td>
		                    <td><a href="?mod=sale&act=addToCart&code=<?=$row['code']?>">Add</a></td>
		                  </tr>
		                <?php endforeach;?>
		            </tbody>
		        </table>
		    </div>
		    <div class="col-md-6">
		    	<legend><h1 class="text-center">Thông tin khách hàng</h1></legend>
        
		        <div class="form-group">
		            <label for="">Mã</label>
		            <input type="text" class="form-control" value="<?=$customer['code']?>" readonly >
		        </div>
		        
		        <div class="form-group">
		            <label for="">Tên khách hàng</label>
		            <input type="text" class="form-control" value="<?=$customer['name']?>" readonly>
		        </div>  
		        <div class="form-group">
		            <label for="">Email</label>
		            <input type="text" class="form-control" value="<?=$customer['email']?>" readonly>
		        </div>
		        <div class="form-group">
		            <label for="">Số điện thoại</label>
		            <input type="text" class="form-control" value="<?=$customer['mobile']?>" readonly>
		        </div> 
		        <div class="form-group">
		            <label for="">Địa chỉ</label>
		            <input type="text" class="form-control" value="<?=$customer['address']?>" readonly>
		        </div>  
		        <h2 align="center">DANH SÁCH GIỎ HÀNG</h2>
		        <table class="table">
		            <thead>
		              <tr>
		                <th>Mã SP</th>
		                <th>Tên sản phẩm</th>
		                <th>Số lượng</th>
		                <th>Đơn giá</th>
		               
		              </tr>
		            </thead>
		            <tbody>
		                <?php 
		                    foreach ($cart as $row) :
		                ?>
		                  <tr>
		                    <td><?=$row['code']?></td>
		                    <td><?=$row['name']?></td>
		                    <td>
		                    	<span class="text-success">
		                    		<a href="?mod=sale&act=addToCart&code=<?=$row['code']?>">+</a>
		                    	</span>
		                    	<?=$row['quantity']?> 
		                    	<span class="text-danger">
		                    		<a href="?mod=sale&act=remove_product&code=<?=$row['code']?>">-</a>
		                    	</span>
		                    	</td>
		                    <td><?=number_format($row['price'])?> <sup>vnd</sup></td>
		                    
		                  </tr>
		                <?php endforeach;?>
		            </tbody>
		        </table> 
		        <a href="?mod=sale&act=payment" class="btn btn-primary">Payment</a>
		    </div>
		</div>
    </div>
<?php
    include_once('template/footer1.php');
?>