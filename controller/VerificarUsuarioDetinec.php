<!-- JavaScript -->
<script type="text/javascript" src="//localhost/Detinec/view/js/util.js"></script> 
<?php

    $errorUsuario ="";
    $db_name="detinec";
    $usuario = filter_input(INPUT_POST, 'usuario');
    $password = $_POST['password'];
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
            echo"<body onLoad='javascript:enviarForm();'>";
                echo"<form name='loginSend' action='../index.php' method='post'>";
                    echo"<input type='hidden' name='usuario' value='$usuario'/> ";
                echo"</form>";
            echo"</body>";    
         
    }
    else
    {
        $errorUsuario = 300;
        echo"<body onLoad='javascript:volverLogin();'>";
                echo"<form name='loginreturn' action='../login.php' method='post'>";
                    echo"<input type='hidden' name='errorusuario' value='$errorUsuario'/> ";
                    echo"<input type='hidden' name='usuario' value='$usuario'/> ";
                echo"</form>";
            echo"</body>";
        /*echo 'EL usuario no existe!';*/
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

