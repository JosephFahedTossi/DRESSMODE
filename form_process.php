<?php
	if( isset($_POST['n']) && isset($_POST['e']) && isset($_POST['m'])) {
		$n = $_POST['n'] ;
		$e = $_POST['e'] ;
		$m = nl2br($_POST['m']) ;
		$to = "josephfahedtossy@outlook.com";
		$from = $e ;
		$subject = 'Contact Form From Customer';
		$message = '<b>Name:</b>'.$n.'<br><b>Email:</b>'.$e'<p>'.$m.'</p>' ;
		$headers .= "FROM: $from\n";
		$headers .="Content-type: text/html; charset=iso-8859-1\n";
		if(mail($to, $subject,$message,$headers))	{
			echo "Success";
		} else {
			
		echo "Server have failed to send the message, please try again later.";
		}
	}
	
?>