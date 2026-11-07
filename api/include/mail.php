<?php
$to      = 'm.gnanadoss@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$ok = mail($to, $subject, $message, $headers);

if($ok)
{
	echo "success";
}
else
{
   echo "failed";	
}

?> 