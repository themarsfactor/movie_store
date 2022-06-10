<?php 
session_start();

if (isset($_SESSION['email'])) {
	// code...


	$_SESSION = [];
	session_destroy();

	header('location: ../');
}