<!DOCTYPE HTML>
<html lang="en">
	<head>
		<title>BoBuy</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="/assets/css/main.css"/>
		<link rel="icon" href="/images/bobuy_newlogo.png">
	</head>
	<body class="subpage">

		<!-- Header -->
			<?php require ("/homepages/11/d666590624/htdocs/Website/header.php"); ?>

		<!-- Three -->
			<section id="three" class="wrapper">
				<div class="inner">
					<header class="align-center">
						<h2>Job Application Record</h2>
					</header>
					<div class="row uniform" style="margin:0 auto;">
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
						
						$result1 = $connect->query("SELECT Max(`ID`) AS max FROM `Career` WHERE 1");
						$row = mysqli_fetch_assoc($result1);
						$max_id = $row['max'];
						echo '
							<div class="3.5u 12u$(small) align-right" style="padding:0 0 0.3em 0">
								<h2 style="color:black"><strong>Total no. of applicants:</strong></h2>
							</div>
							<div class="8u$" style="padding: 0 0 0 2em">
								<h2 style="color:black"><strong>'.$row['max'].'</strong></h2>
							</div>
							';						
						$result = $connect->query("SELECT * FROM `Career` WHERE 1");
						if ($result->num_rows > 0) {
							// output data of each row
							while($row = $result->fetch_assoc()) {
								echo '
									<div class="3.5u 12u$(small) align-right" style="width: 156px; padding:0 0 0.3em 0">
										<h3 style="padding:0.3em 0 0 0; color:black"><strong>ID:</strong></h3>
									</div>
									<div class="8u$" style="padding: 0 0 0 2em">
										<h3 style="padding:0.3em 0 0 0; color:black"><strong>'.$row["ID"].'</strong></h3>
									</div>
									<div class="3.5u 12u$(small) align-right" style="width: 156px; padding:0 0 0.3em 0">
										<h3 style="padding:0.3em 0 0 0; color:black"><strong>Date:</strong></h3>
									</div>
									<div class="8u$" style="padding: 0 0 0 2em">
										<h3 style="padding:0.3em 0 0 0; color:black"><strong>'.$row["reg_date"].'</strong></h3>
									</div>
									<div class="3.5u 12u$(small) align-right" style="width: 156px; padding:0 0 0.3em 0">
										<h3 style="padding:0.3em 0 0 0; color:black">First Name:</h3>
									</div>
									<div class="8u$" style="padding: 0 0 0 2em">
										<h3 style="padding:0.3em 0 0 0; color:black">'.$row["First_Name"].'</h3>
									</div>
									';
								echo '
									<div class="3.5u 12u$(small) align-right" style="width: 156px; padding:0 0 0.3em 0">
										<h3 style="padding:0.3em 0 0 0; color:black">Last Name:</h3>
									</div>
									<div class="8u$" style="padding: 0 0 0 2em">
										<h3 style="padding:0.3em 0 0 0; color:black">'.$row["Last_Name"].'</h3>
									</div>
									';
								echo '
									<div class="3.5u 12u$(small) align-right" style="width: 156px; padding:0 0 0.3em 0">
										<h3 style="padding:0.3em 0 0 0; color:black">Email:</h3>
									</div>
									<div class="8u$" style="padding: 0 0 0 2em">
										<h3 style="padding:0.3em 0 0 0; color:black">'.$row["Email"].'</h3>
									</div>
									';
								echo '
									<div class="3.5u 12u$(small) align-right" style="width: 156px; padding:0 0 0.3em 0">
										<h3 style="padding:0.3em 0 0 0; color:black">Phone:</h3>
									</div>
									<div class="8u$" style="padding: 0 0 0 2em">
										<h3 style="padding:0.3em 0 0 0; color:black">'.$row["Phone_no"].'</h3>
									</div>
									';
								echo '
									<div class="3.5u 12u$(small) align-right" style="width: 156px; padding:0 0 0.3em 0">
										<h3 style="padding:0.3em 0 0 0; color:black">Location (City):</h3>
									</div>
									<div class="8u$" style="padding: 0 0 0 2em">
										<h3 style="padding:0.3em 0 0 0; color:black">'.$row["Location"].'</h3>
									</div>
									<div class="3.5u 12u$(small) align-right" style="width: 156px; padding:0 0 0.3em 0">
										<h3 style="padding:0.3em 0 0 0; color:black">Job Option:</h3>
									</div>
									<div class="3u" style="padding: 0 0 0 2em; color: black">
										<h3 style="padding:0.3em 0 0 0; color:black">'.$row["Job"].'</h3>
									</div>
									<div class="3u 12u$(small) align-right" style="width: 90px; padding:0 0 0.3em 0">
										<h3 style="padding:0.3em 0 0 0; color:black">Optional:</h3>
									</div>
									<div class="5u$" style="padding: 0 0 0 2em">
										<h3 style="padding:0.3em 0 0 0; color:black">'.$row["Job_Optional"].'</h3>
									</div>
									';
								echo '
									<div class="3.5u 12u$(small) align-right" style="width: 156px; padding:0 0 0.3em 0">
										<u><h3 style="padding:0.3em 0 0 0; color:black"><a href="ftp://u88063792:Bobuy5354190@@home666590624.1and1-data.host/Files/Career/' . $row["ID"] . "_" . $row["First_Name"] . "_" . $row["Last_Name"] . "/" . $row["ID"] . "_" . $row["First_Name"] . "_" . $row["Last_Name"] . '_resume_cv.pdf">Resume/CV</a></h3></u>
									</div>
									<div class="3.5u 12u$(small) align-right" style="width: 156px; padding:0 0 0.3em 0">
										<u><h3 style="padding:0.3em 0 0 0; color:black"><a href="ftp://u88063792:Bobuy5354190@@home666590624.1and1-data.host/Files/Career/' . $row["ID"] . "_" . $row["First_Name"] . "_" . $row["Last_Name"] . "/" . $row["ID"] . "_" . $row["First_Name"] . "_" . $row["Last_Name"] . '_cover_letter.pdf">Cover Letter</a></h3></u><br>
									</div>
									<div class="12u" style="padding:0 0 0.3em 0">
										<h3 style="padding:0.3em 0 0 0; color:black">LinkedIn Profile:</h3>
									</div>
									<div class="8u$" style="padding: 0 0 0 0">
										<h3 style="padding:0.3em 0 0 0; color:black">'.$row["LinkedIn"].'</h3>
									</div>
									<div class="12u" style="padding:0 0 0.3em 0">
										<h3 style="padding:0.3em 0 0 0; color:black">Websites</h3>
									</div>
									<div class="8u$" style="padding: 0 0 0 0">
										<h3 style="padding:0.3em 0 0 0; color:black">'.$row["Website"].'</h3>
									</div>
									<div class="12u" style="padding:0 0 0.3em 0">
										<h3 style="padding:0.3em 0 0 0; color:black">How did you hear about this job?</h3>
									</div>
									<div class="8u$" style="padding: 0 0 0 0">
										<h3 style="padding:0.3em 0 0 0; color:black">'.$row["Channel"].'</h3>
									</div>
									';
							}
						} else {
							echo "0 results";
						}
						
						//closing mysqli connection
						$mysqli->close;
					?>
				</div>
			</section>
			<!-- Footer -->
			<?php require ("/homepages/11/d666590624/htdocs/Website/footer.php"); ?>

		<!-- Scripts -->
			<script src="/assets/js/jquery.min.js"></script>
			<script src="/assets/js/skel.min.js"></script>
			<script src="/assets/js/util.js"></script>
			<script src="/assets/js/main.js"></script>
			<script>
				(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
				})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
				ga('create', 'UA-99902633-1', 'auto');
				ga('send', 'pageview');

				var trackOutboundLink = function(url, isExternal) {
					var params = {};

					if (!isExternal) {
						params.hitCallback = function () {
							document.location = url;
						}
					}
					ga('send', 'event', 'outbound', 'click', url, params);

					return isExternal;
				}
			</script>	
	</body>
</html>