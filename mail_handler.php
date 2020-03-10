<?php
	if(isset($_POST['submit'])){
		$name=$_POST['fullname'];
		$email=$_POST['email'];
		$source=$_POST['source'];
		$phone=$_POST['phone'];

		$to='sales@samara-tech.com'; 
		$subject='New Client';
		$message="Name :".$name."\n"."Phone :".$phone."\n"."Heard About You From :"."\n\n".$source;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>