<?php

    //obtener datos del formularios mediante post
    $id_incidente        = $_POST['txtidObra'];

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['btnAgregar'])){
    $conexion = mysqli_connect("localhost","root","",'dynasoft');
    $query = "SELECT CODIGO_EQUIPO FROM INCIDENTES WHERE ID_INCIDENTE = '$id_incidente'";
    $datos = mysqli_query($conexion,$query);
    $fila = $datos->fetch_assoc();
        $codigo_equipo =$fila['CODIGO_EQUIPO'];
        
        //Se Actualizar el estado
        $query = "UPDATE Equipo SET DISPONIBLE = 'I' WHERE CODIGO_EQUIPO = '$codigo_equipo'";
        $resultado = mysqli_query ($conexion,$query );
        //Se valida
        $query = "UPDATE INCIDENTES SET ESTADO_PETICION = 'Autorizado' WHERE ID_INCIDENTE = '$id_incidente'";
        $resultado = mysqli_query ($conexion,$query );
    
    //

    header("Location: ../../Vista/ValidarSolicitud/index.php");
}    
            

?>