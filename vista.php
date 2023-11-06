<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<title>Modelo-vista-controlador</title>
</head>
<body>
	<h1>base de datos bd_sounds_music </h1>
	<h1>tabla categoria </h1>
	<h1>Platillos disponibles</h1>
	<table border="1">
		<tr>
			<td><strong> Nombre_categoria</strong></td>
			<td><strong> Descripcion_categoria</strong></td>
			<td><strong> Fecha_creacion</strong></td>
			<td><strong> Nombre_producto </strong></td>
			<td><strong> Costos_promedios </strong></td>
			<td><strong> Img_producto</strong></td>
			<td><strong> Nombre_fabricante</strong></td>

		</tr>
		<?php
			for($i=0;$i<count($pd);$i++)
			{
				?>
					<tr>
						<td><?php echo $pd[$i]["Nombre_categoria"]; ?></td>
						<td><?php echo $pd[$i]["Descripcion"]; ?> </td>
						<td><?php echo $pd[$i]["Fecha_creacion"]; ?> </td>
						<td><?php echo $pd[$i]["Nombre_producto"]; ?></td>
						<td><?php echo $pd[$i]["Costos_promedios"]; ?> </td>
						<td><?php echo $pd[$i]["Img_producto"]; ?></td>
						<td><?php echo $pd[$i]["Nombre_fabricante"]; ?> </td>
			
						
					</tr>
				<?php
			}
		?>
	</table>
</body>
</html>