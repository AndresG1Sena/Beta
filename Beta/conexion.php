<?php
$db = new mysqli('localhost', 'root', '', 'beta');
$acentos = $db->query("SET NAMES ''utf8");
if( $db->connect_error > 0 )
{
die('No Se Puede Conectar [' .$db->connect_error.']');
}
?>