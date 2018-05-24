<? //Recepcion de datos
$nombre=$_POST['nombre'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$consulta=$_POST['consulta'];
$asunto=$_POST['asunto'];

// Fin de recepción de datos

// Acción de envio

//---------//

$para='info@asconsultoria.com.ar';
$mensaje='

Mensaje de:
'.$nombre.'

Telefono:
'.$telefono.'

Correo:
'.$correo.'

Consulta:
'.$consulta.'

Asunto:
'.$asunto.'

';

$desde='From: '.$correo.' <info@asconsultoria.com.ar>';
ini_set(sendmail_from,'info@asconsultoria.com.ar');
mail($para,$asunto,$mensaje,$desde);
header("Location: index.html");
?>
