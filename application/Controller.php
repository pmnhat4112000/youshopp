<?php 
	class Controller{
		public $fileName = NULL;
		public $fileLayout = NULL;
		public $view = NULL;
		public function loadView($fileName,$data = NULL){
			if($data != NULL)
				extract($data);
			//kiểm tra đg dẫn file có tồn tại không
			if(file_exists("views/$fileName")){
				$this->fileName = $fileName;
				//đọc nội dung bên tronng đg  dẫn $fileName để gắn  vào một biến
				ob_start();
				include "views/$fileName";
				$this->view = ob_get_contents();
				ob_get_clean();
				//kiểm tra nếu biến $this->$fileLayout không NULL thì include nó
				if($this->fileLayout != NULL)
					include "views/$this->fileLayout";
				else
					echo $this->view;
			}
		}
		//ham kiem tra dang nhap (su dung cho trang admin)
		public function authentication(){
			if(isset($_SESSION['email']) == false)
				header("location:index.php?controller=login");
		}
	}
 ?>