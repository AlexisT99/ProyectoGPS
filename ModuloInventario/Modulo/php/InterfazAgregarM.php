<?php
    require 'Material.php';
    $conexion=mysqli_connect('localhost','root','','inventario');

    $material = new Material( $_POST["txtIdMantenimiento"],
                     $_POST["txtNombre"],
                     $_POST["cmbUnidad"],
                     $_POST["txtCantidad"],
                     $_POST["txtPrecio"],
                     $_POST["txtDescripcion"],
                     $_POST["txtFechaV"]);

    $material2 = new Material( $_POST["txtIdMaterial"],
                     "",
                     $_POST["txtCantidad"],
                     "",
                     "",
                     "",
                    ""); 
                     
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['btnGuardar'])){
        $material->insertar();
        $material->insertarGasto();
        header("Location: AgregarMaterial/index.php");
    }
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['cantidad'])){
        $material->aumentar();
        header("Location: AgregarMaterial/index.php");
    }
    
    
?>