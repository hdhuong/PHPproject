<?php 
	class editUsers extends Controller{
		public function __construct(){
			parent:: __construct();

			$act = isset($_GET["act"])?$_GET["act"]:"";
			$id = isset($_GET["id"])?$_GET["id"]:0;

			switch ($act) {
				case 'edit':					
					$name = $_POST["name"];
					$password = $_POST["password1"];
					$position = $_POST["position"];
					$this->Model->execute("UPDATE user SET name='$name' WHERE id='$id' ");
					$this->Model->execute("UPDATE user SET position='$position' WHERE id='$id' ");

					if($password != ''){
						$pass = md5($password);
						$this->Model->execute("UPDATE user SET password='$pass' WHERE id='$id' ");
					}
					echo "<meta http-equiv='refresh' content='0; URL=index.php?controller=users/list'>";
					break;
				
				default:
					$value = $this->Model->fetchOne("SELECT * FROM user WHERE id='$id'");
					break;
			}			
			include "views/users/editView.php";
		}
	}
	new editUsers();
 ?>