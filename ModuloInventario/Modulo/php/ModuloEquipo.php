<?php 
include("ModuloConexionBD.php");
//Recibir datos de Equipo
$Codigo_Equipo   = $_POST['Codigo_Equipo'];
$Descripcion     = $_POST['Descripcion'];
$Caracteristicas = $_POST['Caracteristicas'];
$Marca           = $_POST['Marca'];
$Modelo          = $_POST['Modelo'];
$Tipo            = $_POST['Tipo'];
$Id_Mant         = $_POST['Id_Mant'];


//consulta para insertar 
$insertar = "Insert into""(Codigo_Equipo,Descripcion,Caracteristicas,Marca,Modelo,Tipo,Id_Mant)" 
values ('$Codigo_Equipo','$Descripcion','$Caracteristicas','$Marca','$Modelo','$Tipo','$Id_Mant');
//Consulta para Actualizar
$Actualizar = "UPDATE Equipo 
    set'Codigo_Equipo='$Codigo_Equipo',Descripcion='$Descripcion',Caracteristicas='$Caracteristicas',
        Marca='$Marca',Modelo='$Marca',Tipo='$Tipo',Id_Mant='$Id_Mant'";
//Realizar Insert
$resultado = mysqli_query($conection,$insertar)
if(!$resultado){
    echo 'error al realizar el registro';
}else {
    echo 'Material agregado'
}
//Realizar Actualizacion 
$resultado2 = mysqli_query ($conection,$Actualizar);
if (!$resultado2){
    echo 'Error al momdificar'
}else{
    echo 'Equipo actualizado';
}
//Realizar Visualizacion
$Visualizar="SELECT * from Equipo";
 $result=mysqli_query($conexion,$Visualizar);
    while($mostrar=mysqli_fetch_array($result)){
     echo $mostrar['Codigo_Equipo'];
     echo $mostrar['Descripcion'];
     echo $mostrar['Caracteristicas'];
     echo $mostrar['Marca'];
     echo $mostrar['Modelo'];
     echo $mostrar['Tipo'];
     echo $mostrar['Id_Mant'];
        }
//cerrar la conexion 
mysqli_close($conection);

?>

