<?php

$personas = "personas";

$carros = "carros";


/*valores para pc*/


$servidor = "localhost";

$usuario = "root";

$clave  = "peluche2016";

$nombrebase = "acme";






/*
$servidor = "localhost";

$usuario = "ctwtvsxj_prueba";

$clave  = "A13579b***";

$nombrebase = "ctwtvsxj_acme";
*/




$conexion =mysql_connect($servidor,$usuario,$clave);

$la_base =mysql_select_db($nombrebase,$conexion);









?>

