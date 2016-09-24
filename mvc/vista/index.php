<html>
<head lang="es">
	<title>Hola Mundo</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device=width, initial=scale=1.0, maximun-scale=1.0">
</head>
<body>
<center>
<h1>Muestra de Datos</h1>
<table border="1" cellpadding="0" cellspacing="0">
<th>ID</th>
<th>Nombre</th>
<th>Abreviado</th>
<?php foreach($datos_unidad as $dato){?>
<tr>
<td><?php echo $dato['id_unidad_medida'];?></td>
<td><?php echo $dato['descripcion'];?></td>
<td><?php echo $dato['abreviado'];?></td>
</tr>
<?php } ?>
 </table>
</center>
</body>
</html>