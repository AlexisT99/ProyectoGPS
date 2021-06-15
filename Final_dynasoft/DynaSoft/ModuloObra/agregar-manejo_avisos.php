<?php
    include ('conexionBD.php');
    include('utilerias.php');
    $conexion = conectar();
    if (!$conexion){
        redireccionar('ERROR DE CONEXION','index.php');
        return;
    }
    
   
    $t1= $_GET['t1']; 
        

        //$imp = $can * $pu;
        $sql = "update incidentes set ESTADO_PETICION= 'APROVADO' 
        where ID_INCIDENTE='$t1';";
        $resultado = mysqli_query($conexion,$sql);
        mysqli_close($conexion);
        redireccionar('Se ha actualizado exitosamente','avisos.php');

        //IMPORTE_NUMERO='$Tot' 

?>