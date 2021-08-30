$(document).ready(function(){

  


    $("#btnRegistroE").click(function(){

      var nombre = $("#txtNombreE").val();
      var apellido = $("#txtApellidoE").val();
      var tipoDocumento = $("#tipoE").val();
      var documento = $("#txtDocumentoE").val();
      var fechaN = $("#txtFechaE").val();
      var telefono = $("#txtTelefonoE").val();
      var contrasena = $("#txtContraseñaE").val();
       
      var objData = new FormData();
      
      objData.append("nombreE",nombre);
      objData.append("apellidoE",apellido);
      objData.append("tipoE",tipoDocumento);
      objData.append("documento",documento);
      objData.append("fechaN",fechaN);
      objData.append("telefono",telefono);
      objData.append("contrasena",contrasena);

      $.ajax({
        url: "control/enfermeroControlador.php",
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
                    title: 'El usuario' +" "+ nombre +" "+ apellido + " "+'ha sido registrado correctamente' ,
                    showConfirmButton: false,
                    timer: 3000
                  })

              cargarEnfermero();
            }

            else{

                alert("Error imbecil");
            }
        }
    })
    })



})