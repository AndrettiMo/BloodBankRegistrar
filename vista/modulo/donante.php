<div class="container">

    <div class="row">
        <div class="col-lg-4">

            <h2>Registro de Donante</h2>
            <form action="">
                <div class="form-group">
                    <label for="txtNombreD">Nombre Donante:</label>
                    <input type="text" class="form-control" id="txtNombreD">
                </div>

                <div class="form-group">
                    <label for="txtApellidoD">Apellidos Donante:</label>
                    <input type="text" class="form-control" id="txtApellidoD">
                </div>

                <div class="form-group">
                    <label for="tipoD">Tipo de Documento:</label>
                    <select id="tipoD" class="form-control">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="Cedula de ciudadania">Cedula de ciudadania</option>
                        <option value="Cedula extranjera ">Cedula extranjera</option>
                        <option value="Registro civil">Registro civil</option>
                        <option value="Permiso de permanencia">Permiso de permanencia</option>

                    </select>
                </div>

                <div class="form-group">
                    <label for="txtDocumentoD">Numero de documento:</label>
                    <input type="text" class="form-control" id="txtDocumentoD">
                </div>

                <div class="form-group">
                    <label for="txtFechaD">Fecha de nacimiento:</label>
                    <input type="date" class="form-control" id="txtFechaD" min="1960-01-01">
                </div>

                <div class="form-group">
                    <label for="txtEdadD">Edad:</label>
                    <input type="text" class="form-control" id="txtEdadD">
                </div>

                <div class="form-group">
                    <label for="txtPesoD">Peso:</label>
                    <input type="text" class="form-control" id="txtPesoD">
                </div>
                

                <div class="form-group">
                <label for="generoD">Genero</label>
                    <select id="generoD" class="form-control">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="Femenino">Femenino</option>
                        <option value="Masculino">Masculino</option>
                        <option value="otro">otro</option>
                    </select>
                </div>


                <div class="form-group">
                <label for="rhD">RH</label>
                    <select id="rhD" class="form-control">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="Positivo">Positivo</option>
                        <option value="Negativo">Negativo</option>
                       
                    </select>
                </div>


                <div class="form-group">
                <label for="grupoSanguineoD">Grupo Sanguineo</label>
                    <select id="grupoSanguineoD" class="form-control">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="O">O</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="AB">AB</option>
                    </select>
                </div>


                <div class="form-group">
                    <label for="txtPresionArterialD">Presion Arterial:</label>
                    <input type="text" class="form-control" id="txtPresionArterialD">
                </div>


                <div class="form-group">
                    <label for="txtTemperaturaD">Temperatura:</label>
                    <input type="text" class="form-control" id="txtTemperaturaD">
                </div>


                <div class="form-group">
                    <label for="txtTelefonoE">Telefono:</label>
                    <input type="text" class="form-control" id="txtTelefonoE">
                </div>

                <div class="form-group">
                    <label for="txtEmailD">Email:</label>
                    <input type="text" class="form-control" id="txtEmailD">
                </div>


                <button id="btnRegistrarD" type="button" class="btn">Registrar</button>

            </form>


        </div>

    </div>
</div>