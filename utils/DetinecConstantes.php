<?php

    $db_name="detinec";
    
    $tabla_contactos="CREATE TABLE IF NOT EXISTS contactos "
            . "(id_contacto integer unsigned not null auto_increment, "
            . "nombre varchar(30) not null, "
            . "telefono int(11) not null, "
            . "correo varchar (30) not null, "
            . "mensaje varchar(200) not null, "
            . "PRIMARY KEY (id_contacto));";

    /*Local*/
    $url="localhost";
    $user="root";
    $password="";
    
    /*Produccion
    $url="localhost";
    $user="";
    $password="";
    */
?>


