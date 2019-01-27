<?php

function email($to, $subject, $message, $user, $domain)
{
	$headers = 'From: '.$user.'@'.$domain. '<'.$user.'@'.$domain.'>'. "\r\n" .
    'Reply-To:'.$user.'@'.$domain. '<'.$user.'@'.$domain.'>'. "\r\n" .
    "Content-type: text/plain; charset=iso-8859-2\r\n".
    'X-Mailer: PHP/' . phpversion();
    mail($to, $subject, $message, $headers);
	echo $headers;
}


//email($to, $subject, $message, $user, $domain);
example: email('example@example.org', 'Example subject', 'Example message', 'user', 'example.org');

?>    	
