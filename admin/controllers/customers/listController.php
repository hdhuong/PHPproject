<?php 
	class listClients extends Controller{
		public function __construct(){
			parent:: __construct();

			$act = isset($_GET["act"]) ? $_GET["act"] :"";
			switch ($act) {
				case 'delete':
					$id = isset($_GET["id"])?$_GET["id"]:0;
					$this->Model->execute("DELETE FROM client WHERE id='$id'");
					echo "<meta http-equiv='refresh' content='0; URL=index.php?controller=customers/list'>";
					break;
			}

			$data = $this->Model->fetch("SELECT * FROM client");
			include "views/customers/listView.php";
		}
	}
	new listClients();
?>