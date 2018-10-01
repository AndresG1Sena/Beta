<?php
session_start();

	 $_SESSION['Nombre']='0';
	 $_SESSION['Clave']='0';
	 $_SESSION['Estado']='0';
	 $_SESSION['ID_Rol']='0';
	 header ("Location: ../Index.php");
?>
