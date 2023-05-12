<?php 
	$this->fileLayout = "LayoutTrangTrong.php";
 ?>

 
  <div class="grid grid-full ">
          
           
           
        <div class="row  mobile_row ">
           <h2 style="text-align: center;">Tin tức</h2>
            <div class="column-12 col">
             	
            <h3><?php echo $record->name; ?></h3>
 	<img src="assets/upload/news/<?php echo $record->photo; ?>" style="width: 100%;">
 	<p><?php echo $record->description; ?></p>
 	<p><?php echo $record->content; ?></p>
            

            </div>
 
            </div>

          </div>