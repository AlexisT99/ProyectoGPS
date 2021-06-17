<?php
require 'Seguro.php';
require 'Mantenimiento.php';
require 'Equipo.php';

$CE        = $_POST['txtBuscar'];

$equipo = new Equipo( $_POST["txtCodigo"],
                     $_POST["txtDescripcion"],
                     $_POST["txtCaracteristicas"],
                     $_POST["txtMarca"],
                     $_POST["txtModelo"],
                     "",
                     $_POST["cmbTipo"]);
                     

$mantenimiento = new Mantenimiento("","","","","","",$_POST["txtCodigo"]);

$seguro = new Seguro("",$_POST["txtCodigo"],"","");


if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['btnEliminar'])){
  $mantenimiento->eliminarCM();
  $mantenimiento->eliminar();
  $seguro->eliminarGS();
  $seguro->eliminar();
  $equipo->eliminarEO();
  $equipo->eliminarGE();
  $equipo->eliminar();
  header("Location: ../../Vista/InterfazInventario_Equipo/index.php");
}	
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['btnModificar'])){
    $equipo->actualizar();
    header("Location: ../../Vista/InterfazInventario_Equipo/index.php");
}	
   
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['txtBuscar'])){
    $conexion = mysqli_connect("localhost","root","",'dynasoft');
    $query = "UPDATE EQUIPO SET CANTIDAD_EQUIPO = '2' WHERE CODIGO_EQUIPO = '$CE' ";
    $datos = mysqli_query($conexion,$query);
    header("Location: Equipolleno.php");
}

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['btnEliminar_EL'])){
    $mantenimiento->eliminarCM();
    $mantenimiento->eliminar();
    $seguro->eliminarGS();
    $seguro->eliminar();
    $equipo->eliminarEO();
    $equipo->eliminarGE();
    $equipo->eliminar();
    header("Location: ../../Vista/InterfazInventario_Equipo/index.php");
  }	
  if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['btnModificar_EL'])){
      $equipo->actualizar();
      header("Location: ../../Vista/InterfazInventario_Equipo/index.php");
  }
?>