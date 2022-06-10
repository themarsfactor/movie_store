<?php
require "../functions/functions.php";

if (isset($_POST['title']) && isset($_POST['genre']) && isset($_POST['production']) && 
	isset($_POST['price']) && isset($_FILES['upload_file'])) {
	// code...


		$title = $_POST['title'];
		$genre = $_POST['genre'];
		$production = $_POST['production'];
		$price = $_POST['price'];
		$movieId = null;



		$movId = movieId($movieId);
		$movId = strval($movId);

		//print_r($movId);
		//die();

	// print_r($_FILES['upload_file']);
	// print_r($_POST['genre']);

	$img = $_FILES['upload_file']['name'];

	if (!is_dir("movies/{$movId}")) {
		mkdir("movies/{$movId}");
		// code...
	}

	$destination = "movies/{$movId}/".$_FILES['upload_file']['name'];
	move_uploaded_file($_FILES['upload_file']['tmp_name'], $destination);

		$feedback = registerMovie($movId, $title, $genre, $production, $price, $img, 
			$destination);


	echo($feedback);





}








