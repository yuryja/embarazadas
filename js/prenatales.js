$(document).ready(function() {
    $("#centro").hide();
    $("#tipo_enfermedad").hide();
    $("#tipo_antecedente").hide();
    $("#tcontrol1").click(function(){
        $("#centro").show();
    });
    $("#tcontrol2").click(function(){
        $("#centro").hide();
    });
    $("#enfermedad1").click(function(){
        $("#tipo_enfermedad").show();
    });
    $("#enfermedad2").click(function(){
        $("#tipo_enfermedad").hide();
    });
    $("#antecedentes1").click(function(){
        $("#tipo_antecedente").show();
    });
    $("#antecedentes2").click(function(){
        $("#tipo_antecedente").hide();
    });
});