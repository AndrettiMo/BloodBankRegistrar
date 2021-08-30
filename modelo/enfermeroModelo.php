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

    
    public static function mdlListarE(){

        $objRespuesta = conexion::conectar()->prepare("SELECT  idEnfermero,nombreEnfermero,apellidoEnfermero,tipoDocumento,numeroDocumento,fechaNacimiento, telefono from enfermero");
        $objRespuesta->execute();
        $objListarEnfermero=$objRespuesta->fetchAll();
        $objRespuesta=null;
        return $objListarEnfermero;

   }

   



public static function mdlEditarE($idEnfermero,$nombre,$apellido,$tipoDocumento,$documento,$fecha,$telefono){
   

$mensaje = "";
try {
    $objRespuesta = Conexion :: conectar()->prepare("UPDATE enfermero SET nombreEnfermero ='$nombre', apellidoEnfermero= '$apellido', tipoDocumento= '$tipoDocumento',numeroDocumento ='$documento', fechaNacimiento='$fecha', telefono = '$telefono' WHERE idEnfermero='$idEnfermero'");          
    
    if ($objRespuesta->execute()) {
        $mensaje = "ok";
    } else {
        $mensaje = "error";
    }

    $objRespuesta=null;
} catch (Exception $e) {
    $mensaje = $e;
}

return $mensaje;  
     

}


public static function mdlEliminarE($idEnfermero){
          
    $mensaje ="";
    try {
       $objRespuesta = Conexion::conectar()->prepare("DELETE From enfermero WHERE idEnfermero='$idEnfermero'");
       

       if ($objRespuesta->execute()) {
           $mensaje = "ok";
       } else {
           $mensaje = "error";
       }

       $objRespuesta=null;
   } catch (Exception $e) {
       $mensaje = $e;
   }

   return $mensaje;
}






}