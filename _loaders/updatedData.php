<?php
require "../functions/functions.php";

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['birth']) && isset($_POST['id'])) {

	$id = $_POST['id'];
	$new_name = $_POST['name'];
	$new_email = $_POST['email'];
	$new_birth = $_POST['birth'];
	//$new_password = password_hash($new_password, PASSWORD_DEFAULT);


	$feedback = updateMyData($id, $new_name, $new_email, $new_birth);
	echo json_encode($feedback);
	

	// code...
}