<?php

$username = "root";
$password = "";
$database = new
PDO("mysql:host=localhost; dbname=control;charset=utf8;",$username,$password);

if($database){
	echo ' تم الاتصال بقاعده البيانات ';
}
?>
