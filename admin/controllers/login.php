<?php

	class login extends Controller{

		public function __construct(){

			parent::__construct();

			if($_SERVER["REQUEST_METHOD"] == "POST"){

				$username = $_POST["username"];
				$password = $_POST["password"];

				$check = $this->Model->fetchOne("SELECT * FROM user WHERE username='$username'");

				if( isset($check["username"]) ) {
					if( md5($password) == $check["password"] ){
						$_SESSION["account"] = $username;
						$_SESSION["name"] = $check["name"];
						header("location: index.php");
					}
				}

			}

			include "views/login.php";
		}

	}
	new login();

?>