<?php

$host = 'localhost';
$user = 'root';
$db_password = '';
$db_name = 'movie-search';

$__conn = mysqli_connect($host, $user, $db_password, $db_name) or die ('could not connect');



if ($__conn) {

	$register = "CREATE TABLE IF NOT EXISTS users( 

	id VARCHAR (120) PRIMARY KEY,
	name VARCHAR (64) NOT NULL,
	birth VARCHAR (64) NOT NULL,
	email VARCHAR (64) NOT NULL,
	password VARCHAR (64) NOT NULL,
	age VARCHAR (64) NOT NULL,
	status VARCHAR(64) NOT NULL DEFAULT 'Inactive',
	date_created TIMESTAMP NOT NULL

)";
		$register_result = mysqli_query($__conn, $register);

		if ($register_result) {
		//echo "welcome";
			
		}
		else{
			echo mysqli_error($__conn);
		}
	# code...
}else{
	die('could not connect');

}






 if ($__conn) {
 	// code...

 	$product_query = "CREATE TABLE IF NOT EXISTS movies_table(
 		movie_id VARCHAR (60) NOT NULL,
 		user_id VARCHAR (120) NOT NULL,
 		title VARCHAR(60) NOT NULL,
 		genre VARCHAR (60) NOT NULL,
 		production VARCHAR (60) NOT NULL,
 		price VARCHAR (60) NOT NULL,
 		image VARCHAR (60) NOT NULL,
 		img_path VARCHAR (60) NOT NULL,
 		date_created TIMESTAMP NOT NULL

 )";


 	$product_query_result = mysqli_query($__conn, $product_query);

 	if ($product_query_result) {
 		// code...

 		//echo "success";


 	}
 	else{
 		mysqli_error($__conn);
 	}
 }
 else{
 	mysqli_error($__conn);
 }







if ($__conn) {
 	// code...

 	$sales_query = "CREATE TABLE IF NOT EXISTS sales_table(
 		sales_id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
 		user_id VARCHAR (120) NOT NULL,
 		movie_id VARCHAR (120) NOT NULL,
 		title VARCHAR(60) NOT NULL,
 		price VARCHAR (60) NOT NULL,
 		date_sales_made TIMESTAMP NOT NULL

 )";


 	$sales_query_result = mysqli_query($__conn, $sales_query);

 	if ($sales_query_result) {
 		// code...

 		//echo "success";


 	}
 	else{
 		mysqli_error($__conn);
 	}
 }
 else{
 	mysqli_error($__conn);
 }