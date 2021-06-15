<?php
include_once 'conexion.php';
include 'ChromePhp.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$id_servicio = (isset($_POST['id_servicio'])) ? $_POST['id_servicio'] : '';
$nombre = (isset($_POST['nombreServicios'])) ? $_POST['nombreServicios'] : '';
$descripcion = (isset($_POST['descripcionServicios'])) ? $_POST['descripcionServicios'] : '';
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
switch($opcion){
    case 1:
        $consulta = "INSERT INTO `servicios` (`NOMBRESERVICIO`, `DESCRIPCION`) VALUES ('".$nombre."', '".$descripcion."');";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 
        
        $consulta = "SELECT * FROM servicios ORDER BY IDSERVICIO DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);       
        break;    
    case 2:        
        $consulta = "UPDATE `servicios` SET `NOMBRESERVICIO` = '".$nombre."', `DESCRIPCION` = '".$descripcion."' WHERE `servicios`.`IDSERVICIO` =".$id_servicio ;		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        //"UPDATE `trabajadores` SET `IDPUESTOS` = '2', `NOMBRETRAB` = '$nombre', `APEPATTRAB` = '$apepa', `APEMATTRAB` = '$apemat', `DIRECCIONTRAB` = '$direccion', `CELULARTRAB` = '$celular', `TIPOSANGRETRAB` = '$sangre', `CUENTABANCTRAB` = '$cuenta_bancaria', `NOSEGUROTRAB` = '$seguro' WHERE IDTRABAJADOR='$id_trabajador'";
        
        $consulta = "SELECT * FROM servicios ORDER BY IDSERVICIO DESC LIMIT 1";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 3:        
        $consulta = "DELETE FROM trabajadores WHERE IDTRABAJADOR='$id_trabajador' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;
    case 4:    
        $consulta = "SELECT * FROM servicios";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 5:    
        $consulta = "UPDATE trabajadores SET sangre='$sangre' WHERE id_trabajador='$id_trabajador' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        
        $consulta = "SELECT * FROM trabajadores WHERE id_trabajador='$id_trabajador' ";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
}


print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
$conexion=null;

