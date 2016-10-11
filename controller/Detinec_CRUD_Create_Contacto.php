<?php
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $comentario = $_POST['comentario'];
    
    $resultado_deti = $nombre.' '.$telefono.' '.$email.' '.$comentario;

    echo $resultado_deti;
?>

