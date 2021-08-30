
/////////////   NO TOCAR///////////////
/////////////   NO TOCAR///////////////
/////////////  Este apartado es para elegir que informacion quiero ver en el select ////////////

function mostrar(id){

    if(id=="donante"){
    
      $("#donante").show();
      $("#enfermero").hide();
     
     
    
    }
    
    if(id=="enfermero"){
       $("#donante").hide();
       $("#enfermero").show();
    
       cargarDatosE();
       iniciarTablaE();


       
    }
}


/// Esto pertenece al apartado de enfermero ////
/////////////   NO TOCAR ///////////////
/////////////   NO TOCAR ///////////////


function cargarDatosE(){

    var listaEnfermero="ok";
    var objListarEnfermero =new FormData();

    objListarEnfermero.append("listaEnfermero",listaEnfermero)

    $.ajax({

     url:"control/enfermeroControlador.php",
     type:"post",
     dataType:"json",
     data: objListarEnfermero,
     cache: false,
     contentType: false,
     processData: false,
     success: function(respuesta){
     
        var dataSet = [];
        respuesta.forEach(cargarDatos);

        function cargarDatos(item,index){

            var objBotones = interface = '<button type="button" class="btn btn-warning" title="Editar" id="btnEditarE" idEnfermero="' + item.idEnfermero + '"  nombreEnfermero="' + item.nombreEnfermero + '" apellidoEnfermero="' + item.apellidoEnfermero + '" tipoDocumento="' + item.tipoDocumento+ '" numeroDocumento="' + item.numeroDocumento + '" fechaNacimiento="' + item.fechaNacimiento+ '" telefono="' + item.telefono + '" data-toggle="modal" data-target="#modalEditar"><span class="glyphicon glyphicon-pencil"></span></button>';
            objBotones += '<button type="button" class="btn btn-danger" title="Eliminar" id="btn-eliminar" idEnfermero="' + item.idEnfermero + '"><span class="glyphicon glyphicon-remove"></span></button>';

            dataSet.push([item.nombreEnfermero,item.apellidoEnfermero,item.tipoDocumento,item.numeroDocumento,item.fechaNacimiento,item.telefono, objBotones]);


        }
 
            

             $('#tablaEnfermero').DataTable({
                       
                 data:dataSet                  





             })


     }


    })


    

}



 


function iniciarTablaE(){
     
    var tabla = $("#tablaEnfermero").DataTable();
    tabla.destroy();



}




//////// hasta aqui debe ir el codigo para mostrar la tabla y inicializarla///////




///// POR FAVOR   LEA EL CODIGO COMENTADO SI TIENE DUDAS COMUNIQUESE CON FABIAN 




///// Aqui empezamos a utilizar JQUERY y en este espacio lo que se hace es el apartado de editar y eliminar /////

////  Tenga precaucion al modificar algo //////
//// ya que un pequeño cambio genera un gran conflicto ///

$(document).ready(function(){


$("#tablaEnfermero").on("click","#btnEditarE",function(){

    var idEnfermero = $(this).attr("idEnfermero");
    var nombre = $(this).attr("nombreEnfermero");
    var apellido = $(this).attr("apellidoEnfermero");
    var tipoDocumento = $(this).attr("tipoDocumento");
    var documento = $(this).attr("numeroDocumento");
    var fechaN = $(this).attr("fechaNacimiento");
    var telefono = $(this).attr("telefono");

    
    
    $("#btnModificar").attr("idEnfermero",idEnfermero);
    $("#txtModNombreE").val(nombre);
    $("#txtModApellidoE").val(apellido);
    $("#modTipoE").val(tipoDocumento);
    $("#txtModDocumentoE").val(documento);
    $("#txtModFechaE").val(fechaN);
    $("#txtModTelefonoE").val(telefono);


    })
    
    
    $("#btnModificar").click(function(){
    
        var idEnfermero =$(this).attr("idEnfermero");
        var nombre= $("#txtModNombreE").val();
        var apellido = $("#txtModApellidoE").val();
        var tipoDocumento = $("#modTipoE").val();
        var documento = $("#txtModDocumentoE").val();
        var fechaN= $("#txtModFechaE").val();
        var telefono = $("#txtModTelefonoE").val();


    
          var objData = new FormData ();
          objData.append("modIdEnfermero",idEnfermero);
          objData.append("modNombre",nombre);
          objData.append("modApellido",apellido);
          objData.append("modTipoDocumento",tipoDocumento);
          objData.append("modDocumento",documento);
          objData.append("modFechaN",fechaN);
          objData.append("modTelefono",telefono);
        
    
          $.ajax({
              url: "control/enfermeroControlador.php",
              type: "post",
              dataType: "json",
              data: objData,
              cache: false,
              contentType: false,
              processData: false,
              success: function(respuesta) {

                if(respuesta=="ok"){

                    Swal.fire({
                        position: 'top-center',
                        icon: 'success',
                        title: 'Modificacion Exitosa',
                        showConfirmButton: false,
                        timer: 3000
                    })
                      iniciarTablaE();
                      cargarDatosE();


                }else{

                   alert("Error , por favor vuelve a intentarlo");

                }
    
               
               
              }
          })
    
    
        })


          $("#tablaEnfermero").on("click","#btn-eliminar", function() {
       
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
                        success: function(respuesta) {
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

    
        /////////     FIN DEL APARTADO DE EDITAR Y ELIMINAR DATOS DEL ENFERMERO///////////
         /////////     FIN DEL APARTADO DE EDITAR Y ELIMINAR DATOS DEL ENFERMERO///////////
          /////////     FIN DEL APARTADO DE EDITAR Y ELIMINAR DATOS DEL ENFERMERO///////////



    
    
    
    
    
    
    




})























