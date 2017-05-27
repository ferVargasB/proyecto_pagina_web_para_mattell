<?php
error_reporting(E_ALL);

//variables para recuperar los datos
$nombre = $_POST["nombre"];
$paterno = $_POST["paterno"];
$materno = $_POST["materno"];
$curp = $_POST["curp"];
$tiposangre = $_POST["tiposangre"];
$edad = $_POST["edad"];
$nss = $_POST["nss"];

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
				if ( preg_match("/^[a-z]+$/i", $nombre) && preg_match("/^[a-z]+$/i", $materno) && filter_var($correo, FILTER_VALIDATE_EMAIL) && preg_match("/^\w+$/", $usuarioo) && preg_match('/(?=[A-Z])/', $pass) ){

					$query = "insert into alumnos (nombre, apellidopaterno, apellidomaterno, curp, tipodesangre, nss, edad) values ('".$nombre."', '".$paterno."','".$materno."', '".$curp."', '".$tiposangre."', '".$nss."', ".$edad.")";

					echo $query;

					$resultadooperacion = $conexionMysqli->query($query);
					if ($resultadooperacion) {
						?>
							<div class = "text-success text-center">
								<p>Operaci&oacute;n Realizada con &eacute;xito</p>
							</div>
							<script type="text/javascript">
								window.location="datosalumnos2.php";
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
					echo "Campos incorrectos";
				}
			}
		}
		catch (Exception $e)
		{
			echo $e;
		}
