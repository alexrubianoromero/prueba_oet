<?php
/*
echo '<pre>';
print_r($_REQUEST);
echo '</pre>';
*/

include('../valotablapc.php');

include('../funciones.php');

$sql_buscar_codigo = "select * from $carros where placa  = '".$_REQUEST['placapan']."'  ";

$consulta_codigo = mysql_query($sql_buscar_codigo,$conexion);

if (mysql_num_rows($consulta_codigo) > 0)

		{			

				$datos123 = get_table_assoc($consulta_codigo);

    	} 	

//echo '[{"id_codigo":"'.$datos123[0]['id_codigo'].'","descripcion":"'.$datos123[0]['descripcion'].'"   }]';

echo '[{"color":"'.$datos123[0]['color'].'"
}]';

/*
,

"descripcion":"'.$datos123[0]['descripcion'].'",

"valor_unit":"'.$datos123[0]['valorventa'].'",

"existencias":"'.$datos123[0]['cantidad'].'"

*/

?>

