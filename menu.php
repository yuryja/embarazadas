<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
    <li><a href="embarazadas.php">Registro Embarazadas</a></li>
    <li><a href="doctores.php">Registro Doctores</a></li>
    <li><a href="prenatales.php">Registro Prenatal</a></li>
</ul>
<ul id="dropdown2" class="dropdown-content">
    <li><a href="reporte.php">Reporte de Embarazadas</a></li>
</ul>
<nav>
  <div class="nav-wrapper">
    <a href="#!" class="brand-logo">
        <img src="img/mpps2.png" class="logo d-inline-block align-top" alt="mpps-logo" loading="lazy">
    </a>
    <ul class="right hide-on-med-and-down">
      <li><a href="inicio.php">Inicio</a></li>
      <!-- Dropdown Trigger -->
      <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Registros<i class="material-icons right"></i></a></li>
      <li><a class="dropdown-trigger" href="#!" data-target="dropdown2">Reportes<i class="material-icons right"></i></a></li>
      <?= ($_SESSION['user'] != 'Regis') ? '<li><a href="usuarios.php">Usuarios</a></li>' : '';?>
      <li><a href="ayuda.php">Ayuda</a></li>
      <li><a href="salir.php">Salir</a></li>
    </ul>
  </div>
</nav>
        