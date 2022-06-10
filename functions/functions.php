
<?php

/**
 * function that register the user on the database
 * 
 * */

function registerUser($userId, $myUsername, $birth, $myEmail, $myPassword, $age){


	$userId = getUserId($userId);
	$userId = strval($userId);


if (file_exists("__database/__connection.php")) {
	// code...
	require "database/connection.php";
}
else 
	if (file_exists("../database/connection.php")) {
	// code...
	require "../database/connection.php";

}


 $existResponse = userExist($myEmail, $userId);



 if ($existResponse == true) {
 	// code...
 	return [

 		"message" => 'User already register',
 		"code" => '205'

 	];

 	

 }else{
 	$registerQuery = "INSERT INTO `users` (`id`, `name`, `birth`, `email`, `password`, `age`, 
 		`date_created`) VALUES('$userId', '$myUsername', '$birth', '$myEmail', '$myPassword', 
 		'$age', NOW())";
 	$registerQueryResult = mysqli_query($__conn, $registerQuery);

 	if ($registerQueryResult) {
 		// code...

 		return [
 			"message" => 'Registration successfully',
 			"code" => 201,
 			"status" => 'success'



 		];
 	}else{

 		return mysqli_error($__conn);

 		// return [
 		// 	"message" => 'Registration failed',
 		// 	"code" => 404,
 		// 	"status" => 'failed'



 		// ];


 	}
 }






}



/**
 * 
 * function that generate user id randomly 
 * */

function getUserId($userId){

	$feedback = idUserExist($userId);

	if ($feedback == true) {
		// code...
		$userId = uniqid(rand()). uniqid();

		return $userId;
	}else{

		//check
		return $feedback;
	}

	

	


	
}








/**
 * function that check unique id (user's id) generated alaedy exist
 * 
 * */

function idUserExist($userId){
	if (file_exists("__database/__connection.php")) {
	// code...
	require "database/connection.php";
}
else 
	if (file_exists("../database/connection.php")) {
	// code...
	require "../database/connection.php";

}


$query_idExist = "SELECT * FROM `users` WHERE `id` = '$userId' LIMIT 1";
$query_Result = mysqli_query($__conn, $query_idExist);

if ($query_Result) {
	return true;
	// code...
}else{
	return false;
}




}







/**
 * Function that check the existence off users
 * 
 * */

function userExist($myEmail, $userId){
		if (file_exists("__database/__connection.php")) {
	// code...
	require "database/connection.php";
}
else 
	if (file_exists("../database/connection.php")) {
	// code...
	require "../database/connection.php";

}


$userExistQuery = "SELECT * FROM `users` WHERE email = '$myEmail' LIMIT 1";
$userExistQueryResult = mysqli_query($__conn, $userExistQuery);

	if ($userExistQueryResult) {
		if (mysqli_num_rows($userExistQueryResult) == 1) {

			//$rows = mysqli_fetch_array($userExistQueryResult, MYSQLI_ASSOC);
			// code...
		

		return true;
	}	// code...
	}else{

		return false;

	}


	}





	/**
	 * 
	 * functions that login user
	 * */


function loginUser($email, $password){

	if (file_exists("__database/__connection.php")) {
	// code...
	require "database/connection.php";
	}
	else if (file_exists("../database/connection.php")) {
	// code...
	require "../database/connection.php";
}


	$loginQuery = "SELECT * FROM `users` WHERE `email` = '$email' LIMIT 1";

	$loginQueryResult = mysqli_query($__conn, $loginQuery);

	if ($loginQueryResult) {


		if (mysqli_num_rows($loginQueryResult) == 1) {


			session_start();
			$_SESSION = mysqli_fetch_array($loginQueryResult, MYSQLI_ASSOC);

			if (password_verify($password, $_SESSION['password'])) {
				$email = $_SESSION['email'];

			return [

				'message' => "successfully",
				'code' => 204

			];	

			}else{

				return [

				'message' => "Password Failed",
				'code' => 404

			];	


			}
			

			


		}else{
			// no match in the database

			return [

					"message" => "Invalid password OR username...Have you registered?",
					"status" => 403


					];
		}
		// code...
	}else{
		//it does not run
		echo "it is not working";
	}

}


	





 




/**
 * Function that register te movie on the database
 * 
 * */

function registerMovie($movId, $title, $genre, $production, $price, $img, $destination){
	require "../database/connection.php";

	//print_r($destination);
	//die();


	$register_query = "INSERT INTO `movies_table` (`movie_id`, `title`, `genre`, `production`, `price`, `image`, `img_path`) VALUES('$movId', '$title', '$genre', '$production', 
		'$price', '$img', '$destination')";

	$register_result = mysqli_query($__conn, $register_query);

	if ($register_result) {
		// code...
		return true;
		// [
		// 		//"message" => 'Movie Created Successfully',
		// 		"code" => 201

		// 		];
	}else{

		
		return false;

		//[
		// // 		"message" => 'Failed',
		// 	"code" => 404

		// 	];
	}
}




/**
 * Function that generate an id for each movie
 * */


function movieId($movId){
	if (file_exists("database/connection.php")) {
			// code...
			require "database/connection.php";
		}else if (file_exists("../database/connection.php")) {
			// code...
			require "../database/connection.php";
		}


	$feedback = idExist($movId);

	if ($feedback == true) {
		// code...
		$movId = uniqid(rand()). uniqid();

		return $movId;
	}else{


		//return $feedback;

		if ($feedback == false) {

			$movId = uniqid(rand()). uniqid();
			// code...
			return $movId;
		}
		

	}


}





/**
 * Function that check if the id generated already exist in the database
 * 
 * */

function idExist($movId){
	if (file_exists("database/connection.php")) {
	// code...
	require "database/connection.php";
}
else 
	if (file_exists("../database/connection.php")) {
	// code...
	require "../database/connection.php";

}


$query_idExist = "SELECT * FROM `movies_table` WHERE `movie_id` = '$movId' LIMIT 1";
$query_Result = mysqli_query($__conn, $query_idExist);

if ($query_Result) {

	if (mysqli_num_rows($query_Result) == 1) {
		// code...
		return true;
	}else{
	return false;
}
	
	

	// code...
}else{
	return "error";
}




}





/***
 * 
 * Function that display the user page
 * **/


function getUser($user_id){
	require "../database/connection.php";

	$query = "SELECT * FROM `users` WHERE `id` = '$user_id' LIMIT 1";

	$result = mysqli_query($__conn, $query);

	if ($result) {

		if (mysqli_num_rows($result) ==1) {


		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

		return [
			"message" => 'user data',
			'data' => $row,
			'code' => 201


				];
			// code...
		}else{

		return [
			"message" => 'no match',
			'data' => "nothing to display",
			'code' => 403


				];
		}
		// code...


	}else{
		return mysqli_error($__conn);
	}


}




/***
 * Function that update user data and save back to the database
 * */

function updateMyData($id, $new_name, $new_email, $new_password){
	require "../database/connection.php";

	$query = "UPDATE `users` SET `name` = '$new_name', `email` = '$new_email',
	 `password` = '$new_password' WHERE `id` = '$id' LIMIT 1";

	 $result = mysqli_query($__conn, $query);

	 if ($result) {

	 	return [

				'message' => "successfully Updated",
				'code' => 201,
				'status' => "success"


				];
	}

	else{

		return [
				'message' => "Operation failed",
				'code' => 404,
				'status' => "Failed"


				];
	}




	 }




/**
 *Function that get movies from the data base 
 * */

function getMovie(){
	require "../database/connection.php";

	$query = "SELECT * FROM `movies_table`";
	$result = mysqli_query($__conn, $query);

	if ($result) {

		echo "<table class='table'>
				<thead>
					<tr>
						<th>Title</th>
						<th>Genre</th>
						<th>Price</th>
						<th>Released Date</th>
						<th>Manage Movies </th>
					</tr>
					</thead
				</table>
				<tbody>

				";
			while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
				// code...
				$id = $row['movie_id'];
				$title = $row['title'];
				$genre = $row['genre'];
				$price = $row['price'];
				$r_date = $row['production'];


				echo "<tr>

						<td> {$title}</td>
						<td> {$genre}</td>
						<td> {$price}</td>
						<td> {$r_date}</td>
						<td>
						<div class='row'>

								<div class='btnCollection'>
								<button class='btn btn-md btn-primary' type='button'onclick=openMovieEdit('{$id}')> Edit </button>

								<button type = 'button' class='btn btn-danger' onclick=deleteMovie('{$id}')> Delete </button>

								</div>

						</div>

						</td>
					</tr>";
			}


				echo "</tbody></table>";

		// code...
	}else{
		echo mysqli_error($__conn);
	}
}




/**
 * Function that return the details of the product for editing purpose
 * */

function editEachMovie($id){
	require "../database/connection.php";

	$query = "SELECT * FROM `movies_table` WHERE `movie_id` = '$id' LIMIT 1";
	$result = mysqli_query($__conn, $query);
		if ($result) {		// code...

			if (mysqli_num_rows($result) == 1) {

				// code...
				$movie_info = mysqli_fetch_array($result, MYSQLI_ASSOC);
	

				return 
					[
						"message" => 'successfully retrieved',
						"code" => 201,
						"data" => $movie_info

					];
				

				
			}else{	

					[

						"message" => 'Failed',
						"code" => 403,
						"data" => null

					];
					return "Error";
		}
	

}else{
			return mysqli_error($__conn);
		}


}



/**
 * Function that delete product
 * */

function deleteProduct($id){
		require "../database/connection.php";

	$delete_query = "DELETE FROM `movies_table` WHERE `movie_id` = '$id' LIMIT 1";
	$delete_result = mysqli_query($__conn, $delete_query) ;

	if ($delete_result) {
		// code...
		return[

				'message' => "Product deleted successfully!",
				'code' => 201,
				'status' => "success"


				];
			}

			else{

				return[
						'message' => mysqli_error($__conn),
						'code' => 400,
						'status' => "error"

						];

					}

}




/**
 * Function that update the movie
 * */


function setUpdate($id, $genre2, $title2, $production2, $price2){
	require "../database/connection.php";

	$query = "UPDATE `movies_table` SET `genre` = '$genre2', `title` = '$title2', 
	`production` = '$production2', `price` = '$price2' LIMIT 1";

	$result = mysqli_query($__conn, $query);

	if ($result) {


		return [

				"message" => 'successfully Updated',
				"code" => 201

					];
		// code...
	}else{

		return [

				"message" => 'Update Failed',
				"code" => 404

					];
		


	}
}





/**
 * Function that display all the users
 * */


   function userList(){

   	require "../database/connection.php";

   	$query = "SELECT * FROM `users`";
   	$result = mysqli_query($__conn, $query);

   	if ($result) {

   		echo "<table class='table'>
   				<thead>
   					<tr>
   						<th>Name</th>
   						<th>Email</th>
   						<th>Age</th> 

   					</tr>
   				</thead>
   				<tbody>
   				";

   			while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
   				// code...
   				$name = $row['name'];
   				$email = $row['email'];
   				$age = $row['age'];


   			echo "<tr>
   					<td> {$name}</td>
   					<td> {$email}</td>
   					<td> {$age}</td>


   				</tr>";
   			}

   			echo "</tbody></table>";



   		// code...
   	}else{
   		//error in query
   		echo mysqli_error($__conn);
   	}
   }