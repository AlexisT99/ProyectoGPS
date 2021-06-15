<?php
include_once 'conexion.php';
include 'ChromePhp.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$id_trabajador = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
$descripcion = (isset($_POST['descripcion'])) ? $_POST['descripcion'] : '';                           
$monto = (isset($_POST['monto'])) ? $_POST['monto'] : '';              
$fecha = (isset($_POST['fecha'])) ? $_POST['fecha'] : ''; 
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : ''; 
$id_solGas = (isset($_POST['id_solGas'])) ? $_POST['id_solGas'] : ''; 
$estadoSol = (isset($_POST['estadoSol'])) ? $_POST['estadoSol'] : ''; 


switch($opcion){
    case 1:
        $consulta = "INSERT INTO prestamos (IDTRABAJADOR,MONTO, RESTANTE, FECHAPRESTAMO,ESTADOPRESTAMO)VALUES('$id_trabajador','$monto', '$monto', '$fecha','Activo');";
        //ChromePhp::log($_POST['nombre']);
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 
        
        $consulta = "SELECT * FROM prestamos ORDER BY id_prestamos";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);       
        break;    
    case 2:
        if($estadoSol==''){
            $estadoSol='A';
        }        
        $consulta = "UPDATE `solicitudes_gastos` SET `ESTADOSOLICITUD` = '$estadoSol' WHERE `solicitudes_gastos`.`IDSOLICITUD` =".$id_solGas;
        ChromePhp::log($consulta);
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        //"UPDATE `trabajadores` SET `IDPUESTOS` = '2', `NOMBRETRAB` = '$nombre', `APEPATTRAB` = '$apepa', `APEMATTRAB` = '$apemat', `DIRECCIONTRAB` = '$direccion', `CELULARTRAB` = '$celular', `TIPOSANGRETRAB` = '$sangre', `CUENTABANCTRAB` = '$cuenta_bancaria', `NOSEGUROTRAB` = '$seguro' WHERE IDTRABAJADOR='$id_trabajador'";
        
        //$consulta = "SELECT t.IDTRABAJADOR ,t.NOMBRETRAB, t.APEPATTRAB, t.APEMATTRAB, p.NOMBREPUESTO, t.DIRECCIONTRAB, t.CELULARTRAB , t.TIPOSANGRETRAB ,t.CUENTABANCTRAB ,t.NOSEGUROTRAB from trabajadores t INNER JOIN puestos p on t.IDPUESTOS = p.IDPUESTOS"; 
        $consulta = "SELECT s.IDGASTO, CONCAT(t.NOMBRETRAB, ' ', t.APEPATTRAB, ' ', t.APEMATTRAB) as NOM_COMP, g.DESCRIPCION, g.MONTO, g.FECHAGASTO, s.ESTADOSOLICITUD FROM solicitudes_gastos s INNER JOIN trabajadores t ON s.IDTRABAJADOR = t.IDTRABAJADOR INNER JOIN gastos g ON s.IDGASTO = g.IDGASTO";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 3:        
        $consulta = "DELETE FROM prestamos WHERE IDPRESTAMO='$id_prestamo' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;
    case 4:    
        $consulta = "SELECT s.IDSOLICITUD, CONCAT(t.NOMBRETRAB, ' ', t.APEPATTRAB, ' ', t.APEMATTRAB) as NOM_COMP, g.DESCRIPCION, g.MONTO, g.FECHAGASTO, s.ESTADOSOLICITUD FROM solicitudes_gastos s INNER JOIN trabajadores t ON s.IDTRABAJADOR = t.IDTRABAJADOR INNER JOIN gastos g ON s.IDGASTO = g.IDGASTO";       
        //ChromePhp::log($consulta);
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
}


print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
$conexion=null;

