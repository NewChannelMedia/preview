<?php session_start();
include_once 'session_crear.php';
include_once '_conexion.php';

$nombre = $_POST['nombre'];
$correo = $_POST['email'];

$sql = "INSERT INTO previewRegistrados (nombre, correo,newsletter)
VALUES ('".$nombre."', '".$correo."',1)";
$insert = mysql_query($sql);
mysql_close();

$result = array('success'=>$insert);
echo json_encode($result);
?>
