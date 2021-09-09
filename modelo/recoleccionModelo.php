<?php

include "conexion.php";


class recoleccionModelo{
   
   public static function  mdlInsertar ($recoleccion,$direccion,$fecha,$cantidad,$donante,$jornada)
    {

        $mensaje ="";

        try {
             $objRespuesta=conexion::conectar()->prepare("INSERT INTO recoleccion (cantidadMuestra,fechaRecoleccion,ciudadRecoleccion,direccion,donante,jornada) VALUES (:recoleccion,:direccion,:fecha,:cantidad,:donante,:jornada)");
        
             $objRespuesta -> bindParam(":recoleccion",$recoleccion,PDO::PARAM_STR);
             $objRespuesta -> bindParam(":direccion",$direccion,PDO::PARAM_STR);
             $objRespuesta -> bindParam(":fecha",$fecha,PDO::PARAM_STR);
             $objRespuesta -> bindParam(":cantidad",$cantidad,PDO::PARAM_STR);
             $objRespuesta -> bindParam(":donante",$donante,PDO::PARAM_STR);
             $objRespuesta -> bindParam(":jornada",$jornada,PDO::PARAM_STR);

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

    
    public static function mdlListarR(){

        $objRespuesta = conexion::conectar()->prepare("SELECT cantidadMuestra,fechaRecoleccion,ciudadRecoleccion,direccion,donante,jornada from recoleccion");
        $objRespuesta->execute();
        $objListarRecoleccion=$objRespuesta->fetchAll();
        $objRespuesta=null;
        return $objListarRecoleccion;

   }






}