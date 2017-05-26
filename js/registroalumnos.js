function Alumnos(){
	var url = "alumnosinfo.php";
	$.post(url,{nombre:$("#txtnombre").val(),
				paterno:$("#txtpaterno").val(),
				materno:$("#txtmaterno").val(),
				
				curp:$("#txtcurp").val(),
				tiposangre:$("#txttiposangre").val(),
				nss:$("#txtnss").val(),
		edad:$("#txtedad").val(),},
	
	function(data){
	$("#respuesta").html(data);});		
}