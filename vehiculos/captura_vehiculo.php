<?php
/*
echo '<pre>';
print_r($_REQUEST);
echo '</pre>';
*/
include('../valotablapc.php');
include('../funciones.php');
$sql_buscar_placa = "select * from $carros where placa = '".$_REQUEST['placa_vehiculo']."'  ";
$con_placa = mysql_query($sql_buscar_placa);
$filas_placa = mysql_num_rows($con_placa);
if($filas_placa > 0)
{
    echo '<h2>Esta placa ya existe no se puede crear mas de una vez</h2>';
}
else
{
?>
<html>
<head>
	<title></title>
<link rel='stylesheet' href='css/bootstrap.min.css'>
<script src="js/jquery-2.1.1.js"></script>   
<script src='js/bootstrap.min.js'></script>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="container" id="div_datos_vehiculos"> <h1>DIGITE INFORMACION VEHICULO </h1>
	
		<div class="form-group">
			<div class="row">
				<div class="col-md-3">
		         <label for="placa">Placa:</label>
		        </div> 
		        <div class="col-md-9">
		         <input type="text"  class ="form-control"  id="placa" value ="<?php  echo $_REQUEST['placa_vehiculo'] ?>">
		         </div>
		        </div> 
		</div>
	
		<div class="form-group">
			<div class="row">
				<div class="col-md-3">
			         <label for="color">Color:</label>
			     </div> 
		        <div class="col-md-9">     
			         <input type="text"  class ="form-control"  id="color">
			    </div> 
			   </div>       
		</div>
		<div class="form-group">
		 <div class="row">
				<div class="col-md-3">	
			         <label for="marca<">Marca:</label>
			    </div> 
		        <div class="col-md-9">       
			         <input type="text"  class ="form-control"  id="marca">
			    </div> 
			   </div>      
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-md-3">	
	         		<label for="tipo_vehiculo<">Tipo vehiculo:</label>
	             </div> 
		        <div class="col-md-9">   
	         		<select id="tipo_vehiculo" class ="form-control"  >
	         				<option value="">Escoger Tipo Vehiculo</option>
	         				<option value="Particular">Particular</option>
	         				<option value="Publico">Publico</option>
	         			</select> 
	         	</div>
	        </div> 
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-md-3">	
		         <label for="id_conductor">Conductor:</label>
		          </div> 
		        <div class="col-md-9"> 

		         <select id="id_conductor"  class ="form-control" >
		         <?php
		            colocar_select_general($personas,$conexion,'id_persona','primer_nombre');
		         ?>
		         </select>
		      	</div>
	        </div>    

		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-md-3">	
		         <label for="id_propietario">Propietario:</label>
		         </div> 
		        <div class="col-md-9"> 
		         <select id="id_propietario"  class ="form-control" >
		         <?php
		            colocar_select_general($personas,$conexion,'id_persona','primer_nombre');
		         ?>
		         </select>
		      	</div>
	        </div>   

		</div>





	
	<button class="btn btn-primary btn-block btn-lg" id="btn_grabar_vehiculo">GRABAR VEHICULO</button>

</div>
</body>
</html>
<?php
} //fin de si la placa no existe 
?>
<script type="text/javascript">
$(document).ready(function(){
	//alert('asdasd');
/////////////////////////////
	$("#btn_grabar_vehiculo").click(function(){
		              if($("#placa").val().length < 1)
					   { alert('Digite una placa '); 
					     $(placa).focus();
					    return false;}	

					    if($("#color").val().length < 1)
					   { alert('Digite color '); 
					     $(color).focus();
					    return false;}	
					       if($("#marca").val().length < 1)
					   { alert('Digite marca '); 
					     $(marca).focus();
					    return false;}	
					      if($("#tipo_vehiculo").val().length < 1)
					   { alert('Digite tipo_vehiculo '); 
					     $(tipo_vehiculo).focus();
					    return false;}	
					      if($("#id_conductor").val().length < 1)
					   { alert('Digite conductor '); 
					     $(id_conductor).focus();
					    return false;}	
					      if($("#id_propietario").val().length < 1)
					   { alert('Digite propietario '); 
					     $(id_propietario).focus();
					    return false;}	




							var data =  'placa=' + $("#placa").val();
							data += '&color=' + $("#color").val();
							data += '&marca=' + $("#marca").val();
							data += '&tipo_vehiculo=' + $("#tipo_vehiculo").val();
							data += '&id_conductor=' + $("#id_conductor").val();
							data += '&id_propietario=' + $("#id_propietario").val();
							$.post('vehiculos/grabar_vehiculo.php',data,function(a){
							$("#div_datos_vehiculos").html(a);
								//alert(data);
							});	
						 });

//////////////////////////////

});

</script>
