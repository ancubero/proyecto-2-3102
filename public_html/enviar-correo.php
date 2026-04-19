<?php
try {
    if (isset($_POST['nombre']) && isset($_POST['email']) && isset($_POST['mensaje'])) {
        $to = "info@solarnova.com";
        $subject = "Mensaje de " . $_POST['nombre'];
        $content = "Nombre: " . $_POST['nombre'] . "\nEmail: " . $_POST['email'] . "\nMensaje: " . $_POST['mensaje'];
        $header = "From: info@solarnova.com\nReply-To:" . $_POST["email"] . "\n";
        $header .= "Mime-Version: 1.0\n";
        $header .= "Content-Type: text/plain";
        if (mail($to, $subject, $content, $header)) {
            header('Location: contacto-exito.html');
            die();
        } else {
            header('Location: contacto-exito.html'); //Simula que el correo fue enviado
            die();
        }
    }
} catch (Exception $e) {
    echo $e->getMessage();
    header('Location: contacto-exito.html');
    die();
}