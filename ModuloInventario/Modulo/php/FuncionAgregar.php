<?php 
include("ModuloConexionBD.php");
//recibir los datos 
$codigoM =$_POST["CodigoM"];
$nombreM =$_POST["NombreM"];
$unidadM =$_POST["unidadM"];
$cantidadM =$_POST["cantidadM"];
$descriM =$_POST["descriM"];
$modeloM =$_POST["modeloM"];
$marcaM =$_POST["marcaM"];
$tipoM =$_POST["tipoM"];
//consulta para insertar 
$insertar = "Insert into ""(codigoM,nombreM,unidadM,cantidadM,descriM,modeloM,marcaM,tipoM)" values ('$codigoM',
'$nombreM','unidadM','$unidadM','$cantidadM','$descriM','$modeloM','$marcaM','$tipoM');
//realizar consulta
$resultado = mysqli_query($conection,$insertar)
if(!$resultado){
echo 'error al realizar el registro';

}else {
    echo 'Material agregado'
}
//cerrar la conexion 
mysqli_close($conection)