<?php

$destino = 'innovasystec@gmail.com';
$asunto = 'CONTACTO WEB';

$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];
$contenido = "Nombre: ".$nombre."\nTeléfono: ".$telefono."\nCorreo: ".$correo."\nMensaje: ".$mensaje;

mail($destino,$asunto,$contenido);
echo'<script type="text/javascript">
        alert("Mensaje Enviado");
        window.location.href="../inicio.php";
     </script>';

?>