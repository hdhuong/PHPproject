<?php 
	class listBills extends Controller{
		public function __construct(){
			parent:: __construct();

			$act = isset($_GET["act"]) ? $_GET["act"] :"";
			switch ($act) {
				case 'sort':
					$data=$this->Model->fetch("select * from bill order by totalAmount desc ");
					break;
			default:
					$data = $this->Model->fetch("select * from bill ");
					break;
				}
			include "views/bills/listView.php";
		}
	}
	new listBills();
?>