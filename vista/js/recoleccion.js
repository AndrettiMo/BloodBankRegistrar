$(document).ready(function () {



    $("#btnRegistroR").click(function () {
        alert("Hola");
        var recoleccion = $("#recoleccion").val();
        var direccion = $("#direccion").val();
        var fecha = $("#fecha").val();
        var cantidad = $("#cantidad").val();
        var donante = $("#donante").val();
        var jornada = $("#jornada").val();
        alert(recoleccion);

        var objData = new FormData();

        objData.append("recoleccion", recoleccion);
        objData.append("direccion", direccion);
        objData.append("fecha", fecha);
        objData.append("cantidad", cantidad);
        objData.append("donante", donante);
        objData.append("jornada", jornada);
        $.ajax({
            url: "control/recoleccionControlador.php",
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
                        title: 'El usuario' + " " + recoleccion + " " + direccion + " " + fecha + " " + cantidad + " " + 'ha sido registrado correctamente',
                        showConfirmButton: false,
                        timer: 3000
                    })
                }

                else {

                    alert("Error");
                }
            }
        })
    })



})