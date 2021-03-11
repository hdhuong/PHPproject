<?php
	class Model {
		public function fetch($sql){
			global $con;
			$result = mysqli_query($con,$sql);
			$arr = array();
			while($rows = mysqli_fetch_array($result))
				$arr[] = $rows;
			return $arr;
		}
		
		public function fetchOne($sql){
			global $con;
			$result = mysqli_query($con,$sql);
			$rows = mysqli_fetch_array($result);
			return $rows;
		}

		public function execute($sql){
			global $con;
			mysqli_query($con,$sql);
		}

}
