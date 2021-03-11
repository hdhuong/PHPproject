<?php 
	class editClients extends Controller{
		public function __construct(){
			parent:: __construct();

			$act = isset($_GET["act"])?$_GET["act"]:"";
			$id = isset($_GET["id"])?$_GET["id"]:0;

			switch ($act) {
				case 'edit':					
					$dob = $_POST["dob"];
					$address = $_POST["address"];
					$phoneNumber = $_POST["phoneNumber"];
					$email = $_POST["email"];
					$type = $_POST["type"];
					$this->Model->execute("UPDATE client SET dob='$dob' WHERE id='$id' ");
					$this->Model->execute("UPDATE client SET address='$address' WHERE id='$id' ");
					$this->Model->execute("UPDATE client SET phoneNumber='$phoneNumber' WHERE id='$id' ");
					$this->Model->execute("UPDATE client SET email='$email' WHERE id='$id' ");
					$this->Model->execute("UPDATE client SET type='$type' WHERE id='$id' ");

					echo "<meta http-equiv='refresh' content='0; URL=index.php?controller=customers/list'>";
					break;
				
				default:
					$value = $this->Model->fetchOne("SELECT * FROM client WHERE id='$id'");
					break;
			}			
			include "views/customers/editView.php";
		}
	}
	new editClients();
 ?>