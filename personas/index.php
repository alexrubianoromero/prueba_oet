<html>
<head>
	<title></title>
	<link rel='stylesheet' href='css/bootstrap.min.css'>
<script src="js/jquery-2.1.1.js"></script>   
<script src='js/bootstrap.min.js'></script>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	
</head>
<body>
	<div>
		<h1>PERSONAS</h1>
		<div><input type="text" id="placa_vehiculo" placeholder="Digite Cedula">
			<button id="btn_crear_vehiculo" class="btn btn-info ">CREAR_PERSONA</button></div>
		<div id="div_vehiculos">
			<?php
            include('traer_vehiculos.php');
			?>

		</div>
	</div>
</body>
</html>
<script src="../js/jquery-2.1.1.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	//alert('asdasd');
$("#btn_crear_vehiculo").click(function(){

							 if($("#placa_vehiculo").val().length < 1)
					        { alert('Digite una Cedula '); 
					        $(placa_vehiculo).focus();
					          return false;}	
							var data =  'placa_vehiculo=' + $("#placa_vehiculo").val();
							$.post('personas/captura_vehiculo.php',data,function(a){
							$("#div_vehiculos").html(a);
								
							});	
		});
	



});
</script>

