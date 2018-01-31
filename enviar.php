<?php



   $recaptcha = $_POST['g-recaptcha-response'];
   if ($recaptcha!=''){

        $secret = "6LeF_kIUAAAAANIIusx1wqtDEDJYrZXYs48WsFNT";
        $ip = $_SERVER['REMOTE_ADDR'];
        $var = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$recaptcha&remoteip=$ip");
        $array = json_decode($var, true);

        if($array['success']){

            $destino= "appscodedeveloper2017@gmail.com";
            $nombre = $_POST["nombre"];
            $apellidos = $_POST["apellidos"];
            $correo = $_POST["correo"];
            $telefono = $_POST["telefono"];
            $asunto = $_POST["asunto"];
            $mensaje = $_POST["mensaje"];
            $contenido = "Nomb: " . $nombre . "\nCognoms: " . $apellidos . "\nCorreu: " . $correo . "\nTeléfon: " . $telefono . "\nTema: " . $asunto . "\nMissatge: " . $mensaje;
            mail($destino,"Mensaje de appdesigndm", $contenido);
            header("location:passcaptcha.html");


        }else{
            echo '<script language="javascript">alert("Acceso restringido a los robots.");</script>';
        }

   }else{
       header("location:validatecaptcha.html");
   }
   ?>