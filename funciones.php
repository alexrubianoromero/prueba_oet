<?php


function get_table_assoc($datos)

		{
		 				$arreglo_assoc='';

							$i=0;	

							while($row = mysql_fetch_assoc($datos)){		

								$arreglo_assoc[$i] = $row;

								$i++;

							}

						return $arreglo_assoc;
		}

////////////////////////////////////
function colocar_select_general($tabla,$conexion,$campo1,$campo2){
	$sql_general = "select * from $tabla   ";
	//echo '<br>'.$sql_personas;
	$con_general = mysql_query($sql_general,$conexion);
	echo '<option value="" >...</option>';
	while($general  = mysql_fetch_assoc($con_general))
	{
		echo '<option value="'.$general[$campo1].'" >'.$general [$campo2].'</option>';
	}
}
///////////////////////////////////////////
?>