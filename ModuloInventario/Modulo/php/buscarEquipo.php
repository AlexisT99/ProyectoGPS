<?php 

	$conexion=mysqli_connect('localhost','root','','gps');

 ?>
 <?php
$codigo = $_POST['codigo'];
$sql="SELECT * FROM equipo WHERE Codigo_Equipo = '$codigo'";
$result=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_array($result)){
    echo $mostrar['Codigo_Equipo']." ".$mostrar['Descripcion']." ".$mostrar['Caracteristicas'].
" ".$mostrar['Marca']." ".$mostrar['Modelo']." ".$mostrar['Tipo'];
}
?>
	