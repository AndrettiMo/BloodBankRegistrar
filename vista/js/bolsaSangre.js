$(document).ready(function(){


   
  
    $("#btnRegistroBolsa").click(function(){

      


      var nombre = $("#txtNombreP").val();
      var modificacion = $("#modificacion").val();
      var metodoObtencion = $("#metodoO").val();
      var temperatura = $("#txtTemperatura").val();
      var volumen = $("#txtVolumen").val();
      var clasificacion = $("#clasificacionDonante").val();
      var grupoSanguineo = $("#grupoSanguineo").val();
      var rh = $("#factorRh").val();
      var resultadoPruebas = $("#txtresultadoPruebas").val();



     

       
      var objData = new FormData();
      
      objData.append("nombre",nombre);
      objData.append("modificacion",modificacion);
      objData.append("metodoObtencion",metodoObtencion);
      objData.append("temperatura",temperatura);
      objData.append("volumenContenido",volumen);
      objData.append("clasificacion",clasificacion);
      objData.append("grupoSanguineo",grupoSanguineo);
      objData.append("rhBolsa",rh);
       objData.append("resultadoPruebas",resultadoPruebas);

      

      $.ajax({
        url: "control/bolsaSangreControlador.php",
        type: "post",
        dataType: "json",
        data: objData,
        cache: false,
        contentType: false,
        processData: false,
        success: function(respuesta) {
    
            if (respuesta=="ok") {
                Swal.fire({
                    position: 'top-center',
                    icon: 'success',
                    title: 'se ha registrado correctamente' ,
                    showConfirmButton: false,
                    timer: 3000
                  })

          
            }

            else{

                alert("ERROR");
            }
        }
    })
    })



})