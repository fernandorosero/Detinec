<?php
    include_once '/model/AbreConexionBBDD.php';
     $query_listar_contactos = "select * from contactos ";
    $resultado = mysql_query($query_listar_contactos);
     while($row = mysql_fetch_row($resultado))
     {
        echo "<tr>\n<td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td>\n<td>";
            echo '<div id="formularioX">';
            echo"<form name='deleteContacto$row[0]' action='/Detinec/controller/BorrarContactoDetinec.php' method='post' "
                    . "onsubmit='return verificarBorrado()' >";
                echo"<input type='hidden' name='idContactoDelete' value='".$row[0]."'/>";
                include '/controller/BotonBorrar.php';
            echo"</form>";
            echo '</div>';
        echo"</td>\n</tr>";
     }
include_once '/model/CierraConexionBBDD.php';
?>