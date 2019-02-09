<?php



include('../valotablapc.php');
$sql_grabar_vehiculo = "insert into $personas (cedula,primer_nombre,segundo_nombre,apellidos,direccion,telefono,ciudad)   
values ('".$_REQUEST['cedula']."','".$_REQUEST['primer_nombre']."' ,'".$_REQUEST['segundo_nombre']."'  ,'".$_REQUEST['apellidos']."' 
,'".$_REQUEST['direccion']."' ,'".$_REQUEST['telefono']."' ,'".$_REQUEST['ciudad']."' 

 )";
//echo '<br>'.$sql_grabar_vehiculo;
$con_grabar = mysql_query($sql_grabar_vehiculo,$conexion);
echo '<h2>PERSONA GRABADA </h2>';
?>