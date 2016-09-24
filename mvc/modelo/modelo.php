<?php
function Obtener_unidad_medidas()
	{
		//importar el archivo de la conexion
		include_once('../conexion/conexion.php');
		//crear objeto de conexion
		$con=new conexion();

		//realizar la consulta para cargar datos
		$query="SELECT * From tbl_unidad_medida ";

		$bdq= $con->Ejecutar($query);

		$datos_unidad = array();

		while ($fila_unidad= mysqli_fetch_array($bdq,MYSQL_ASSOC)) {
			$datos_unidad[]=$fila_unidad;
		}
		return $datos_unidad;
	}
?>