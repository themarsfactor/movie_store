<?php 

	session_start();

	
if (!isset($_SESSION['email'])) {
	header("location: ../");
	exit();
}
	# code...

$id = $_SESSION['id'];
$name =$_SESSION['name'];
$email = $_SESSION['email'];
$birth = $_SESSION['birth'];
$date_created = $_SESSION['date_created'];