<?php 
	
	class searchClients extends Controller{

		public function __construct(){
			parent:: __construct();
			$act = isset($_GET['act']) ? $_GET['act'] : "" ;
			switch ($act){
				case 'search':
					$keyword = $_GET["keyword"];
					$value=$this->Model->fetch("select * from client where 'name' LIKE '%$keyword%'");
					break;
			default:
					$data = $this->Model->fetch("select * from client");
					break;

			}
			include "views/customers/listView.php";
		}

	}
	new searchClients();
	
 ?>