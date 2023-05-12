<?php 
  //load file LayoutTrangTrong.php vao day
  $this->fileLayout = "LayoutTrangTrong.php";
 ?>
<style>



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
        
   <div class="home-list__product">
            <span><a href="">Trang chủ</a>  /</span>
            <span><a href="">Danh mục</a>  /</span>
            <span><a href="">Sản Phẩm</a> </span>
        </div>

        <div class="content-slide ">
            <div><img src="./assets/frontend/img/productall.jpg" alt="" class="slide-sale ">
            </div>
        </div>

 <div class="grid">
                <div class="row ">
                    <div class="column-12-product mb-12 ">
                        <!-- nút bật mô đun moblie -->
                        <div class="product-boloc ">

                            <span style="font-weight:500;" class="open"><i class="fas fa-stream iclist-product-mobile">Bộ lọc</i></span>
                        </div>






                        <!-- prodcut pc -->




                        <div class="column-3-12  ">

                            <h4 class="title-product">DANH MỤC SẢN PHẨM</h4>

                            <ul class="list-product">


                                 <?php 
                                 $conn = Connection::getInstance();
                                $query = $conn->query("select * from categories where parent_id = 0 order by id desc");
                                $categories = $query->fetchAll();
                               ?>
                               <?php foreach($categories as $rows): ?>
                                <li>
                                    <a class="link-product" href="index.php?controller=products&action=category&id=<?php echo $rows->id; ?>">
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

                            <h5 class="title-product-price" style="text-align:center;font-size: 18px;">Tìm theo mức giá </h5>
                            <ul class="product-price">
                                <li style="display:flex;white-space:nowrap;justify-content: space-between;">
                                   <span> Giá từ <input style="width: 100px;text-align:center;border-radius: 3px;" type="number" min="0" value="0" id="fromPrice" class="form-control" />đ
                                   </span>
                                   <span>Đến <input style="width: 100px;text-align:center;border-radius:3px;" type="number" min="0" value="0" id="toPrice" class="form-control"/>đ
                                   </span>
                                    

                                </li>
                                <li style="text-align:center">
                                    <button style="padding: 3px 22px;margin-top: 15px;background: linear-gradient(45deg,var(--bg-color), #fff);box-shadow: 2px 3px 5px #333;border: none;color: #fff;" type="button" onclick="location.href = 'index.php?controller=search&action=price&fromPrice=' + document.getElementById('fromPrice').value + '&toPrice=' + document.getElementById('toPrice').value;">
                                        <i class="fas fa-search-dollar"></i>
                                    </button>
                                </li>

                                

                                
                            </ul>
                            <ul style="border-top:  1px solid #ccc;margin-top:  5px;">    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets2.lottiefiles.com/private_files/lf30_XJb4ke.json"  background="#77D5BC"  speed="0.5"  style="width: 100%; height: 300px;"  loop  autoplay></lottie-player></ul>


                        </div>


                        








                        <div class="column-9-12 cl-12 ">
                            <div class="grid">

                                
                                 <?php 
                    $order = isset($_GET["order"]) ? $_GET["order"] : "";
            ?>
        <select class="selected_price" onchange="location.href = 'index.php?controller=products&action=category&id=<?php echo $id ?>&order='+this.value">
                  <option style="cursor: pointer;" value="0" style=" max-width: 10%;">Sắp xếp</option>
                  <option  <?php if($order == "priceAsc"): ?> selected <?php endif; ?>   value="priceAsc">Giá tăng dần</option>
                  <option <?php if($order == "priceDesc"): ?> selected <?php endif; ?>  value="priceDesc">Giá giảm dần</option>
                  <option <?php if($order == "nameAsc"): ?> selected <?php endif; ?>  value="nameAsc">Sắp xếp A-Z</option>
                  <option <?php if($order == "nameDesc"): ?> selected <?php endif; ?>  value="nameDesc">Sắp xếp Z-A</option>
            </select>
    </div>


    <?php foreach($data as $rows): ?>
   
               
  <div class="column-4-9 c-6  ">
                
            <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>">
                 <div class="column-3-4-9">
                     <a href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>">
                    <i class="fas fa-cart-plus cart-home" ></i>
                  </a>
                 <div class="product-img-sp">
                        <img src="assets/upload/products/<?php echo $rows->photo; ?>" alt="">
                </div>

                 <?php if($rows->discount > 0): ?>
                  <div class="salee"><?php echo $rows->discount; ?>%</div>
                  <?php endif; ?>
                
                     <h4 title="<?php echo $rows->name; ?>" class="product-name" style="text-overflow: ellipsis  ;white-space: nowrap;overflow-x: hidden"><a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></h4>

                <div class="product-man">
                        <a href="">
                            
                            <span class="product-man2"><?php echo number_format($rows->price - ($rows->price * $rows->discount)/100); ?> đ</span>
                             
                            
                           
                             <span class="product-man1" >
                                <?php echo number_format($rows->price); ?>đ
                             </span> 
                              
                         </a> 
                </div>



                </div>

             </a>
     </div>
<?php endforeach; ?>
                    
        <div class="pagination">
          <span><a class="pagination-number">Trang</a></span>
            <?php for($i = 1; $i <= $numPage ; $i++): ?>
            <span><a class="page-link pagination-number" href="index.php?controller=products&action=category&id=<?php echo $id; ?>&p=<?php echo $i; ?>"><?php echo $i; ?></a></span>
         <?php endfor; ?>
        </div>
</div>

                            </div>

                            
                           


                  
                           
                        </div>

                    </div>

                </div>
            </div>



           
