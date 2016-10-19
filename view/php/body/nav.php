<?php
    $url_Contacto = "<li><a href='contacto.php'>Contacto</a></li>";
    $url_Adminstracion = "<li><a href='AdministerDetinec.php'>Administraci&oacute;n</a></li>";
?>
<nav>
    <div>
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="#">Clientes</a></li>
            <li><a href="#">Acerca de</a></li>
            <?php
               if(isset($_POST['usuario'])){
                    $_SESSION['usuario'] = $_POST['usuario'];
                    echo $url_Adminstracion;
                }else 
                    if(isset($_SESSION['usuario'])){
                        echo $url_Adminstracion;
                      }else{
                            echo $url_Contacto;
                      }
            ?>
        </ul>
    </div>
</nav>
