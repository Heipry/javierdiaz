<?php

if(isset($_POST['email']))
{
$mail_to='heipry@gmail.com';
$mail_subject=$_POST['subject'];
$mail_body="Mensaje desde javierdiaz.com.es<br>".$_POST['name']." con email: ".$_POST['email']." escribió: ".$_POST['message'];
$header = "Content-type: text/html\n";
$header .= "From: \"".$_POST['name']."\"<".$_POST['email'].">\n";
$header .= "Subject: \"".$_POST['subject']."\"";



if(mail($mail_to, $mail_subject, $mail_body,$header))
{
print "Email enviado correctamente!";
}
else
{
print "Hubo un problema con el email, vuelva a intentarlo";
}
}
?>


<!DOCTYPE HTML>
<html lang="es">
<meta charset="UTF-8">
<head>
	<script>alert("Gracias por contactar. Le responderé tan pronto como me sea posible.");</script>
	<meta HTTP-EQUIV="REFRESH" content="0; url=http://www.javierdiaz.com.es"> 
</head>