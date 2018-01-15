<?php
   $destino= "alexmailwork@gmail.com";
   $nombre = $_POST["nombre"];
   $apellidos = $_POST["apellidos"];
   $correo = $_POST["correo"];
   $telefono = $_POST["telefono"];
   $asunto = $_POST["asunto"];
   $mensaje = $_POST["mensaje"];
   $contenido = "Nomb: " . $nombre . "\nCognoms: " . $apellidos . "\nCorreu: " . $correo . "\nTeléfon: " . $telefono . "\nTema: " . $asunto . "\nMissatge: " . $mensaje;
   mail($destino,"Webappdesigndm", $contenido);
   header("location:index.html");
?>