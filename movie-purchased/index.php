<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Movie Purcased</title>
	<link rel="stylesheet" type="text/css" href="../thirdparties/bootstrap/css/bootstrap.min.css">
</head>
<body>

	<div class="container mt-5">
		<div class="col-md ">

			<div class="card bg-light">
				<div class="card-head bg-info text-center mb-4"><h2>Movie Purchased</h2></div>
			<div class="col-md-8 m-auto">



	<?php
	require "../functions/functions.php";
		$id = $_GET['id'];
		userPastPurcase($id)

	?>
	</div>
</div>
</div>
</div>
</body>
</html>