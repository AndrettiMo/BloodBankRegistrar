<div class="container">

<div class="row">
<div class="col-lg-4">

<h2>Vertical (basic) form</h2>
  <form action="">
    <div class="form-group">
      <label for="lblNombre">Nombre:</label>
      <input type="text" class="form-control"  id="txtNombreE">
    </div>

    <div class="form-group">
      <label for="lblApellido">Apellidos:</label>
      <input type="text" class="form-control"  id="txtApellidoE">
    </div>

    <div class="form-group">
      <label for="lblTipo">Tipo de Documento:</label>
      <select id="tipoE" class="form-control">
            <option disabled selected>Selecciona una opción</option>
            <option value="Cedula de ciudadania" >Cedula de ciudadania</option>
            <option value="Cedula extranjera ">Cedula  extranjera</option>
            <option value="Registro civil">Registro civil</option>
            <option value="Permiso de permanencia">Permiso de permanencia</option>
 

      </select>
    </div>

    <div class="form-group">
      <label for="lblDocumento">Numero de documento:</label>
      <input type="text" class="form-control"  id="txtDocumentoE">
    </div>

    <div class="form-group">
      <label for="lblFecha">Fecha de nacimiento:</label>
      <input type="date" class="form-control"   id="txtFechaE" min="1960-01-01">
    </div>

    <div class="form-group">
      <label for="lblTelefono">Telefono:</label>
      <input type="text" class="form-control"   id="txtTelefonoE" >
    </div>
    
    <div class="form-group">
      <label for="lblContraseña">Contraseña:</label>
      <input type="text" class="form-control"   id="txtContraseñaE" >
    </div>

    <button id="btnRegistroE" type="button" class="btn">Registrar</button>

  </form>


</div>

      







<div class="col-lg-8">

<h2>Bordered Table</h2>
  <p>The .table-bordered class adds borders to a table:</p>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Tipo de documento</th>
        <th>Numero de documento</th>
        <th>Fecha de nacimiento</th>
        <th>Telefono</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody id="cargarEnfermero">
      
    </tbody>
  </table>
</div>

</div>



</div>


  <!-- Modal -->
  <div class="modal fade" id="editarE" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>