<?php
    $db_name="detinec";

    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    echo 'usuario;'.$usuario.' password:'.$password;
    include_once '../model/AbreConexionBBDD.php';
    $query_verify_user = "select * from usuarios "
            . "where (usuario='$usuario' && "
            . "password ='$password');";
            
    $query = mysql_query($query_verify_user, $conexion_db)
            or die("300");
   /* $query = @mysql_db_query($db_name, $query_verify_user, $conexion_db) or die(mysql_error());
    echo 'es el query '.mysql_result($query,0, "usuario");
    echo 'es el query '.mysql_result($query,0, "password");
   */
    if ($row = mysql_fetch_array($query)){ 
         echo 'El usuario existe.';
    }
    else
    {
        echo 'EL usuario no existe!';
    }
    /*
    if((mysql_result($query,0, "usuario") == $usuario) && (mysql_result($query,0, "password") == $password)){
        echo 'El usuario existe.';
    }else{
        echo 'EL usuario no existe!';
    }
    */
    include_once '../model/CierraConexionBBDD.php';
    mysql_free_result($query);
?>

