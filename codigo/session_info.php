<?php session_start();
echo '<br/>';
if (isset($_SESSION['session_id']) && isset($_SESSION['sesiones'][$_SESSION['session_id']])){
  echo '<h2>Sesion iniciada</h2>';
  echo '<pre>'.print_r($_SESSION['sesiones'][$_SESSION['session_id']],1).'</pre>';
} else {
  echo '<h2>Sesion sin iniciar</h2>';
}


if (isset($_SESSION['sesiones'])){
  echo '<br/><hr>';
  echo '<h2>Usuarios existentes: </h2>';
  echo '<pre>'.print_r($_SESSION['sesiones'],1).'</pre>';
}
