<?php
//checking if data has been entered
if( !isset( $_POST['email'] ) && empty( $_POST['email'] ) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){
	echo "<script>alert('提交失敗, 請輸入正確的電子郵件地址並再提交!'); window.location = './';</script>";
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
	echo "<script>alert('成功提交! 感謝!'); window.location = './';</script>";
}
?>