<html>
    <head>
	<link rel="shortcut icon" href="imagenes/cubo.ico">
        <meta charset="utf-8">
        <meta name="viewport"
              content="width=device-width, initial=scale=1">
        <link href=bootstrap-3.3.7-dist/css/bootstrap.min.css rel="stylesheet">
        <title>Proyecto para la pagina Mattell</title>
        <link rel="stylesheet"
              href="datosalumnos2.css"
              type="text/css">
	  
    </head>
    <body class = "fondo" background="Fondo1.png">
		<div class="row">
		
			<h1 class = "text-center">Datos del Alumno </h1>
			<div class="col-md-12 col-xs-12 text-left">
 			<input id ="txtfisicas" type="text" maxlenght="40" , placeholder="Caracteristicas fisicas" > 
			</div>
			
			<div class="col-md-12 col-xs-12 text-left">
 			<input id ="txtmedicas" type="text" maxlenght="45", placeholder="Caracteristicas medicas"> 
			</div>
			
			<div class="col-md-12 col-xs-12 text-left">
 			<input id ="txtfecha" type="text" maxlenght="45", placeholder="Fecha de Nacimiento"> 
			</div>
			</div>
			<div class="form-group">
			 <h5 class = "text-left">Genero</h5>
			<select id="genero" name="genero">
			<option value="H">Hombre</option>
			<option value="M">Mujer</option>
			</select>
			
			<h5 class = "text-left">Grupo</h5>
			<select id="grupo" name="grupo">
			<option value="1">Maternal</option>
			<option value="2">Kinder 1</option>
			<option value="3">Kinder 2</option>
			<option value="4">Pre-Primaria</option>

			</select>
			</div>
			
			<button id="btnDatosSiguiente" class="btn btn-success btn-lg"
			onclick="Alumnos()">	
			<span class="fa fa-save"></span>
				Guardar Información</button>
				
		<div id="respuesta" class="row">
		</div>
		</div>
		<script src="js/jquery.js" type="text/javascript"></script>
		<script src="js/bootstrap.min.js" type="text/"></script>
		<script src="js/registroalumnos2.js"
				type="text/javascript"> </script>
	</body>
</html>