
 <style>
   .backtop{
    right: 20px;
    bottom: 90px;
   }
     .header__cart-wrap{
        position: relative;
        -webkit-tap-highlight-color: transparent;
     }
     .header__cart-wrap:hover .header__cart-list{
            display: block;
    }
    .header__cart-list {
    position: absolute;
    top: calc(100% + 7px);
    right: 1px;
    background-color: #fff;
    width: 400px;
    border-radius: 2px;
    box-shadow: 0 2px 3.125rem rgba(0, 0, 0, 0.2);
    display: none;
    animation: fadeIn ease-in 0.2s;
    cursor: default;
    z-index: 1;
    }
    .header__cart-list::after{
    cursor: pointer;
    content: "";
    position: absolute;
    right: 3px;
    top: -26px;
    border-width: 13px 18px;
    border-style: solid;
    border-color: transparent transparent #fff transparent;
} 
.header__cart-list-item{
    padding-left: 0;
    list-style: none;
    max-height: 56vh; 
    overflow-y: auto;
}
.header__cart-item {
    display: flex;
    align-items: center;
}

.header__cart-item:hover{
    background-color:#f8f8f8; 
}

.header__cart-img{
    width: 42px;
    height: 42px;
    margin :  12px;
    border: 1px solid #e8e8e8 ;
}   
.header__cart-item-info{
    width: 100%;
    margin-right: 12px;
}
.header__cart-item-head{
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-top: -13px;
    

}

.header__cart-item-name{
    flex: 1;

    font-size: 16px;
    max-height: 4rem;
    overflow: hidden;
    font-weight: 500;
    color: #333;
    margin: 0;
    margin-top: 5px;
    padding-right: 5px;
    display: -webkit-box;
    --webkit-box-orient: vertical;
    --webkit-line-clamp: 2;
    text-align: left;  
}
.header__cart-item-price{
    font-size: 14px;
    font-weight: 400;
    color: #ff0000;
}

.header__cart-item-multiply{
    font-size: 0.9rem;
    margin:  0 4px;
    color :  #757575;
}
.header__cart-item-qnt{
    font-size: 12px;
    color: #757575;
}
.header__cart-item-body{
    display: flex;
    justify-content: space-between;

}

.header__cart-item-description{
    color: #757575;
    font-size: 12px;
    font-weight: 200;
}
.header__cart-item-remove{

    margin-left: 10px;


   text-decoration: none;
    
}
.remove-x{
    font-size: 16px;
    
    color: var(--bg-color);

}

.header__cart-view-cart{
    float: right;
    margin :0 12px 12px 0;
}
.header__cart-view-cart:hover{
    background-color: #f05d41;
}






 @keyframes fadeIn{
    from{
        opacity: 0;
    }
    to{
        opacity: 1;
    }
}
 </style>   


<!-- call -->
        <div class="fade-loading" >
            <div class="phone-call">
                <a href="tel:0389897200"><ion-icon name="call" class="call" ></ion-icon></a>
            </div>

        </div>
        <!-- return top -->
        <div class="backtop">
            <i class="fas fa-chevron-circle-left"></i>
        </div>
        
        <header class="header header__mobile" >
            
            <!-- navbar menu  moblie-->
            
                    
        <label for="nav-mobile-input" class="nav__btn-mobile">
        <i class="fas fa-bars list-dropp"></i>

        </label>

        <input type="checkbox" hidden name="" class="nav__input" id="nav-mobile-input">


        <nav class="navbar__mobile">
    
        <ul class="navbar__list">

            <li class="active"><a href="index.php" class="nav__mobile-link">Trang chủ</a> </li>
           
            <li class=""><a href="#"  class="nav__mobile-link">Sản phẩm</a>   
            </li>
            <li><a href="index.php?controller=abouts"  class="nav__mobile-link">Giới thiệu</a></li>
            <li><a href="index.php?controller=contact"  class="nav__mobile-link">Liên hệ</a></li>
            <li><a href="index.php?controller=news"  class="nav__mobile-link">Tin tức</a></li>
        
                <ul class="mobile__support">
                    <p class="ds kkkk">Bạn cần hỗ trợ?hãy liên hệ với chúng tôi</p>
                    <li class="navbar__hotel">
                        <i class="fas fa-phone-volume hotel-icon"></i>
                        <a href="" class="sdt1">19003454</a>
                    </li>
                    <li class="navbar__hotel">
                        <i class="fas fa-envelope-open-text email-icon"></i>
                        <a href="" class="email">marketinginfo@newretailcpg.vn</a>
                    </li>

              
                </ul>
            
        </ul>

                    </nav>
            
                    <!-- logo home -->
            <div class="header-logo">
            <a href="index.php"><img src="assets/frontend/img/logo.png" alt="" title="trang chủ" class="header__logo-img"></a> 
            </div>


            <!-- js search -->
             <script type="text/javascript">
      function search(){
        //lay gia tri cua id=key
        var key = document.getElementById("key").value;

        //di chuyen den url tim kiem
        if(key == ""){

            location.href = "";
            alert('vui lòng nhập tìm kiếm');
        }
        else{
        location.href = "index.php?controller=search&action=name&key="+key;}
      };
     

      
      //khi an phim enter trong o textbox co id=key thi cung thuc hien tim kiem
      function searchForm(event){
        //phim enter co keyCode = 13
        if(event.keyCode == 13){
          //lay gia tri cua id=key
          var key = document.getElementById("key").value;
          //di chuyen den url tim kiem
          location.href = "index.php?controller=search&action=name&key="+key;
        }
      };
      //-----------------
       
    </script>


    
            <!--  -->
            <!--  seach home -->
            <div class="header-search" >
                <div class="header-search-input" >
                    <div class="search__hee" >

                    <input id="key"  required  autocomplete="off"  type="text" class="search__input" onkeypress="searchForm(event);"  placeholder="Tìm kiếm sản phẩm..." >
                    <button class="search-icon" id="btn-click" type="button" onclick="return search();"> <i class="fas fa-search "></i></button>


                    
                    </div>
                 
                     <!-- cart ajax -->
                    <div class="smart-search">
                          <ul>

                          </ul>
                     </div>
                     <script type="text/javascript">
                       var checc = document.getElementById("btn-click").addEventListener("click", function() {
                    this.style.transform = "translateY(0px)";


})





                     </script>
                     
    <style type="text/css">
        .search-icon {
            cursor: pointer;
    position: absolute;
    right: 10px;
    top: 0;
    color: #fff;
    border: none;
    border-radius: 10px;
    background: linear-gradient(45deg,var(--bg-color), #ccc);
    padding: 8px;
    transform: translateY(-8px);
    box-shadow: 2px 5px 7px #333;
    font-size: 16px;
}
        .smart-search{position: absolute; width: 100%; background: white; height: 250px; overflow:auto; z-index: 1; display: none;border-radius: 5px ;box-shadow: 1px 1px 20px #333}
        .smart-search ul{padding: 0px; margin: 5px; list-style: none;}
        .smart-search ul li{display: flex;border-bottom: 1px solid #dddddd;}
        .smart-search a{
          flex: 1;

            color: #333;
            text-decoration: none;
        }
        .smart-search a:hover{
            color: #fff;
            
            background: linear-gradient(45deg,var(--bg-color),#fff);

        }
        .smart-search img{width: 80px; margin-right: 5px;}
      </style>
                    <!-- end -->
                </div>
                
                <!-- menu pc -->

                    <ul class="header-navbar navbar-mobile-tablet tabs">

                            <li class="tab-item active "><a href="index.php">Trang chủ</a> </li>
                        <li class="tab-item products-menu  "><a class="" href="#">Sản phẩm
                         </a>
                        
                        <ul class="submenu2" >
                            <?php 
                                 $conn = Connection::getInstance();
                                $query = $conn->query("select * from categories where parent_id = 0 order by id desc");
                                $categories = $query->fetchAll();
                               ?>
                               <?php foreach($categories as $rows): ?>
                                <li>
                                    <a href="index.php?controller=products&action=category&id=<?php echo $rows->id; ?>">
                                  <?php  echo $rows->name; ?>
                                </a>
                                </li>
                                <?php 
                                    $querySub = $conn->query("select * from categories where parent_id = {$rows->id} order by id desc");
                                    $categoriesSub = $querySub->fetchAll();
                                 ?>
                                   <?php foreach($categoriesSub as $rowsSub): ?>
                                  <li style="padding-left:20px;">
                                    <a href="index.php?controller=products&action=category&id=<?php echo $rowsSub->id; ?>"><?php echo $rowsSub->name; ?></a>
                                    </li>
                                    <?php endforeach; ?> 
                                 <?php endforeach; ?> 
                        </ul> 
                        </li>
                          
                      
                        <li class="tab-item "><a href="index.php?controller=contact">Hỗ trợ</a></li>
                        <li class="tab-item "> <a href="index.php?controller=news">Tin tức</a></li>
                        <li class="tab-item "><a href="index.php?controller=wishlist">Yêu thích</a></li>
                        <li class="line"></li>
                        
                    </ul>
                      

                
            </div>
                
            <!-- cart -user -->
            <div class="header-user" style="align-items:center">
            <?php if(isset($_SESSION['customer_email'])): ?>
          <a href="#" style="color: var(--bg-color);text-decoration: none;text-overflow: ellipsis  ;white-space: nowrap;overflow-x: hidden">hi <?php echo $_SESSION['customer_email'] ?></a>&nbsp; &nbsp;<a href="index.php?controller=account&action=logout" style="white-space:nowrap;color: var(--bg-color);
        text-decoration: none;">Đăng xuất</a> 
        <?php else: ?>
        <a href="index.php?controller=account&action=login" style="color: var(--bg-color);
        text-decoration: none;white-space: nowrap;align-items: center;text-decoration: none;color:#000;font-weight: 600;">Đăng nhập</a>&nbsp; &nbsp;<a href="index.php?controller=account&action=register" style="color: var(--bg-color);
        text-decoration: none;white-space: nowrap;align-items: center;text-decoration: none;color:#000;font-weight: 600;">Đăng ký</a> 
       <?php endif; ?>
            
               
                <?php 
      
      $numberProduct =  isset($_SESSION['cart'])  ? count($_SESSION['cart']) : 0;
     ?>
                <div href="" style="" class="header__cart-wrap">
                   <a href="index.php?controller=cart"> <i style="color:#fff;background-color: var(--bg-color);" class="fas fa-shopping-cart user-cart">
                    <span class="cart-list mini-cart-count" style="display:block"><?php echo $numberProduct; ?></span>
                    </i>
                    </a>

                    <!-- cart hover -->
                    <div class="header__cart-list ">
                            <h5 style="text-align:left;margin-left: 10px;color:black">Sản phẩm đã thêm</h5>
                        <ul class="header__cart-list-item">
                            <?php if(isset($_SESSION['cart'])): ?>

                        <?php foreach($_SESSION['cart'] as $product): ?>
                            
                            <li class="header__cart-item">
            <img src="assets/upload/products/<?php echo $product['photo']?>" alt="" class="header__cart-img">
                    <div class="header__cart-item-info">
                    <div class="header__cart-item-head">
                        <h5 class="header__cart-item-name">
                            <?php echo$product['name']; ?>
                        </h5>
                        <div class="header__cart-item-price-warp">
                            <span class="header__cart-item-price"><?php echo number_format($product['price']); ?> đ
                </span>

                            <span class="header__cart-item-multiply">x</span>
                            <span class="header__cart-item-qnt"><?php  echo $product['number']; ?></span>
                   
                        </div>   
                        <div class="header__cart-item-remove">
                          
                            <a class="remove-x" href="index.php?controller=cart&action=delete&id=<?php echo $product['id']; ?>"><i class="fas fa-times"></i></a>
                                

                        </div>
                   
                    </div>
                


        </li>
                   
    <?php endforeach; ?> <a href="index.php?controller=cart" style="display: block;;text-decoration:none;background: var(--bg-color);color:#fff;border-radius:10px;margin-top: 10px;">Giỏ hàng</a>
<?php endif; ?>
                            

                        </ul>
                           
                    </div>

            </div>
            </div>


        </header>
        
        <!-- mobilet tablet search -->

        <div class="header__mobile">
        <div class="mobile-search">
                <div class=" mobile-search-input">
                    <div class=" mobile-search__hee">

                        <input  type="text" class=" mobile-search__input" placeholder="Tìm kiếm sản phẩm...">
                    <a href="#" ><i class="fas fa-search mobile-search-icon"></i></a>
                    </div>
                    
                </div>

            </div>
        </div>












