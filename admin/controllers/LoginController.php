<?php 
	//load loginModel.php
	include "models/LoginModel.php";
	class LoginController extends Controller{
		//kết thừa class LoginModel
		use LoginModel;
		public function index(){
			//gọi view
			$this->loadView("LoginView.php");
		}
		public function login(){
			//gọi hàm modeloggin trong class loginModel
			$this->modelLogin();
		}

		//đăng xuất
		public function logout(){
			//huỷ bieén sesion
			unset($_SESSION['email']);
			//di chuyển đến một url khác
			header("location:index.php");
		}
	}
 ?>