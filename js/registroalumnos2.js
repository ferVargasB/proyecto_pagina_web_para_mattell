function Alumnos(){
	var url = "alumnosinfo2.php";
	$.post(url,{fisicas:$("#txtfisicas").val(),
				medicas:$("#txtmedicas").val(),
				fecha:$("#txtfecha").val(),
				genero:$("#genero").val(),
				
		grupo:$("#grupo").val(),},
	
	function(data){
	$("#respuesta").html(data);});		
}