<?php
$user = $_POST['user'];
$password = $_POST['password'];
require_once('conexion.php');
$query = "SELECT * FROM users";
$resultado = $link->query($query);
if($resultado == true){
    echo 'hice la consulta';
    $resultado->close();
}
else{
    echo 'no pude';
}

// if ($resultado) {
//     printf("La selección devolvió %d filas.\n", $resultado->num_rows);

//     /* liberar el conjunto de resultados */
//     
// }else{
//     echo "no hay resultado";
// }
?>