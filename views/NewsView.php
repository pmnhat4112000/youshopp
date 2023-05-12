<?php 
	$this->fileLayout = "LayoutTrangTrong.php";
 ?>

   <div class="grid grid-full ">
          
           
           
        <div class="row  mobile_row ">
           <h2 style="text-align: center;">Tin tức</h2>
            <div class="column-12 col">
             	
             <?php foreach($data as $rows): ?>

             <div class="column-4-12 c-4 c-6 c-6 ">  
                
              <a href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>" class="home-product ">
                <div class="product-img"  > 
                  
                  <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><img src="assets/upload/news/<?php echo $rows->photo; ?>" alt="" class="home-sp"></a>
              
                   <h3 ><a style="text-decoration: none;color: #333" href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a>

                   </h3>
                     
                   
                </div>

                

                </a>
              </div>
             <?php endforeach; ?>

            </div>
  <ul class="pagination " style="list-style: none;">
      <li class="page-item"><a href="#" class="pagination-number">Trang</a></li>
      <?php for($i = 1; $i <= $numPage; $i++): ?>
      <li class="page-item" ><a href="index.php?controller=news&p=<?php echo $i; ?>" class="pagination-number"><?php echo $i; ?></a></li>
      <?php endfor; ?>
  </ul>
            </div>

          </div>



             

 

             

    
 
              

                         


          
            <!-- trà -->