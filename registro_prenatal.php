<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
    $ultima_regla = $_POST['ultima_regla'];
    $tiempo_embarazo = $_POST['tiempo_embarazo'];
    $fecha_parto = $_POST['fecha_parto'];
    $tcontrol = $_POST['tcontrol'];
    $centro = $_POST['centro'];
    $condicion_centro = $_POST['condicion_centro'];
    $enfermedad = $_POST['enfermedad'];
    $tipo_enfermedad = $_POST['tipo_enfermedad'];
    $micronutrientes = $_POST['micronutrientes'];
    $asic = $_POST['asic'];
    $parto_humanizado = $_POST['parto_humanizado'];
    $antecedentes = $_POST['antecedentes'];
    $tipo_antecedente = $_POST['tipo_antecedente'];
    $id_embarazada = $_POST['id_embarazada'];
    include 'conexion.php';//Conexion a la Base de Datos
    $query = "INSERT INTO prenatal (
        ultima_regla, 
        tiempo_embarazo, 
        fecha_parto, 
        tcontrol, 
        centro, 
        condicion_centro, 
        enfermedad, 
        tipo_enfermedad, 
        micronutrientes, 
        asic, 
        parto_humanizado, 
        antecedentes, 
        tipo_antecedente, 
        id_embarazada) 
        VALUES (
            '$ultima_regla',
            '$tiempo_embarazo',
            '$fecha_parto',
            '$tcontrol',
            '$centro',
            '$condicion_centro',
            '$enfermedad',
            '$tipo_enfermedad',
            '$micronutrientes',
            '$asic',
            '$parto_humanizado',
            '$antecedentes',
            '$tipo_antecedente',
            '$id_embarazada'
        )";
    $result = $link->query($query);//Realiza la consulta
    header('Location: prenatales.php');//Redirige la navegacion a embarazadas
?>