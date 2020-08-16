<?php
    include 'Data/access.php';

    if(isset($_POST['submit'])) {
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $mailFrom = $_POST['email'];
        $mensaje = $_POST['mensaje'];
        $captcha = $_POST['g-recaptcha-response'];

        $mailTo = "contacto@andreszapata.me";
        $subject = "Mensaje de ".$nombre." desde reCAPTCHA";
        $headers = "De: ".$mailFrom;
        
        // CUERPO DEL CORREO
        $body = "Nombre: ".$nombre."\n";
        $body .= "Telefono: ".$telefono."\n";
        $body .= "Correo Electronico: ".$mailFrom."\n\n";
        $body .= "Mensaje:\n".$mensaje;

        //reCAPTCHA
        $secretKey = $secret_key;
        $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) . '&response=' . urlencode($captcha);
        $response = file_get_contents($url);
        $responseKeys = json_decode($response,true);

        if($responseKeys["success"]) {
            mail($mailTo, $subject, $body, $headers);
            header("Location: index.php?mailsend");
        } else {
            header("Location: index.php?error");
        }
    }
?>