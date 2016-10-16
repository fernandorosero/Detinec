<div>
    <img src="view/img/logo_xl.png" alt="Logo DeTinEc"/>
    <p>Departamento Tecnol&oacute;gico Industrial</p>
    <?php
        include_once './controller/InicioSessionAdministrador.php';
        if(isset($_POST['usuario'])){
            $_SESSION['usuario'] = $_POST['usuario'];
            echo "<span id='bienvenido1'>Bienvenido! Has iniciado sesion: ".$_POST['usuario']."</span>";
            echo '<a id="cerrarSesion1" href="../../../Detinec/controller/FinSessionAdministrador.php">'
                . 'Cerrar Sesion</a>';
        }else{
            if(isset($_SESSION['usuario'])){
                echo "<span id='bienvenido2'>Has iniciado Sesion: ".$_SESSION['usuario']."</span>";
                
                echo '<a id="cerrarSesion2" href="../../../Detinec/controller/FinSessionAdministrador.php">'
                . 'Cerrar Sesion</a>';
            }else{
                echo'<a href="login.php">Login</a>';
            }
        }
    ?>
</div>