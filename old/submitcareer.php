<?php
if( empty( $_POST['first_name'] )){
	echo "<script>alert('Submission failed! Something wrong with your First Name, please try again!'); window.location = './career';</script>";
} elseif( empty( $_POST['last_name'] )){
	echo "<script>alert('Submission failed! Something wrong with your Last Name, please try again!'); window.location = './career';</script>";
} elseif( !isset( $_POST['email'] ) && empty( $_POST['email'] ) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){
	echo "<script>alert('Submission failed! Something wrong with your Email, please try again!'); window.location = './career';</script>";
} elseif( empty( $_POST['phone_no'] )){
	echo "<script>alert('Submission failed! Something wrong with your Telephone number, please try again!'); window.location = './career';</script>";
} elseif( empty( $_POST['resume_cv'] )){
	echo "<script>alert('Submission failed! Something wrong with your Resume/CV, please try again!'); window.location = './career';</script>";
} elseif( empty( $_POST['cover_letter'] )){
	echo "<script>alert('Submission failed! Something wrong with your Cover Letter, please try again!'); window.location = './career';</script>";
} else{
	// Open Connection
	$host_name = "db674204091.db.1and1.com";
	$database = "db674204091";
	$user_name = "dbo674204091";
	$password = "Berg5354190#";
	$connect = mysqli_connect($host_name, $user_name, $password, $database);

	//connecting to sql database
	$first_name = mysqli_real_escape_string($connect, $_POST['first_name']);
	$last_name = mysqli_real_escape_string($connect, $_POST['last_name']);
	$email = mysqli_real_escape_string($connect, $_POST['email']);
	$phone_no = mysqli_real_escape_string($connect, $_POST['phone_no']);
	$location = mysqli_real_escape_string($connect, $_POST['location']);
	$job = mysqli_real_escape_string($connect, $_POST['job']);
	$job_optional = mysqli_real_escape_string($connect, $_POST['job_optional']);
	$linkedin_profile = mysqli_real_escape_string($connect, $_POST['linkedin_profile']);
	$website = mysqli_real_escape_string($connect, $_POST['website']);
	$how = mysqli_real_escape_string($connect, $_POST['how']);
	mysqli_query($connect,"INSERT INTO Career (reg_date, ID, First_Name, Last_Name, Email, Phone_no, Location, LinkedIn, Website, Channel) VALUES (CURRENT_TIMESTAMP, NULL, '$first_name', '$last_name', '$email', '$phone_no', '$location', '$linkedin_profile', '$website', '$how')");

	//closing mysqli connection
	$mysqli->close;
	echo "<script>alert('You have submitted your application successfully, Thank you!'); window.location = './';</script>";
} 
?>