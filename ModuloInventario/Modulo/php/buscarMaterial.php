<?php 

	$conexion=mysqli_connect('localhost','root','','gps');

 ?>
 <?php
$codigo = $_POST['codigo'];
$sql="SELECT * FROM materiales WHERE Id_Material = '$codigo'";
$result=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_array($result)){
    echo $mostrar['Id_Material']." ".$mostrar['Nombre']." ".$mostrar['Cantidad'].
" ".$mostrar['Unidad']." ".$mostrar['Descripcion']." ".$mostrar['Fecha_Vencido'];
}
?>
	