<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="inicio.php">
        <img src="img/mpps2.png" class="logo d-inline-block align-top" alt="mpps-logo" loading="lazy">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="inicio.php">Inicio</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Registros
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="embarazadas.php">Registro Embarazadas</a>
                    <a class="dropdown-item" href="doctores.php">Registro Doctores</a>
                    <a class="dropdown-item" href="prenatales.php">Registro Prenatal</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Reportes
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="reporte.php">Reporte de Embarazadas</a>
                </div>
            </li>
            <?php if($_SESSION['user'] != 'Regis'){
            echo '
            <li class="nav-item">
                <a class="nav-link" href="usuarios.php">Usuarios</a>
            </li>';
            } ?>
            <li class="nav-item">
                <a class="nav-link" href="ayuda.php">Ayuda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="salir.php">Salir</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container">
    <div class="row d-flex justify-content-end saludo">
        <?php include 'saludo.php' ?>
    </div>
</div>
