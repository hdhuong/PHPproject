<?php 
	class addClients extends Controller{

		public function __construct(){
			parent:: __construct();
			$act = isset($_GET['act']) ? $_GET['act'] : "" ;
			switch ($act) {
				case 'add':
					
					$name = $_POST["name"];
					$dob = $_POST["dob"];
					$address = $_POST["address"];
					$phoneNumber = $_POST["phoneNumber"];
					$email = $_POST["email"];
					$type = $_POST["type"];

					$this->Model->execute("INSERT INTO client(name,dob,address,phoneNumber,email,type) VALUES('$name','$dob','$address','$phoneNumber','$email','$type')");
					// header("location: index.php?controller=users/list");
					echo "<meta http-equiv='refresh' content='0; URL=index.php?controller=customers/list'>";
				break;
			}
				
			include "views/customers/addView.php";
		}

	}
	new addClients();
 ?>