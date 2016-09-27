<br/>
<?php
    include_once 'AbreConexionBBDD.php';
    if($conexion_db)
       echo 'CONECTADO A LA BBDD';
    
?>
<br/>
<?php
    include_once 'CierraConexionBBDD.php';
    if($conexion_db)
        echo 'CERRADA BBDD';
?>

