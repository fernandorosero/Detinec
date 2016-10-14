<?php

    
    include_once './controller/InicioSessionAdministrador.php';
    if(isset($_POST['usuario'])){
        $_SESSION['usuario'] = $_POST['usuario'];
        echo "Bienvenido! Has iniciado sesion: ".$_POST['usuario'];
    }else{
        if(isset($_SESSION['usuario'])){
            echo "Has iniciado Sesion: ".$_SESSION['usuario'];
        }else{
            echo "Acceso Restringido";
        }
    }

?>
    <div>
        <img src="view/img/logo_xl.png" alt="Logo DeTinEc"/>
        <p>Departamento Tecnol&oacute;gico Industrial</p>
        <a href="login.php">Login</a>
    </div>