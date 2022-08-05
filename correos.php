<?php
    $destinatario = 'luisvaldosabundez@gmail.com';
    //esto es al correo al que se enviará el mensaje
    $nombre = $_POST['nombre'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];
    $email = $_POST['email'];

    $header = "Enviado desde la pagina de AlexCG Desing";
    $mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;

    mail($destinatario, $asunto, $mensajeCompleto, $header);
    echo "<script>alert('correo enviado exitosamente')<\script>";
    echo "<script> SetTimeout(\"location.href='index.html'\"1000)<\script>";
?>