<?php
    $idContactoBorrar =  $_POST['idContactoDelete'];
    
    include_once '../model/AbreConexionBBDD.php';
    $query_create = "delete from contactos where id_contacto=".$idContactoBorrar.";";
    $query = mysql_query($query_create, $conexion_db)
            or die("400");
    if($query){ 
        header('Location: ../AdministerDetinec.php');
    }
    else{
        echo '<input type="text"/>';
    }
    include_once '../model/CierraConexionBBDD.php';
?>