<?php
    include_once('template/header.php');

?>
		<div id="pageContent">
			<div class="container">				
				<!-- title -->
				<div class="title-box">
					<h1 class="text-center text-uppercase title-under">SHOPPING CART</h1>
				</div>
				<!-- /title -->		
				<!-- Shopping cart table -->
				<div class="container-widget">
					<table class="shopping-cart-table">
						<thead>
							<tr>
								<th>Product</th>
								<th>&nbsp;</th>
							
								<th>Unit Price</th>
								<th>Qty</th>
								<th>Subtotal</th>
					
							</tr>
						</thead>
						<tbody>
							<?php foreach ($data as $row) :?>
							<tr>
								<td>
									<div class="shopping-cart-table__product-image">
										<a href="?mod=product&act=detail&code=<?=$row['code']?>">
											<img class="img-responsive" src="public/images/<?=$row['images']?>" alt="">
										</a>
									</div>
								</td>
								<td>
									<h5 class="shopping-cart-table__product-name text-left text-uppercase">
										<a href="product.html"><?=$row['name']?></a>
									</h5>
									<ul class="shopping-cart-table__list-parameters">
										
										<li class="visible-xs">
											<span>Price:</span>
											<span class="price-mobile"><?=number_format($row['price']);?></span>
										</li>
										<li class="visible-xs">
											<span>Qty:</span>
											<!--  -->
											<div class="number input-counter">
											    <a href="?mod=sale&act=addToCart&code=<?=$row['code']?>"><span class="minus-btn"></span></a>
											    <input type="text" value="<?=$row['quantity']?>" size="5">
											    <a href="?mod=sale&act=remove_product&code=<?=$row['code']?>">
											    <span class="plus-btn"></span></a>
											</div>
											<!-- / -->
										</li>
									</ul>																				
								</td>
							
								<td>
									<div class="shopping-cart-table__product-price unit-price">
										<?=number_format($row['price']);?>
									</div>
								</td>
								<td>

										    <a href="?mod=cart&act=addToCart&code=<?=$row['code']?>"><span >+</span></a>
										    <span><?=$row['quantity']?></span>
										    <a href="?mod=cart&act=remove_product&code=<?=$row['code']?>">
										    <span >-</span></a>

										<!-- / -->
									</div>								
								</td>
								<td>
									<div class="shopping-cart-table__product-price subtotal">
										<?=number_format($row['price'] * $row['quantity']);?>
									</div>
								</td>
						
							</tr>	
							<?php endforeach;?>						
						</tbody>
					</table>
				</div>
        
				<div class="divider--md"></div>
				<div class="row">
					<div class="col-md-4">
						<div class=" card card--padding">
							<h4>DISCOUNT CODES</h4>
							<form>
								<div class="form-group">
							      <label for="inputDiscountCodes">Enter your coupon code if you have one.</label>
							      <input type="text" class="form-control" id="inputDiscountCodes">
							    </div>
								<button type="submit" class="btn btn--ys btn-top btn--light">apply coupon</button>
							</form>	
						</div>
					</div>
					<div class="divider--md visible-sm visible-xs"></div>
					<div class="col-md-4">
						<div class=" card card--padding">
							<h4>DISCOUNT CODES</h4>
							<form>
								<div class="form-group">
							      <label for="inputDiscountCodes">Enter your coupon code if you have one.</label>
							      <input type="text" class="form-control" id="inputDiscountCodes">
							    </div>
								<button type="submit" class="btn btn--ys btn-top btn--light">apply coupon</button>
							</form>	
						</div>
					</div>
					<div class="divider--md visible-sm visible-xs"></div>
					<div class="col-md-4">
						
							<table class="table-total">
								<tfoot>
									<tr>
										<th>GRAND TOTAL:</th>
										<td><?=number_format($tongtien)?> vnd</td>
									</tr>
								</tfoot>
							</table>
							<a href="?mod=cart&act=checkout" class="btn btn--ys btn--full btn--xl">PROCEED TO CHECKOUT <span class="icon icon--flippedX icon-reply"></span></a>
			
					</div>
				</div>				
			</div>
		</div>
<?php
    include_once('template/footer.php');
?>