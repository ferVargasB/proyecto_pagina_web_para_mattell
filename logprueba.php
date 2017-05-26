<?php
error_reporting(E_ALL);

//variables para recuperar los datos
echo "1";
$us = $_POST["nombre"];
$pass = $_POST["contrasena"];
echo "xxxxx";
//variables del servidor
$servidor="localhost";
$basededatos="kindermattell";
$usuario="root";
$contrasenia="root";

	try {
		
			$conexionMysqli = new mysqli($servidor,$usuario, $contrasenia , $basededatos);
			echo "2";
			if ($conexionMysqli-> connect_errno) {
				echo "Fallo la conexión con MYSQL:
				(" . $conexionMysqli -> connect_errno . ")
				" . $conexionMysqli -> connect_error;
			}
			else{
				
				$query = "select * from usuarios where nombre='".$us."' and contrasena='".$pass."'";				
				
				echo $query;
				
				$resultadooperacion = $conexionMysqli->query($query);
				if ($resultadooperacion) {
					
					?>
						<div class = "text-success text-center">
							<p>Operaci&oacute;n Realizada con &eacute;xito</p>
						</div>
						<script type="text/javascript">
					window.location="datospadres.php";
</script>
					<?php
					/* header('Status: 301 Moved Permanently', false, 301); */
					/* header('Location: datospadres.php'); */
					
					
				} 
				else
				{
					?>
						<div class = "text-success text-center">
							<p>Operaci&oacute;n <b>NO</b> Realizada </p>
						</div>
					<?php
				}
			}
		}	 
		catch (Exception $e) 
		{
			echo $e;
		}
		
		