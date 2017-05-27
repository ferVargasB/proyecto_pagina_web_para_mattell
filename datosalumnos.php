<html>
    <head>
	<link rel="shortcut icon" href="imagenes/cubo.ico">
        <meta charset="utf-8">
        <meta name="viewport"
              content="width=device-width, initial=scale=1">
        <link href=bootstrap-3.3.7-dist/css/bootstrap.min.css rel="stylesheet">
        <title>Proyecto para la pagina Mattell</title>
        <link rel="stylesheet"
              href="datosalumnos.css"
              type="text/css">

    </head>
    <body class = "fondo" background="Fondo1.png">
		<div class="row">

			<h1 class = "text-center">Datos del Alumno </h1>
			<div class="col-md-12 col-xs-12 text-left">
 			<input id ="txtnombre" type="text" maxlenght="25" , placeholder="Nombre...", >
			</div>

			<div class="col-md-12 col-xs-12 text-left">
 			<input id ="txtpaterno" type="text" maxlenght="25", placeholder="Apellido Paterno">
			</div>

			<div class="col-md-12 col-xs-12 text-left">
 			<input id ="txtmaterno" type="text" maxlenght="25" , placeholder ="Apellido Materno">
			</div>

			<div class="col-md-12 col-xs-12 text-left">
 			<input id ="txtcurp" type="text" maxlenght="25" , placeholder ="CURP">
			</div>

			<div class="col-md-12 col-xs-12 text-left">
 			<input id ="txttiposangre" type="text" maxlenght="25" , placeholder ="Tipo de sangre">
			</div>

			<div class="col-md-12 col-xs-12 text-left">
 			<input id ="txtnss" type="text" maxlenght="25" , placeholder ="NSS">
			</div>

			<div class="col-md-12 col-xs-12 text-left">
 			<input id ="txtedad" type="text" maxlenght="2" , placeholder ="Edad">
			</div>

			</div>
			<button id="btnDatosSiguiente" class="btn btn-success btn-lg"
			onclick="Alumnos()">
			<span class="fa fa-save"></span>
				Siguiente</button>

		<div id="respuesta" class="row">
		</div>
		</div>
		<script src="js/jquery.js" type="text/javascript"></script>
		<script src="js/bootstrap.min.js" type="text/"></script>
		<script src="js/registroalumnos.js"
				type="text/javascript"> </script>
	</body>
</html>
