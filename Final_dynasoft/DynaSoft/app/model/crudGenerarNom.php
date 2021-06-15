<?php
include_once 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$IDPAGO = (isset($_POST['id_pago'])) ? $_POST['id_pago'] : '';
$FECHA = (isset($_POST['fecha'])) ? $_POST['fecha'] : '';
$TOTALPAGO = (isset($_POST['total_pago'])) ? $_POST['total_pago'] : '';
$INICIOPERIODO = (isset($_POST['inicio_periodo'])) ? $_POST['inicio_periodo'] : '';
$FINPERIODO = (isset($_POST['fin_periodo'])) ? $_POST['fin_periodo'] : '';
$OBSPAGO = (isset($_POST['obs_pago'])) ? $_POST['obs_pago'] : '';
$PERCEPCIONES = (isset($_POST['percepciones'])) ? $_POST['percepciones'] : '';
$DESCUENTOS = (isset($_POST['descuentos'])) ? $_POST['descuentos'] : '';

$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';

switch($opcion){
    case 1:
        //$consulta = "INSERT INTO trabajadores (FECHATRAB, TOTALPAGOTRAB, INICIOPERIODOTRAB, FINPERIODOTRAB, OBSPAGOTRAB, TIPOPERCEPCIONESTRAB, CUENTABANCTRAB, NOSEGUROTRAB,IDPUESTOS)VALUES('$FECHA', '$TOTALPAGO', '$INICIOPERIODO', '$FINPERIODO', '$OBSPAGO', '$PERCEPCIONES','$DESCUENTOS','$seguro',".$puesto.");";
        $consulta = "INSERT INTO `nomina` (`FECHA`, `TOTALPAGO`,  `INICIOPERIODO`,`FINPERIODO`, `OBSPAGO` , `PERCEPCIONES`, `DESCUENTOS`) VALUES ('$FECHA', 0, '$INICIOPERIODO', '$FINPERIODO' , '$OBSPAGO', 0, 0)";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $ingresado=$conexion->lastInsertId();
        
        $consultaTra= "SELECT t.IDTRABAJADOR,p.SUELDO FROM Trabajadores t INNER JOIN puestos p ON t.IDPUESTOS=p.IDPUESTOS";
        $resultado = $conexion->prepare($consultaTra);
        $resultado->execute(); 
        $data = $resultado->fetchAll();
        
        $consultaTra= "SELECT IDPRESTACION,IDCATPRESTACION,VALORMUL FROM Prestaciones where IDCATPRESTACION != 2  ";
        $resultado = $conexion->prepare($consultaTra);
        $resultado->execute(); 
        $data2 = $resultado->fetchAll();


        foreach ($data as $row):
            $maxDesembolso = $row["SUELDO"]*.3;
            $consultaTra= "SELECT * FROM prestamos WHERE ESTADOPRESTAMO = 'A' AND IDTRABAJADOR=".$row['IDTRABAJADOR']." ORDER BY RESTANTE DESC";
            $resultado = $conexion->prepare($consultaTra);
            $resultado->execute(); 
            $data3 = $resultado->fetchAll();
            
            foreach($data3 as $row3):
                if($row3['RESTANTE']>$maxDesembolso){
                    $consulta = "INSERT INTO prestacion_nomina_trab (IDPRESTACION,IDPAGO,IDTRABAJADOR,MONTO) VALUES (2,".$ingresado.",".$row['IDTRABAJADOR'].", ".-$maxDesembolso.")";
                    $resultado = $conexion->prepare($consulta);
                    $resultado->execute();
                    $consulta = "UPDATE Prestamos SET RESTANTE = (RESTANTE-'$maxDesembolso') WHERE IDPRESTAMO =". $row3['IDPRESTAMO'] ;
                    $resultado = $conexion->prepare($consulta);
                    $resultado->execute();
                    break;
                }
                else if($row3['RESTANTE']==$maxDesembolso){
                    $consulta = "INSERT INTO prestacion_nomina_trab (IDPRESTACION,IDPAGO,IDTRABAJADOR,MONTO) VALUES (2,".$ingresado.",".$row['IDTRABAJADOR'].", ".-$maxDesembolso.")";
                    $resultado = $conexion->prepare($consulta);
                    $resultado->execute();
                    $consulta = "UPDATE Prestamos SET RESTANTE = 0,ESTADOPRESTAMO = 'I' WHERE IDPRESTAMO =". $row3['IDPRESTAMO'] ;
                    $resultado = $conexion->prepare($consulta);
                    $resultado->execute();
                    break;
                }
                else{
                    $maxDesembolso=$maxDesembolso-$row3['RESTANTE'];
                    $consulta = "INSERT INTO prestacion_nomina_trab (IDPRESTACION,IDPAGO,IDTRABAJADOR,MONTO) VALUES (2,".$ingresado.",".$row['IDTRABAJADOR'].", ".-$row3['RESTANTE'].")";
                    $resultado = $conexion->prepare($consulta);
                    $resultado->execute();
                    $consulta = "UPDATE Prestamos SET RESTANTE = 0,ESTADOPRESTAMO = 'I' WHERE IDPRESTAMO =". $row3['IDPRESTAMO'] ;
                    $resultado = $conexion->prepare($consulta);
                    $resultado->execute();
                }
            endforeach;
            foreach ($data2 as $row2):
                $monto=$row['SUELDO']*$row2['VALORMUL'];
                if($row2['IDCATPRESTACION']==3) $monto = -$monto;
                $consulta = "INSERT INTO prestacion_nomina_trab (IDPRESTACION,IDPAGO,IDTRABAJADOR,MONTO) VALUES (".$row2['IDPRESTACION'].",".$ingresado.",".$row['IDTRABAJADOR'].", ".$monto.")";
                $resultado = $conexion->prepare($consulta);
                $resultado->execute();
            endforeach;
        endforeach;
        
        $consulta = "SELECT SUM(MONTO) AS 'MONTO' FROM prestacion_nomina_trab pn INNER JOIN prestaciones p on (p.IDPRESTACION=pn.IDPRESTACION) WHERE (p.IDCATPRESTACION=2 or p.IDCATPRESTACION=3) AND IDPAGO =".$ingresado;
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $descuento=$resultado->fetch(PDO::FETCH_ASSOC);

        $consulta = "SELECT SUM(MONTO) AS 'MONTO' FROM prestacion_nomina_trab pn INNER JOIN prestaciones p on (p.IDPRESTACION=pn.IDPRESTACION) WHERE p.IDCATPRESTACION=1 AND IDPAGO=".$ingresado;
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $percepcion=$resultado->fetch(PDO::FETCH_ASSOC);

        $total=$percepcion['MONTO']+$descuento['MONTO'];

        $consulta="UPDATE `nomina` SET `TOTALPAGO` = '".$total."', `PERCEPCIONES` = '".$percepcion['MONTO']."', `DESCUENTOS` = '".$descuento['MONTO']."' WHERE `nomina`.`IDPAGO` =".$ingresado;
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 

        $consulta = "SELECT * FROM nomina ORDER BY IDPAGO DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);       
        break;    
    /* case 2:  
        $consulta = "UPDATE nomina SET
            `FECHA` = '$FECHA', `TOTALPAGO` = '$TOTALPAGO', `OBSPAGO` = '$OBSPAGO',
            `INICIOPERIODO` = '$INICIOPERIODO', `FINPERIODO` = '$FINPERIODO',
            `PERCEPCIONES` = '$PERCEPCIONES', `DESCUENTOS` = '$DESCUENTOS' WHERE IDPAGO = '$IDPAGO' ";

        $consulta = "UPDATE trabajadores SET FECHATRAB='$FECHA', TOTALPAGOTRAB='$TOTALPAGO', INICIOPERIODOTRAB='$INICIOPERIODO', FINPERIODOTRAB='$FINPERIODO', OBSPAGOTRAB='$OBSPAGO', TIPOPERCEPCIONESTRAB='$PERCEPCIONES', CUENTABANCTRAB='$DESCUENTOS', NOSEGUROTRAB='$seguro',IDPUESTOS='$puesto' WHERE IDTRABAJADOR='$IDPAGO' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        

        $consulta = "SELECT t.IDTRABAJADOR ,t.FECHATRAB, t.TOTALPAGOTRAB, t.INICIOPERIODOTRAB, p.FECHAPUESTO, t.FINPERIODOTRAB, t.OBSPAGOTRAB , t.TIPOPERCEPCIONESTRAB ,t.CUENTABANCTRAB ,t.NOSEGUROTRAB from trabajadores t INNER JOIN puestos p on t.IDPUESTOS = p.IDPUESTOS";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 3:        
        $consulta = "DELETE FROM nomina WHERE IDPAGO = '$IDPAGO'";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break; */
    case 4:
        $consulta = "SELECT * from nomina";    
        //$consulta = "SELECT t.IDTRABAJADOR ,t.FECHATRAB, t.TOTALPAGOTRAB, t.INICIOPERIODOTRAB, p.FECHAPUESTO, t.FINPERIODOTRAB, t.OBSPAGOTRAB , t.TIPOPERCEPCIONESTRAB ,t.CUENTABANCTRAB ,t.NOSEGUROTRAB from trabajadores t INNER JOIN puestos p on t.IDPUESTOS = p.IDPUESTOS";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
   
}


print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
$conexion=null;

