<?php
    include('header.html'); //cabecera html con los css
    include('sesion.php'); //validacion de la sesion
    include('menu.php'); //llamado al menu
    // Aqui va el body
    // Aqui termina el body
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card mycard">
                <div class="card-header">
                    Control prenatal
                </div>
                <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <h5 class="card-title">
                                    Consulta de cedula
                                </h5>
                                <p class="card-text">
                                    <div class="form-inline">
                                        <input class="form-control mr-sm-2" name="cedula" id="cedula" type="search" placeholder="Ej: v12345678" aria-label="Search">
                                        <input type="hidden" id="condicion" name="condicion" value="1">
                                        <button class="btn btn-outline-success my-2 my-sm-0" id="consulta">Consultar</button>
                                    </div>
                                </p>
                            </div>
                            <div class="col-md-8">
                                <h5 class="card-title">
                                    
                                </h5>
                                <p id="status" class="card-text">
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="nombres">Nombres</label>
                                    <input type="text" id="nombres" class="form-control">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="apellidos">Apellidos</label>
                                    <input type="text" id="apellidos" class="form-control">
                                </div>
                            </div>
                        </div>
                        <form action="registro_prenatal.php" method="post">
                        <input class="datepicker" data-date-format="mm/dd/yyyy">

                        
                        </form>
                    <!-- <form action="registro.php" method="post">
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
                                <!-- <input type="hidden" name="ids" id="ids" value=""> --><!-- campo oculto id (en caso de existir) -->
                                <!-- <input type="hidden" id="condicion" name="condicion" value="<?= $condicion ?> -->
                                <!-- <button type="submit" class="btn btn-success btn-block" id="boton">Guardar</button>
                            </div>
                        </div>
                    </form> -->
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $('.datepicker').datepicker({
        startDate: '-3d'
    });
</script>
<script src="js/consulta.js"></script>
<!-- Aqui termina el Script  -->
<?php
    include('footer.html'); //LLamado al footer
?>