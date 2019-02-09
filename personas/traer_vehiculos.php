<?php
include('../valotablapc.php');
$sql_vehiculos = "select * from $personas";
$con_vehiculos = mysql_query($sql_vehiculos,$conexion);
?>

<!doctype html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel='stylesheet' href='css/bootstrap.min.css'>
<script src="js/jquery-2.1.1.js"></script>   
<script src='js/bootstrap.min.js'></script>
<link rel="stylesheet" type="text/css" href="../css/style.css">

</head>
<body>
	<div class="coontainer">
		<br>
		<table class="table">
			<thead>
				<tr>
					<td>CEDULA</td>
					<td>PRIMER_NOMBRE</td>
					<td>SEGUNDO_NOMBRE</td>
					<td>APELLIDOS</td>
					<td>TELEFONO</td>
					<td>CIUDAD</td>
				</tr>
			</thead>
			<tbody>
				<?php
				while($vehiculos= mysql_fetch_assoc($con_vehiculos)){
					//$datos_con= consulta_assoc($personas,'id_persona',$vehiculos['id_conductor'],$conexion);
					//$datos_pro= consulta_assoc($personas,'id_persona',$vehiculos['id_propietario'],$conexion);
				echo '<tr>';
				echo '<td>'.$vehiculos['cedula'].'</td>';
				echo '<td>'.$vehiculos['primer_nombre'].'</td>';
				echo '<td>'.$vehiculos['segundo_nombre'].'</td>';
				echo '<td>'.$vehiculos['apellidos'].'</td>';
				echo '<td>'.$vehiculos['direccion'].'</td>';
				echo '<td>'.$vehiculos['telefono'].'</td>';
				
				echo '</tr>';
				}
					?>
			</tbody>


		</table>

	</div>

</body>
</html>
<?php
  function  consulta_assoc($tabla,$campo,$parametro,$conexion)
  {
       $sql="select * from $tabla  where ".$campo." = '".$parametro."' ";
       //echo '<br>'.$sql;
       $con = mysql_query($sql,$conexion);
       $arr_con = mysql_fetch_assoc($con);
       return $arr_con;
  }

?>
