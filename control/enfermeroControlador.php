<?php

include_once "../modelo/enfermeroModelo.php";

class enfermeroControl{

    public $nombre;
    public $apellido;
    public $tipoDocumento;
    public $documento;
    public $fecha;
    public $telefono;
    public $contrasena;

    function ctrInsertarE(){

        $objRespuesta= enfermeroModelo::mdlInsertar($this->nombre,$this->apellido,$this->tipoDocumento,$this->documento,$this->fecha,$this->telefono,$this->contrasena);
        echo json_encode ($objRespuesta);
    }

    function ctrListarE(){
      $objRespuesta = enfermeroModelo::mdlListarE();
      echo json_encode($objRespuesta);

  }



}


if(isset($_POST["nombreE"]) && isset($_POST["apellidoE"]) && isset($_POST["tipoE"]) && isset($_POST["documento"])&& isset($_POST["fechaN"])&& isset($_POST["telefono"])&& isset($_POST["contrasena"])){

  $objInsertarE = new enfermeroControl();
  $objInsertarE->nombre = $_POST["nombreE"];
  $objInsertarE->apellido = $_POST["apellidoE"];
  $objInsertarE->tipoDocumento = $_POST["tipoE"];
  $objInsertarE->documento = $_POST["documento"];
  $objInsertarE->fecha = $_POST["fechaN"];
  $objInsertarE->telefono = $_POST["telefono"];
  $objInsertarE->contrasena = $_POST["contrasena"];
  $objInsertarE->ctrInsertarE();


}



if(isset($_POST["listaEnfermero"])=="ok"){

  $objListarE= new enfermeroControl();
  $objListarE->ctrListarE();
  
  
  }