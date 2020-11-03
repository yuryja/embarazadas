<?php
    $cedula = $_POST['cedula'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $direccion = $_POST['direccion'];
    $parroquia = $_POST['parroquia'];
    $telefono = $_POST['telefono'];
    $condicion = $_POST['condicion'];
    $ids = $_POST['ids'];
    include 'conexion.php';//Conexion a la Base de Datos
    if($ids == NULL){//Si no trajo un id, quiere decir que no lo encontro en la BD
        $query = "INSERT INTO embarazadas (cedula, nombres, apellidos, direccion, parroquia, telefono, condicion) VALUES ('$cedula', '$nombres', '$apellidos', '$direccion', '$parroquia', '$telefono', '$condicion')";
    }else{//Encontro registro en la BD y lo va a modificar
        $query = "UPDATE embarazadas SET cedula='$cedula', nombres='$nombres', apellidos='$apellidos', direccion='$direccion', parroquia='$parroquia', telefono='$telefono' WHERE id='$ids' ";
    }
    $result = $link->query($query);//Realiza la consulta
    if($condicion == 1){
        header('Location: embarazadas.php');//Redirige la navegacion a embarazadas
    }else{
        header('Location: doctores.php');//Redirige la navegacion a embarazadas
    }
    
?>