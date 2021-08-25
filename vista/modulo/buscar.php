<form action="index.php" method="post">
    Estado actual: 
    <select id="status" name="status" onChange="mostrar(this.value);">
    <option disabled selected>Selecciona una opción</option>    
    <option value="donante">Donante</option>
        <option value="enfermero">Enfermero</option>
        
     </select>
</form>


<div id="enfermero" style="display: none;">
    
<div class="container">
 
<h2>Hover Rows</h2>
 <p>The .table-hover class enables a hover state on table rows:</p>            
 <table id="tablaEnfermero" class="table table-hover">
   <thead>
     <tr>
       <th>Nombre</th>
       <th>Apellido</th>
       <th>Tipo de documento</th>
       <th>Numero de documento</th>
       <th>Fecha de nacimiento</th>
       <th>Telefono</th>
       <th>Acciones</th>
      
     </tr>
   </thead>
   <tbody id="cuerpoTablaEnfermero">
    
   </tbody>
 </table>









  <!-- Modal -->
  <div class="modal fade" id="modalEditar" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">


        <div class="form-group">
      <label for="lblNombre">Nombre:</label>
      <input type="text" class="form-control"  id="txtModNombreE">
    </div>

    <div class="form-group">
      <label for="lblApellido">Apellidos:</label>
      <input type="text" class="form-control"  id="txtModApellidoE">
    </div>

    <div class="form-group">
      <label for="lblTipo">Tipo de Documento:</label>
      <select id="modTipoE" class="form-control">
            <option disabled selected>Selecciona una opción</option>
            <option value="Cedula de ciudadania" >Cedula de ciudadania</option>
            <option value="Cedula extranjera ">Cedula  extranjera</option>
            <option value="Registro civil">Registro civil</option>
            <option value="Permiso de permanencia">Permiso de permanencia</option>
 

      </select>
    </div>

    <div class="form-group">
      <label for="lblDocumento">Numero de documento:</label>
      <input type="text" class="form-control"  id="txtModDocumentoE">
    </div>

    <div class="form-group">
      <label for="lblFecha">Fecha de nacimiento:</label>
      <input type="date" class="form-control"   id="txtModFechaE" min="1960-01-01">
    </div>

    <div class="form-group">
      <label for="lblTelefono">Telefono:</label>
      <input type="text" class="form-control"   id="txtModTelefonoE" >
    </div>
    
    <div class="form-group">
      <label for="lblContraseña">Contraseña:</label>
      <input type="text" class="form-control"   id="txtModContraseñaE" >
    </div>
        </div>
        <div class="modal-footer">
        <button id="btnModificar"type="button" class="btn btn-primary">Modificar</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>


</div>


</div>
</div>

<div id="donante" style="display: none;">
    <h2>Si eres estudiante...</h2>
    <form action="index.php" method="post">
        <p>Nombre:<br/>
        <input type="text" name="nombre" /></p>
        <p>Centro:<br/>
        <input type="text" name="centro" /></p>
        <input type="submit" name="send" value="Enviar" />
    </form>
</div>