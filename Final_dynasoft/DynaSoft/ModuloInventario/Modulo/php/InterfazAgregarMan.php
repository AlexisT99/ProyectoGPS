<?php
    require 'Mantenimiento.php';
    require 'Seguro.php';
    $mantenimiento = new Mantenimiento(
                     $_POST['txtProveedor'],
                     $_POST['txtFechaPM'],
                     $_POST['cmbEstado'],
                     $_POST['txtObservaciones'],
                     $_POST['cmbTipoServicio'],
                     $_POST['txtCostoM'],
                     $_POST['txtCodigo_M']);
    $seguro = new Seguro($_POST["txtSeguro"],
                     $_POST["txtCodigo_S"],
                     $_POST["txtFechaV"],
                     $_POST["txtCostoS"]);

    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['btnGuardar_M'])){
        $mantenimiento->insertar();
        $mantenimiento->insertarGastoM();
        header("Location: ../../Vista/AgregarMantenimiento/index.php");
    }
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['btnGuardar_S'])){
        $seguro->insertar();
        $seguro->insertarGastoS();
        header("Location: ../../Vista/AgregarMantenimiento/index.php");
    }
    //$mantenimiento->insertarGastoM();
?>