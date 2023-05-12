<?php

	$this->fileLayout = "LayoutTrangTrong.php";
 ?>

<!--   <?php //require("./application/sendmail.php");

//$tieude = //"đặt hàng youshopp fake thành công";
 //$noidung = //"cảm ơn b"; 
 //$maildathang = $_SESSION['customer_email'];
 //$mail = new Mailer();
 //$mail->dathangmail($tieude,$noidung,$maildathang);
 

  //?> --> 

<style>
 .quantity {
   margin-left: 13px;	
  
}

input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button
{
  -webkit-appearance: none;
  margin: 0;
}

input[type=number]
{
  -moz-appearance: textfield;
}

.quantity input {
  

  text-align: center;
    width: 45px;
    height: 42px;
    line-height: 1.65;
    float: left;
    display: block;
    padding: 0;
    margin: 0;
 
    border: 1px solid #eee;
    border-right: none;
    border-left: none;
}

.quantity input:focus {
  outline: 0;
}

.quantity-nav {
  float: left;
  position: relative;
  height: 42px;
}

.quantity-button {
  position: relative;
  cursor: pointer;
  border-left: 1px solid #eee;
  width: 20px;
  text-align: center;
  color: #333;
  font-size: 13px;
  font-family: "Trebuchet MS", Helvetica, sans-serif !important;
  line-height: 1.7;
  -webkit-transform: translateX(-100%);
  transform: translateX(-100%);
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  -o-user-select: none;
  user-select: none;
}

.quantity-button.quantity-up {
  position: absolute;
    height: 100%;
    color: #fff;
    background: var(--bg-color);
    right: -37px;
    bottom: 0;
    font-size: 23px;
  
    border: 1px solid #eee;
    border-right: 1px solid #eee;
    border-left: none;
}

.quantity-button.quantity-down {
 position: absolute;
    height: 100%;
    color: #fff;
    background: var(--bg-color);
    left: -41px;
    bottom: 0;
    font-size: 23px;
    border: 1px solid #eee;
    border-left: 1px solid #eee;
    border-right: none;
}




.pro-cart::-webkit-scrollbar {
width: 10px;
background-color: #F5F5F5;
}

.pro-cart::-webkit-scrollbar-track {
-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
background-color: #F5F5F5;
border-radius: 5px;

}

.pro-cart::-webkit-scrollbar-thumb {
background-color: var(--bg-color); 
background-image: -webkit-linear-gradient(45deg,rgba(255, 255, 255, .2) 25%,
transparent 25%,
transparent 50%,
rgba(255, 255, 255, .2) 50%,
rgba(255, 255, 255, .2) 75%,
transparent 75%,
transparent);
border-radius: 5px;

}
	.column-8-12{
		flex: 0 0 75%;
		
	}
	.column-4-pay{
		flex: 0 0 25%;
	}
	.delete-itemm {
    display: block;
    text-align: center;
    font-size: 25px;
    
    color: #333;
    z-index: 1;
}	
	@media (max-width: 46.1875em) {
		.column-12-cart{
			flex-wrap: wrap;
			margin: 0;
		}
		.column-8-12{
			flex: 0 0 100%;
			padding: 0 15px;
		}
		.column-4-pay{
			flex: 0 0 100%;
			padding: 0 15px;
		} 
		.cart-price {
   			 text-align: center;
		}

	}


</style>


<div class="home-list__product">
			<span><a href="index.php">Trang chủ</a>  /</span>
			<span><a href="">Giỏ hàng</a> </span>
		
		</div>

		<!-- cart -->
		
		<div class="cart-grid">
			<h2 class="title-cart" style="text-align: center;margin-bottom: 20px;">Giỏ hàng</h2>
			<div class="row">
			
				<div class="column-12-cart">
			<div class="column-8-12">
				<form  method="post" action="index.php?controller=cart&action=update" class="pro-cart" style="height: 250px;
    overflow-y: auto;
    		  ">
				<table class="table-cart">
				
				<thead>
					<tr>
					<th>ảnh</th>
					<th>tên sản phẩm</th>
					<th style="width:70px;white-space: nowrap">Số lượng</th>
					<th>giá</th>

					</tr>	
				</thead>

				<tbody>
					<?php foreach($_SESSION['cart'] as $product): ?>
					<tr class="table-cart-container">
							<td class="image">
									<div class="cart-img" >
									<img  src="assets/upload/products/<?php echo $product['photo']; ?>"  class="img-item" alt="">
					
				
							</div>
						</td>
			
				<td class="image-cart" style="text-align:center">	
						<a href="index.php?controller=products&action=detail&id=<?php echo $product["id"]?>" class="link-name__cart" ><h3 class="cart-name-pro">
							<?php echo $product['name']; ?>
						</h3></a>
						
				
				</td>
				<td>

					<div class="quantity" >
						
						 <input type="number" name="product_<?php echo $product["id"]; ?>" min="1" max="99" step="1" value="<?php echo $product["number"]; ?>" > 
						
					</div>
				</td>
				
			
				<td><p class="cart-price" style="text-align:center">
					<span class="kq-cart" style="font-weight: 600;" ><?php echo number_format($product["price"] - ($product["price"]*$product['discount'])/100); ?>đ </span>
				 <span style="text-decoration: line-through;">
				 	<?php echo number_format($product["price"]); ?>đ
				 </span></p></td>

				<td style="width: 70px;" >
					<a href="index.php?controller=cart&action=delete&id=<?php echo $product['id']; ?>" class="delete-itemm"><i class="fas fa-trash-alt"></i></a>
				</td>
				
				
			
			<?php endforeach; ?>
			</tr>	</tbody>
				
			

					
					

							<tfoot><?php 	if($this->cartNumber() > 0): ?>
						<tr>
							
					 <td colspan="5">
					 	
					 	<a style="padding:5px 15px;float:left" href="index.php?controller=cart&action=destroy">Xoá hết</a>	<input style="float:right; padding: 5px 15px;color:#fff;background-color:var(--bg-color);" type="submit" value="Cập nhật" class="update">
						
					 </td>	
				
					
					
				</tr>
				
					
		<?php endif; ?></tfoot>
					
					
				</table>
				</form>

				
					<a href="index.php" style="text-decoration:none;color:var(--bg-color)"><i class="fas fa-long-arrow-alt-left"></i>quay lại</a>
				

			</div>







			<?php if($this->cartNumber() > 0): ?>
			<div class="cart-pay column-4-pay">
				<div class="pay-all-cart" style="border:1px solid #ccc">
					<div class="title-pay"><h2>Thông tin đơn hàng</h2></div>
					<div class="all-pay"><p>Tổng tiền: <span style="font-size: 20px;color: red;font-weight: 700;float: right;"><?php echo number_format($this->cartTotal()); ?>đ</span></p></div>
					<p class="note-pay">Thanh toán xong vui lòng check email!</p>
				
						<a href="index.php?controller=cart&action=checkout" class="btn-pay">Thanh toán</a>

				
				</div>
			<?php endif; ?>

			</div>
		</div>
		</div>
	</div>



