$(document).ready(function(){
    $("#consulta").click(function(){ //Al presionar el boton consultar
        var cedula = $("#cedula").val(); //Se obtiene el valor de la cedula
        var condicion = $("#condicion").val();
        $.ajax({ //Se realiza una consulta en AJAX
            type: 'GET', //Se define el metodo
            //url: 'consulta.php?cedula=' + cedula, //Se asigna la direccion
            url: `consulta.php?cedula=${cedula}&condicion=${condicion}`, //Se asigna la direccion
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