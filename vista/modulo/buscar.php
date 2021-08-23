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