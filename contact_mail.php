<?php
    if(isset($_POST['email'])) {
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $mailFrom = $_POST['email'];
        $mensaje = $_POST['mensaje'];

        $mailTo = "contacto@andreszapata.me";
        $subject = "Mensaje de ".$nombre. " desde AZ";
        $headers = "From: ".$mailFrom;
        $txt = "You have received an email from ".$nombre."\n\n".$mensaje;

        mail($mailTo, $subject, $txt, $headers);
        header("Location: index.php?mailsend");
    }
?>