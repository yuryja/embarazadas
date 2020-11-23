<?php
    include 'conexion.php'; //Importa el archivo de conexion
    if(isset($_GET['id'])){ //Verifica que existe un id valido
        $id = $_GET['id']; //crea la variable id
        $query = "SELECT * FROM users WHERE id='$id'"; //consulta SQL a la table usuarios segun el id
        $registro = $link->query($query); //realiza la consulta
        $user = $registro->fetch_object(); //Muestra la consulta y la convierte en un objeto
        $titulo = "Modificar Usuario"; //Establece un titulo
        $reg = 1; //Generamos un estatus de registro
    }else{ //Si no hay un id valido
        $titulo = "Crear Usuario"; //Solo establece un titulo
        $reg = 0; //Generamos un estatus de registro
    }
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card mycard">
                <div class="card-header">
                        <?= $titulo ?>
                </div>
                <div class="card-body">
                    <form action="validacion_usuario.php" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="user">Usuario</label>    
                                    <input class="form-control" type="text" name="user" value="<?= (isset($user->user)) ? $user->user : '' ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="contrasena">Contrasena</label>    
                                    <input class="form-control" type="password" name="contrasena" value="<?= (isset($user->contrasena)) ? $user->contrasena : '' ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nombre">Nombres</label>    
                                    <input class="form-control" type="text" name="nombres" value="<?= (isset($user->nombres) ? $user->nombres : '') ?>" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="acl">Jerarquia</label>
                                    <select name="acl" class="form-control" required>
                                        <option value="">Seleccione</option>
                                        <option value="1" <?= ((isset($user->acl)) && ($user->acl == 'Admin')) ? 'selected':'' ?> >Administrador</option>
                                        <option value="2" <?= ((isset($user->acl)) && ($user->acl == 'Regis')) ? 'selected':'' ?> >Registrador</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="estado">Estatus</label>
                                    <select name="estado" class="form-control" required>
                                        <option value="">Seleccione</option>
                                        <option value="1" <?= (isset($user->estado) && $user->estado == '1') ? 'selected':'' ?> >Activo</option>
                                        <option value="2" <?= (isset($user->estado) && $user->estado == '2') ? 'selected':'' ?> >Inactivo</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <input type="hidden" name="id" value="<?= (isset($user->id)) ? $user->id : '' ?>">
                                <button type="submit" class="btn btn-block btn-success">
                                    <?= ($reg == 0) ? 'Guardar' : 'Modificar' ?>
                                </button>
                            </div>
                        </div>  
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>