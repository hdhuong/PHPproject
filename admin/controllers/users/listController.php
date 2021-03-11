<?php 
	class listUsers extends Controller{
		public function __construct(){
			parent:: __construct();

			$act = isset($_GET["act"]) ? $_GET["act"] :"";
			switch ($act) {
				case 'delete':
					$id = isset($_GET["id"])?$_GET["id"]:0;
					$this->Model->execute("DELETE FROM user WHERE id='$id'");
					echo "<meta http-equiv='refresh' content='0; URL=index.php?controller=users/list'>";
					break;
				
			}

			$data = $this->Model->fetch("SELECT * FROM user");
			include "views/users/listView.php";
		}
	}
	new listUsers();
?>