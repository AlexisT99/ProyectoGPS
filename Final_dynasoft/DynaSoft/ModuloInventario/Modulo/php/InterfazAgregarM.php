<?php
    require 'Material.php';

    $material = new Material( $_POST["txtIdMantenimiento"],
                     $_POST["txtNombre"],
                     $_POST["txtCantidad"],
                     $_POST["cmbUnidad"],
                     $_POST["txtPrecio"],
                     $_POST["txtDescripcion"],
                     $_POST["txtFechaV"],
                    "",
                    "");
                     
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['btnGuardar'])){
        $material->insertar();
        $material->insertarGasto();
        header("Location: ../../Vista/AgregarMaterial/index.php");
    }
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['cantidad'])){
        $material->aumentar();
        header("Location: ../../Vista/AgregarMaterial/index.php");
    }
    
    
?>
