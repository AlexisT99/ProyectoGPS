<?php 
include("ModuloConexionBD.php");
$codigo = $_POST['CODIGO'];
mysql_select_db('BD',$conection) or ('Error al conectar la base de datos');
mysql_query("DELETE FROM  BD WHERE Codigo = $codigo")
echo "Se ha eliminado el registro exitosamente"
?>