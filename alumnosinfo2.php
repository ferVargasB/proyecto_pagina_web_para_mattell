<?php
error_reporting(E_ALL);

//variables para recuperar los datos
$fisicas = $_POST["fisicas"];
$medicas = $_POST["medicas"];
$fecha = $_POST["fecha"];
$genero = $_POST["genero"];
$grupo = $_POST["grupo"];

//variables del servidor
$servidor="localhost";
$basededatos="kindermattell";
$usuario="root";
$contrasenia="root";

	try {

			$conexionMysqli = new mysqli($servidor,$usuario, $contrasenia , $basededatos);
			if ($conexionMysqli-> connect_errno) {
				echo "Fallo la conexión con MYSQL:
				(" . $conexionMysqli -> connect_errno . ")
				" . $conexionMysqli -> connect_error;
			}
			else
			{

				if ( preg_match("/[a-z]+$/i", $fisicas) &&  preg_match("/[a-z]+$/i", $medicas) &&
			 	preg_match("/^[0-9]{4}-([0][1-9]|[1][0-2])-([0][1-9]|[1-2][0-9]|[3][0-1])$/", $fecha)){

					$query = ("call actualizarDatosAlumnos('".$fisicas."','".$medicas."', ".$grupo.",'".$fecha."','".$genero."')");
					echo $query;
					$resultado = $conexionMysqli->query($query);

					if ($resultado) {
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

				} else {
					echo "Datos incorrectos, verifique";
				}

			}
		}
		catch (Exception $e)
		{
			echo $e;
		}
