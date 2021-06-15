<?php
include_once 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$id_trabajador = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';                           
$monto = (isset($_POST['monto'])) ? $_POST['monto'] : '';              
$fecha = (isset($_POST['fecha'])) ? $_POST['fecha'] : ''; 
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : ''; 


switch($opcion){
    case 1:
        // Editables: monto,restante,fecha
        //$consulta = "INSERT INTO trabajadores (NOMBRETRAB, APEPATTRAB, APEMATTRAB, DIRECCIONTRAB, CELULARTRAB, TIPOSANGRETRAB, CUENTABANCTRAB, NOSEGUROTRAB,IDPUESTOS)VALUES('$nombre', '$apepat', '$apemat', '$direccion', '$celular', '$sangre','$cuenta_bancaria','$seguro',".$puesto.");";
        $consulta = "INSERT INTO prestamos (IDTRABAJADOR,MONTO, RESTANTE, FECHAPRESTAMO,ESTADOPRESTAMO)VALUES('$id_trabajador','$monto', '$monto', '$fecha','Activo')";
        //ChromePhp::log($_POST['nombre']);
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 
        
        $consulta = "SELECT * FROM prestamos ORDER BY IDPRESTAMO";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);      
        break;    
    case 2:        
        $consulta = "UPDATE prestamos SET MONTO='$monto', RESTANTE='$restante', FECHAPRESTAMO='$fecha', ESTADOPRESTAMO='$estado' WHERE IDPRESTAMO ='$id_prestamo' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        //"UPDATE `trabajadores` SET `IDPUESTOS` = '2', `NOMBRETRAB` = '$nombre', `APEPATTRAB` = '$apepa', `APEMATTRAB` = '$apemat', `DIRECCIONTRAB` = '$direccion', `CELULARTRAB` = '$celular', `TIPOSANGRETRAB` = '$sangre', `CUENTABANCTRAB` = '$cuenta_bancaria', `NOSEGUROTRAB` = '$seguro' WHERE IDTRABAJADOR='$id_trabajador'";
        
        //$consulta = "SELECT t.IDTRABAJADOR ,t.NOMBRETRAB, t.APEPATTRAB, t.APEMATTRAB, p.NOMBREPUESTO, t.DIRECCIONTRAB, t.CELULARTRAB , t.TIPOSANGRETRAB ,t.CUENTABANCTRAB ,t.NOSEGUROTRAB from trabajadores t INNER JOIN puestos p on t.IDPUESTOS = p.IDPUESTOS"; 
        $consulta = "SELECT p.IDPRESTAMO, t.NOMBRETRAB, t.APEPATTRAB, t.APEMATTRAB, p.MONTO, p.RESTANTE, p.FECHAPRESTAMO, p.ESTADOPRESTAMO from prestamos p INNER JOIN trabajadores t on p.IDTRABAJADOR = t.IDTRABAJADOR";       
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
        $consulta = "SELECT p.IDPRESTAMO, t.IDTRABAJADOR, t.NOMBRETRAB,  p.MONTO, p.RESTANTE, p.FECHAPRESTAMO, p.ESTADOPRESTAMO from prestamos p INNER JOIN trabajadores t on p.IDTRABAJADOR = t.IDTRABAJADOR";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 5:    
        //$consulta = "UPDATE prestamos SET sangre='$sangre' WHERE id_trabajador='$id_trabajador' ";		
        //$resultado = $conexion->prepare($consulta);
        //$resultado->execute();        
        
        $consulta = "SELECT * FROM prestamos WHERE id_prestamo='$id_prestamor' ";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
}


print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
$conexion=null;

