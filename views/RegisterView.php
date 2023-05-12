<?php 
	$this->fileLayout = "LayoutTrangTrong.php";
 ?>
<style>
  @media (max-width: 46.1875em){
    .login-page {
      display: block;
    }
  }

</style>

<div class="login-page">
  <div class="form">

   <?php if(isset($_GET["notify"]) && $_GET["notify"] == 'error'): ?>   
        <p style="color:red">Đăng kí chưa thành công vui lòng xem lại! </p>
        <?php else: ?>
            <?php endif; ?>
    <form class="register-form" method="post" action="index.php?controller=account&action=registerPost">
         

        <h3>đăng ký tài khoản</h3>
      <input  name="name" type="text" placeholder="Họ tên" required>
       <input  name="email" type="email" placeholder="email address" required >
      <input  name="password" type="password" placeholder="password" required />
     
      <input  type="text" name="phone" placeholder="SĐT" required />
       
       <input  name="address" type="text" placeholder="địa chỉ" required>

      <button  type="submit" id="create-button" value="">Đăng ký</button>

      <p class="message">Bạn đã có tài khoản? <a href="index.php?controller=account&action=login">Đăng nhập</a></p>
    </form>
  
  
  </div>


</div>

