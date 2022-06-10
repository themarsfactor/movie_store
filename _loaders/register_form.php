<?php
ini_set("display_errors", "on");
require '../functions/functions.php';


if (isset($_POST['myUsername']) && isset($_POST['myEmail']) && isset($_POST['myPassword']) && isset($_POST['d_birth'])) {
	// code...

	$myUsername = $_POST['myUsername'];
	$myEmail = $_POST['myEmail'];
	$myPassword = $_POST['myPassword'];
	$myPassword = password_hash($myPassword, PASSWORD_DEFAULT);
	$birth = $_POST['d_birth'];
	$birth = (int)$birth;
	$userId = null;
	$birth_range = 2022;

	$age = $birth_range - $birth;


	$feedback = registerUser($userId, $myUsername, $birth, $myEmail, $myPassword, $age);

	echo json_encode($feedback);
}




?>