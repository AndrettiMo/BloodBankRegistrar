cargarDatosE();


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
     
         var interface='';
         respuesta.forEach(cargarEnfermero);  //llama a la funcion en orden 

        

             function cargarEnfermero(item,index){

                interface += '<tr>';

                interface += '<td>' + item.nombreEnfermero + '</td>';
                interface += '<td>' + item.apellidoEnfermero+ '</td>';
                interface += '<td>' + item.tipoDocumento+ '</td>';
                interface += '<td>' + item.numeroDocumento + '</td>';
                interface += '<td>' + item.fechaNacimiento + '</td>';
                interface += '<td>' + item.telefono + '</td>';

               
                interface += '<td>';
                interface += '<div class="btn-group">';
                interface += '<button type="button" class="btn btn-warning" title="Editar" id="btnEditarE" idUsuario="' + item.idUsuario + '"  nombreUsuario="' + item.nombreUsuario + '" apellidoUsuario="' + item.apellidoUsuario + '" tipoDocumento="' + item.tipoDocumento+ '" numeroDocumento="' + item.numeroDocumento + '" direccion="' + item.direccion + '" telefono="' + item.telefono + '"Email="'+item.Email+'" data-toggle="modal" data-target="#modalEditar"><span class="glyphicon glyphicon-pencil"></span></button>';
                interface += '<button type="button" class="btn btn-danger" title="Eliminar" id="btn-eliminar" idUsuario="' + item.idUsuario + '"><span class="glyphicon glyphicon-remove"></span></button>';
                interface += '</div>';
                interface += '</td>';
                interface += '</tr>';
              
                $("#cuerpoTablaEnfermero").html(interface);

                
                
             }
          
             $('#tablaEnfermero').DataTable({
                       
               





             });


     }


    })


}