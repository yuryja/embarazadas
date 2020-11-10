<?php 
    require_once 'assets/dompdf/autoload.inc.php';
    function consulta_cedula($id) {
        include 'conexion.php';
        $query = "SELECT * FROM embarazadas INNER JOIN prenatal ON embarazadas.id=prenatal.id_embarazada WHERE embarazadas.id='$id'";
        $consulta = $link->query($query);
        $resultado = $consulta->fetch_object();
        return $resultado;
    }
    $id = $_GET['ids'];
    $valor = consulta_cedula($id);
    if($valor->condicion == 1){ $titulo_pdf= "Ficha de Embarazada"; }else{ $titulo_pdf= "Ficha de Doctor";}
    if($valor->parroquia == 1){ $parroquia = 'CM. Yaritagua'; }else{ $parroquia = 'San Andres';}
    if($valor->tcontrol == 1){ $encontrol = 'Si'; }else{ $encontrol = 'No'; }
    if($valor->enfermedad == 1){ $enfermedad = 'Si'; }else{ $enfermedad = 'No'; }
    if($valor->antecedentes == 1){ $antecedente = 'Si'; }else{ $antecedente = 'No'; }
    if($valor->micronutrientes == 1){ $mircronutrientes = 'Si'; }else{ $mircronutrientes = 'No'; }
    if($valor->asic == 1){ $asic = 'Si'; }else{ $asic = 'No'; }
    if($valor->parto_humanizado == 1){ $parto_humanizado = 'Si'; }else{ $parto_humanizado = 'No'; }
    if($valor->condicion_centro == 1){ $condicion = 'Publico'; }else{ $condicion = 'Privado';}

$html = '<html>
    <head>
        <link rel="text/css" href="http://localhost/embarazadas/css/pdf.css">
    </head>
    <body>
    <h3 class="titulo_pdf">'. $titulo_pdf .'</h3>                    
    <table class="tabla">
        <thead>
            <tr>
                <th colspan="2" class="text-center">Datos pricipales</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>Nombres y Apellidos:</th>
                <td>'. $valor->nombres.' '.$valor->apellidos . '
                </td>
            </tr>
            <tr>
                <th>Direccion:</th>
                <td>'. $valor->direccion .'</td>
            </tr>
            <tr>
                <th>Parroquia:</th>
                <td>'. $parroquia .'</td>
            </tr>
            <tr>
                <th>Telefono:</th>
                <td>'. $valor->telefono .'</td>
            </tr>
        </tbody>
    </table><br><br>


    <table class="tabla">
        <thead>
            <tr>
                <th colspan="2" class="text-center">Registro Prenatal</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>Ultima regla:</th>
                <td>'. $valor->ultima_regla .'</td>
            </tr>
            <tr>
                <th>Tiempo de embarazo:</th>
                <td>'. $valor->tiempo_embarazo.' semanas
                </td>
            </tr>
            <tr>
                <th>Fecha de parto:</th>
                <td>'. $valor->fecha_parto .'</td>
            </tr>
            <tr>
                <th>¿Se encuentra en control?</th>
                <td>'. $encontrol .'</td>
            </tr>
            <tr>
                <th>Centro:</th>
                <td>';
                        if($valor->centro == null){ echo 'N/A'; }else{ echo $valor->centro; }
                
                $html.= '</td>
            </tr>
            <tr>
                <th>Tipo de centro:</th>
                <td>'. $condicion .'</td>
            </tr>
            <tr>
                <th>¿Posee alguna enfermedad?</th>
                <td>'. $enfermedad .'</td>
            </tr>
            <tr>
                <th>Tipo de enfermedad:</th>
                <td>';
                    if($valor->tipo_enfermedad == null){ echo 'N/A'; }else{ echo $valor->tipo_enfermedad; }

                $html.= '</td>
            </tr>
            <tr>
                <th>¿Posee algun antecedente?</th>
                <td>'. $antecedente .'</td>
            </tr>
            <tr>
                <th>Tipo de antecedente:</th>
                <td>';
                    if($valor->tipo_antecedente == null){ echo 'N/A'; }else{ echo $valor->tipo_antecedente; }
                $html.= '</td>
            </tr>
            <tr>
                <th>¿Recibe Micronutrientes?</th>
                <td>'. $mircronutrientes .'</td>
            </tr>
            <tr>
                <th>¿ASIC?</th>
                <td>'. $asic .'</td>
            </tr>
            <tr>
                <th>¿Parto Humanizado?</th>
                <td>'. $parto_humanizado .'</td>
            </tr>
        </tbody>
    </table>
    </body>
</html>';

// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream('Reporte - '.$valor->cedula.'.pdf');
?>


                    