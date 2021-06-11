<?php
    require 'Material.php';
    $conexion=mysqli_connect('localhost','root','','inventario');

    $material = new Material( $_POST["txtIdMantenimiento"],
                     $_POST["txtNombre"],
                     $_POST["cmbUnidad"],
                     $_POST["txtCantidad"],
                     $_POST["txtDescripcion"],
                     $_POST["txtFechaV"]);

    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['btnGuardar'])){
        $material->insertar();
        header("Location: index.php");
    }
?>