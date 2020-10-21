<?php
    $cedula = $_GET['cedula'];//obtiene el valor de la cedula
    include('conexion.php'); //conecta a la base de datos
    if($consulta = $link->query("SELECT * FROM embarazadas WHERE cedula='$cedula'")){ //valida la cedula en la BD
        if($consulta->num_rows == 1){ //Si encuentra registro...
            $row = $consulta->fetch_array(); //Trae el registro
            $row['modificar'] = true; //Agrega modificar con valor true
            $row['status'] = "Cedula Encontrada..."; //Agrega Status
            $consulta->close(); // cierra la conexion
        }else{ //Si no encuentra registro...
            $row['cedula'] = $cedula; //Crea un registro con la cedula suministrada
            $row['modificar'] = false; //Agrega modificar con valor falso
            $row['status'] = "Cedula NO Encontrada...";//Agrega un status
        }
    }
    $json = json_encode($row); //Convierte el registro obtenido en JSON
    print_r($json); //Muestra el JSON
?>