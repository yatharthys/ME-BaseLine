<?php

require_once '../database/datasource.php';

class GlobalLibrary{

	static function getModel($bean){
		return $bean -> box(); 
	}

	static function getBean($model){
		return $model -> unbox();
	}	
}


?>