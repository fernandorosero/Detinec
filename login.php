<?php
    include_once 'init.php';
?>

<div id="login"><!--
    <img src="view/img/logo_xl.png"/>
    <h3>Detinec</h3> -->
    <div id="formulario">
        <h3>Acceso</h3>
        <form action="" onsubmit="return validarCamposLogin('usuario', 'password')">
            <label>Usuario:</label>
            <input type="text" id="usuario" maxlength="24"/>
            <label>Contrase&ntilde;a:</label>
            <input type="password" id="password" maxlength="24"/>
            <button type="submit">Entrar</button>
        </form>
    </div>
    <div id="retorno">
        <a href="http://localhost/Detinec">&NestedLessLess; Volver</a>
    </div>
</div>
