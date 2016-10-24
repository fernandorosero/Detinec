<?php

    include_once '/model/AbreConexionBBDD.php';
     $query_listar_contactos = "select * from contactos ";
    $resultado = mysql_query($query_listar_contactos);
     while($row = mysql_fetch_row($resultado))
     {
         echo "<tr>\n<td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td>\n<td>";
         include '/controller/BorrarContactoDetinec.php';
         echo"</td>\n</tr>";
     }
include_once '/model/CierraConexionBBDD.php';
?>