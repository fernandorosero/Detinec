<?php

    include_once '/model/AbreConexionBBDD.php';
     $query_listar_contactos = "select * from contactos ";
    $resultado = mysql_query($query_listar_contactos);
     while($row = mysql_fetch_row($resultado))
     {
         echo "<tr>\n<td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td>\n<td>";
         
         echo"<body onLoad='javascript:borrarContacto();'>";
            echo"<form name='deleteContacto' action='/Detinec/controller/BorrarContactoDetinec.php' method='post'> ";
            echo"<input type='text' name='idContactoDelete' value='".$row[0]."'/>";
            include '/controller/BotonBorrar.php';
            echo"</form>";
        echo"</body>"; 
         
         echo"</td>\n</tr>";
     }
include_once '/model/CierraConexionBBDD.php';
?>