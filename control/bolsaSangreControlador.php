<?php

include_once "../modelo/bolsaSangreModelo.php";

class bolsaSangreControl{

    public $nombre;
    public $modificacion;
    public $metodoObtencion;
    public $temperatura;
    public $volumen;
    public $clasificacion;
    public $grupoSanguineo;
    public $rhBolsa;
    public $resultadoPruebas;



    function ctrInsertarB(){

        $objRespuesta= bolsaSangreModelo::mdlInsertar($this->nombre,$this->modificacion,$this->metodoObtencion,$this->temperatura,$this->volumen,$this->clasificacion,$this->grupoSanguineo,$this->rhBolsa,$this->resultadoPruebas);
        echo json_encode ($objRespuesta);
    }

    



}


if(isset($_POST["nombre"]) && isset($_POST["modificacion"]) && isset($_POST["metodoObtencion"]) && isset($_POST["temperatura"]) && isset($_POST["volumenContenido"]) && isset($_POST["clasificacion"]) && isset($_POST["grupoSanguineo"]) && isset($_POST["rhBolsa"]) && isset($_POST["resultadoPruebas"])){

  $objInsertarB = new bolsaSangreControl();
  $objInsertarB->nombre = $_POST["nombre"];
  $objInsertarB->modificacion = $_POST["modificacion"];
  $objInsertarB->metodoObtencion = $_POST["metodoObtencion"];
  $objInsertarB->temperatura= $_POST["temperatura"];
  $objInsertarB->volumen = $_POST["volumenContenido"];
  $objInsertarB->clasificacion = $_POST["clasificacion"];
  $objInsertarB->grupoSanguineo = $_POST["grupoSanguineo"];
  $objInsertarB->rhBolsa = $_POST["rhBolsa"];
  $objInsertarB->resultadoPruebas = $_POST["resultadoPruebas"];

  $objInsertarB->ctrInsertarB();


}
