<?php
    include 'conexion.php';
    $query = "SELECT * FROM embarazadas WHERE condicion=1";
    $registro = $link->query($query);
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card mycard">
                <div class="card-header">
                        Reporte de embarazadas
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                        <table id="table_id" class="display">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Cedula</th>
                                    <th>Nombres</th>
                                    <th>Apellidos</th>
                                    <th>Fecha Registro</th>
                                    <th>Accion</th>
                                </tr>
                                
                            </thead>
                            <tbody>
                                <?php 
                                    $cont = 1;
                                    while($todos = $registro->fetch_object()){     
                                ?>
                                <tr>
                                    <td><?= $cont ?></td>
                                    <td><?= $todos->cedula ?></td>
                                    <td><?= $todos->nombres ?></td>
                                    <td><?= $todos->apellidos ?></td>
                                    <td><?= $todos->created_date ?></td>
                                    <td>
                                        <a class="link-ver" href="individual.php?id=<?= $todos->id ?>&condicion=1">
                                            <img class="ver" src="assets/open-iconic/png/eye-3x.png" alt="ver">
                                            ver
                                        </a>
                                    </td>
                                </tr>
                                <?php
                                        $cont++; 
                                    }   
                                ?>
                            </tbody>
                            <tfooter>
                                <tr>
                                    <th>#</th>
                                    <th>Cedula</th>
                                    <th>Nombres</th>
                                    <th>Apellidos</th>
                                    <th>Fecha Registro</th>
                                    <th>Accion</th>
                                </tr>
                                
                            </tfooter>
                        </table>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready( function () {
        $('#table_id').DataTable();
    });
</script>