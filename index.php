<?php include 'Data/access.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>reCAPTCHA</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
    <div id="contacto">
        <h1>reCAPTCHA</h1>
        <form action="contact_mail.php" method="POST" id="form">
            <input type="text" name="nombre" id="nombre" placeholder="Nombre" required><br>
            <input type="text" name="telefono" id="telefono" placeholder="Teléfono"><br>
            <input type="email" name="email" id="email" placeholder="Email" required><br>
            <textarea name="mensaje" id="mensaje" cols="30" rows="10" placeholder="Mensaje" required></textarea>
            <div class="g-recaptcha" data-sitekey="<?= $site_key; ?>"></div>
            <input type="submit" name="submit" value="Enviar">
            <?php if(isset($_GET['error'])): ?>
               <p id="error">ERROR!</p>
            <?php endif; ?>
        </form>
    </div>
</body>
</html>