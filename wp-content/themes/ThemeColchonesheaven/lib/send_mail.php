<?
/*$remitente = $_POST["mail"];
$destino= "fer.arce@hotmail.com";
$asunto= "Web mail";
$mensaje= "Nombre: ".$_POST["nombre"]." Telefono: ".$_POST["telf"]."<br/><br/>".$_POST["mensaje"];
$encabezados = "From: $remitente\nReply-To: $remitente\nContent-Type: text/html;charset=iso-8859-1";

mail($destino, $asunto, $mensaje, $encabezados) or die ("Su mensaje no se envio.");
*/
$asunto = "Web Mail";
$cuerpo .= "Nombre : " . $_POST["nombre"] . "\n";
$cuerpo .= "Apellido : " . $_POST["apellido"] . "\n";
$cuerpo .= "Mail : " . $_POST["mail"] . "\n";
//$cuerpo .= "Empresa : " . $HTTP_POST_VARS["empresa"] . "\n";
$cuerpo .= "Telefono : " . $_POST["telefono"] . "\n";
$cuerpo .= "Comentario : " . $_POST["mensaje"] . "\n";
$headers .= "From: " . $_POST["nombre"] . " <" . $_POST["mail"] . ">\r\n";
$to .= "Ventas <gerencia@colchonesheaven.com>\n";
//$headers .= "From: " . $HTTP_POST_VARS["nombre"] . " <" . $HTTP_POST_VARS["mail"] . ">\r\n";
//$headers .= "Cc: Roberto Leone <rleone@coit.com.uy>\r\n";
//$headers .= "Bcc: yascara <jacky.caballero@altrasoluciones.com>\r\n";
//mando el correo...       
mail($to,$asunto,$cuerpo,$headers); 
?>
