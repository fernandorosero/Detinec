<div>
    <img src="view/img/logo_xl.png" alt="Logo DeTinEc"/>
    <p>Departamento Tecnol&oacute;gico Industrial</p>
    <?php
        include_once './controller/InicioSessionAdministrador.php';
        if(isset($_POST['usuario'])){
            $_SESSION['usuario'] = $_POST['usuario'];
            echo "Bienvenido! Has iniciado sesion: ".$_POST['usuario'];
            echo '<a href="../../../Detinec/controller/FinSessionAdministrador.php">Cerrar sesion</a>';
        }else{
            if(isset($_SESSION['usuario'])){
                echo "Has iniciado Sesion: ".$_SESSION['usuario'];
                echo '<a href="../../../Detinec/controller/FinSessionAdministrador.php">Cerrar sesion</a>';
            }else{
                echo'<a href="login.php">Login</a>';
            }
        }
    ?>
</div>