<?php
    $url_Adminstracion = "<li><a href='#'>Administraci&oacute;n</a></li>";
?>
    <div>
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="#">Clientes</a></li>
            <li><a href="#">Acerca de</a></li>
            <li><a href="contacto.php">Contacto</a></li>
            <?php
                if(isset($_POST['usuario'])){
                    $_SESSION['usuario'] = $_POST['usuario'];
                    echo $url_Adminstracion;
                    
                }else{
                    if(isset($_SESSION['usuario'])){
                        echo $url_Adminstracion;
                    }
            }
            ?>
        </ul>
    </div>

