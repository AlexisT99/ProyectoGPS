<?php 

	$conexion=mysqli_connect('localhost','root','','BD');

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>mostrar datos</title>
</head>
<body>

<br>

	<table>
		<tr>
			<td>Código</td>
			<td>Descripcion</td>
			<td>Características</td>
			<td>Marca</td>
			<td>Modelo</td>	
            <td>Tipo</td>
            <td>Capacidad</td>
            <td>Vida Útil</td>
		</tr>

		<?php 
		$sql="SELECT * from t_Equipo";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['Codigo'] ?></td>
			<td><?php echo $mostrar['Descripcion'] ?></td>
			<td><?php echo $mostrar['Caracteristicas'] ?></td>
			<td><?php echo $mostrar['Marca'] ?></td>
			<td><?php echo $mostrar['Modelo'] ?></td>
            <td><?php echo $mostrar['Tipo'] ?></td>
            <td><?php echo $mostrar['Capacidad'] ?></td>
            <td><?php echo $mostrar['V_util'] ?></td>
		</tr>
	<?php 
	}
	 ?>
	</table>

</body>
</html>