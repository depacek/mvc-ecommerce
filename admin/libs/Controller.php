<?php
abstract class Controller{
	function loadView($name)
	{
		// echo $name;
		require_once "view/layout/header.php";
		require_once "view/$name.php";
		require_once "view/layout/footer.php";
	}
	function loadModel($name,$admin=false){
		$name=ucfirst($name).'Model';
			if ($admin) {
			require_once "admin/model/$name.php";
			}else{
			require_once "model/$name.php";
			}
		 return new $name();
		
	}
	function redirect($path){
		$path=base_url().$path;
		header("location:$path");
	}
}

?>