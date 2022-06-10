<?php

require "../functions/functions.php";

if (isset($_POST['id']) &&  isset($_POST['genre2']) && isset($_POST['title2']) && isset($_POST['production2']) && isset($_POST['price2'])) {


	$id = $_POST['id'];
	$genre2 = $_POST['genre2'];
	$title2 = $_POST['title2'];
	$production2 = $_POST['production2'];
	$price2 = $_POST['price2'];



	$feedback = setUpdate($id, $genre2, $title2, $production2, $price2);

	echo json_encode($feedback);


	// code...
}