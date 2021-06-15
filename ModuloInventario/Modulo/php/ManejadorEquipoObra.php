<?php
    //obtener datos del formularios mediante post
    $id_obra        = $_POST['txtidObra'];
    $codigo_equipo  = $_POST['txtCodigo'];
    $id_trabajador  = $_POST['txtTrabajador']; 

    //iniciar la conexion con la bd
    $conexion = mysqli_connect('localhost','root','','dynasoft');
    $query = "INSERT INTO EQUIPO_OBRA VALUES('$codigo_equipo','$id_obra','$id_trabajador')";
    mysqli_query($conexion,$query);

?>