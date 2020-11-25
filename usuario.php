<?php
    include 'conexion.php';
    $query = "SELECT * FROM users WHERE acl !='super'";
    $registro = $link->query($query);
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card mycard">
                <div class="card-header">
                        Listado de usuarios
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-end">
                            <a class="create-button btn btn-success" href="crear_modificar_usuario.php">Crear Usuario</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                        <table id="table_id" class="display">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>usuario</th>
                                    <th>Nombre y Apellido</th>
                                    <th>Perfil</th>
                                    <th>Estado</th>
                                    <th>Creado</th>
                                    <th>Modificado</th>
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
                                    <td><?= $todos->user ?></td>
                                    <td><?= $todos->nombres ?></td>
                                    <td><?= $todos->acl ?></td>
                                    <td><?= ($todos->estado == 1) ? 'Activo' : 'Inactivo' ?></td>
                                    <td><?= $todos->creation_date ?></td>
                                    <td><?= $todos->update_date ?></td>
                                    <td>
                                        <a class="link-ver" href="crear_modificar_usuario.php?id=<?= $todos->id ?>">
                                            <img class="ver" src="assets/open-iconic/png/task-3x.png" alt="Editar">
                                            Editar
                                        </a>
                                        <a class="link-ver" href="borrar_usuario.php?id=<?= $todos->id ?>">
                                            <img class="ver" src="assets/open-iconic/png/trash-3x.png" alt="Borrar">
                                            Borrar
                                        </a>
                                    </td>
                                </tr>
                                <?php
                                        $cont++; 
                                    }   
                                ?>
                            </tbody>
                        </table>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>