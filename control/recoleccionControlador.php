<?php

include_once "../modelo/recoleccionModelo.php";

class recoleccionControl{

    public $recoleccion;
    public $direccion;
    public $fecha;
    public $cantidad;
    public $donante;
    public $jornada;

    function ctrInsertarR(){

        $objRespuesta= recoleccionModelo::mdlInsertar($this->recoleccion,$this->direccion,$this->fecha,$this->cantidad,$this->donante,$this->jornada);
        echo json_encode ($objRespuesta);
    }

    function ctrListarR(){
      $objRespuesta = recoleccionModelo::mdlListarR();
      echo json_encode($objRespuesta);

  }



}


if(isset($_POST["recoleccion"]) && isset($_POST["direccion"]) && isset($_POST["fecha"]) && isset($_POST["cantidad"]) && isset($_POST["donante"]) && isset($_POST["jornada"])){

  $objInsertarE = new recoleccionControl();
  $objInsertarE->recoleccion = $_POST["recoleccion"];
  $objInsertarE->direccion = $_POST["direccion"];
  $objInsertarE->fecha = $_POST["fecha"];
  $objInsertarE->cantidad = $_POST["cantidad"];
  $objInsertarE->donante = $_POST["donante"];
  $objInsertarE->jornada = $_POST["jornada"];
  $objInsertarE->ctrInsertarR();


}



if(isset($_POST["listaRecoleccion"])=="ok"){

  $objListarE= new recoleccionControl();
  $objListarE->ctrListarR();
  
  
  }