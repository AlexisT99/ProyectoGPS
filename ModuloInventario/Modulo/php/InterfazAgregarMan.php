<?php
    include('Mantenimiento.php');
    $mantenimiento = new Mantenimiento(
                     $_POST['txtProveedor'],
                     $_POST['txtFechaPM'],
                     $_POST['cmbEstado'],
                     $_POST['txtObservaciones'],
                     $_POST['cmbTipoServicio'],
                     $_POST['txtCostoM'],
                     $_POST['txtCodigo_M']);
    
    $mantenimiento->insertar();
    //$mantenimiento->insertarGastoM();
?>