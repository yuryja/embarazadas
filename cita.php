<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card mycard">
                <div class="card-header">
                    Registro de consulta embarazada
                </div>
                <div class="card-body">
                    <input type="hidden" id="condicion" name="condicion" value="1">
                    <?php include 'consulta_cedula.php'; ?>
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
                </div>
            </div>
        </div>
    </div>
</div>
