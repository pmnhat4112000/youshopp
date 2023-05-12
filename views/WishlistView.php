<?php 
	//load file LayoutTrangTrong.php
	$this->fileLayout = "LayoutTrangTrong.php";
 ?>
 <style>	.column-8-12{
 		width: 	75%;
 }
 .text-name{
 		text-decoration: none;
 		color: #333;
 }
</style>	
 	<div class="cart-grid">
			<h2 class="title-cart" style="text-align: center;margin-bottom: 20px;">list yêu thích</h2>
			<div class="row">
			
				<div class="column-12-cart">
				
						<div class="column-4-12">	
								<img src="assets/frontend/img/cafe.gif" alt="">

						</div>	

				<div class="column-8-12">	
				<table class="table-cart">
				 
				
					<tr>
						<th style="width: 	150px;">ảnh</th>
						<th>tên sản phẩm</th>
						
						<th>giá</th>
						<th></th>
					</tr>	
						<?php 	foreach($_SESSION['wishlist'] as $product): ?>		
					<tr>
						<td><img src="assets/upload/products/<?php echo $product['photo']; ?>" alt="">	
						</td>
						 <td>
						 	<a style="margin-left: 	10px;" class="text-name" href="index.php?controller=products&action=detail&id=<?php echo $product['id']; ?>"><?php echo $product['name']; ?></a>
						 </td>
						<td style="text-align:center">
							<?php 	echo number_format($product['price']-($product['price']*$product['discount'])/100) ?> đ
						</td>		
							 <td>
							 	<a class="text-name" href="index.php?controller=wishlist&action=delete&id=<?php echo $product["id"]; ?>" data-id="2479395"><i class="fa fa-trash"></i></a>
							 </td>

					</tr>
						<?php 	endforeach; ?>
					
				</table>
				
				</div>

			</div>
		</div>
		
		</div>
