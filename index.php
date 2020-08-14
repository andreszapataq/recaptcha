<?php include 'Data/access.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/main.css">
    <title>reCAPTCHA</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
    <div id="contacto">
        <h1>reCAPTCHA</h1>
        <form action="form.php" method="POST" id="form">
            <input type="text" id="nombre" placeholder="Nombre" required><br>
            <input type="text" id="telefono" placeholder="Teléfono" required><br>
            <input type="email" id="email" placeholder="Email" required><br>
            <textarea name="message" id="" cols="30" rows="10" placeholder="Mensaje" required></textarea>
            <div class="g-recaptcha" data-sitekey="<?php echo $site_key; ?>"></div>
            <input type="submit" value="Enviar">
        </form>
        <!-- <p>Hola: <?php echo $site_key; ?></p> -->
    </div>
</body>
</html>