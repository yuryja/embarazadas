<?php
    include('header.html'); //cabecera html con los css
    include('sesion.php'); //validacion de la sesion
    include('menu.php'); //llamado al menu
    // Aqui va el body
    $condicion = "1"; 
    include('formulario.php');
    // Aqui termina el body
?>
<!-- Creamos un Script en JQuery para traer la consulta de cedula -->
<script src="js/consulta.js"></script>
<!-- Aqui termina el Script  -->
<?php
    include('footer.html'); //LLamado al footer
?>