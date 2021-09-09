<?php

include "conexion.php";


class bolsaSangreModelo{
   
   public static function  mdlInsertar ($nombre,$modificacion,$metodoObtencion,$temperatura,$volumen,$clasificacionDonante,$grupoSanguineo,$rhBolsa,$resultadoPruebas)
    {

        $mensaje ="";

        try {
             $objRespuesta=conexion::conectar()->prepare("INSERT INTO bolsaSangre (nombreProducto,modificacion,metodoObtencion,temperaturaAlmacenamiento,volumenContenido,clasificacionDonante,grupoSanguineoBolsa,rhBolsa,resultadoPruebas) VALUES (:nombreProducto,:modificacion,:metodoObtencion,:temperaturaAlmacenamiento,:volumenContenido,:clasificacionDonante,:grupoSanguineoBolsa,:rhBolsa,:resultadoPruebas)");
            
             $objRespuesta -> bindParam(":nombreProducto",$nombre,PDO::PARAM_STR);
             $objRespuesta -> bindParam(":modificacion",$modificacion,PDO::PARAM_STR);
             $objRespuesta -> bindParam(":metodoObtencion",$metodoObtencion,PDO::PARAM_STR);
             $objRespuesta -> bindParam(":temperaturaAlmacenamiento",$temperatura,PDO::PARAM_STR);
             $objRespuesta -> bindParam(":volumenContenido",$volumen,PDO::PARAM_STR);
             $objRespuesta -> bindParam(":clasificacionDonante",$clasificacionDonante,PDO::PARAM_STR);
             $objRespuesta -> bindParam(":grupoSanguineoBolsa",$grupoSanguineo,PDO::PARAM_STR);
             $objRespuesta -> bindParam(":rhBolsa",$rhBolsa,PDO::PARAM_STR);
             $objRespuesta -> bindParam(":resultadoPruebas",$resultadoPruebas,PDO::PARAM_STR);


    
    
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

        $objRespuesta = conexion::conectar()->prepare("SELECT  nombrep,modificacion,metodoObtencion,temperaturaAlmacenamiento,volumenContenido,clasificacionDonante,grupoSanguineoBolsa,rhBolsa,resultadoPruebas from bolsaSangre");
        $objRespuesta->execute();
        $objListarbolsaSangre=$objRespuesta->fetchAll();
        $objRespuesta=null;
        return $objListarbolsaSangre;

   }






}