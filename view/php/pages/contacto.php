<?php
    include_once '../initial/init.php';
?>
<header>
    <?php
        include_once '../body/header.php';
    ?>
</header>

<nav>
    <?php 
        include_once '../body/nav.php';
    ?>
</nav>
<div id="contacto">
    <img src="../../img/logo_xl.png"/>
    <h3>Detinec</h3>
    <div id="formulario">
        <h3>Formulario de contacto</h3>
        <form>
            <label>Nombre:</label>
            <input type="text" maxlength="24"/>
            <label>Tel&eacute;fono:</label>
            <input type="text" maxlength="24"/>
            <label>Correo electr&oacute;nico:</label>
            <input type="password" maxlength="24"/>
            <label>Comentario:</label>
            <textarea></textarea>
            <button type="submit">Enviar</button>
        </form>
    </div>
    <div id="retorno">
        <a href="http://localhost/Detinec">&NestedLessLess; Volver</a>
    </div>
</div>
<footer>
    <?php
        include_once '../body/footer.php';
    ?>
</footer>