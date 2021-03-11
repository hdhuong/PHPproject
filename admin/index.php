<?php
	session_start();
	include "../config/Config.php";
	include "../config/Model.php";
	include "../config/Controller.php";

	if(isset($_GET["act"]) && $_GET["act"]=="logout")
		unset($_SESSION["account"]);

	if(isset($_SESSION['account'])) {
		$controller = isset($_GET["controller"])?"controllers/".$_GET["controller"]."Controller.php":"controllers/home.php";
		include "../layout/admin.php";
	}
	else {
		include "controllers/login.php";
	}

?>