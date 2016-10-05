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
        <form action="">
            <label>Nombre:</label>
            <input type="text" maxlength="24" required/>
            <label>Tel&eacute;fono:</label>
            <input type="number" maxlength="24" required/>
            <label>Correo electr&oacute;nico:</label>
            <input type="email" maxlength="24" required/>
            <label>Comentario:</label>
            <textarea required></textarea>
            <button type="submit">Enviar</button>
        </form>
    </div>
</div>
<footer>
    <?php
        include_once './view/php/body/footer.php';
    ?>
</footer>