<?php

include_once "vista/modulo/cabecera.php";

if (isset($_GET["ruta"])) {
   if ($_GET["ruta"]== "inicio"||
       $_GET["ruta"]== "donante"||
       $_GET["ruta"]== "bolsaSangre"||
       $_GET["ruta"]== "recoleccion"||
       $_GET["ruta"]== "enfermero"||
       $_GET["ruta"]== "buscar"||
       $_GET["ruta"]== "informes") {
     
        include_once "vista/modulo/".$_GET["ruta"].".php";
   }
} else {
   
}


include_once "vista/modulo/pie.php";