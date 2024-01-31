<?php
session_start();
if(isset($_POST['email']) && empty($_POST['required']) && isset($_SESSION["num1"]) && isset($_SESSION["num2"]) && isset($_POST["numero"]))
{ 

	$resp=$_SESSION["num1"]+$_SESSION["num2"];
	$numero = $_POST["numero"]; 
	if	($resp==$numero)
	{ 
		$destinatario = "heipry@gmail.com"; 
		$asunto = "Mensaje desde javierdiaz.com.es"; 
		$cuerpo = " 
		<html> 
		<head> 
		<title>".$_POST['subject']."</title> 
		</head> 
		<body> 
		<h1>".$_POST['subject']."</h1> 
		<p><b>Email:</b>".$_POST['email']."
			<br><b>Nombre:</b> 
			".$_POST['name']."<br>
			<b>Mensaje:</b>. ".$_POST['message']."
		</p> 
		</body> 
		</html> 
		"; 
	



	$headers = "MIME-Version: 1.0\r\n"; 
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
	$headers .= "From: Javier Diaz <javierdiazcomes@javierdiaz.com.es>\r\n"; 
	//dirección de respuesta
	$headers .= "Reply-To: ".$_POST['email']."\r\n"; 
	//ruta del mensaje desde origen a destino 
	$headers .= "Return-path: javierdiazcomes@javierdiaz.com.es\r\n"; 
	//direcciones que recibián copia 
	//$headers .= "Cc: heipry@gmail.com\r\n"; 
	} 	

}
?>


<!DOCTYPE HTML>
<html lang="es">
<meta charset="UTF-8">
<head>
	
	
</head>
<body>
<?php 
if(mail($destinatario,$asunto,$cuerpo,$headers))
{
echo '<script>alert("Gracias por contactar. Le responderé tan pronto como me sea posible.");</script>';
echo '<meta HTTP-EQUIV="REFRESH" content="0; url=https://www.javierdiaz.com.es">';
}
else
{	
$frase = "¿Seguro que ".$_SESSION['num1']." + ".$_SESSION['num2']." es igual a ".$_POST['numero']."?";
echo "<script>alert('Hubo un problema con el email, vuelva a intentarlo. ".$frase." ');</script>";
echo '<meta HTTP-EQUIV="REFRESH" content="0; url=https://www.javierdiaz.com.es">';

}


?>

</body>	