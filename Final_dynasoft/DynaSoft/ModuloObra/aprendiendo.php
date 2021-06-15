<?php 
    include ('conexionBD.php');
    include ('utilerias.php');
    $conexion = conectar();
    if (!$conexion){
        redireccionar('ERROR DE CONEXION','Obra.php');
        return;
    }

        $idObra = $_REQUEST['t1'];
        $sql = "DELETE FROM Registro_Obras WHERE Id_Obra='$idObra'";
        $resultado = mysqli_query($conexion,$sql);
        mysqli_close($conexion);
       redireccionarR('Obra.php');  
    
?>

