<?php

include_once "../modelo/loginModelo.php";


class loginControl{

   public $tipoDocumento;
   public $numeroDocumento;
   public $pwd;


   public function ctrIngresar(){
    
 

    $objRespuesta = loginModelo::mdlIngresar($this->tipoDocumento,$this->numeroDocumento,$this->pwd);

    if($objRespuesta == false){
        $registro = "no";
        echo json_encode($registro);

    }
    else{
    $id=$objRespuesta[0];


    echo json_encode($id);
    session_start();

    $_SESSION["numeroDocumento"]="logueado";
    $_SESSION["idEnfermero"]=$id;

    }

   }




}


if(isset($_POST["tipoDocumento"]) && isset($_POST["numeroDocumento"])&& isset($_POST["pwd"])){

 $objLogin = new loginControl();
 $objLogin->tipoDocumento=$_POST["tipoDocumento"];
 $objLogin->numeroDocumento = $_POST["numeroDocumento"];
 $objLogin->pwd=$_POST["pwd"];
 $objLogin->ctrIngresar();




}