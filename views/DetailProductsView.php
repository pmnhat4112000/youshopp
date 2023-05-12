			<?php 
			//load file LayoutTrangTrong.php vao day
			$this->fileLayout = "LayoutTrangTrong.php";
			?>
			<style>
				.btn-left-quantity,
.btn-right-quantity {
    cursor: pointer;
    font-weight: 600;
    width: 32px;
    border-radius: 5px;
    height: 49px;
    color: #fff;
    background: var(--bg-color);
    border: 1px solid #e1e1e1;
}
			</style>

			<div class="details_product">
					<div class="home-list__product">
						<span><a href="">Trang chủ</a>  /</span>
						<span><a href="index.php?controller=products&action=category"> sản phẩm</a>  /</span>
						<span><a><?php echo $record->name; ?></a> </span>
					</div>
				<div class="grid">
					<div class="row">


			<div class="column-12-product">
			<div class="column-6-12">
			<div class="img-product__details" style="box-shadow:1px 0 3px #8ae">
			<img src="assets/upload/products/<?php echo $record->photo; ?>" alt="">
			</div>
			</div>


			<div class="column-6-12">
			<h1 class="product-title">
			<?php echo $record->name; ?>
			</h1>
			<div class="product-about">
			<p><?php
			echo $record->description;
			 ?> </p>
			</div>

			<div class="product-price">
			<span class="pro-sale">
				<?php $categoryp = $this->modelGetRecord($record->id);
			echo isset($categoryp->discount) ? $categoryp->discount : "";
			 ?>%</span>
			<span class="pro-price"><span class="price product-price"> <?php echo number_format($record->price - $record->price * $record->discount/100); ?>đ</span>
			<span class="pro-del"><?php echo number_format($record->price); ?>₫</span>
			</div>

			<!-- js tăng xuống -->
				<script type="text/javascript">
					var i = 0;
					function trusp(){
						 
						if(i>1){
							i--;
							document.getElementById("inc").value = i;
						}
					}
					function tangsp(){
						 
						
							i++;
							document.getElementById("inc").value = i;
						
					}

				</script>
			<!-- end -->

			<div class="product-selec-number all-add-mb">
			<input type="button" onclick="trusp();" value="-" class=" btn-left-quantity"> 
			<input type="text" id="inc" value="1"  min="1" 
			class="product-sl">
			<input type="button" onclick="tangsp();" value="+" class="btn-right-quantity "> 
			<div class="product-add" >
			<a href="index.php?controller=cart&action=create&id=<?php echo $record->id; ?>"><button type="button" class="btn-product-add">Thêm vào giỏ</button></a>
			
			</div>
			</div>


								<div class="product-about-2">
									<table cellpadding="0" cellspacing="0" border="1">
									<tr>
									<td class="pro-about" style="font-size: 14px">
										<strong >Tên sản phẩm</strong>
									</td> 
									<td> <span class="pro-about-text"><?php echo $record->name; ?></span>  </td>
									</tr>
									<tr>
									<td class="pro-about" style="font-size: 14px">
										<strong > Thương Hiệu </strong>
									</td> 
									<td>
										<span class="pro-about-text">
										<?php $category = $this->modelGetCategory($record->category_id);
	    										echo isset($category->name) ? $category->name : ""; ?>
	    			
	    								</span>  </td>
									</tr>
									
									




									<tr>
									

										<style>
											.fa-star{
                              					font-size: 18px;
                              					color: rgba(255, 255, 0 ,.8);
											}
										</style>
	  
	    <table style="width: 100%;"> <h4 > Rating</h4>
	      <tr>
	        <td style=""><i class="fas fa-star"></td>
	        <td style="text-align:right;"><span class="label label-primary"><?php echo $this->modelGetStar($record->id,1); ?> vote</span></td>
	      </tr>
	      <tr>
	        <td style=""><i class="fas fa-star"><i class="fas fa-star"></td>
	        <td style="text-align:right;"><span class="label label-warning"><?php echo $this->modelGetStar($record->id,2); ?> vote</span></td>
	      </tr>
	      <tr>
	        <td style=""><i class="fas fa-star"><i class="fas fa-star"><i class="fas fa-star"></td>
	        <td style="text-align:right;"><span class="label label-danger"><?php echo $this->modelGetStar($record->id,3); ?> vote</span></td>
	      </tr>
	      <tr>
	        <td style=""><i class="fas fa-star"><i class="fas fa-star"><i class="fas fa-star"><i class="fas fa-star"></td>
	        <td style="text-align:right;"><span class="label label-info"><?php echo $this->modelGetStar($record->id,4); ?> vote</span></td>
	      </tr>
	      <tr>
	        <td style=";"><i class="fas fa-star"><i class="fas fa-star"><i class="fas fa-star"><i class="fas fa-star"><i class="fas fa-star"></td>
	        <td style="text-align:right;"><span class="label label-success"><?php echo $this->modelGetStar($record->id,5); ?> vote</span></td>
	      </tr>
	    </table>
	    <br>
	  
									
									</tr>



									</table>
									
								</div>



			

			</div>	




			</div>

			<div class="description-product" style="border-top: 1px solid #ccc;margin-top: 65px;">
			<label for="" class="mota" style="">MÔ TẢ</label>


			<div class="description-pro" style="font-size:18px" >
			<span> <?php echo $record->content; ?></span>
			<p align="center"><img src="assets/frontend/img/product-mota.png" alt="" style=""></p>

			</div>

			<!-- sản phảm liên quan -->
			<div class="product-lq">
			<h2 class="pro-lq" style="text-align:center"> Các Sản Phẩm Khác </h2>
			<div class="pro-follow">


			<?php $Other = $this->modelFlowPro(); ?>

			<div class="col-4sp autoproduct" >

				<?php foreach($Other as $rows): ?>
			<div class="column-4-1 c-4 c-2">	

			<div href="#" class="">
			<div class="product-img" >
			<a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><img src="assets/upload/products/<?php echo $rows->photo; ?>" alt="" class="home-sp"></a>

			<?php if($rows->discount > 0): ?>
                  <div class="salee"><?php echo $rows->discount; ?>% </div>
                <?php endif; ?>
			</div>

			<h4 class="product-name" ><a href=""><?php echo $rows->name; ?></a></h4>
			<div class="product-man">
			<a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"> <span class="product-man1" >
                                <?php echo number_format($rows->price); ?>đ
                             </span>
			<span class="product-man2"><?php echo number_format($rows->price - ($rows->price * $rows->discount)/100); ?> đ</span></a>
			</div>



			</div>
			</div>

			


			



			
			<?php endforeach; ?>

			</div>

		
			</div>

			</div>


			</div>







			</div>

			</div>	
			</div>

			</div>
