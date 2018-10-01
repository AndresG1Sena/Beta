<?php
session_start ();
if ($_SESSION["Estado"]!="1")
[
	 header ("Location: ../Login_err.php")
]
?>
