<?php
$link =  new mysqli('localhost', 'root', '', 'embarazadas');
if (mysqli_connect_errno()) {
    printf("Falló la conexión failed: %s\n", $link->connect_error);
    exit();
}
//localhost es el servidor
//root es el usuario de la base de datos
//'' es la clave del ususario de la base de datos
//embarazadas es la base de datoss
?>