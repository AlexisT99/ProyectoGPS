<?php
require 'Material.php';

$material = new Material( $_POST["txtIdMaterial"],
                     $_POST["txtNombre"],
                     $_POST["txtCantidad"],
                     $_POST["cmbUnidad"],
                     $_POST["txtDescripcion"],
                     $_POST["txtFechaVencimiento"]);
$material2 = new Material( $_POST["txtIdMaterial"],
                     "",
                     $_POST["txtCantidad"],
                     "",
                     "",
                    "");
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['eliminar'])){
  $material2->disminuir();
  header("Location:InterfazInventario_Material/index.php");
}	
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['modificar'])){
    $material->actualizar();
    header("Location:InterfazInventario_Material/index.php");
}	
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['agregar'])){
    $material->insertar();
    header("Location:InterfazInventario_Material/index.php");
}	





    //($id_seguro,$codigo_equipo,$fecha_vencido,$costo_seguro)
    //$seguro = new Seguro($_POST['txtSeguro'],$_POST['txtCodigo'],$_POST['txtFechaV'],$_POST['txtCosto']);

    //($proveedor,$fecha_prox_m,$estado,$observaciones,$tipo_servicio,$codigo_equipo)
    //$mantenimiento = new Mantenimiento($_POST['txtProveedor'],$_POST['txtFechaPM'],$_POST['cmbEstado']
    //,$_POST['txtObservaciones'],$_POST['txtTipoServicio'],$_POST['txtCodigo']);

    /*Condiciones para agregar a mantenimiento o a seguro */
   
     //$equipo->insertar();
   
?>