<?php

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$mailFrom = $_POST['mail'];
	$message = $_POST['message'];

	$mailto = "richardpersaud2010@hotmail.com";
	$headers = "From: ".$mailFrom;
	$txt = "You have recived an e-mail from ".$name.".\n\n".$message;

	mail($mailto, $subject, $txt, $headers);
	header("location: mailsend.php?mailsent");
}