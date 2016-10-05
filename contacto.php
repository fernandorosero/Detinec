<?php
    include_once 'init.php';
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

<div id="contacto">
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
</div>
<footer>
    <?php
        include_once './view/php/body/footer.php';
    ?>
</footer>