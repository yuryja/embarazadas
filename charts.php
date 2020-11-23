<?php 
    function consulta($condicion){
        include 'conexion.php';
        $query = "SELECT * FROM embarazadas WHERE condicion='$condicion'";
        $registro = $link->query($query);
        $valor = $registro->num_rows;
        return $valor;
    }
    function prenatal(){
        include 'conexion.php';
        $query = "SELECT * FROM prenatal";
        $registro = $link->query($query);
        $valor = $registro->num_rows;
        return $valor;
    }
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card mycard">
                <div class="card-header">
                        Resumen General
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <?= 'embarazadas:'.consulta(1) ?>
                        </div>
                        <div class="col-md-4">
                            <?= 'doctores:'.consulta(2) ?>
                        </div>
                        <div class="col-md-4">
                            <?= 'prenatal:'.prenatal() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>