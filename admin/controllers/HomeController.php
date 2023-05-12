<?php 
	class HomeController extends Controller{
		//hàm tạo là hàm đwuọc gọi đầu tiên khi khởi tạo class
		public function __construct(){
			//kiểm tra xem user đã đăng nhập chưa
			$this->authentication();//hàm này trong file Controller.php

		}
		public function index(){
				//load view
				$this->loadView("HomeView.php");
		}
	}
 ?>