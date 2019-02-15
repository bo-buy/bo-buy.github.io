<?php
//checking if data has been entered
$go_back = htmlspecialchars($_SERVER['HTTP_REFERER']);
if( !isset( $_POST['email'] ) && empty( $_POST['email'] ) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){
	echo "<script>alert('Submission failed, please enter a valid email address and try again!'); window.location = './';</script>";
} else{
	// Open Connection
	$host_name = "localhost";
	$database = "bobuy_live";
	$user_name = "rbdbroot";
	$password = "Ctu+wk9iQI9Hw50vf5pFD$l91@";
	$connect = mysqli_connect($host_name, $user_name, $password, $database);

	//connecting to sql database
	$email = mysqli_real_escape_string($connect, $_POST['email']);
	mysqli_query($connect,"INSERT INTO Email (reg_date, ID, Email) VALUES (CURRENT_TIMESTAMP, NULL, '$email')");

	//closing mysqli connection
	$mysqli->close;
	echo "<script>alert('Submission succeeded! Thank you!'); window.location = './';</script>";
}
?>