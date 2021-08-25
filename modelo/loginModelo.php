<?php



require_once "conexion.php";

class loginModelo{

     public static function mdlIngresar($tipoDocumento,$numeroDocumento,$pwd){

           $objConsulta = conexion::conectar()->prepare ("SELECT idEnfermero from enfermero where tipoDocumento=:tipoDocumento and numeroDocumento=:numeroDocumento and contraseña=:pwd");
           
           $objConsulta->bindParam(":tipoDocumento",$tipoDocumento,PDO::PARAM_STR);
           $objConsulta->bindParam(":numeroDocumento",$numeroDocumento,PDO::PARAM_STR);
           $objConsulta->bindParam(":pwd",$pwd,PDO::PARAM_STR);
           
           $objConsulta->execute();
          
           $lista = $objConsulta->fetch();
    
           $objConsulta=null;
    
           return $lista;





     }



}