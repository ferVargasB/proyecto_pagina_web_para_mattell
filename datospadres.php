<html>
    <head>
	<link rel="shortcut icon" href="imagenes/cubo.ico">
        <meta charset="utf-8">
        <meta name="viewport"
              content="width=device-width, initial=scale=1">
        <link href=bootstrap-3.3.7-dist/css/bootstrap.min.css rel="stylesheet">
        <title>Proyecto para la pagina Mattell</title>
        <link rel="stylesheet"
              href="datospadres.css"
              type="text/css">
	  
    </head>
    <body class = "fondo" background="Fondo1.png">
		<div class="row">
		
			<h1 class = "text-center">Datos del Tutor </h1>
			<div class="col-md-12 col-xs-12 text-left">
 			<input id ="txtnombretutor" type="text" maxlenght="45" , placeholder="Nombre...", > 
			</div>
			
			<div class="col-md-12 col-xs-12 text-left">
 			<input id ="txtpaternotutor" type="text" maxlenght="45", placeholder="Apellido Paterno"> 
			</div>
			
			<div class="col-md-12 col-xs-12 text-left">
 			<input id ="txtmaternotutor" type="text" maxlenght="45" , placeholder ="Apellido Materno"> 
			</div>
			
			<div class="col-md-12 col-xs-12 text-left">
 			<input id ="txtdireccion" type="text" maxlenght="45" , placeholder ="Dirección"> 
			</div>
			
			<div class="col-md-12 col-xs-12 text-left">
 			<input id ="txtcorreo" type="text" maxlenght="45" , placeholder ="Correo Electrónico"> 
			</div>
			
			<div class="col-md-12 col-xs-12 text-left">
 			<input id ="txtusuariopadre" type="text" maxlenght="45" , placeholder ="Usuario..."> 
			</div>
			
			<div class="col-md-12 col-xs-12 text-left">
 			<input id ="txtpasspadre" type="text" maxlenght="45" , placeholder ="Contraseña"> 
			</div>
			
			
			
			</div>
			<button id="btnDatosSiguiente" class="btn btn-success btn-lg"
			onclick="Padres()">	
			<span class="fa fa-save"></span>
				Siguiente</button>
		<div id="respuesta" class="row">
		</div>
		</div>
		<script src="js/jquery.js" type="text/javascript"></script>
		<script src="js/bootstrap.min.js" type="text/"></script>
		<script src="js/registropadres.js"
				type="text/javascript"> </script>
	</body>
</html>