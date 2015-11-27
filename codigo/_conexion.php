<?php
$conexion = mysql_connect("127.0.0.1","root","") OR DIE ("Error: No es posible establecer la conexión");
mysql_select_db("preview",$conexion);
mysql_query("SET CHARACTER SET utf8 ");
?>
