<?php

include "ddbb.php";

/* devuelve el nombre de la base de datos actualmente seleccionada */
if ($res = $mysqli->query("SELECT * FROM post")) {
    printf("[");
	while($row = $res->fetch_array()){
    $nombre = $row['nombre'];
    $resumen = $row['resumen'];
    $foto = $row['foto'];
    $url = $row['url'];
    $tag = $row['tag'];
    printf ('{
        "nombre":"%s",
        "resumen":"%s",
        "foto":"%s",
        "url":"%s",
        "tag":"%s"    
    },',$nombre,$resumen,$foto,$url,$tag);
 }
 printf('{
     "final":"final"
}]');
}

$mysqli->close();
?> 
