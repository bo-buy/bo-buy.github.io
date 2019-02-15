<?php
	// Open Connection
	$host_name = "localhost";
	$database = "bobuy_live";
	$user_name = "rbdbroot";
	$password = "Ctu+wk9iQI9Hw50vf5pFD$l91@";
	$connect = mysqli_connect($host_name, $user_name, $password, $database);
	
	$ftp_server = "home666590624.1and1-data.host";
	$ftp_user_name = "u88063792";
	$ftp_user_pass = "Bobuy5354190@";
	
	// set up basic connection
	$conn_id = ftp_connect($ftp_server);

	// login with username and password
	$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);
	
	$result = $connect->query("SELECT * FROM `Career1` WHERE 1");
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "ID: " . $row["ID"]. "<br>";
			echo "First Name:" . $row["First_Name"]. "<br>";
			echo "Last Name:" . $row["Last_Name"]. "<br>";
			echo "Email: " . $row["Email"]. "<br>";
			echo "Phone_no: " . $row["Phone_no"]. "<br>";
			echo "Location: " . $row["Location"]. "<br>";
			echo '<a href="ftp://u88063792:Bobuy5354190@@home666590624.1and1-data.host/Files/Career/' . $row["ID"] . "_" . $row["First_Name"] . "_" . $row["Last_Name"] . "/" . $row["ID"] . "_" . $row["First_Name"] . "_" . $row["Last_Name"] . '_resume_cv.pdf">Resume/CV</a><br>'; 
			echo '<a href="ftp://u88063792:Bobuy5354190@@home666590624.1and1-data.host/Files/Career/' . $row["ID"] . "_" . $row["First_Name"] . "_" . $row["Last_Name"] . "/" . $row["ID"] . "_" . $row["First_Name"] . "_" . $row["Last_Name"] . '_cover_letter.pdf">Cover Letter</a><br>';
			echo "Job: " . $row["Job"]. "<br>";
			echo "Job_Optional: " . $row["Job_Optional"]. "<br>";
			echo "LinkedIn: " . $row["LinkedIn"]. "<br>";
			echo "Website: " . $row["Website"]. "<br>";
			echo "Channel: " . $row["Channel"]. "<br>";
		}
	} else {
		echo "0 results";
	}
	
	//closing mysqli connection
	$mysqli->close;
?>