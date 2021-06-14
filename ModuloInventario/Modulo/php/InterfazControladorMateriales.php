<?php
require 'Material.php';

$material = new Material( $_POST["txtIdMaterial"],
                     $_POST["txtNombre"],
                     $_POST["txtCantidad"],
                     $_POST["cmbUnidad"],
                     "",
                     $_POST["txtDescripcion"],
                     $_POST["txtFechaVencimiento"]);
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['btnEliminar'])){
  $material->eliminarGM();
  $material->eliminar();
  header("Location: ../../Vista/InterfazInventario_Material/index.php");
}	
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['btnModificar'])){
    $material->actualizar();
    header("Location: ../../Vista/InterfazInventario_Material/index.php");
}	
   
?>