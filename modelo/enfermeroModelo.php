<?php

include "conexion.php";


class enfermeroModelo{
   
   public static function  mdlInsertar ($nombre,$apellido,$tipoDocumento,$documento,$fecha,$telefono,$contrasena)
    {

        $mensaje ="";

        try {
             $objRespuesta=conexion::conectar()->prepare("INSERT INTO enfermero (nombreEnfermero,apellidoEnfermero,tipoDocumento,numeroDocumento,fechaNacimiento, telefono,contraseña) VALUES (:nombre,:apellido,:tipoDocumento,:documento,:fechaN,:telefono,:contrasena)");
            
             $objRespuesta -> bindParam(":nombre",$nombre,PDO::PARAM_STR);
             $objRespuesta -> bindParam(":apellido",$apellido,PDO::PARAM_STR);
             $objRespuesta -> bindParam(":tipoDocumento",$tipoDocumento,PDO::PARAM_STR);
             $objRespuesta -> bindParam(":documento",$documento,PDO::PARAM_STR);
             $objRespuesta -> bindParam(":fechaN",$fecha,PDO::PARAM_STR);
             $objRespuesta -> bindParam(":telefono",$telefono,PDO::PARAM_STR);
             $objRespuesta -> bindParam(":contrasena",$contrasena,PDO::PARAM_STR);
    
    
             if ($objRespuesta->execute()) {
               $mensaje = "ok";
           } else {
               $mensaje = "error";
           }
           $objRespuesta=null;
    
    
          } catch (Exception $e){
    
               $mensaje= $e;
          } 
          
          return $mensaje;





    }





}