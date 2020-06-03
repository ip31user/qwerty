<?php
ob_start();
session_start();

date_default_timezone_set("Europe/London");

try{
	$con = new PDO("mysql:dbname=university;host=localhost", "root","");
	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch(PDOException $e){
	exit("Conection failed" . $e->getMessage());
}
?>