<?php

include "conexion.php";


class donanteModelo{
   
   public static function  mdlInsertarD ($nombre,$apellido,$tipo,$documento,$fecha,$edad,$peso,$genero,$rh,$grupo,$presion,$temperatura,$telefono,$email)
    {

        $mensaje ="";

        try {
             $objRespuesta=conexion::conectar()->prepare("INSERT INTO donante (nombreDonante,apellidoDonante,tipoDocumento,numeroDocumento,fechaNacimiento,edad,peso,genero,rh,grupoSanguineo,presionArterial,temperatura,telefono,email) VALUES (:nombreDonante,:apellidoDonante,:tipoDocumento,:numeroDocumento,:fechaNacimiento,:edad,:peso,:genero,:rh,:grupoSanguineo,:presionArterial,:temperatura,:telefono,:email)");
            
             $objRespuesta -> bindParam(":nombreDonante",$nombre,PDO::PARAM_STR);
             $objRespuesta -> bindParam(":apellidoDonante",$apellido,PDO::PARAM_STR);
             $objRespuesta -> bindParam(":tipoDocumento",$tipo,PDO::PARAM_STR);
             $objRespuesta -> bindParam(":numeroDocumento",$documento,PDO::PARAM_STR);
             $objRespuesta -> bindParam(":fechaNacimiento",$fecha,PDO::PARAM_STR);
             $objRespuesta -> bindParam(":edad",$edad,PDO::PARAM_STR);
             $objRespuesta -> bindParam(":peso",$peso,PDO::PARAM_STR);
             $objRespuesta -> bindParam(":genero",$genero,PDO::PARAM_STR);
             $objRespuesta -> bindParam(":rh",$rh,PDO::PARAM_STR);
             $objRespuesta -> bindParam(":grupoSanguineo",$grupo,PDO::PARAM_STR);
             $objRespuesta -> bindParam(":presionArterial",$presion,PDO::PARAM_STR);
             $objRespuesta -> bindParam(":temperatura",$temperatura,PDO::PARAM_STR);
             $objRespuesta -> bindParam(":telefono",$telefono,PDO::PARAM_STR);
             $objRespuesta -> bindParam(":email",$email,PDO::PARAM_STR);
    
    
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

    
    public static function mdlListarD(){

        $objRespuesta = conexion::conectar()->prepare("SELECT * FROM donante ");
        $objRespuesta->execute();
        $objListarDonante=$objRespuesta->fetchAll();
        $objRespuesta=null;
        return $objListarDonante;

   }


}