<?php

require "../functions/functions.php";

if (isset($_POST['movie_id']) && isset($_POST['title']) && isset($_POST['price'])) {
	// code...

	$movie_id = $_POST['movie_id'];

	$title = $_POST['title'];
	$price = $_POST['price'];
	$user_id = null;
	

	$feedback = payForMovie($movie_id, $user_id, $title, $price);

	echo json_encode($feedback);
}