<?php
session_start ();
if (($_SESSION["Estado"]!="1") || ($_SESSION["ID_Rol"]!="admin"))
 {
	 header ("Location: ../Login_err.php");
 }
	

?>
