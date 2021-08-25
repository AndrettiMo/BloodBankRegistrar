$(document).ready(function(){

  

  $("#btnIngresar").click(function(){

    var tipoDocumento = $("#tipoDocumento").val();
    var numeroDocumento= $("#numeroDocumento").val();
    var pwd= $("#pwd").val();

  
    var objData = new FormData();
    objData.append("tipoDocumento",tipoDocumento);
    objData.append("numeroDocumento",numeroDocumento);
    objData.append("pwd",pwd);

    $.ajax({
        url: "control/loginControlador.php",
        type: "post",
        dataType: "json",
        data: objData,
        cache: false,
        contentType: false,
        processData: false,
        success: function(respuesta) {
    
            var idLogin = respuesta;
    
            if (respuesta == "No") {
                alert("No se puede realizar el ingreso")
            } else {
    
    
                alert("¡BIENVENIDO!!!")
    
                location.replace("principal.php");
    
    
            }
        }
    })
    







  })










})