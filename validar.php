<?php
require_once 'conexion.php';
$user = $_POST['user'];
$contrasena = hash('md5', $_POST['contrasena'], false);
$query = "Select * FROM users WHERE user='$user' AND contrasena='$contrasena'"; //consulta SQL
$resultado = $link->query($query); //realiza la consulta
if ($resultado == true && $resultado->num_rows == 1) { //valida que la consulta sea cierta (true)
    $row = $resultado->fetch_object(); //se trae la consulta SQL
    session_start(); //inicia la sesion
    $_SESSION["user"] = $row->acl; //crea la variable de sesion user
    $_SESSION["timeout"] = time(); //crea el tiempo necesario para que expire la sesion
    $resultado->close(); //libera de memoria la consulta SQL
    header('Location: inicio.php');
}else{
    header('Location: index.html');
}
?>