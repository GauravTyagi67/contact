<?php

	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$msg=$_POST['msg'];
		$to='gktyagi2018@mail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message="Name :".$name."\n"."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers))
		{
			echo "<h3>Sent Successfully! Thank you"." <span style='color:red;'>".$name."</span>, We will contact you shortly!</h3>". "<a href='index.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
		}
		else
		{
			echo "Something went wrong!";
		}
	}

?>