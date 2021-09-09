<div class="container">

<div class="row">
<div class="col-lg-4">


<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
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

    

  </form>
      </div>
      <div class="modal-footer">
      <button id="btnRegistroE" type="button" class="btn">Registrar</button>
      </div>
    </div>

  </div>
</div>

  


</div>

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
              <input type="text" class="form-control" id="txtModNombreE">
            </div>

            <div class="form-group">
              <label for="lblApellido">Apellidos:</label>
              <input type="text" class="form-control" id="txtModApellidoE">
            </div>

            <div class="form-group">
              <label for="lblTipo">Tipo de Documento:</label>
              <select id="modTipoE" class="form-control">
                <option disabled selected>Selecciona una opción</option>
                <option value="Cedula de ciudadania">Cedula de ciudadania</option>
                <option value="Cedula extranjera ">Cedula extranjera</option>
                <option value="Registro civil">Registro civil</option>
                <option value="Permiso de permanencia">Permiso de permanencia</option>


              </select>
            </div>

            <div class="form-group">
              <label for="lblDocumento">Numero de documento:</label>
              <input type="text" class="form-control" id="txtModDocumentoE">
            </div>

            <div class="form-group">
              <label for="lblFecha">Fecha de nacimiento:</label>
              <input type="date" class="form-control" id="txtModFechaE">
            </div>

            <div class="form-group">
              <label for="lblTelefono">Telefono:</label>
              <input type="text" class="form-control" id="txtModTelefonoE">
            </div>


          </div>
          <div class="modal-footer">
            <button id="btnModificar" type="button" class="btn btn-primary">Modificar</button>
          </div>
        </div>

      </div>
    </div>

  </div>


</div>












  
</div>