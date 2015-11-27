<?php
session_start();
include_once 'session_crear.php';

$_SESSION['session_id'] = '';
$result = array();

if (isset($_POST['usuario']) && $_POST['usuario'] != "" && isset($_POST['contrasena']) && $_POST['contrasena'] != "" ){
  foreach ($_SESSION['sesiones'] as $key => $session) {
    if ($session['usuario'] == $_POST['usuario'] && $session['contrasena'] === $_POST['contrasena'] && $session['tipo'] == $_POST['tipoUsuario']){
      $_SESSION['session_id'] = $key;
      $result['session_id'] = $key;
    }
  }
}

echo json_encode($result);
?>
