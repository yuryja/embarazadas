<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card mycard">
                <div class="card-header">
                    <?php 
                        if($condicion == 1){
                            echo "Registro de Embarazadas";
                        }else{
                            echo "Registro de Doctores";
                        }
                    ?>
                    
                </div>
                <div class="card-body">
                    <?php include 'consulta_cedula.php' ?>
                    <form action="registro.php" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nombres">Nombres</label>    
                                    <input class="form-control" type="text" id="nombres" name="nombres" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nombres">Apellidos</label>    
                                    <input class="form-control" type="text" id="apellidos" name="apellidos" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="direccion">Direccion</label>
                                    <textarea name="direccion" id="direccion" class="form-control" cols="30" rows="2" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="parroquia">Parroquia</label>
                                    <select id="parroquia" name="parroquia" class="form-control" required>
                                        <option value="">Seleccione</option>
                                        <option value="1">CM. Yaritagua</option>
                                        <option value="2">San Andres</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="telefono">Telefono</label>
                                    <input type="tel" id="telefono" name="telefono" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="hidden" name="cedula" id="cedula2" value=""><!-- campo oculto cedula -->
                                <input type="hidden" name="ids" id="ids" value=""><!-- campo oculto id (en caso de existir) -->
                                <input type="hidden" id="condicion" name="condicion" value="<?= $condicion ?>">
                                <button type="submit" class="btn btn-success btn-block" id="boton">Guardar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>