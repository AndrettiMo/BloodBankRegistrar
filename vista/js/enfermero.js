$(document).ready(function(){

  iniciarTablaE();
  cargarDatosE();


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

              cargarDatosE();
            }

            else{

                alert("Error imbecil");
            }
        }
    })
    })


    

function cargarDatosE() {

    var listaEnfermero = "ok";
    var objListarEnfermero = new FormData();

    objListarEnfermero.append("listaEnfermero", listaEnfermero)

    $.ajax({

        url: "control/enfermeroControlador.php",
        type: "post",
        dataType: "json",
        data: objListarEnfermero,
        cache: false,
        contentType: false,
        processData: false,
        success: function (respuesta) {

            var dataSet = [];
            respuesta.forEach(cargarDatos);

            function cargarDatos(item, index) {

                var objBotones = interface = '<button type="button" class="btn btn-warning" title="Editar" id="btnEditarE" idEnfermero="' + item.idEnfermero + '"  nombreEnfermero="' + item.nombreEnfermero + '" apellidoEnfermero="' + item.apellidoEnfermero + '" tipoDocumento="' + item.tipoDocumento + '" numeroDocumento="' + item.numeroDocumento + '" fechaNacimiento="' + item.fechaNacimiento + '" telefono="' + item.telefono + '" data-toggle="modal" data-target="#modalEditar"><span class="glyphicon glyphicon-pencil"></span></button>';
                objBotones += '<button type="button" class="btn btn-danger" title="Eliminar" id="btn-eliminar" idEnfermero="' + item.idEnfermero + '"><span class="glyphicon glyphicon-remove"></span></button>';

                dataSet.push([item.nombreEnfermero, item.apellidoEnfermero, item.tipoDocumento, item.numeroDocumento, item.fechaNacimiento, item.telefono, objBotones]);


            }

            $('#tablaEnfermero').DataTable({

                data: dataSet

            })


        }


    })

}


function iniciarTablaE() {

    var tabla = $("#tablaEnfermero").DataTable();
    tabla.destroy();

}



$("#tablaEnfermero").on("click", "#btnEditarE", function () {

    var idEnfermero = $(this).attr("idEnfermero");
    var nombre = $(this).attr("nombreEnfermero");
    var apellido = $(this).attr("apellidoEnfermero");
    var tipoDocumento = $(this).attr("tipoDocumento");
    var documento = $(this).attr("numeroDocumento");
    var fechaN = $(this).attr("fechaNacimiento");
    var telefono = $(this).attr("telefono");



    $("#btnModificar").attr("idEnfermero", idEnfermero);
    $("#txtModNombreE").val(nombre);
    $("#txtModApellidoE").val(apellido);
    $("#modTipoE").val(tipoDocumento);
    $("#txtModDocumentoE").val(documento);
    $("#txtModFechaE").val(fechaN);
    $("#txtModTelefonoE").val(telefono);


})


$("#btnModificar").click(function () {

    var idEnfermero = $(this).attr("idEnfermero");
    var nombre = $("#txtModNombreE").val();
    var apellido = $("#txtModApellidoE").val();
    var tipoDocumento = $("#modTipoE").val();
    var documento = $("#txtModDocumentoE").val();
    var fechaN = $("#txtModFechaE").val();
    var telefono = $("#txtModTelefonoE").val();



    var objData = new FormData();
    objData.append("modIdEnfermero", idEnfermero);
    objData.append("modNombre", nombre);
    objData.append("modApellido", apellido);
    objData.append("modTipoDocumento", tipoDocumento);
    objData.append("modDocumento", documento);
    objData.append("modFechaN", fechaN);
    objData.append("modTelefono", telefono);


    $.ajax({
        url: "control/enfermeroControlador.php",
        type: "post",
        dataType: "json",
        data: objData,
        cache: false,
        contentType: false,
        processData: false,
        success: function (respuesta) {

            if (respuesta == "ok") {

                Swal.fire({
                    position: 'top-center',
                    icon: 'success',
                    title: 'Modificacion Exitosa',
                    showConfirmButton: false,
                    timer: 3000
                })
                iniciarTablaE();
                cargarDatosE();


            } else {

                alert("Error , por favor vuelve a intentarlo");

            }



        }
    })


})


$("#tablaEnfermero").on("click", "#btn-eliminar", function () {

    var idEnfermero = $(this).attr("idEnfermero");



    Swal.fire({
        title: 'Esta seguro de eliminar el registro?',
        text: "Si lo elimina no podra recuperarlo!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, eliminalo!'
    }).then((result) => {
        if (result.isConfirmed) {

            var objData = new FormData();
            objData.append("idEnfermero", idEnfermero);


            $.ajax({
                url: "control/enfermeroControlador.php",
                type: "post",
                dataType: "json",
                data: objData,
                cache: false,
                contentType: false,
                processData: false,
                success: function (respuesta) {
                    if (respuesta == "ok") {
                        Swal.fire(
                            'Eliminado!',
                            'El registro ha sido eliminado.',
                            'success'
                        )
                        iniciarTablaE();
                        cargarDatosE();

                    }

                }

            })

        }
    })
})



})