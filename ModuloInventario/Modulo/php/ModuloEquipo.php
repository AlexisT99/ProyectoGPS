<?php 
include("ModuloConexionBD.php");
//Recibir datos de Equipo
$codigo_Equipo   = $_POST["txtCodigo"];
$caracteristicas = $_POST["txtCaracteristicas"];
$marca           = $_POST["txtMarca"];
$modelo          = $_POST["txtModelo"];
$tipo            = $_POST["cmbTipo"];
$estado          = $_POST["cmbEstado"];
$id_Mant         = $_POST["Id_Mant"];
$descripcion     = $_POST["txtDescripcion"];


function insertar_Equipo(){
//consulta para insertar 
 $insertar = "INSERT INTO Equipo (Codigo_Equipo,Caracteristicas,Marca,Modelo,Tipo,Estado,Descripcion) 
              VALUES ('$codigo_Equipo','$caracteristicas','$marca','$modelo','$tipo','$estado','$descripcion'");

//Realizar Insert
 $resultado = mysqli_query($conection,$insertar)
 if(!$resultado){
    echo 'error al realizar el registro';
 }else {
    echo 'Material agregado';
    mysqli_close($conection);
 }
}//funcion insertar
function actualizar_Equipo(){
    //Consulta para Actualizar
     $Actualizar = "UPDATE Equipo 
            SET Caracteristicas  = '$caracteristicas', Marca = '$marca', Modelo = '$modelo ', Tipo = '$tipo'
                , estado = '$estado', Descripcion = '$descripcion' 
               WHERE Codigo_Equipo = '$codigo_Equipo'";
    //Realizar Actualizacion 
     $resultado2 = mysqli_query ($conection,$Actualizar);
     if (!$resultado2){
        echo 'Error al momdificar';
     }else{
        echo 'Equipo actualizado';
        mysqli_close($conection);
     }
}//funcion actualizar

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

