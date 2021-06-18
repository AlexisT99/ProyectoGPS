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
        //Se busca equipo
        $query = "SELECT CANTIDAD_EQUIPO,DESCRIPCION_EQUIPO,CARACTERISTICAS,MARCA_EQUIPO,MODELO_EQUIPO,TIPO_EQUIPO,DISPONIBLE FROM EQUIPO WHERE CODIGO_EQUIPO = '$codigo_equipo'";
            $datos = mysqli_query($conexion,$query);
            $fila=$datos->fetch_assoc();
                    $CANTIDAD_EQUIPO = $fila['CANTIDAD_EQUIPO'];
                    $DESCRIPCION_EQUIPO = $fila['DESCRIPCION_EQUIPO'];
                    $CARACTERISTICAS = $fila['CARACTERISTICAS'];
                    $MARCA_EQUIPO = $fila['MARCA_EQUIPO'];
                    $MODELO_EQUIPO = $fila['MODELO_EQUIPO'];
                    $TIPO_EQUIPO = $fila['TIPO_EQUIPO'];
                    $DISPONIBLE = $fila['DISPONIBLE'];
        $query = "SELECT PRECIO_UNITARIO_GE FROM gastos_equipo WHERE CODIGO_EQUIPO = '$codigo_equipo'";
                    $datos2 = mysqli_query($conexion,$query);
                    $fila2=$datos2->fetch_assoc();
                            $CANTIDAD_EQUIPO = $fila2['PRECIO_UNITARIO_GE'];
        //Se incerta nuevo equipo
        $query= "INSERT INTO `gastos` (`IDGASTO`, `IDTRABAJADOR`, `FECHAGASTO`, `MONTO`, `DESCRIPCION`) VALUES
        ('3', '1', '2021-06-18', '0',' 'Gasto de compra')";
        $resultado = mysqli_query($conexion,$query);
        $query= "INSERT INTO `solicitudes_gastos` (`IDTRABAJADOR`, `IDGASTO`, `ESTADOSOLICITUD`) VALUES ('1', '3', 'E')";
        $resultado = mysqli_query($conexion,$query); 
    
    //

    header("Location: ../../Vista/ValidarSolicitud/index.php");
}    
            

?>