<?php
error_reporting(E_ALL);

//variables para recuperar los datos
echo "1";

$nombre = $_POST["nombre"];
$paterno = $_POST["paterono"];
$materno = $_POST["materno"];
$correo = $_POST["correo"];
$direccion = $_POST["direccion"];
$usuarioo = $_POST["usuario"];
$pass = $_POST["pass"];

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
				
				$query = "insert into usuarios 
				(nombre, contrasena, rol_id) values ('".$usuarioo."', '".$contrasena."', 2)";
				$resultadooperacion = $conexionMysqli->query($query);
				echo "Funcionó los primis :v";
				
				
				if ($resultadooperacion) {
					
					$query = "insert into padres 
					(nombretutor,apellidopaterno, apellidomaterno, correo, direccion, usuario_id) values (
					'".$nombre."','".$paterno."', 
					'".$materno."', '".$correo."', '".$direccion."', (select usuario_id from usuarios where nombre='".$usuarioo."' and contrasena='".$contrasena."'))";
					
					$resultadooperacion = $conexionMysqli->query($query);
						
					if ($resultadooperacion) {
					?>
						<div class = "text-success text-center">
							<p>Operaci&oacute;n Realizada con &eacute;xito</p>
						</div>
						<script type="text/javascript">
						window.location="datosalumnos.php"; 
						</script>
						<?php
					} else{
						?>
							<div class = "text-success text-center">
								<p>Operaci&oacute;n <b>NO</b> Realizada </p>
							</div>
						<?php
					}
				} else{
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
		