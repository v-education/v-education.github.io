<?php
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$name = $_POST["name"];
		$email = $_POST["email"];
		$wechat = $_POST["wechat"];
		$phone = $_POST["phone"];
		$course_fee = $_POST["course_fee"];
		$course_time = $_POST["course_time"];
		
		// Add your email address here
		$to = "umarovbek@outlook.com";
		$subject = "New Application Submitted";
		$message = "Name: ".$name."\r\n"."Email: ".$email."\r\n"."WeChat ID: ".$wechat."\r\n"."Phone Number: ".$phone."\r\n"."Course Fee: ".$course_fee."\r\n"."Course Time: ".$course_time;
		$headers = "From: ".$email."\r\n"."Reply-To: ".$email."\r\n"."X-Mailer: PHP/".phpversion();
		
		if(mail($to, $subject, $message, $headers)){
			echo "<p>Application submitted successfully. We will contact you as soon as possible!</p>";
		} else{
			echo "<p>Oops! Something went wrong. Please try again later.</p>";
		}
	}
	?>
