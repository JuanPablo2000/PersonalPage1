<<?php
$nombre_usuario=$_POST['nombre'];
$email_usuario=$_POST['email'];
$consulta_usuario=$_POST['mensaje'];

$destino="juanpabrenes85gmail.com";
$asunto="Consuta enviada desde mi web";

$mensaje="Nombre: ".$nombre_usuario."\r\n";
$mensaje.="Email: ".$email_usuario."\r\n";
$mensaje.="consulta: ".$consulta_usuario."\r\n";

$remitente="From: algo@johnylif.com.ar";

mail($destino, $asunto, $mensaje, $remitente);

header("Location:index.php?i=ok");

 ?>
