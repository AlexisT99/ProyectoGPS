<?php
require 'Material.php';
$IM = $_POST['txtBuscar'];

$material = new Material( $_POST["txtIdMaterial"],
                     $_POST["txtNombre"],
                     $_POST["txtCantidad"],
                     $_POST["cmbUnidad"],
                     "",
                     $_POST["txtDescripcion"],
                     $_POST["txtFechaVencimiento"],
                     "",
                    "");

                     
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['btnEliminar'])){
  $material->eliminarMO();
  $material->eliminarGM();
  $material->eliminar();
  header("Location: ../../Vista/InterfazInventario_Material/index.php");
}	
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['btnModificar'])){
    $material->actualizar();
    header("Location: ../../Vista/InterfazInventario_Material/index.php");
}	
   
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['txtBuscar'])){
    $conexion = mysqli_connect("localhost","root","",'dynasoft');
    $query = "UPDATE MATERIAL SET CANTIDAD = '2' WHERE ID_MATERIAL = '$IM' ";
    $datos = mysqli_query($conexion,$query);
    header("Location: Materiallleno.php");
}

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['btnEliminar_ML'])){
    $material->eliminarMO();
    $material->eliminarGM();
    $material->eliminar();
    header("Location: ../../Vista/InterfazInventario_Material/index.php");
  }	
  if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['btnModificar_ML'])){
      $material->actualizar();
      header("Location: ../../Vista/InterfazInventario_Material/index.php");
  }
?>