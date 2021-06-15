<?php
include_once 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$id_trabajador = (isset($_POST['id_trabajador'])) ? $_POST['id_trabajador'] : '';
$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
$apepat = (isset($_POST['apepat'])) ? $_POST['apepat'] : '';
$apemat = (isset($_POST['apemat'])) ? $_POST['apemat'] : '';
$direccion = (isset($_POST['direccion'])) ? $_POST['direccion'] : '';
$celular = (isset($_POST['celular'])) ? $_POST['celular'] : '';
$sangre = (isset($_POST['sangre'])) ? $_POST['sangre'] : '';
$cuenta_bancaria = (isset($_POST['cuenta_bancaria'])) ? $_POST['cuenta_bancaria'] : '';
$seguro = (isset($_POST['seguro'])) ? $_POST['seguro'] : '';
$puesto = (isset($_POST['puesto'])) ? $_POST['puesto'] : '';
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$usr = (isset($_POST['usr'])) ? $_POST['usr'] : '';
$pass = (isset($_POST['pass'])) ? $_POST['pass'] : '';
switch($opcion){
    case 1:
        $consulta = "INSERT INTO trabajadores (NOMBRETRAB, APEPATTRAB, APEMATTRAB, DIRECCIONTRAB, CELULARTRAB, TIPOSANGRETRAB, CUENTABANCTRAB, NOSEGUROTRAB,IDPUESTOS, USUARIO, CONTRASENA)VALUES('$nombre', '$apepat', '$apemat', '$direccion', '$celular', '$sangre','$cuenta_bancaria','$seguro',".$puesto.",'$pass','$usr');";
        //ChromePhp::log($_POST['nombre']);
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 
        
        $consulta = "SELECT * FROM trabajadores ORDER BY IDTRABAJADOR DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);       
        break;    
    case 2:
        
        
        if($usr==''){
            $consulta = "UPDATE trabajadores SET NOMBRETRAB='$nombre', APEPATTRAB='$apepat', APEMATTRAB='$apemat', DIRECCIONTRAB='$direccion', CELULARTRAB='$celular', TIPOSANGRETRAB='$sangre', CUENTABANCTRAB='$cuenta_bancaria', NOSEGUROTRAB='$seguro',IDPUESTOS='$puesto' ,CONTRASENA='$pass'  WHERE IDTRABAJADOR='$id_trabajador' ";		    
        }
        else if($pass==''){
            $consulta = "UPDATE trabajadores SET NOMBRETRAB='$nombre', APEPATTRAB='$apepat', APEMATTRAB='$apemat', DIRECCIONTRAB='$direccion', CELULARTRAB='$celular', TIPOSANGRETRAB='$sangre', CUENTABANCTRAB='$cuenta_bancaria', NOSEGUROTRAB='$seguro',IDPUESTOS='$puesto' ,USUARIO='$usr'  WHERE IDTRABAJADOR='$id_trabajador' ";		    
        }
        else if($usr=='' && $pass=='' ){
            $consulta = "UPDATE trabajadores SET NOMBRETRAB='$nombre', APEPATTRAB='$apepat', APEMATTRAB='$apemat', DIRECCIONTRAB='$direccion', CELULARTRAB='$celular', TIPOSANGRETRAB='$sangre', CUENTABANCTRAB='$cuenta_bancaria', NOSEGUROTRAB='$seguro',IDPUESTOS='$puesto' WHERE IDTRABAJADOR='$id_trabajador' ";		    
        }
        else{
            $consulta = "UPDATE trabajadores SET NOMBRETRAB='$nombre', APEPATTRAB='$apepat', APEMATTRAB='$apemat', DIRECCIONTRAB='$direccion', CELULARTRAB='$celular', TIPOSANGRETRAB='$sangre', CUENTABANCTRAB='$cuenta_bancaria', NOSEGUROTRAB='$seguro',IDPUESTOS='$puesto', USUARIO='$usr', CONTRASENA='$pass' WHERE IDTRABAJADOR='$id_trabajador' ";		
        }        
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        //"UPDATE `trabajadores` SET `IDPUESTOS` = '2', `NOMBRETRAB` = '$nombre', `APEPATTRAB` = '$apepa', `APEMATTRAB` = '$apemat', `DIRECCIONTRAB` = '$direccion', `CELULARTRAB` = '$celular', `TIPOSANGRETRAB` = '$sangre', `CUENTABANCTRAB` = '$cuenta_bancaria', `NOSEGUROTRAB` = '$seguro' WHERE IDTRABAJADOR='$id_trabajador'";
        
        $consulta = "SELECT t.IDTRABAJADOR ,t.NOMBRETRAB, t.APEPATTRAB, t.APEMATTRAB, p.NOMBREPUESTO, t.DIRECCIONTRAB, t.CELULARTRAB , t.TIPOSANGRETRAB ,t.CUENTABANCTRAB ,t.NOSEGUROTRAB from trabajadores t INNER JOIN puestos p on t.IDPUESTOS = p.IDPUESTOS";       
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
        $consulta = "SELECT t.IDTRABAJADOR ,t.NOMBRETRAB, t.APEPATTRAB, t.APEMATTRAB, p.NOMBREPUESTO, t.DIRECCIONTRAB, t.CELULARTRAB , t.TIPOSANGRETRAB ,t.CUENTABANCTRAB ,t.NOSEGUROTRAB from trabajadores t INNER JOIN puestos p on t.IDPUESTOS = p.IDPUESTOS";
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

