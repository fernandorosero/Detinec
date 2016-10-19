<?php
    include_once 'init.php';
    include_once './controller/InicioSessionAdministrador.php';
    $usuario = filter_input(INPUT_POST, 'usuario');
    $errorUsuario = filter_input(INPUT_POST, 'errorusuario');
    if($errorUsuario == 300){
        echo '<p id="usuarioErroneo">El usuario '.$usuario.' no existe, verifique sus datos</p>';
    }
    if (isset($_SESSION['usuario'])){
        /*echo '<p>Sesion iniciada:'.$_SESSION['usuario'].'';
        echo '<p><a href="controller/FinSessionAdministrador.php">Cerrar sesion</a></p>';*/
?>
    <h3>CODIGO PANEL DE CONTROL</h3>
    <div id="panelControl">
        <?php
        include './init.php';
        ?>
        <header>
        <?php
        include_once './view/php/body/header.php';
        ?>
            </header>
        <nav>
        <?php
        include_once './view/php/body/nav.php';
        ?>
        </nav>
        
    </div>

<?php
    }
    else{
        echo"<body onLoad='javascript:volverIndex();'>";
            echo"<form name='returnIndex' action='index.php'>";
            echo"</form>";
        echo"</body>";    
    }
?>