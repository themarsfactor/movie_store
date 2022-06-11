<?php
require "../functions/functions.php";
	if (isset($_POST['id'])) {

		$id = $_POST['id'];

			$feedback = payMovieData($id);

			echo json_encode($feedback);


		
	}

?>