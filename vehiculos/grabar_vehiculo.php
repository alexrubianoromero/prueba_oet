<?php
include('../valotablapc.php');
$sql_grabar_vehiculo = "insert into $carros (placa,color,marca,tipo_vehiculo,id_conductor,id_propietario)   
values ('".$_REQUEST['placa']."','".$_REQUEST['color']."' ,'".$_REQUEST['marca']."'  ,'".$_REQUEST['tipo_vehiculo']."' 
,'".$_REQUEST['id_conductor']."' ,'".$_REQUEST['id_propietario']."' 

 )";
//echo '<br>'.$sql_grabar_vehiculo;
$con_grabar = mysql_query($sql_grabar_vehiculo,$conexion);
echo '<h2>VEHICULO GRABADO </h2>';
?>