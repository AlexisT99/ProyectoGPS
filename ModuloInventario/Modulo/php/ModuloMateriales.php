<?php 
include("ModuloConexionBD.php");
//Recibir dato de Material
$Id_Material     =$_POST['Id_Material'];
$nombre          =$_POST['Nombre'];
$Cantidad        =$_POST['Cantidad'];
$Unidad          =$_POST['Unidad'];
$Descripcion     =$_POST['Descripcion'];
$Fecha_Vencido   =$_POST['Fecha_Vencido'];

//consulta para insertar 
$insertar = "Insert into Material""(Id_Material,Nombre,Cantidad,Unidad,Descripcion,Fecha_Vencido)" 
values ('$Id_Material','$Nombre','$Cantidad','$Unidad','$Descripcion','$Fecha_Vencido');
//Consulta para Actualizar
$Actualizar = "UPDATE Material 
    set'Id_Material='$Id_Material',Nombre='$Nombre',Cantidad='$Cantidad',
        Unidad='$Unidad',Descripcion='$Descripcion',Fecha_Vencido='$Fecha_Vencido'";
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
$Visualizar="SELECT * from Material";
 $result=mysqli_query($conexion,$Visualizar);
    while($mostrar=mysqli_fetch_array($result)){
     echo $mostrar['Id_Material'];
     echo $mostrar['Nombre'];
     echo $mostrar['Cantidad'];
     echo $mostrar['Unidad'];
     echo $mostrar['Descripcion'];
     echo $mostrar['Fecha_Vencido'];
        }
//cerrar la conexion 
mysqli_close($conection);

?>

