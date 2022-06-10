<?php

require"../functions/functions.php";
if (isset($_POST['id'])) {
	// code...

	$product_id = ($_POST['id']);
	$feedback = deleteProduct($product_id);

	$feedback = json_encode($feedback);

	echo $feedback;

}




 ?>