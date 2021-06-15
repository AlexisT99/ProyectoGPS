<?php
include_once 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$IDPUESTOS = (isset($_POST['IDPUESTOS'])) ? $_POST['IDPUESTOS'] : '';
$NOMBREPUESTO = (isset($_POST['NOMBREPUESTOS'])) ? $_POST['NOMBREPUESTOS'] : '';
$DESCRIPCIONPUESTO = (isset($_POST['DESCRIPCIONPUESTOS'])) ? $_POST['DESCRIPCIONPUESTOS'] : '';
$SUELDO = (isset($_POST['SUELDOPUESTOS'])) ? $_POST['SUELDOPUESTOS'] : '';
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
switch($opcion){
    case 1:
        $consulta = "INSERT INTO puestos (NOMBREPUESTO, DESCRIPCIONPUESTO, SUELDO)VALUES('$NOMBREPUESTO', '$DESCRIPCIONPUESTO', '$SUELDO');";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 
        
        $consulta = "SELECT * FROM puestos ORDER BY IDPUESTOS DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);       
        break;    
    case 2:        
        $consulta = "UPDATE puestos SET NOMBREPUESTO='$NOMBREPUESTO', DESCRIPCIONPUESTO='$DESCRIPCIONPUESTO', SUELDO='$SUELDO' WHERE IDPUESTOS = ".$IDPUESTOS;		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        //"UPDATE `puestos` SET `IDPUESTOS` = '2', `NOMBREPUESTOS` = '$nombrepuestos', `DESCRIPCIONPUESTO` = '$descripcionpuesto', `SUELDO` = '$sueldo'";
        
        $consulta = "SELECT * FROM PUESTOS";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 3:        
        $consulta = "DELETE FROM puestos WHERE IDPUESTOS='$IDPUESTOS' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;
    case 4:    
        $consulta = "SELECT * FROM PUESTOS";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
}


print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
$conexion=null;

