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
		
			<h1 class = "text-center">Iniciar Sesión </h1>
			<div class="col-md-12 col-xs-12 text-left">
 			<input id ="txtusuario" type="text" maxlenght="25" , placeholder="Usuario", > 
			</div>
			
			<div class="col-md-12 col-xs-12 text-left">
 			<input id ="txtpass" type="text" maxlenght="25", placeholder="Constraseña"> 
			</div>
			
			
			
			</div>
			<button id="btnDatosSiguiente" class="btn btn-success btn-lg"
			onclick="Leer()">	
			<span class="fa fa-save"></span>
				Entrar</button>
				
		<div id="respuesta" class="row">
		</div>
		</div>
 		<script src="js/jquery.js" type="text/javascript"></script>
		<script src="js/bootstrap.min.js" type="text/"></script>
		<script src="js/jotaese.js"
				type="text/javascript"> </script>
	</body>
</html>