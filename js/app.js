$(document).ready(function(){
	//alert('asdasd');
	



});

		$("#btn_vehiculos").click(function(){
							var data =  'codigopan =' + $("#codigopan").val();
							
							$.post('vehiculos/index.php',data,function(a){
							$("#div_cargue").html(a);
							
							});	
		});

		
		