<?php
if (!isset($_SESSION['sesiones'])){
  $_SESSION['sesiones'] = array();
  $_SESSION['sesiones'][] = array(
    'tipo' => 'P',
    'nombre' => 'Paciente De Prueba Uno',
    'usuario' => 'paciente_1@newchannel.mx',
    'contrasena' => '123123123',
    'estado' => '',
    'ciudad' => '',
    'especialidad' => '',
    'subespecialidad' => '',
  );
  $_SESSION['sesiones'][] = array(
    'tipo' => 'P',
    'nombre' => 'Paciente De Prueba Dos',
    'usuario' => 'paciente_2@newchannel.mx',
    'contrasena' => '123123123',
    'estado' => '',
    'ciudad' => '',
    'especialidad' => '',
    'subespecialidad' => '',
  );
  $_SESSION['sesiones'][] = array(
    'tipo' => 'M',
    'nombre' => 'Medico De Prueba Uno',
    'usuario' => 'medico_1@newchannel.mx',
    'contrasena' => '123123123',
    'estado' => 'Jalisco',
    'ciudad' => 'Zapopan',
    'especialidad' => 'Maxilofacial',
    'subespecialidad' => 'Anestesiólogo',
  );
  $_SESSION['sesiones'][] = array(
    'tipo' => 'M',
    'nombre' => 'Medico De Prueba Dos',
    'usuario' => 'medico_2@newchannel.mx',
    'contrasena' => '123123123',
    'estado' => '',
    'ciudad' => '',
    'especialidad' => '',
    'subespecialidad' => '',
  );
}
?>
