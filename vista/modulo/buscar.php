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
</div>
<!-- APARTADO DANAAAAAAAAA-->


<div id="donante" style="display: none;">
  <div class="container">

    <h2>Hover Rows</h2>
    <p>The .table-hover class enables a hover state on table rows:</p>
    <table id="tablaDonante" class="table table-hover">
      <thead>
        <tr>
          <th>Nombre Donante</th>
          <th>Apellido Donante</th>
          <th>Tipo de documento</th>
          <th>Numero de documento</th>
          <th>Fecha de nacimiento</th>
          <th>Edad</th>
          <th>Peso</th>
          <th>Genero</th>
          <th>RH</th>
          <th>Grupo Sanguineo</th>
          <th>Presion Arterial</th>
          <th>Temperatura</th>
          <th>Telefono</th>
          <th>Email</th>
          <th>Acciones</th>

        </tr>
      </thead>
      <tbody id="cuerpoTablaDonante">

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
                    <label for="txtmodNombreD">Nombre Donante:</label>
                    <input type="text" class="form-control" id="txtmodNombreD">
                </div>

                <div class="form-group">
                    <label for="txtmodApellidoD">Apellidos Donante:</label>
                    <input type="text" class="form-control" id="txtmodApellidoD">
                </div>

                <div class="form-group">
                    <label for="modtipoD">Tipo de Documento:</label>
                    <select id="modtipoD" class="form-control">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="Cedula de ciudadania">Cedula de ciudadania</option>
                        <option value="Cedula extranjera ">Cedula extranjera</option>
                        <option value="Registro civil">Registro civil</option>
                        <option value="Permiso de permanencia">Permiso de permanencia</option>

                    </select>
                </div>

                <div class="form-group">
                    <label for="txtmodDocumentoD">Numero de documento:</label>
                    <input type="text" class="form-control" id="txtmodDocumentoD">
                </div>

                <div class="form-group">
                    <label for="txtFechaD">Fecha de nacimiento:</label>
                    <input type="date" class="form-control" id="txtmodFechaD" min="1960-01-01">
                </div>

                <div class="form-group">
                    <label for="txtmodEdadD">Edad:</label>
                    <input type="text" class="form-control" id="txtmodEdadD">
                </div>

                <div class="form-group">
                    <label for="txtmodPesoD">Peso:</label>
                    <input type="text" class="form-control" id="txtmodPesoD">
                </div>

                <div class="form-group">
                <label for="modgeneroD">Genero</label>
                    <select id="modgeneroD" class="form-control">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="Femenino">Femenino</option>
                        <option value="Masculino">Masculino</option>
                        <option value="otro">otro</option>
                    </select>
                </div>


                <div class="form-group">
                <label for="modrhD">RH</label>
                    <select id="modrhD" class="form-control">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="Positivo">Positivo</option>
                        <option value="Negativo">Negativo</option>
                       
                    </select>
                </div>


                <div class="form-group">
                <label for="modgrupoSanguineoD">Grupo Sanguineo</label>
                    <select id="modgrupoSanguineoD" class="form-control">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="O">O</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="AB">AB</option>
                    </select>
                </div>



                <div class="form-group">
                    <label for="txtmodPresionArterialD">Presion Arterial:</label>
                    <input type="text" class="form-control" id="txtmodPresionArterialD">
                </div>


                <div class="form-group">
                    <label for="txtmodTemperaturaD">Temperatura:</label>
                    <input type="text" class="form-control" id="txtmodTemperaturaD">
                </div>


                <div class="form-group">
                    <label for="txtmodTelefonoE">Telefono:</label>
                    <input type="text" class="form-control" id="txtmodTelefonoE">
                </div>

                <div class="form-group">
                    <label for="txtmodEmailD">Email:</label>
                    <input type="text" class="form-control" id="txtmodEmailD">
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