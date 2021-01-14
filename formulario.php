<div class="container">
    <div class="row">
        <h3 class="center-align">
            <?= ($condicion == 1) ? "Registro de Embarazadas" : "Registro de Doctores" ?>
        </h3>
    </div>
</div>
<?php include 'consulta_cedula.php' ?>               
<div class="container">
    <div class="row">
        <h4 class="center-align">
            Datos Generales
        </h4>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    
                    <form action="registro.php" method="post">
                        <div class="row">
                            <div class="col s12 m6">
                                <div class="input-field">
                                    <label for="nombres">Nombres</label>    
                                    <input class="validate" type="text" id="nombres" name="nombres" required>
                                </div>
                            </div>
                            <div class="col s12 m6">
                                <div class="input-field">
                                    <label for="nombres">Apellidos</label>    
                                    <input class="validate" type="text" id="apellidos" name="apellidos" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m12">
                                <div class="input-field">
                                    <label for="direccion">Direccion</label>
                                    <textarea name="direccion" id="direccion" class="materialize-textarea validate" cols="30" rows="2" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m6">
                                <div class="input-field">
                                    <label for="parroquia">Parroquia</label>
                                    <select id="parroquia" name="parroquia" class="validate" required>
                                        <option value="">Seleccione</option>
                                        <option value="1">CM. Yaritagua</option>
                                        <option value="2">San Andres</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col s12 m6">
                                <div class="input-field">
                                    <label for="telefono">Telefono</label>
                                    <input type="tel" id="telefono" name="telefono" class="validate">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m12">
                                <input type="hidden" name="cedula" id="cedula2" value=""><!-- campo oculto cedula -->
                                <input type="hidden" name="ids" id="ids" value=""><!-- campo oculto id (en caso de existir) -->
                                <input type="hidden" id="condicion" name="condicion" value="<?= $condicion ?>">
                                <!-- <button type="submit" class="btn btn-success btn-block" id="boton">Guardar</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>