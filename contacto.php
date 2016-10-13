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
        <form action="javascript:crearContacto($('#nombre').val(), $('#telefono').val(), $('#email').val(), $('#comentario').val());">
            <label>Nombre:</label>
            <input type="text" maxlength="50" id="nombre" required/>
            <label>Tel&eacute;fono:</label>
            <input type="number" maxlength="24" id="telefono" required/>
            <label>Correo electr&oacute;nico:</label>
            <input type="email" maxlength="50" id="email" required/>
            <label>Comentario:</label>
            <textarea required id="comentario"></textarea>
            <button type="submit">Enviar</button>
        </form>
    </div>
    <div class="resultado none">
        <span id="resultado"></span>
    </div>
</div>
<footer>
    <?php
        include_once './view/php/body/footer.php';
    ?>
</footer>