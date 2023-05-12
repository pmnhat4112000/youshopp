<?php 

	//start session
	session_start();
	//load file Connection.php
	include "../application/Connection.php";
	//load file Controller.php
	include "../application/Controller.php";

 ?>
 
 <?php 
 //load động mvc đưa vào tham số controller trtuyền lên url
 	$controller = isset($_GET["controller"]) ? $_GET["controller"] : "Home";
 	$action = isset($_GET["action"]) ? $_GET["action"] : "index";
 	//tạo đg dẫn vật lý của file controller trongMVC .VD : controller/phongbancontrolller.php
 	//hàm ucfirst(string) sẽ viết kí tự hoa đầu tiên
 	$controllerFile = "controllers/".ucfirst($controller)."Controller.php";
 	//file_exists(dườngdẫn) trả về true nếu file tồn tại , ngược lại trả về false
 	if(file_exists($controllerFile)){
 		include $controllerFile;
 		$controllerClass = ucfirst($controller)."Controller";
 		//khởi tạo object của class 
 		$obj = new $controllerClass();
 		//gọi đến action
 		$obj->$action();

 	}else die("File $controllerFile không tồn tại");
 	//hàm die("chuỗi") xuất ra thông báo chuỗi

  ?>