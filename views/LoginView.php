
<?php 
	$this->fileLayout = "LayoutTrangTrong.php";
 ?>

<!-- form đăng kí đăng nhập -->

<style>
  @media (max-width: 46.1875em){
    .login-page {
      display: block;
    }
  }

</style>
 <div class="login-page">
  <div class="form">
  <form class="login-form" action="index.php?controller=account&action=loginPost" method="post">
        <h3>đăng nhập</h3>
      <input type="email" placeholder="username" name="email" required>
      <input  type="password" placeholder="password" name="password" required >
      <button name="login-button" type="submit" id="login-button">Đăng nhập</button>
      <p class="message">bạn ko có tài khoản? <a href="index.php?controller=account&action=register">Tạo tài khoản</a></p>
    </form>
</div>
</div>