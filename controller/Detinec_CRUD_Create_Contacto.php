<?php
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $comentario = $_POST['comentario'];
    
    include_once '../model/AbreConexionBBDD.php';
    $resultado_deti = $nombre;

    $query_create = "insert into contactos(nombre, telefono, email, comentario)"
            . " values('$nombre', '$telefono', '$email', '$comentario');";
    
    $query = mysql_query($query_create, $conexion_db)
            or die("400");
    include_once '../model/CierraConexionBBDD.php';
    
    if($query){
        echo "<p>Gracias ".$resultado_deti." pronto nos pondremos en contacto con usted.</p>";
    }
    else{
        echo "400";
    }
?>

