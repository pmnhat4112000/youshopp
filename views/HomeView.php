<?php 
  //load file layout vao day
  $this->fileLayout = "LayoutTrangChu.php";
 ?>


<style>
  .home-product:hover .cart-home {
    visibility: visible;
  }
  .cart-home{
    position: absolute;
                          font-size: 26px;
                         bottom: -66px;
    right: 13px;
    
                        visibility: hidden;
                        color: var(--bg-color);
  }
  
</style>

     <script type="text/javascript">
       function ajaxAddToCart(id){
    $.get("index.php?controller=cart&action=ajaxCreate&id="+id,function(data){


      alert("Đã thêm sản phẩm vào giỏ hàng");
      //---
      //cap nhat so luong san pham o goc tren phai cua trinh duyet
      $(".mini-cart-count").text(data);
      //---
    });
  }
     </script>

      

     
      <div class="grid grid-full ">
          <?php $categories = $this->modelCategories(); ?>
           

          
            <?php foreach($categories as $itemCategories): ?>
             <div class="content-banner"></div>
             <div class="product-banner" style="" >
       
          <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
      <lottie-player src="https://assets7.lottiefiles.com/private_files/lf30_fz6lkjf0.json"  background="transparent"  speed="1"  style="background: #45c2cc;text-align: center; height: 175px;"  loop autoplay></lottie-player>
         
            </div>
           
        <div class="row  mobile_row ">
           
            <div class="column-12 col">
             
             <?php 
             
              $products = $this->modelProducts($itemCategories->id);
              ?>
             <?php foreach($products as $rows): ?>

             <div class="column-4-12 c-4 c-6 c-6 ">  
                
              <div href="#" class="home-product ">
                <div class="product-img" >
                  <a href="" onclick="ajaxAddToCart(<?php echo $rows->id ?>);">
                    <i class="fas fa-cart-plus cart-home" ></i>
                  </a>
                  <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><img src="assets/upload/products/<?php echo $rows->photo; ?>" alt="" class="home-sp"></a>
                <?php if($rows->discount > 0): ?>
                  <div class="salee"><?php echo $rows->discount; ?>% </div>
                <?php endif; ?>
                <!-- wishlist -->
                <style> .wishlist{
                  position: absolute;
                  top:  0;
                  right: 0; 
  
                  font-size:  16px;
                }
                .tym{
                        color: red;
                }

              </style>  
                <div class="wishlist" title="thêm vào wishlist"><a href="index.php?controller=wishlist&action=create&id=<?php echo $rows->id; ?>"><i class="fa fa-heart tym"></i></a></div>
                <!-- endlist -->
                </div>

                <h4 class="product-name" title="<?php echo $rows->name; ?>" style="text-overflow: ellipsis  ;white-space: nowrap;overflow-x: hidden"><a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></h4>
                <div class="product-man">
                  <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>">

                     
                               <span class="product-man1" >
                                <?php echo number_format($rows->price); ?>đ
                             </span> 
                        
                           <span class="product-man2"><?php echo number_format($rows->price - ($rows->price * $rows->discount)/100); ?> đ</span>
                             
                  
                  
                          </a>

                          <style>
                            .product-man,.price-box{
                                  margin-left: 5px;
                              }
                           
                            .fa-star{

                              font-size: 12px;
                              color: rgba(255, 255, 0 ,.8);
                            }
                          </style>

                           <p class="price-box"> 
                        <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=1" title="1sao"><i class="fas fa-star"></i></a> 
                        <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=2" title="2sao"><i class="fas fa-star"></i></a> 
                        <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=3" title="3sao"><i class="fas fa-star"></i></a> 
                        <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=4" title="4sao"><i class="fas fa-star"></i></a> 
                        <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=5" title="5sao"><i class="fas fa-star"></i></a> 

                      </p>
                </div>

                

                </div>
              </div>
           <?php endforeach; ?>
            </div>

            </div>

              <?php endforeach; ?>
          </div>



             

 


    
 
              

                         


          
            <!-- trà -->
     