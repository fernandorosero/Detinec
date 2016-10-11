<?php
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $comentario = $_POST['comentario'];
    include_once '../model/AbreConexionBBDD.php';
    $resultado_deti = $nombre.' '.$telefono.' '.$email.' '.$comentario;

    $query_create = "insert into contactos(nombre, telefono, email, comentario)"
            . " values('$nombre', '$telefono', '$email', '$comentario');";
    
    $query = mysql_query($query_create, $conexion_db)
            or die("NO SE HA PODIDO CREAR");
    include_once '../model/CierraConexionBBDD.php';
    echo $resultado_deti;
?>

