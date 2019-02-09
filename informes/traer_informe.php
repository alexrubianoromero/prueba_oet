<?php
include('../valotablapc.php');
$sql_vehiculos = "select * from $carros";
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
					<td>PLACA</td>
					<td>MARCA</td>
					<td>CONDUCTOR</td>
					<td>PROPIETARIO</td>
				</tr>
			</thead>
			<tbody>
				<?php
				while($vehiculos= mysql_fetch_assoc($con_vehiculos)){
					$datos_con= consulta_assoc($personas,'id_persona',$vehiculos['id_conductor'],$conexion);
					$datos_pro= consulta_assoc($personas,'id_persona',$vehiculos['id_propietario'],$conexion);
				echo '<tr>';
				echo '<td>'.$vehiculos['placa'].'</td>';
				
				echo '<td>'.$vehiculos['marca'].'</td>';
			
				echo '<td>'.$datos_con['primer_nombre'].' '.$datos_con['segundo_nombre'].' '.$datos_con['apellidos'].'</td>';
					echo '<td>'.$datos_pro['primer_nombre'].' '.$datos_pro['segundo_nombre'].' '.$datos_pro['apellidos'].'</td>';
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
