<?php

require "../functions/functions.php";
if (isset($_POST['id'])) {
	$id = $_POST['id'];
	// code...
	$feedback = getUser($id);

	echo json_encode($feedback);
}
?>