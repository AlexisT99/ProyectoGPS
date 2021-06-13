<?php
include_once 'conexion.php';
$objeto = new Conexion();
include 'ChromePhp.php';
$conexion = $objeto->Conectar();

$IDVIATICO = (isset($_POST['id_viatico'])) ? $_POST['id_viatico'] : '';
$NOMBRETRAB = (isset($_POST['NOMBRETRAB'])) ? $_POST['NOMBRETRAB'] : '';
$IDTRABAJADOR = (isset($_POST['IDTRABAJADOR'])) ? $_POST['IDTRABAJADOR'] : '';
$FECHAASIG = (isset($_POST['FECHAASIG'])) ? $_POST['FECHAASIG'] : '';
$MONTO = (isset($_POST['MONTO'])) ? $_POST['MONTO'] : '';
$IDTIVIATICO = (isset($_POST['IDTIVIATICO'])) ? $_POST['IDTIVIATICO'] : '';
$MONTOVIAT  = (isset($_POST['MONTOVIAT'])) ? $_POST['MONTOVIAT'] : '';
$DESCVIAT  = (isset($_POST['DESCVIAT'])) ? $_POST['DESCVIAT'] : '';
$id_det_viat  = (isset($_POST['id_det_viat'])) ? $_POST['id_det_viat'] : '';
$id_detviatico = (isset($_POST['id_detviatico'])) ? $_POST['id_detviatico'] : '';
$montViaticoComp = (isset($_POST['montViaticoComp'])) ? $_POST['montViaticoComp'] : '';


$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';

switch($opcion){
    case 1:
        $consulta = "INSERT INTO viaticos (IDTRABAJADOR , FECHAASIG , MONTO ) VALUES('$IDTRABAJADOR', '$FECHAASIG',0);";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 
        
        $consulta = "SELECT v.IDVIATICO, CONCAT(T.NOMBRETRAB,' ', T.APEPATTRAB, ' ', T.APEMATTRAB ) as 'NOMBRETRAB', T.IDTRABAJADOR ,v.FECHAASIG, v.MONTO from viaticos v inner join trabajadores T on T.IDTRABAJADOR = v.IDTRABAJADOR ";    
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);       
        break;    
        
        
  
        case 2:  
        $consulta = "INSERT INTO tipviat_Viaticos (IDVIATICO , IDTIVIATICO , MONTOVIAT , DESCVIAT , ESTADO  ) VALUES('$IDVIATICO', '$IDTIVIATICO','$MONTOVIAT', '$DESCVIAT', 'E');";	
        
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        
        $consulta = "UPDATE `viaticos` SET `MONTO` = (MONTO+'$MONTOVIAT') WHERE `viaticos`.`IDVIATICO` = '$IDVIATICO';";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $consulta = "SELECT v.IDVIATICO, CONCAT(T.NOMBRETRAB,' ', T.APEPATTRAB, ' ', T.APEMATTRAB ) as 'NOMBRETRAB', T.IDTRABAJADOR ,v.FECHAASIG, v.MONTO from viaticos v inner join trabajadores T on T.IDTRABAJADOR = v.IDTRABAJADOR ";    
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();       
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break; 
    case 3:
        $consulta = "SELECT * FROM `reintegro` WHERE IDDETVIAT = ".$id_det_viat;
        
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $cuenta = $resultado->rowCount();

        if ($cuenta>0) {
            $consulta = "DELETE FROM `reintegro` WHERE `reintegro`.`IDDETVIAT` =" .$id_det_viat;		
            $resultado = $conexion->prepare($consulta);
            $resultado->execute(); 
        } 

        $consulta = "UPDATE `tipviat_viaticos` SET `ESTADO` = 'A' WHERE `tipviat_viaticos`.`IDDETVIAT` = ".$id_det_viat;		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        
        $consulta = "SELECT ttv.IDDETVIAT, tv.NOMBRE, ttv.MONTOVIAT, ttv.DESCVIAT, ttv.ESTADO FROM tipviat_viaticos ttv INNER JOIN tipoviaticos tv on (ttv.IDTIVIATICO=tv.IDTIVIATICO) WHERE ttv.IDVIATICO= ".$IDVIATICO ;    
        
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);                           
        ChromePhp::log($data);
        break; 
    case 4:
        $consulta = "SELECT v.IDVIATICO, CONCAT(T.NOMBRETRAB,' ', T.APEPATTRAB, ' ', T.APEMATTRAB ) as 'NOMBRETRAB', T.IDTRABAJADOR ,v.FECHAASIG, v.MONTO from viaticos v inner join trabajadores T on T.IDTRABAJADOR = v.IDTRABAJADOR ";    
        //$consulta = "SELECT t.IDTRABAJADOR ,t.NOMBRETRABTRAB, t.IDTRABAJADORTRAB, t.FECHAASIGTRAB, p.NOMBRETRABPUESTO, t.MONTOTRAB, t.OBSPAGOTRAB , t.TIPOPERCEPCIONESTRAB ,t.CUENTABANCTRAB ,t.NOSEGUROTRAB from trabajadores t INNER JOIN puestos p on t.IDPUESTOS = p.IDPUESTOS";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 5:
                
        $consulta = "SELECT ttv.IDDETVIAT, tv.NOMBRE, ttv.MONTOVIAT, ttv.DESCVIAT, ttv.ESTADO FROM tipviat_viaticos ttv INNER JOIN tipoviaticos tv on (ttv.IDTIVIATICO=tv.IDTIVIATICO) WHERE ttv.IDVIATICO= $IDVIATICO ORDER BY ttv.IDDETVIAT ASC";    
        //$consulta = "SELECT t.IDTRABAJADOR ,t.NOMBRETRABTRAB, t.IDTRABAJADORTRAB, t.FECHAASIGTRAB, p.NOMBRETRABPUESTO, t.MONTOTRAB, t.OBSPAGOTRAB , t.TIPOPERCEPCIONESTRAB ,t.CUENTABANCTRAB ,t.NOSEGUROTRAB from trabajadores t INNER JOIN puestos p on t.IDPUESTOS = p.IDPUESTOS";
        $resultado = $conexion->prepare($consulta);
        ChromePhp::log($consulta);
        $resultado->execute();        
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        ChromePhp::log($data);
        
        break;
    case 6:        
        $consulta = "UPDATE `tipviat_viaticos` SET `ESTADO` = 'N' WHERE `tipviat_viaticos`.`IDDETVIAT` = ".$id_det_viat;		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();            
        
        $consulta = "SELECT * FROM `reintegro` WHERE IDDETVIAT = ".$id_det_viat;
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $cuenta = $resultado->rowCount();

        if ($cuenta>0) {
            $consulta = "DELETE FROM `reintegro` WHERE `reintegro`.`IDDETVIAT` =" .$id_det_viat;		
            $resultado = $conexion->prepare($consulta);
            $resultado->execute(); 
        }         
        
        $consulta = "INSERT INTO `reintegro` (`IDTRABAJADOR`, `IDDETVIAT`, `INGMONTO`, `FECHAOTING`, `DESCOTING`)         
        VALUES ( '$IDTRABAJADOR', '$id_det_viat', '$MONTO', CURDATE() , ' ');";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        
        break; 
    case 7 :
        $consulta = "UPDATE `tipviat_viaticos` SET MONTOVIAT = '$montViaticoComp' , `ESTADO` = 'C' WHERE `tipviat_viaticos`.`IDDETVIAT` = ".$id_detviatico;		
        ChromePhp::log($consulta);
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();            
        
        $consulta = "SELECT * FROM `reintegro` WHERE IDDETVIAT = ".$id_detviatico;
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $cuenta = $resultado->rowCount();

        if ($cuenta>0) {
            $consulta = "DELETE FROM `reintegro` WHERE `reintegro`.`IDDETVIAT` =" .$id_detviatico;		
            $resultado = $conexion->prepare($consulta);
            $resultado->execute(); 
        }         
        
        $consulta = "INSERT INTO `reintegro` (`IDTRABAJADOR`, `IDDETVIAT`, `INGMONTO`, `FECHAOTING`, `DESCOTING`)         
        VALUES ( '$IDTRABAJADOR', '$id_detviatico', '$montViaticoComp', CURDATE() , ' ');";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();

        $consulta = "SELECT ttv.IDDETVIAT, tv.NOMBRE, ttv.MONTOVIAT, ttv.DESCVIAT, ttv.ESTADO FROM tipviat_viaticos ttv INNER JOIN tipoviaticos tv on (ttv.IDTIVIATICO=tv.IDTIVIATICO) WHERE ttv.IDVIATICO= ".$IDVIATICO ;    
        
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;    
   
}


print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
$conexion=null;

