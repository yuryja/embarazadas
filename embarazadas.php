<?php
    include('header.html'); //cabecera html con los css
    include('sesion.php'); //validacion de la sesion
    include('menu.php'); //llamado al menu
?>
<!-- Aqui va el body -->
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card mycard">
                <div class="card-header">
                    Registro de Embarazadas
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
                                <button type="submit" class="btn btn-success btn-block" id="boton">Guardar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Aqui termina el body -->
<!-- Creamos un Script en JQuery para traer la consulta de cedula -->
<script>
    $(document).ready(function(){
        $("#consulta").click(function(){ //Al presionar el boton consultar
            var cedula = $("#cedula").val(); //Se obtiene el valor de la cedula
            $.ajax({ //Se realiza una consulta en AJAX
                type: 'GET', //Se define el metodo
                url: 'consulta.php?cedula=' + cedula, //Se asigna la direccion
                dataType: 'json', //Se define el formato obtenido
                success: function (result) { //Si la consulta es valida, se obtienen los valores
                    $("#nombres").val(result.nombres); //Se asigna al id nombres
                    $("#apellidos").val(result.apellidos); //Se asigna al id apellidos
                    $("#direccion").val(result.direccion);//Se asigna al id direccion
                    $("#telefono").val(result.telefono);//Se asigna al id telefono
                    $("#parroquia").val(result.parroquia);//Se asigna al id parroquia
                    $("#cedula2").val(result.cedula);//Se asigna al id cedula
                    $("#status").text(result.status);//Se asigna al id status
                    if(result.modificar == true){//Si existe modificar...
                        $("#ids").val(result.id);//Se obtiene el id
                        $("#boton").text('Modificar');//Se cambia el boton guardar por modificar
                    }
                }
            });
        });
    });
</script>
<!-- Aqui termina el Script  -->
<?php
    include('footer.html'); //LLamado al footer
?>