cargarDatosE();
iniciarTabla();


function mostrar(id){

    if(id=="donante"){
    
      $("#donante").show();
      $("#enfermero").hide();
     
     
    
    }
    
    if(id=="enfermero"){
       $("#donante").hide();
       $("#enfermero").show();
    
    }
}





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

            var objBotones = interface = '<button type="button" class="btn btn-warning" title="Editar" id="btnEditarE" idEnfermero="' + item.idUsuario + '"  nombreUsuario="' + item.nombreUsuario + '" apellidoUsuario="' + item.apellidoUsuario + '" tipoDocumento="' + item.tipoDocumento+ '" numeroDocumento="' + item.numeroDocumento + '" direccion="' + item.direccion + '" telefono="' + item.telefono + '"Email="'+item.Email+'" data-toggle="modal" data-target="#modalEditar"><span class="glyphicon glyphicon-pencil"></span></button>';
            objBotones += '<button type="button" class="btn btn-danger" title="Eliminar" id="btn-eliminar" idUsuario="' + item.idUsuario + '"><span class="glyphicon glyphicon-remove"></span></button>';

            dataSet.push([item.nombreEnfermero,item.apellidoEnfermero,item.tipoDocumento,item.numeroDocumento,item.fechaNacimiento,item.telefono, objBotones]);


        }
 
            

             $('#tablaEnfermero').DataTable({
                       
                 data:dataSet                  





             })


     }


    })


    

}

function iniciarTabla(){
     
    var tabla = $("#tablaEnfermero").DataTable();
    tabla.destroy();



}