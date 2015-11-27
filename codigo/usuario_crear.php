<?php session_start();
include_once 'session_crear.php';

$registrar = $_POST['terminos'];

$nombre = $_POST['nombre'];
$apellido = $_POST['apellidos'];
$correo = $_POST['correoReg'];

$estado = '';
$ciudad = '';
$especialidad = '';
$subespecialidad = '';

if (isset($_POST['estado']))
$estado = $_POST['estado'];

if (isset($_POST['ciudad']))
$ciudad = $_POST['ciudad'];

if (isset($_POST['especialidad']))
$especialidad = $_POST['especialidad'];

if (isset($_POST['subespecialidad']))
$subespecialidad = $_POST['subespecialidad'];

echo ($registrar === true);

$insert = false;
if ($registrar == "true"){
  include_once '_conexion.php';
  $sql = "INSERT INTO previewRegistrados (nombre, apellido, correo,estado,ciudad,especialidad,subespecialidad)
  VALUES ('".$nombre."', '".$apellido."', '".$correo."','".$estado."','".$ciudad."','".$especialidad."','".$subespecialidad."')";
  $insert = mysql_query($sql);
  mysql_close();
}

//Crear usuario en variable $_SESSION['sesiones']
$_SESSION['sesiones'][] = array(
  'tipo' => $_POST['tipoUsuario'],
  'nombre' => $nombre . ' ' . $apellido,
  'usuario' => $correo,
  'contrasena' => $_POST['passReg'],
  'estado' => $estado,
  'ciudad' => $ciudad,
  'especialidad' =>$especialidad,
  'subespecialidad' => $subespecialidad
);

$_SESSION['session_id'] =  max(array_keys($_SESSION['sesiones']));


$result = array('success'=>true,'insert'=>$insert,'registrar'=>($registrar === true));
echo json_encode($result);
?>
