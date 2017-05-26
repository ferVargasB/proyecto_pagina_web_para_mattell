function Padres(){
	var url = "padresinfo.php";
	$.post(url,{nombre:$("#txtnombretutor").val(),
				paterno:$("#txtpaternotutor").val(),
				materno:$("#txtmaternotutor").val(),
				correo:$("#txtcorreo").val(),
				usuario:$("#txtusuariopadre").val(),
				pass:$("#txtpasspadre").val(),
		direccion:$("#txtdireccion").val(),},
	
	function(data){
	$("#respuesta").html(data);});		
}