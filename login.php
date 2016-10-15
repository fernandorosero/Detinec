<?php
    include_once 'init.php';
    include_once './controller/InicioSessionAdministrador.php';
    if (isset($_SESSION['usuario'])){
        echo '<p>Sesion iniciada:'.$_SESSION['usuario'].'';
        echo '<p><a href="controller/FinSessionAdministrador.php">Cerrar sesion</a></p>';
    }
?>

<div id="login"><!--
    <img src="view/img/logo_xl.png"/>
    <h3>Detinec</h3> -->
    <div id="formulario">
        <h3>Acceso</h3>
        <form action="controller/VerificarUsuarioDetinec.php" 
              onsubmit="return validarCamposLogin('usuario', 'password')" 
              method="POST">
            <label>Usuario:</label>
            <input type="text" id="usuario" name="usuario" maxlength="24"/>
            <label>Contrase&ntilde;a:</label>
            <input type="password" id="password" name="password" maxlength="24"/>
            <button type="submit">Entrar</button>
        </form>
    </div>
    <div id="retorno">
        <a href="http://localhost/Detinec">&NestedLessLess; Volver</a>
    </div>
</div>
