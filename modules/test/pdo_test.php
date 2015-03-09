<?php
try{
require_once '../redbean/rb.php';
$sql="select * from users";
$db->query($sql);
}catch (Exception $e){
	$error=$e->getMessage();
}


?>