<?php

    $db_name="detinec";
    
    $tabla_contactos="CREATE TABLE IF NOT EXISTS contactos "
            . "(id_contacto integer unsigned NOT NULL auto_increment, "
            . "nombre varchar(30) NOT NULL, "
            . "telefono int(11) NOT NULL, "
            . "email varchar(50) NOT NULL, "
            . "comentario varchar(200) NOT NULL, "
            . "PRIMARY KEY (id_contacto));";
    
    $tabla_usuarios="CREATE TABLE IF NOT EXISTS usuarios "
            . "(id_usuario integer unsigned not null auto_increment,"
            . "usuario varchar(30) not null, "
            . "password varchar (20) not null, "
            . "primary key (id_usuario));";
    
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


