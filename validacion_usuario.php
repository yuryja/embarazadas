<?php
    include 'conexion.php';
    $user = $_POST['user'];
    $contrasena = hash('md5', $_POST['contrasena'], false);
    $nombres = $_POST['nombres'];
    ($_POST['acl'] == 1) ? $acl = 'Admin' : $acl ='Regis';
    $estado = $_POST['estado'];
    if($_POST['id'] != null){
        $id = $_POST['id']; //crea la variable id
        $query = "UPDATE users SET user='$user', contrasena='$contrasena', nombres='$nombres', acl='$acl', estado='$estado' WHERE id='$id' "; //consulta SQL a la table usuarios segun el id

    }else{
        $query = "INSERT INTO users (user, contrasena, nombres, acl, estado) VALUES ('$user','$contrasena', '$nombres', '$acl', '$estado') "; //consulta SQL a la table usuarios segun el id
    }
    $registro = $link->query($query); 
    header('Location: usuarios.php');
?>