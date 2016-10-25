<?php

    $idContactoBorrar =  $_POST['idContactoDelete'];

   /* echo "Id a borrar:".$idContactoBorrar;*/
    
    include_once '../model/AbreConexionBBDD.php';
    $query_create = "delete from contactos where id_contacto=".$idContactoBorrar.";";
    $query = mysql_query($query_create, $conexion_db)
            or die("400");
    
    include_once '../model/CierraConexionBBDD.php';
    echo"<body onLoad='javascript:volverIndex();'>";
            echo"<form name='returnIndex' action='index.php'>";
            echo"</form>";
        echo"</body>"; 
    echo"<body onLoad='javascript:volverAdministerDetinec();'>";
            echo"<form name='returnAdminister' action='AdministerDetinec.php'>";
            echo"</form>";
    echo"</body>";

?>