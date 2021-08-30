<?php

include_once "../modelo/donanteModelo.php";

class donanteControl{

    public $nombre;
    public $apellido;
    public $tipo;
    public $documento;
    public $fecha;
    public $edad;
    public $peso;
    public $genero;
    public $rh;
    public $grupo;
    public $presion;
    public $temperatura;
    public $telefono;
    public $email;

    function ctrInsertarD(){

        $objRespuesta= donanteModelo::mdlInsertarD($this->nombre,$this->apellido,$this->tipo,$this->documento,$this->fecha,$this->edad,$this->peso,$this->genero,$this->rh,$this->grupo,$this->presion,$this->temperatura,$this->telefono,$this->email);
        echo json_encode ($objRespuesta);
    }

    function ctrListarD(){
      $objRespuesta = donanteModelo::mdlListarD();
      echo json_encode($objRespuesta);

  }



}


if(isset($_POST["nombreD"]) && isset($_POST["apellidoD"]) && isset($_POST["tipoD"]) && isset($_POST["documentoD"])&& isset($_POST["fechaD"])&& isset($_POST["edadD"])&& isset($_POST["pesoD"])&& isset($_POST["generoD"])&& isset($_POST["rhD"])&& isset($_POST["grupoD"])&& isset($_POST["presionD"])&& isset($_POST["temperaturaD"])&& isset($_POST["telefonoD"])&& isset($_POST["emailD"])){

  $objInsertarD = new donanteControl();
  $objInsertarD->nombre = $_POST["nombreD"];
  $objInsertarD->apellido = $_POST["apellidoD"];
  $objInsertarD->tipo = $_POST["tipoD"];
  $objInsertarD->documento = $_POST["documentoD"];
  $objInsertarD->fecha = $_POST["fechaD"];
  $objInsertarD->edad = $_POST["edadD"];
  $objInsertarD->peso = $_POST["pesoD"];
  $objInsertarD->genero = $_POST["generoD"];
  $objInsertarD->rh = $_POST["rhD"];
  $objInsertarD->grupo = $_POST["grupoD"];
  $objInsertarD->presion = $_POST["presionD"];
  $objInsertarD->temperatura = $_POST["temperaturaD"];
  $objInsertarD->telefono = $_POST["telefonoD"];
  $objInsertarD->email = $_POST["emailD"];
  $objInsertarD->ctrInsertarD();


}



if(isset($_POST["listaDonante"])=="ok"){

  $objListarD= new donanteControl();
  $objListarD->ctrListarD();
  
  
  }