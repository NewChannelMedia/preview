<?php session_start();
include_once 'session_crear.php';

$registrar = true;

$nombre = 'Cinthia';
$apellido = 'Bermúdez';
$correo = 'bmdz.acos@gmail.com';
$estado = 'Sinaloa';
$ciudad = 'Los Mochis';
$especialidad = 'Maxilofacial';
$subespecialidad = 'anestesiologo';

if ($registrar){
  include_once '_conexion.php';
  /*
  $sql = "INSERT INTO previewRegistrados (firstname, lastname, email)
  VALUES ('John', 'Doe', 'john@example.com')";

  if ($conexion->query($sql) === TRUE) {
      echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();*/
  //insertar en bd preview
}

//Crear usuario en variable $_SESSION['sesiones']

//echo json_encode($result);
?>
