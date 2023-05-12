<?php 
	trait HomeModel{
		//sản phẩm nổi bật
		public function modelHotProduct(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where hot = 1 order by id desc limit 0,8");
			//trả về tất cả các bản ghi truy vấn 
			return $query->fetchAll();
		}
		//lấy các danh mục có chứa sản phẩm bên trong
		public function modelCategories(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from categories where id  in(select category_id from products)");
			//trả về tất cả các bản ghi truy vấn 
			return $query->fetchAll();
		}
		//lấy ảnh danh mục 
		// public function modelPhoto(){
		// 	$conn = Connection::getInstance();
		// 	$query = $conn->query("select * from categories where parent_id   order by photo  desc    ");
		// 	//trả về tất cả các bản ghi truy vấn 
		// 	return $query->fetchAll();
		// }
		//lấy các sản phẩm thuộc danh mục
		public function modelProducts($category_id){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where category_id = $category_id order by id desc limit 0,8");
			//trả về tất cả các bản ghi truy vấn 
			return $query->fetchAll();
		}

		//lấy 10 tin nổi bật để hiện thị ở trang chủ
		public function modelHotNews(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from news where hot = 1 order by id desc limit 0,6");
			//trả về tất cả các bản ghi truy vấn 
			return $query->fetchAll();
		}



	}

 ?>