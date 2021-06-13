<?php
include_once 'conexion.php';
$objeto = new Conexion();
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
$FECHAGASSERV = (isset($_POST['FECHAGASSERV'])) ? $_POST['FECHAGASSERV'] : '';
$descGasServ = (isset($_POST['descGasServ'])) ? $_POST['descGasServ'] : '';
$id_Gasto = (isset($_POST['id_Gasto'])) ? $_POST['id_Gasto'] : '';
$IDSERV = (isset($_POST['IDSERV'])) ? $_POST['IDSERV'] : '';
$MONTOSERV = (isset($_POST['MONTOSERV'])) ? $_POST['MONTOSERV'] : '';


$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';

switch($opcion){
    case 1:
        $consulta = "INSERT INTO `gastos` (`IDTRABAJADOR`, `FECHAGASTO`, `MONTO`, `DESCRIPCION`) VALUES ('$IDTRABAJADOR', '$FECHAGASSERV', '0', '$descGasServ');";
        //ChromePhp::log($consulta);
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 
        $ingresado=$conexion->lastInsertId();

        $consulta = "INSERT INTO `solicitudes_gastos` (`IDTRABAJADOR`, `IDGASTO`, `ESTADOSOLICITUD`) VALUES ('$IDTRABAJADOR', '$ingresado', 'E');";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 

        $consulta = "SELECT g.IDGASTO, CONCAT(T.NOMBRETRAB,' ', T.APEPATTRAB, ' ', T.APEMATTRAB ) as 'NOMBRETRAB', T.IDTRABAJADOR ,g.FECHAGASTO, g.MONTO, g.DESCRIPCION from gastos g inner join trabajadores T on T.IDTRABAJADOR = g.IDTRABAJADOR";    
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);       
        break;    
        
        
  
        case 2:  
        $consulta = "INSERT INTO `gastos_servicio` (`IDSERVICIO`, `IDGASTO`, `PRECIOUNITARIOSERVICIO`) VALUES ('$IDSERV', '$id_Gasto', '$MONTOSERV');";	
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        
        $consulta = "UPDATE `gastos` SET `MONTO` = (MONTO+'$MONTOSERV') WHERE `gastos`.`IDGASTO` = ".$id_Gasto;       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $consulta = "SELECT g.IDGASTO, CONCAT(T.NOMBRETRAB,' ', T.APEPATTRAB, ' ', T.APEMATTRAB ) as 'NOMBRETRAB', T.IDTRABAJADOR ,g.FECHAGASTO, g.MONTO, g.DESCRIPCION from gastos g inner join trabajadores T on T.IDTRABAJADOR = g.IDTRABAJADOR ";    
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
        break; 
    case 4:
        $consulta = "SELECT g.IDGASTO, CONCAT(T.NOMBRETRAB,' ', T.APEPATTRAB, ' ', T.APEMATTRAB ) as 'NOMBRETRAB', T.IDTRABAJADOR ,g.FECHAGASTO, g.MONTO, g.DESCRIPCION from gastos g inner join trabajadores T on T.IDTRABAJADOR = g.IDTRABAJADOR";    
        //$consulta = "SELECT t.IDTRABAJADOR ,t.NOMBRETRABTRAB, t.IDTRABAJADORTRAB, t.FECHAASIGTRAB, p.NOMBRETRABPUESTO, t.MONTOTRAB, t.OBSPAGOTRAB , t.TIPOPERCEPCIONESTRAB ,t.CUENTABANCTRAB ,t.NOSEGUROTRAB from trabajadores t INNER JOIN puestos p on t.IDPUESTOS = p.IDPUESTOS";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 5:
                
        $consulta = "SELECT s.NOMBRESERVICIO, gs.PRECIOUNITARIOSERVICIO FROM gastos_servicio gs INNER JOIN servicios s on (gs.IDSERVICIO= s.IDSERVICIO) where gs.IDGASTO = ".$id_Gasto;    
        //$consulta = "SELECT t.IDTRABAJADOR ,t.NOMBRETRABTRAB, t.IDTRABAJADORTRAB, t.FECHAASIGTRAB, p.NOMBRETRABPUESTO, t.MONTOTRAB, t.OBSPAGOTRAB , t.TIPOPERCEPCIONESTRAB ,t.CUENTABANCTRAB ,t.NOSEGUROTRAB from trabajadores t INNER JOIN puestos p on t.IDPUESTOS = p.IDPUESTOS";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        
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
   
}


print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
$conexion=null;

