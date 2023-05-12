<?php 
	trait LoginModel{
		public function modelLogin(){
			$email = $_POST["email"];
			$password = $_POST["password"];
			//mã hoá password
			$password = md5($password);
			//lấy biến kết nối csdl
			$conn = Connection::getInstance();
			//chuẩn bị truy vấn
			$query = $conn->prepare("select email from users where email=:var_email and password=:var_password");
			//thực thi truy vấn , truền các tham số
			$query->execute(["var_email"=>$email,"var_password"=>$password]);
			if($query->rowCount() > 0){
				//đăng nhậop thành công
				$_SESSION['email'] = $email;
				header("location:index.php");
			}
			else
				header("location:index.php?controller=login");
		}
	}
 ?>