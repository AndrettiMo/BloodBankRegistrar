$(document).ready(function(){

  cargarEnfermero();


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

function cargarEnfermero(){

  var listaEnfermero = "ok";
  var objListarEnfermero = new FormData();

  objListarEnfermero.append("listaEnfermero",listaEnfermero)

  $.ajax({
    url: "Control/enfermeroControlador.php",
    type: "post",
    dataType: "json",
    data: objListarEnfermero,
    cache: false,
    contentType: false,
    processData: false,
    success: function(respuesta) {

        var interface='';
        respuesta.forEach(cargarEnfermero);


        
        function cargarEnfermero(item, index) {
            interface += '<tr>';

            interface += '<td>' + item.nombreEnfermero + '</td>';
            interface += '<td>' + item.apellidoEnfermero + '</td>';
            interface += '<td>' + item.tipoDocumento +  '</td>';   
            interface += '<td>' + item.numeroDocumento + '</td>';
            interface += '<td>' + item.fechaNacimiento + '</td>';
            interface += '<td>' + item.telefono + '</td>';
         
            interface += '<td>';
            interface += '<div class="btn-group">';
            interface += '<button type="button" class="btn btn-warning" title="Editar" id="btn-editarE" idEnfermero="' + item.idEnfermero + '"  nombreEnfermero="' + item.nombreEnfermero + '" apellidoEnfermero="' + item.apellidoEnfermero +  '" tipoDocumento="' + item.tipoDocumento +'" numeroDocumento="' + item.numeroDocumento+ '" fechaNacimiento="' + item.fechaNacimiento + '" telefono="' + item.telefono + '" contraseña="' + item.contraseña + '"imagen="'+item.imagen+'" data-toggle="modal" data-target="#editarE"><span class="glyphicon glyphicon-pencil"></span></button>';
            interface += '<button type="button" class="btn btn-danger" title="Eliminar" id="btn-eliminarL" idEnfermero="' + item.idEnfermero + '"><span class="glyphicon glyphicon-remove"></span></button>';
            interface += '</div>';
            interface += '</td>';
            interface += '</tr>';
          }

          $("#cargarEnfermero").html(interface);


        }
   })




}


})