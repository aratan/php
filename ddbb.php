<?php

$mysqli = new mysqli("localhost", "root", "", "myproyecto");

/* comprueba la conexión */

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
//echo "Connected successfully <br>";
//mysqli_close($conn);

?>