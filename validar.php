<?php
$user = $_POST['user'];
$password = $_POST['password'];
require_once 'conexion.php';
$query = "Select * FROM users WHERE user='$user' AND password='$password'"; //consulta SQL
$resultado = $link->query($query); //realiza la consulta
if ($resultado == true && $resultado->num_rows == 1) { //valida que la consulta sea cierta (true)
    $row = $resultado->fetch_array(); //se trae la consulta SQL
    session_start(); //inicia la sesion
    $_SESSION["user"] = $row['acl']; //crea la variable de sesion user
    $_SESSION["timeout"] = time(); //crea el tiempo necesario para que expire la sesion
    $resultado->close(); //libera de memoria la consulta SQL
    header('Location: inicio.php');
}else{
    header('Location: index.html');
}
?>