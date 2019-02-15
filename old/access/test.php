<?php
	$to =" bedmanbedman@gmail.com,youtube@bo-buy.com"; //receiver
	$subject = "Reminder of job application"; //title
	$msg = "Someone just filed a job application, please check the application at http://bo-buy.com/access";//content
	$headers = "From: youtube@bo-buy.com"; //sender
	
	mail("$to", "$subject", "$msg", "$headers")
?>