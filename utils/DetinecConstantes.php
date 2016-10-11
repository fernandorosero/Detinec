<?php

    $db_name="detinec";
    
    $tabla_contactos="CREATE TABLE IF NOT EXISTS contactos "
            . "(id_contacto integer unsigned NOT NULL auto_increment, "
            . "nombre varchar(30) NOT NULL, "
            . "telefono int(11) NOT NULL, "
            . "email varchar(50) NOT NULL, "
            . "comentario varchar(120) NOT NULL, "
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


