<?php

    //obtener datos del formularios mediante post
    $id_incidente        = $_POST['txtidObra'];

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['btnAgregar'])){
    $conexion = mysqli_connect("localhost","root","",'dynasoft');
    $query = "select (ID_MATERIAL,CODIGO_EQUIPO) from INCIDENTES WHERE ID_INCIDENTE = '$id_incidente'";
    $datos = mysqli_query($conexion,$query);//$conexion->query($query);
    $datos->fetch_assoc()
        $id_material =$fila['ID_MATERIAL'];
        $codigo_equipo =$fila['CODIGO_EQUIPO'];
    /*if($id_material!=""){
        //Se elimina objeto viejo
        $query = "UPDATE Material SET CANTIDAD_MATERIAL = CANTIDAD_
        MATERIAL-1 WHERE ID_MATERIAL = '$this->id_material'";
        $resultado = mysqli_query($conexion,$query);
        //Se agrega material nuevo
        $query = "UPDATE  material SET CANTIDAD_MATERIAL=(SELECT CANTIDAD_MATERIAL FROM material WHERE ID_MATERIAL = '$this->id_material')+ '1' ,
                    NOMBRE_MATERIAL=(SELECT NOMBRE_MATERIAL FROM material WHERE ID_MATERIAL='$this->id_material') , 
                    UNIDAD_MEDIDA=(SELECT UNIDAD_MEDIDA FROM material WHERE ID_MATERIAL='$this->id_material'),
                    DESCRIPCION=(SELECT DESCRIPCION FROM material WHERE ID_MATERIAL='$this->id_material'), 
                    FECHA_VENCIDO=( SELECT FECHA_VENCIDO FROM material WHERE ID_MATERIAL='$this->id_material') 
                    WHERE ID_MATERIAL= '$this->id_material'" ;
        $resultado = mysqli_query($conexion,$query);
        $query= "INSERT INTO gastos_material(ID_MATERIAL,CANTIDAD_GM,PRECIO_UNITARIO_GM)  VALUES ('$this->id_material','$this->cantidad','$this->precio')";
        $resultado = mysqli_query($conexion,$query);
    }*/
    if($codigo_equipo!=""){
        //Se Actualizar el estado
        $query = "UPDATE Equipo  SET DISPONIBLE = 'I' WHERE CODIGO_EQUIPO = '$codigo_equipo'";
        $resultado = mysqli_query ($conexion,$query );
        //Se valida
        $query = "UPDATE INCIDENTES SET Estado = 'Autorizado' WHERE ID_INCIDENTE = '$id_incidente'";
        $resultado = mysqli_query ($conexion,$query );
    }
    
    //

    header("Location: ../../Vista/ValidarSolicitud/index.php");
}    
            

?>