<?php 
	class addUsers extends Controller{

		public function __construct(){
			parent:: __construct();
			$act = isset($_GET['act']) ? $_GET['act'] : "" ;
			switch ($act) {
				case 'add':
					
					$name = $_POST["name"];
					$username = $_POST["username"];
					$password1 = $_POST["password1"];
					$password2 = $_POST["password2"];
					$position = $_POST["position"];

					if ($password1 != $password2) {
					header("location: index.php?controller=users/add&err=false");
					}
					else {
					$password = md5($password1);
					$this->Model->execute("INSERT INTO user(name,username,password,position)VALUES('$name','$username','$password','$position')");
					// header("location: index.php?controller=users/list");
					echo "<meta http-equiv='refresh' content='0; URL=index.php?controller=users/list'>";
					}
				break;
				
			}

			include "views/users/addView.php";
		}

	}
	new addUsers();
 ?>