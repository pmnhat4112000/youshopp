<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="assets/frontend/img/logoweb.jpg" type="image/x-icon">
	<title>Home</title>
	
<link rel="stylesheet" type="text/css" href="assets/frontend/slick-1.8.1/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="assets/frontend/slick-1.8.1/slick/slick-theme.css"/>
 	<link rel="stylesheet" href="assets/frontend/fontawesome-free-5.15.3-web/css/all.min.css">
	 <link rel="stylesheet" href="assets/frontend/cafe.css/asset.css">
	<link rel="stylesheet" href="assets/frontend/cafe.css/gridsys.css">
	<link rel="stylesheet" href="assets/frontend/cafe.css/reponsive.css">
	
	 <link rel="stylesheet" href="assets/frontend/cafe.css/fromuser.css">

<style>
	 html{
  cursor: url("assets/frontend/img/mouse.png"), pointer;
}

	.products-menu{
        position: relative;
    }

    .submenu2{
        display: none;
        background-color: #fff;
        top: 20px;
        position: absolute;
        width: 100%;
        z-index: 2;
    }
    
    .submenu2 li a{
        padding: 5px 5px;
        font-size: 14px;
    }
    .products-menu:hover .submenu2{
        display: block;
    }
    .pagination-number{width: 40px;

    }
}

</style>

</head>
<body>

	<div class="app">

<!--Start of Fchat.vn--><script type="text/javascript" src="https://cdn.fchat.vn/assets/embed/webchat.js?id=61d99fcc2e4218048c1eb09a" async="async"></script><!--End of Fchat.vn-->


		<?php include "HeaderView.php"; ?>

		<!-- from sigin -resgis -->

		<!-- title - sale -->
		<div class="content-sale">
			<p>SUMMER SALE - SAVE UP TO 10%</p>	
		</div>
		<!-- banner silde -->
			<div class="content-slide autoslide " align="center">
				
				<div ><img src="assets/frontend/img/slideshow_1_hotdeal.jpg" alt="" class="slide-sale ">
				</div>
				<div><img src="assets/frontend/img/slideshow_2.jpg" alt="" class="slide-sale ">
				</div>
				
				<div><img src="assets/frontend/img/slideshow_3.jpg" alt="" class="slide-sale ">
				</div>
				<div>
					<img src="assets/frontend/img/slideshow_4_hotdeal.jpg" alt="" class="slide-sale ">
				</div>  
			
			</div>

			

			<!-- lo go san pham -->
			<div class="container">	
				<div class="content-list">
					<h2 class="list-text" >LOGO SẢN PHẨM</h2>
				</div>
			</div>
			<div class="content-show__list">
						
				<div class="show-list">
							
						<img src="assets/frontend/img/img_home_list_icon_1.png" alt=""
							 class="show-list__text">
							<span class="show-list__text-op">Cafe</span>
				</div> 
	
				<div class="show-list show-mobile" style="background-color: #9c4">
							<img src="assets/frontend/img/img_home_list_icon_2.png" alt=""
							 class="show-list__text">
							 <span class="show-list__text-op2">Trà</span>
				 </div>
						
				<div class="show-list" style="background-color:#354">
							<img src="assets/frontend/img/img_home_list_icon_3.png" alt=""
							 class="show-list__text img-list3">
							 <span class="show-list__text-op3">Bia</span>
					</div>
							
				</div>

				<!-- content product -->
		  <div class="content-banner">
				<?php echo $this->view; ?>
			</div>
				<!-- footer -->
			<footer class="footer" style="margin-top: 50px;">	
					
				<div class="grid">
	
				<div class="row row__mobile">

					

						<div class="column-12 col cl-12">

							<div class="column-4-12 c-6 c-12">	
								
							<div href="#" class=" ">
								<div class="logo-address" >
									<img src="assets/frontend/img/logo.png" alt="" class="logo-sp" width="120px" height="30px">
									
								</div>

									<p class="
address">Công ty cổ phần New Retail CPG </p>
	<p class="
address">Địa chỉ: 313 Nguyễn Thị Thập, Phường Tân Phú, Quận 07, Thành phố Hồ Chí Minh</p>
	<p class="
address">Hotline: 19003454</p>
	<p class="
address">Phone: 028assets/frontend4455.3454</p>
						



								</div>
							</div>


							<div class="column-4-12 c-6 c-12">	
								
							
								<h3 class="support">Hỗ trợ</h3>
									<li class="support-item"><a href="#">Tìm kiếm</a></li>
									
									<li class="support-item"><a href="#">Giới thiệu</a></li>

									<li class="support-item"> <a href="#">Chính sách đổi trả</a></li>

									<li class="support-item"><a href="#">Chính sách bảo mật</a></li>

									<li class="support-item"><a href="#">Điều khoản bảo mật</a></li>
						



								
							</div>



							<div class="column-4-12 c-6 c-12 ">	
								
							
								<h3 class="hottel">Chăm sóc khách hàng</h3>
									<p class="sdt">19003454</p>
						



								
							</div>
						</div>
					</div>

					
				</div>
	
			</footer>
					<div class="footer-copyright">
						<span >Copyright © 2021</span> <span class="foot"> Youshop - Shop your own way.</span> <span class="foot">Powered by Haravan</span> 
					</div>
				

			

		</div>
				




  

	
	
</body>

  <script src="assets/frontend/jquery/jquery-3.6.0.js" ></script>
	
<script src="assets/frontend/jquery/jquery.min.js"></script>

<script type="text/javascript" src="assets/frontend/jquery/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="assets/frontend/jquery/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="assets/frontend/slick-1.8.1/slick/slick.min.js"></script>
  <script type="text/javascript" src="assets/frontend/slick-1.8.1/slick/slick.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
	  
	 
<script src="assets/frontend/js/main.js"></script>
	 <script src="assets/frontend/js/form.js"></script>
	 <script src="assets/frontend/js/search.js"></script>
	 

</html>