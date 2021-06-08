<?php 
include("ModuloConexionBD.php");
//Recibir dato de Material
$id_Material     =$_POST["txtIdMantenimiento"];
$nombre          =$_POST["txtNombre"];
$unidad          =$_POST["cmdUnidad"];
$cantidad        =$_POST["txtCantidad"];
$descripcion     =$_POST["txtDescripcion"];
$fecha_Vencido   =$_POST["txtFechaV"];

function insertar_Material(){
//consulta para insertar 
$insertar = "INSERT INTO Material (Id_Material,Nombre,Unidad,Cantidad,Descripcion,Fecha_Vencido)
VALUES ('$id_Material','$nombre','$unidad','$cantidad','$descripcion','$fecha_Vencido'");

//Realizar Insert
 $resultado = mysqli_query($conection,$insertar)
 if(!$resultado){
    echo 'error al realizar el registro';
 }else {
    echo 'Material agregado';
    mysqli_close($conection);
 }
}//funcion
function Actulizar_Material(){
    //Consulta para Actualizar
     $Actualizar = "UPDATE Material 
            SET Nombre = '$nombre', Unidad = '$unidad', Cantidad = '$cantidad', Descripcion = '$descripcion', Fecha_Vencido = '$fecha_Vencido' 
               WHERE id_Material = '$id_Material'";
    
    //Realizar Actualizacion 
     $resultado2 = mysqli_query ($conection,$Actualizar);
     if (!$resultado2){
        echo 'Error al momdificar';
     }else{
        echo 'Equipo actualizado';
        mysqli_close($conection);
     }
}//Actualizar

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

