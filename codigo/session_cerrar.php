<?php session_start();
$_SESSION['session_id'] = '';
echo json_encode(array('result'=>'success'));
?>
