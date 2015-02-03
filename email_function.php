<?php
function email($useremail, $userpass, $studentid){
	$email = $useremail;
	$to = $email;
	$subject = "Welcome to the Sci-Tech Student Planner!";
	$message = "Welcome, and thank you for choosing the Sci-Tech Portfoilio planner!"."\n"."You may access your portfoilio at http://webteckdesign.com/scitechport."."\n"."Your student ID is ".$studentid."\n"."Your Password is ".$userpass."\n\n"."Sincerely, the Developers.";
	$from = "noreply@scitechport.com";
	$headers = "From:" . $from;
	mail($to,$subject,$message,$headers);}
?> 
