<?php
    //obtener datos del formularios mediante post
    $id_obra        = $_POST['txtidObra'];
    $codigo_equipo  = $_POST['txtCodigo'];
    $id_trabajador  = $_POST['txtTrabajo']; 

    //iniciar la conexion con la bd
    $conexion = mysqli_connect('localhost','root','','dynasoft');
    $query = "SELECT DISPONIBLE FROM EQUIPO WHERE CODIGO_EQUIPO = '$codigo_equipo'";
    $datos = mysqli_query($conexion,$query);//$conexion->query($query);
    $fila=$datos->fetch_assoc();
        $disponible = $fila['DISPONIBLE'];
    if($disponible == 'D'){
        $query = "INSERT INTO EQUIPO_OBRA VALUES('$codigo_equipo','$id_obra','$id_trabajador')";
        mysqli_query($conexion,$query);
        $query = "UPDATE Equipo  SET DISPONIBLE = 'O' WHERE CODIGO_EQUIPO = '$codigo_equipo'";
        mysqli_query ($conexion,$query );
        header("Location: ../../Vista/AgregarObra_E/index.php");
    }else{
        echo '<div class = "formulario-div" style ="color:blue">';
        echo '<h1 style = "text-align:center">'."PRODUCTO OCUPADO".'</h1>';
        echo '<p></p>';
        echo '<h4 style = "text-align:center">Redireccionando...</h4>';
        echo '</div>';
        header('refresh:1,url =../../Vista/AgregarObra_E/index.php');
    }

?>