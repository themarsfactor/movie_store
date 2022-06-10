<?php
require "../functions/functions.php";
if (isset($_POST['id'])) {

	$id = $_POST['id'];


	$feedback = editEachMovie($id);

	echo json_encode($feedback);

	// code...
}

?>