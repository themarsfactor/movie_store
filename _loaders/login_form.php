<?php 

ini_set("display_errors", "on");
require "../functions/functions.php"; 
if (isset($_POST['email']) && isset($_POST['password'])) {
	// code...

	$email =trim($_POST['email']); 
	$password = trim($_POST['password']);



	$feedback = loginUser($email, $password);

	echo json_encode($feedback);



}




 