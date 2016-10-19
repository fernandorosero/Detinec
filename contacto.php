<?php
    include_once 'init.php';
    include_once './controller/InicioSessionAdministrador.php';
    $usuario = filter_input(INPUT_POST, 'usuario');
    $errorUsuario = filter_input(INPUT_POST, 'errorusuario');
    
    if($errorUsuario == 300){
        echo '<p id="usuarioErroneo">El usuario '.$usuario.' no existe, verifique sus datos</p>';
    }
    
    if (isset($_SESSION['usuario'])){
        echo '<p>Sesion iniciada:'.$_SESSION['usuario'].'';
        echo '<p><a href="controller/FinSessionAdministrador.php">Cerrar sesion</a></p>';
        echo"<body onLoad='javascript:volverIndex();'>";
            echo"<form name='returnIndex' action='index.php'>";
            echo"</form>";
        echo"</body>"; 
    }
    else{
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
        <form action="javascript:crearContacto($('#nombre').val(), $('#telefono').val(), $('#email').val(), $('#comentario').val());"
              onsubmit="return validarCamposFormularioContacto('nombre', 'telefono', 'email', 'comentario')" 
              method="POST">
            <label>Nombre:</label>
            <input type="text" maxlength="50" id="nombre" />
            <label>Tel&eacute;fono:</label>
            <input type="number" maxlength="24" id="telefono" />
            <label>Correo electr&oacute;nico:</label>
            <input type="email" maxlength="50" id="email" />
            <label>Comentario:</label>
            <textarea id="comentario" maxlength="200"></textarea>
            <button type="submit">Enviar</button>
        </form>
    </div>
    <div class="resultado none">
        <img  id="imgResultado" src=""/>
        <span id="resultado"></span>
    </div>
</div>

    <?php
        include_once './view/php/body/footer.php';
    ?>


<?php
    }
?>