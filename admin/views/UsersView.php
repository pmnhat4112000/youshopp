<?php 
    //load file Layout.php vào đây
    $this->fileLayout = "Layout.php";
 ?>



 
  <div class="main-content position-relative bg-gray-100   h-100">
    <!-- Navbar -->
   
    <!-- End Navbar -->
    <div class="container-fluid px-2 px-md-4">
      <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
        <span class="mask  bg-gradient-primary  opacity-6"></span>
      </div>
  <a href="index.php?controller=users&action=create" style="color:#e91e63;margin-top:5px;background-color:#ccc;padding: 3px;border-radius: 5px;" ><i class="fas fa-user-plus"></i>Add user</a>
     <!-- quản lí user -->
      <form action="" style="">
        


        <table class="table-system-user">
          <tr>
            <th>Họ và tên</th>
            <th>Tài khoản Email</th>
            
            
            <th>Edit</th>
          </tr>
           <?php foreach($data as $rows): ?>
          <tr>
            <td><?php echo $rows->name; ?> </td>
            
            <td><?php echo $rows->email; ?></td>
          
            <td> <a href="index.php?controller=users&action=delete&id=<?php echo $rows->id ?>" style="font-size: 20px;" title="delete"><i class="far fa-trash-alt" onclick="return window.confirm('Bạn có muốn xoá không?');"></i></a>
             

              <a href="index.php?controller=users&action=update&id=<?php echo $rows->id ?>" style="font-size: 20px;" title="edit"><i class="fas fa-edit"></i></a>
            </td>
          </tr>
          
        <?php endforeach; ?>
        </table>
        <style type="text/css">
                  .pagination{padding:0px; margin:0px;}
         </style>
              <ul class="pagination">
                  <li class=""><a href="#" class="page-link">Trang</a></li>
                  <?php for($i = 1;$i <= $numPage; $i++): ?>
                  <li class="">
                      <a href="index.php?controller=users&p=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a>
                  </li>
              <?php endfor; ?>
               </ul>
     </form>
    </div>
   
  </div>

