<?php
// if(isset($_POST['email'])) {

// // Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
// $email_to = "jbermudez@proyeccione.com";
// $email_subject = "Contacto desde el sitio web";

// // Aquí se deberían validar los datos ingresados por el usuario
// if(!isset($_POST['nombre']) ||
// !isset($_POST['mail']) ||
// !isset($_POST['tel']) ||
// !isset($_POST['mensaje'])) {

// echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
// echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
// die();
// }

// $email_message = "Detalles del formulario de contacto:\n\n";
// $email_message .= "Nombre: " . $_POST['nombre'] . "\n";
// $email_message .= "E-mail: " . $_POST['mail'] . "\n";
// $email_message .= "Teléfono: " . $_POST['tel'] . "\n";
// $email_message .= "Comentarios: " . $_POST['mensaje'] . "\n\n";

// // Ahora se envía el e-mail usando la función mail() de PHP
// $headers = 'From: '.$email_from."\r\n".
// 'Reply-To: '.$email_from."\r\n" .
// 'X-Mailer: PHP/' . phpversion();
// @mail($email_to, $email_subject, $email_message, $headers);

// echo "<script language=’JavaScript’> alert(‘Mensaje Enviado’); </script>";
// }
// 

$nombre = $_POST['nombre'];
$mail = $_POST['mail'];
$tel = $_POST['tel'];
$mensaje = $_POST['mensaje'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",
 Su teléfono es: " . $tel . " \r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'administracion@tpestructural.com';
$asunto = 'Mensaje enviado desde la página web.';

mail($para, $asunto, utf8_decode($mensaje), $header);

echo "<script language='JavaScript'> alert('Mensaje Enviado'); window.location = 'ubicacion.php' </script>;"

?>