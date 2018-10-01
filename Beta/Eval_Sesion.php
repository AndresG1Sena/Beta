<?php
	 class Login
	 {
	 public function Verificar($Correo,$Clave)
	 {
	 session_start();
	 $cont="0";
	 include('conexion.php');
	 $sql = "SELECT * FROM user WHERE Clave = '$Clave'";
	 if (!$result = $db->query($sql))
	 {
	 die('Error 404 No Encontrado (...No Conecta...)[' . $db->error . ']');
	 }
	 while ($row = $result->fetch_assoc())
	 {
	 $Correo_us=stripslashes($row ["Correo"]);
	 $Clave_us=stripslashes($row ["Clave"]);
	 $fk_ID_Rol_us=stripslashes($row ["fk_ID_Rol"]);
	 if (($Correo_us==$Correo) && ($Clave_us==$Clave))
	 {
	 $cont=$cont+1;
	 }
	 }
	 if ($cont!="0")
	 {
	 $_SESSION["Correo"]="$Correo";
	 $_SESSION["Clave"]="$Clave";
	 $_SESSION["Estado"]="1";
	 if($fk_ID_Rol_us=="1")
	 {
	 $_SESSION["ID_Rol"]="admin";
	 header ("Location: Admin/table.php");
	 }
	 if($fk_ID_Rol_us=="2")
	 {
	 $_SESSION["ID_Rol"]="user";
	 header ("Location: User/Index.php");
	 }
	 }
	 if ($cont =="0")
	 {
	 header ("Location: Login_err.php");
	 }	  
	 }
	 }
	 $nuevo=new Login();
	 $nuevo->Verificar($_POST['Correo'],$_POST['Clave']);
	 ?>
