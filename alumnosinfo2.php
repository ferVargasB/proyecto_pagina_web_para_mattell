<?php
error_reporting(E_ALL);

//variables para recuperar los datos
$fisicas = $_POST["fisicas"];
$medicas = $_POST["medicas"];
$fecha = $_POST["fecha"];
$genero = $_POST["genero"];
$grupo = $_POST["grupo"];

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
			else
			{
				
				$query = "update alumnos set caracteristicasfisicas='".$fisicas."', caracteristicasmedicas='".$medicas."', fechanacimiento='".$fecha."', genero='".$genero."', grupo_id=".$grupo." where alumno_id = (select MAX(alumno_id) from alumnos";
				
				echo $query;
				
				$resultadooperacion = $conexionMysqli->query($query);
				if ($resultadooperacion) {
					
					?>
						<div class = "text-success text-center">
							<p>Operaci&oacute;n Realizada con &eacute;xito</p>
						</div>
						 <script type="text/javascript">
							window.location="gracias.html";
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