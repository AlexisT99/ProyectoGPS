<?php

require 'Material.php';

$material = new Material( $_POST["txtCodigo"],
                     "",
                     $_POST["txtCantidad"],
                     "",
                     "",
                     "",
                     "",
                     $_POST["txtidObra"],
                     $_POST["txtTrabajo"]);

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['btnAgregar'])){
    $material->InsertarObra();
    $material->disminuirObra();
    header("Location: ../../Vista/AgregarObra_M/index.php");
}
?>


