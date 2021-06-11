<?php
    require 'Seguro.php';
    require 'Mantenimiento.php';
    require 'Equipo.php';
    $conexion=mysqli_connect('localhost','root','','inventario');

    $equipo = new Equipo( $_POST["txtCodigo"],
                     $_POST["txtDescripcion"],
                     $_POST["txtCaracteristicas"],
                     $_POST["txtMarca"],
                     $_POST["txtModelo"],
                     $_POST["txtTipo"]);
    $mantenimiento = new Mantenimiento($_POST["txtProveedor"],
                     $_POST["txtFechaPM"],
                     $_POST["cmbEstado"],
                     $_POST["txtObservaciones"],
                     $_POST["txtTipoServicio"],
                     $_POST["txtCodigo"]);
    $seguro = new Seguro($_POST["txtSeguro"],
                     $_POST["txtCodigo"],
                     $_POST["txtFechaV"],
                     $_POST["txtCostoS"]);

    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['btnGuardar'])){
        $equipo->insertar();
        $mantenimiento->insertar();
        $seguro->insertar()
        header("Location: index.php");
    }
?>