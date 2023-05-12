<?php 
	//kết nối csdl
	class Connection{
		//hàm kết nối csdl -> kiểu biến này là biến object
		public static function getInstance(){
			//$db = new PDO("mysql:host=localhost;dbname=youshopp","root","");
			$db = new PDO("mysql:host=sql306.byethost33.com;dbname=b33_32990350_youshopp","b33_32990350","123456");
			// 
			// 
			// $db = new PDO("mysql:host=localhost;dbname=youshopp","root","");
			//lấy dữ liệu theo kiểu unicode
			$db->exec("set names utf8");
			//lấy kết quả trả về theo kiểu object
			$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
			
			return $db;

		}
	}

 ?>