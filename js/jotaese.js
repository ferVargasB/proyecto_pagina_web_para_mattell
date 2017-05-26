function Leer(){
	var url = "logprueba.php";
	$.post(url,{nombre:$("#txtusuario").val(),
				constrasena:$("#txtpass").val(),
				},
	
	function(data){
	$("#respuesta").html(data);});		
}