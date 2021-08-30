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

  
  function ctrEditarE(){
    $objRespuesta = enfermeroModelo::mdlEditarE($this->idEnfermero,$this->nombre,$this->apellido,$this->tipoDocumento,$this->documento,$this->fecha,$this->telefono);

     echo json_encode($objRespuesta);


}

public function ctrEliminarE(){

  $objRespuesta = enfermeroModelo::mdlEliminarE($this -> idEnfermero);
  echo json_encode ($objRespuesta);
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

   
if (isset($_POST["modIdEnfermero"]) && isset($_POST["modNombre"]) && isset($_POST["modApellido"]) &&  isset($_POST["modTipoDocumento"]) && isset($_POST["modDocumento"]) && isset($_POST["modFechaN"]) && isset($_POST["modTelefono"])){

  $objModEnfermero= new enfermeroControl();
  $objModEnfermero-> idEnfermero = $_POST["modIdEnfermero"];
  $objModEnfermero-> nombre = $_POST["modNombre"];
  $objModEnfermero-> apellido = $_POST["modApellido"];
  $objModEnfermero-> tipoDocumento = $_POST["modTipoDocumento"];
  $objModEnfermero-> documento = $_POST["modDocumento"];
  $objModEnfermero->fecha = date('Y-m-d', strtotime($_POST["modFechaN"]));
  
  $objModEnfermero-> telefono = $_POST["modTelefono"];
  $objModEnfermero-> ctrEditarE();
}



if(isset($_POST["idEnfermero"])){

 $objEliminarEnfermero = new enfermeroControl();
 $objEliminarEnfermero ->idEnfermero = $_POST["idEnfermero"];
 $objEliminarEnfermero->ctrEliminarE();


}