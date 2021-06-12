<?php
require 'Seguro.php';
require 'Mantenimiento.php';
require 'Equipo.php';


$equipo = new Equipo( $_POST["txtCodigo"],
                     $_POST["txtDescripcion"],
                     $_POST["txtCaracteristicas"],
                     $_POST["txtMarca"],
                     $_POST["txtModelo"],
                     $_POST["cmbTipo"]);
                     

$mantenimiento = new Mantenimiento("","","","","",$_POST["txtCodigo"]);

$seguro = new Seguro("",$_POST["txtCodigo"],"","");

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['eliminar'])){
  $mantenimiento->eliminar();
  $seguro->eliminar();
  $equipo->eliminar();
  header("Location: InterfazInventario_Equipo/index.php");
}	
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['modificar'])){
    $equipo->actualizar();
    header("Location: InterfazInventario_Equipo/index.php");
}	




    //($id_seguro,$codigo_equipo,$fecha_vencido,$costo_seguro)
    //$seguro = new Seguro($_POST['txtSeguro'],$_POST['txtCodigo'],$_POST['txtFechaV'],$_POST['txtCosto']);

    //($proveedor,$fecha_prox_m,$estado,$observaciones,$tipo_servicio,$codigo_equipo)
    //$mantenimiento = new Mantenimiento($_POST['txtProveedor'],$_POST['txtFechaPM'],$_POST['cmbEstado']
    //,$_POST['txtObservaciones'],$_POST['txtTipoServicio'],$_POST['txtCodigo']);

    /*Condiciones para agregar a mantenimiento o a seguro */
   
     //$equipo->insertar();
   
?>