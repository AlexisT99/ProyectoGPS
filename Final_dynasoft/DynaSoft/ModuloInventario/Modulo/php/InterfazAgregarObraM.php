<?php

require 'Material.php';
$id_material = $_POST["txtCodigo"];
$cantidad_I = $_POST["txtCantidad"];

$material = new Material( $id_material,
                     "",
                     $cantidad_I,
                     "",
                     "",
                     "",
                     "",
                     $_POST["txtidObra"],
                     $_POST["txtTrabajo"]);

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['btnAgregar'])){
    $conexion = mysqli_connect('localhost','root','','dynasoft');
    $query = "SELECT CANTIDAD_MATERIAL FROM MATERIAL WHERE ID_MATERIAL = '$id_material'";
    $datos = mysqli_query($conexion,$query);//$conexion->query($query);
    $fila=$datos->fetch_assoc();
        $cantidad = $fila['CANTIDAD_MATERIAL'];
    $resultado = $cantidad - $cantidad_I;
    if($resultado >= 0){
        $material->InsertarObra();
        $material->disminuirObra();
        header("Location: ../../Vista/AgregarObra_M/index.php");
    }else{
        echo '<div class = "formulario-div" style ="color:blue">';
        echo '<h1 style = "text-align:center">'."Producto insuficiente en inventario".'</h1>';
        echo '<p></p>';
        echo '<h4 style = "text-align:center">Redireccionando...</h4>';
        echo '</div>';
        header('refresh:2,url =../../Vista/AgregarObra_M/index.php');
    }
    
}
?>


