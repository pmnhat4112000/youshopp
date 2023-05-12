<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/frontend/img/logoweb.jpg" type="image/x-icon">
    <title>youshoppp----</title>
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
     .selected_price{
        width: 13%;
    margin-right: 15px;
    margin-bottom: 20px;float: right;
    text-align: center;
    cursor: pointer;
    }
    .selected_price option{
        cursor: pointer;
    }
    .column-3-4-9{
        position: relative;
    }

    .column-3-4-9:hover .cart-home {
    visibility: visible;
  }
  .cart-home{
    position: absolute;
    font-size: 20px;
    bottom: 0;
    right: 13px;
    visibility: hidden;
    color: var(--bg-color);
  }
</style>


</head>

<body>

    <div class="app">
<!--Start of Fchat.vn-->
<script type="text/javascript" src="https://cdn.fchat.vn/assets/embed/webchat.js?id=61d99fcc2e4218048c1eb09a" async="async"></script>

<!--End of Fchat.vn-->
            <!-- header view -->
        <?php include"views/HeaderView.php"; ?>




        <!-- modul list product của mobile -->

        <div class="product-list-mobile ">
            <!-- icon list -->

            <div class="menuOff  ">
                <i class="fas fa-times menuoff"></i>
            </div>

            <h4 class="title-product title-product-mb">DANH MỤC SẢN PHẨM</h4>
            <ul class="list-product tabs list-product-mb">

                <li><a href="" class="link-product">SẢN PHẨM MỚI CẬP NHẬT</a></li>
                <li><a href="#" class="link-product tab-item active">THE COFFEE HOUSE</a></li>

                <li><a href=" #" class="link-product tab-item">CẦU ĐẤT FARM</a></li>


                <li><a href="#" class="link-product tab-item">TSINGTAO</a></li>
            </ul>

            <h5 class="title-product-price title-product-pricemb">GIÁ SẢN PHẨM</h5>
            <ul class="product-price product-price">
                <li class="price-checkbox-mb">

                    <input type="checkbox" id="pr-check1">
                    <label for="pr-check1" class="click__check-price">Dưới 50.000đ</label>

                </li>

                <li class="price-checkbox-mb
                        "><input type="checkbox " id="pr-check2">
                    <label for="pr-check2" class="click__check-price">50.000đ - 100.000đ</label>

                </li>

                <li class="price-checkbox-mb">
                    <input type="checkbox" id="pr-check3">
                    <label for="pr-check3" class="click__check-price">100.000đ - 200.000đ</label>

                </li>

                <li class="price-checkbox-mb">
                    <input type="checkbox" id="pr-check4">
                    <label for="pr-check4" class="click__check-price">Trên 500.000đ</label>

                </li>

            </ul>


        </div>



        





      

        




        <!-- click mục dnah sách sản phẩm mobile -->






        <!-- content prođuct -->

        <div class="content-banner">
            


                      
                            
                           


                  
                           
                        </div>
            
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

                                    <p class="address">Công ty cổ phần New Retail CPG </p>
                                    <p class="address">Địa chỉ: 313 Nguyễn Thị Thập, Phường Tân Phú, Quận 07, Thành phố Hồ Chí Minh</p>
                                    <p class="address">Hotline: 19003454</p>
                                    <p class="address">Phone: 028assets/frontend4455.3454</p>
                        
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
    <script type="text/javascript">
      jQuery('<div class="quantity-nav"><div class="quantity-button quantity-up">+</div><div class="quantity-button quantity-down">-</div></div>').insertAfter('.quantity input');
    jQuery('.quantity').each(function() {
      var spinner = jQuery(this),
        input = spinner.find('input[type="number"]'),
        btnUp = spinner.find('.quantity-up'),
        btnDown = spinner.find('.quantity-down'),
        min = input.attr('min'),
        max = input.attr('max');

      btnUp.click(function() {
        var oldValue = parseFloat(input.val());
        if (oldValue >= max) {
          var newVal = oldValue;
        } else {
          var newVal = oldValue + 1;
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
      });

      btnDown.click(function() {
        var oldValue = parseFloat(input.val());
        if (oldValue <= min) {
          var newVal = oldValue;
        } else {
          var newVal = oldValue - 1;
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
      });

    });
</script>

      
</html>