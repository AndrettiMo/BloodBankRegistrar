$(document).ready(function () {
    

    $("#btnRegistrarD").click(function () {

        var nombre = $("#txtNombreD").val();
        var apellido = $("#txtApellidoD").val();
        var tipo = $("#tipoD").val();
        var documento = $("#txtDocumentoD").val();
        var fecha = $("#txtFechaD").val();
        var edad = $("#txtEdadD").val();
        var peso = $("#txtPesoD").val();
        var genero = $("#generoD").val();
        var rh = $("#rhD").val();
        var grupo = $("#grupoSanguineoD").val();
        var presion = $("#txtPresionArterialD").val();
        var temperatura = $("#txtTemperaturaD").val();
        var telefono = $("#txtTelefonoE").val();
        var email = $("#txtEmailD").val();


        var objData = new FormData();
        objData.append("nombreD", nombre);
        objData.append("apellidoD", apellido);
        objData.append("tipoD", tipo);
        objData.append("documentoD", documento);
        objData.append("fechaD", fecha);
        objData.append("edadD", edad);
        objData.append("pesoD", peso);
        objData.append("generoD", genero);
        objData.append("rhD", rh);
        objData.append("grupoD", grupo);
        objData.append("presionD", presion);
        objData.append("temperaturaD", temperatura);
        objData.append("telefonoD", telefono);
        objData.append("emailD", email);

      


        $.ajax({
            url: "control/donanteControlador.php",
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
                        title: 'El usuario' + " " + nombre + " " + apellido + " " + 'ha sido registrado correctamente',
                        showConfirmButton: false,
                        timer: 3000
                    })


                }

                else {

                    alert("Error Intenta de nuevo");
                }
            }
        })
    })

    // function cargarTablaDonante() {
    //     $("#datosUsuarios").html("");
    //     var objDatos = new FormData();
    //     objDatos.append("listarUsuarios", "ok");
    //     $.ajax({
    //         url: "controlador/usuariosControlador.php",
    //         type: "post",
    //         dataType: "json",
    //         data: objDatos,
    //         cache: false,
    //         contentType: false,
    //         processData: false,
    //         success: function (respuesta) {

    //             var dataSet = [];
    //             respuesta.forEach(cargarDatos);

    //             function cargarDatos(item, index) {

    //                 var objBotones = '<button type="button" id="btnEditar" idUsuario="' + item.idUsuario + '" nombres="' + item.nombres + '" apellidos="' + item.apellidos + '" tipoDocumento="' + item.tipoDocumento + '" documento="' + item.documento + '" data-toggle="modal" data-target="#ventanaEditar" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></button>';
    //                 objBotones += '<button type="button" id="btnEliminar" idUsuario="' + item.idUsuario + '" class="btn btn-danger">Eliminar</button>';

    //                 dataSet.push([item.nombres, item.apellidos, item.tipoDocumento, item.documento, objBotones]);

    //             }


    //             $("#tablaUsuarios").DataTable({
    //                 data: dataSet
    //             });
    //         }
    //     })
    // }


})


