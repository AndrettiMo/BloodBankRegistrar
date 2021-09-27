<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Donde estamos ubicados </title>
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        width: 100%;
        height: 80%;
      }
     
    </style>
  </head>
  <body >

  <div id="map"></div>

    </br>
    </br>
    </br>
    </br>

<div class="container">

<div class ="row">
 
<div class="col-lg-4">


<div class="form-group">

<label>Latitud:</label>
<input type="text" class="form-control" id="lat" />

</div>

<div class="form-group">
<label>Longuitud:</label>
<input type="text" class="form-control"id="lng" />
</div>



<div class="form-group">
  <label for="lblRecoleccion">Ciudad de recoleccion:</label>
  <input type="text" class="form-control"   id="ciudadR" >
</div>

<div class="form-group">
  <label for="lblDireccion">Direccion:</label>
  <input type="text" class="form-control"   id="direccionR" >
</div>

<div class="form-group">
  <label for="lblFecha">Fecha inicio de la recoleccion :</label>
  <input type="date" class="form-control"   id="fechaInicio" min="1960-01-01">
</div>


<div class="form-group">
  <label for="lblFecha">Fecha final de la recoleccion :</label>
  <input type="date" class="form-control"   id="fechaFinal" min="1960-01-01">
</div>

<div class="form-group">
  <label for="lblCantidad">Hora de inicio:</label>
  <input type="time" class="form-control"   id="horaInicio" >
</div>

<div class="form-group">
  <label for="lblCantidad">Hora de final:</label>
  <input type="time" class="form-control"   id="horaFinal" >
</div>




  <button id="btnRegistroR" type="button" class="btn">Registrar</button>

</form>


</div>



</div>

</div>

  


</div>





    <script>


var marker;          //variable del marcador
var coords = {};    //coordenadas obtenidas con la geolocalización

//Funcion principal
initMap = function () 
{

    //usamos la API para geolocalizar el usuario
        navigator.geolocation.getCurrentPosition(
          function (position){
            coords =  {
              lng: position.coords.longitude,
              lat: position.coords.latitude
            };
            setMapa(coords);  //pasamos las coordenadas al metodo para crear el mapa
            
           
          },function(error){console.log(error);});
    
}



function setMapa (coords)
{   
      //Se crea una nueva instancia del objeto mapa
      var map = new google.maps.Map(document.getElementById('map'),
      {
        zoom: 13,
        center:new google.maps.LatLng(coords.lat,coords.lng),

      });

      //Creamos el marcador en el mapa con sus propiedades
      //para nuestro obetivo tenemos que poner el atributo draggable en true
      //position pondremos las mismas coordenas que obtuvimos en la geolocalización
      marker = new google.maps.Marker({
        map: map,
        draggable: true,
        animation: google.maps.Animation.DROP,
        position: new google.maps.LatLng(coords.lat,coords.lng),

      });
      //agregamos un evento al marcador junto con la funcion callback al igual que el evento dragend que indica 
      //cuando el usuario a soltado el marcador
      marker.addListener('click', toggleBounce);
      
      marker.addListener( 'dragend', function (event)
      {
        //escribimos las coordenadas de la posicion actual del marcador dentro del input #coords
        document.getElementById("lat").value = this.getPosition().lat();
        document.getElementById("lng").value = this.getPosition().lng();
        
        
       
      });
}

//callback al hacer clic en el marcador lo que hace es quitar y poner la animacion BOUNCE
function toggleBounce() {
  if (marker.getAnimation() !== null) {
    marker.setAnimation(null);
  } else {
    marker.setAnimation(google.maps.Animation.BOUNCE);
  }
}

// Carga de la libreria de google maps 

    </script>
    	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNoy3vEoLA42t_I8I9kZz5x9p2zyy-4AA&callback=initMap" async defer></script>
  </body>
</html>













