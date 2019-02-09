<?php
/*
echo '<pre>';
print_r($_REQUEST);
echo '</pre>';
*/
include('../valotablapc.php');
include('../funciones.php');
$sql_buscar_placa = "select * from $personas where cedula = '".$_REQUEST['placa_vehiculo']."'  ";
//echo '<br>'.$sql_buscar_placa;
$con_placa = mysql_query($sql_buscar_placa);
$filas_placa = mysql_num_rows($con_placa);
if($filas_placa > 0)
{
    echo '<h2>Esta cedula ya existe y no se puede crear mas de una vez</h2>';
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
<div class="container" id="div_datos_vehiculos"> <h3>DIGITE INFORMACION PERSONA </h3>
	<div>

		<div class="form-group">
			<div class="row">
				<div class="col-md-3">
		         <label for="cedula">Cedula:</label>
		     </div>
		     <div class="col-md-9">
		         <input onfocus="blur();" type="text"  class ="form-control"  id="cedula" value ="<?php  echo $_REQUEST['placa_vehiculo'] ?>">
		      </div>   
		</div>
	


		<div class="form-group">
			<div class="row">
				<div class="col-md-3">
			         <label for="primer_nombre">Primer Nombre:</label>
			    </div>   
			    <div class="col-md-9">
			         <input type="text"  class ="form-control"  id="primer_nombre">
			    </div>     
	         </div>
		</div>

		<div class="form-group">
				<div class="row">
				<div class="col-md-3">
					         <label for="segundo_nombre<">Segundo Nombre:</label>
				</div>	 
				<div class="col-md-9">        
					         <input type="text"  class ="form-control"  id="segundo_nombre">
				</div>	         
		</div>
		<div class="form-group">
		<div class="row">
		<div class="col-md-3">	
         <label for="apellidos<">Apellidos:</label>
        </div> 
        <div class="col-md-9">	
         <input type="text"  class ="form-control"  id="apellidos">
        </div>
        </div>

         <div class="form-group">
         	<div class="row">
			<div class="col-md-3">	
		         <label for="direccion<">Direccion:</label>
		     </div>  
		     <div class="col-md-9">	  
		         <input type="text"  class ="form-control"  id="direccion">
		     </div> 
		     </div>   
		</div>
		</div>
		<div class="form-group">
			<div class="row">
			<div class="col-md-3">	
		         <label for="telefono<">Telefono:</label>
		     </div>   
		       <div class="col-md-9">	   
		         <input type="text"  class ="form-control"  id="telefono">
		      </div>
		     </div>    
		</div>
		<div class="form-group">
				<div class="row">
			<div class="col-md-3">	
		         <label for="ciudad<">Ciudad:</label>
		    </div>
		     <div class="col-md-9">	     
		         <input type="text"  class ="form-control"  id="ciudad">
		      </div>
		    </div>     
		</div>
	</div>		
		
		
		




	
	<button class="btn btn-info btn-block btn-lg" id="btn_grabar_vehiculo">GRABAR</button>

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
		 			if($("#cedula").val().length < 1)
					   { alert('Digite una Cedula '); 
					     $(cedula).focus();
					    return false;}	

					    if($("#primer_nombre").val().length < 1)
					   { alert('Digite primer_nombre '); 
					     $(primer_nombre).focus();
					    return false;}	
					       if($("#segundo_nombre").val().length < 1)
					   { alert('Digite segundo_nombre '); 
					     $(segundo_nombre).focus();
					    return false;}	
					       if($("#apellidos").val().length < 1)
					   { alert('Digite apellidos '); 
					     $(apellidos).focus();
					    return false;}	
					       if($("#direccion").val().length < 1)
					   { alert('Digite direccion '); 
					     $(direccion).focus();
					    return false;}	
					       if($("#telefono").val().length < 1)
					   { alert('Digite telefono '); 
					     $(telefono).focus();
					    return false;}	
					       if($("#ciudad").val().length < 1)
					   { alert('Digite ciudad '); 
					     $(ciudad).focus();
					    return false;}	



							var data =  'cedula=' + $("#cedula").val();
							data += '&primer_nombre=' + $("#primer_nombre").val();
							data += '&segundo_nombre=' + $("#segundo_nombre").val();
							data += '&apellidos=' + $("#apellidos").val();
							data += '&direccion=' + $("#direccion").val();
							data += '&telefono=' + $("#telefono").val();
							data += '&ciudad=' + $("#ciudad").val();
							$.post('personas/grabar_vehiculo.php',data,function(a){
							$("#div_datos_vehiculos").html(a);
								//alert(data);
							});	
						 });

//////////////////////////////

});

</script>
