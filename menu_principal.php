
<!doctype html>
<html>
<head>
	<title></title>
		<link rel='stylesheet' href='css/bootstrap.min.css'>
<script src="js/jquery-2.1.1.js"></script>   
<script src='js/bootstrap.min.js'></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
    #div_total{
    	position: relative;
    	width: 100%;
    }
    #div_superior{
    	background-color: #848484;
    	color:white;
    	padding: 10px;
    	width: 100%;
    }
    #div_cargue{
    	/*background-color: #c0c0c0;*/
    }
   
    </style>
</head>
<body>
<div class="container" align="center" id="div_total">

	
	<div id="div_superior">
		<h1>EMPRESA DE TRANSPORTES ACME</h1>
	<h2>SISTEMA DE INFORMACION DE VEHICULOS Y CONDUCTORES</h2>
		<div class="row">
			<div class="col-md-4">
			<button id="btn_personas" class="btn btn-info btn-lg btn-block">PERSONAS</button>
			</div><div class="col-md-4">
			<button id="btn_vehiculos" class="btn btn-primary btn-lg btn-block">VEHICULOS</button>
			</div><div class="col-md-4">
			<button id="btn_informe" class="btn btn-success btn-lg btn-block">INFORME</button>
			</div>
		</div>
	</div>

	<div id="div_cargue">
	</div>
</div>
</body>
</html>
<script src="js/jquery-2.1.1.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	//alert('asdasd');
$("#btn_vehiculos").click(function(){
							var data =  'codigopan =' + $("#codigopan").val();
							
							$.post('vehiculos/index.php',data,function(a){
							$("#div_cargue").html(a);
							
							});	
		});
/////////////////////////////////////////////////////////////
$("#btn_personas").click(function(){
							var data =  'codigopan =' + $("#codigopan").val();
							
							$.post('personas/index.php',data,function(a){
							$("#div_cargue").html(a);
							
							});	
		});
/////////////////////////////////////////////////////////////
$("#btn_informe").click(function(){
							var data =  'codigopan =' + $("#codigopan").val();
							
							$.post('informes/index.php',data,function(a){
							$("#div_cargue").html(a);
							
							});	
		});





});//funcion principal
</script>




