<?php 
	//include file model vào đây
	include "models/UsersModel.php";
	class UsersController extends Controller{
		//kế thừa class UsersModel
		use UsersModel;
		public function index(){
			//quy định số bản ghi trên một trang
			$recordPerPage = 4;
			//tính sso trang 
			$numPage = ceil($this->modelTotalRecord()/$recordPerPage);
			//lấy dữ liệu từ model
			$data = $this->modelRead($recordPerPage);
			//gọi view,truyền dữ liệu ra view
			$this->loadView("UsersView.php",["data"=>$data,"numPage"=>$numPage]);
		}

		//update users
		public function update(){
			//lấy id truền từ url
			//is_numeric(key) trả về true nếu key là số , ngược lại trả về false
			//is_numeric($_GET["id"]) <=> is_numeric($_Get["id"]) == true
			//!is_numeric($_GET["id"]) <=> is_numeric($_Get["id"]) == false
			$id = isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"] : 0;
			//tạo biến $action để đưa vào thuộc tính $action của thẻ form
			$action = "index.php?controller=users&action=updatePost&id=$id";
			//lấy một bản ghi
			$record = $this->modelGetRecord($id);
			//gọi view,truyền dữ liệu ra view
			$this->loadView("UsersFormView.php",["action"=>$action,"record"=>$record]);
		}
		//khi ấn nút submit(update bản ghi)
			public function updatePost(){
				$id = isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"] : 0;
				//gọi hàm modelUpdate để update bản ghi
				$this->modelUpdate($id);
				//quay lại trang users
				header("location:index.php?controller=users");
			}

		//add thêm user 
		public function create(){

			//tạo biến $action để đưa vào thuộc tính $action của form
			$action = "index.php?controller=users&action=createPost";
			//gọi view, truyền dữ liệu ra vỉew
			$this->loadView("UsersFormView.php",["action"=>$action]);
		}
		//create - sau khi ấn nút submit
		public function createPost(){
			//gọi hàm modelCreate để insert bản ghi
			$this->modelCreate();
			
		}
		//xoá bản ghi 
		public function delete()
		{
			$id = isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"] : 0;
			//gọi hàm modelDelete để xoá bản ghi
			$this->modelDelete($id);
			//quay lại trang user
			header("location:index.php?controller=users");
			
		}
	}

 ?>