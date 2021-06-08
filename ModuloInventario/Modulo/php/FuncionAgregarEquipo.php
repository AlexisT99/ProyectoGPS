<?php 
incluir ( "ModuloConexionBD.php" );

$codigo_Equipo   = $_POST['txtCodigo'];
$descripcion     = $_POST['txtDescripcion'];
$caracteristicas = $_POST['txtCaracteristicas'];
$marca           = $_POST['txtMarca'];
$modelo          = $_POST['txtModelo'];
$estado          =$_POST['cmbEstado'];
$tipo            = $_POST['cmbTipo'];
$fechav          =$_POST['txtFechaV']
$costos          =$_POST['txtCostoS']
$provedor        =$_POST['txtProveedor']
$fechapm         =$_POST['txtFechaPM']
$tipoS           =$_POST['txtTipoServicio']
$obser           =$_POST['txtObservaciones']

$insertar = "Insert into Equipo (CODIGO_EQUIPO,DESCRIPCION_EQUIPO,CARACTERISTICAS,MARCA_EQUIPO,MODELO_EQUIPO , TIPO_EQUIPO )" 
values ('$codigo_Equipo','$descripcion','$caracteristicas','$marca','$modelo  ','$tipo ');

 $resultado= mysqli_query ( $conexión ,  $insertar )

 if($resultado == 1){
 $sqltablas = " insert into SEGURO (CODIGO_EQUIPO,FECHA_VENCIDO,COSTO_SEGURO  )"
                                  values ('$codigo_Equipo','$fechav','$costos');
 $resultado2= mysqli_query ( $conexión ,  $sqltablas ) ;
if ($resultado2 == 1){
$sqltablam = " insert into MANTENIMIENTO (CODIGO_EQUIPO,PROVEEDOR,FECHA_PROX_M,TIPO_SERVICIO, OBSERVACIONES,ESTADO )"
values ('$codigo_Equipo','$provedor','$fechapm ','$tipoS ','$obser','$estado');
 $resultado3= mysqli_query ( $conexión ,  $sqltablam ) ;  



 }
 }                           
?>