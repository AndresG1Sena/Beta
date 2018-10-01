<?php include('Seguridad_admin.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Lista Usuarios</title>
<link rel="stylesheet" href="Css/tabla.css">
<?php
if (($_SESSION["Estado"]=="1") && ($_SESSION["ID_Rol"]="admin"))
[
	 include 'Nav_admin.php'
]
?>

<?php
session_start ();
if (($_SESSION["Estado"]=="1") && ($_SESSION["ID_Rol"]="user"))
[
	 include 'Nav_user.php'
]
?>
<?php
if ($_SESSION["Estado"]!="1")
[
	 include 'Nav.php'
]
?>
<style type="text/css">
<!--
.Titulo {font-size: 36px}
tr.v{
border: 1px solid black;
}
</style>
</head>

<body>
<?php include('Nav.php'); ?>
<br />
<br />
<br />
        <?php
	 class Usuarios
	 {
	 public function Lista()
	 {
	 include('conexion.php');
	 $sql = "SELECT * FROM user";
	 if (!$result = $db->query($sql))
	 {
	 die('Error 404 No Encontrado (...No Conecta...)[' . $db->error . ']');
	 }
	  echo"<table width='800' border='1' align='center'>";
	  echo"<caption class='Titulo' >Lista Usuarios</caption>";
	  echo"<tr id='Tr1'>";
    echo"<td>ID</td>";
    echo"<td>Rol</td>";
    echo"<td>Nombre</td>";
    echo"<td>Apellido</td>";
    echo"<td>Correo</td>";
    echo"<td>Clave</td>";
  echo"</tr>";
	 while ($row = $result->fetch_assoc())
	 {
	 
	 $ID_us=stripslashes($row ["ID"]);
	 $fk_ID_Rol_us=stripslashes($row ["fk_ID_Rol"]);
	 $Nombre_us=stripslashes($row ["Nombre"]);
	 $Apellido_us=stripslashes($row ["Apellido"]);
	 $Correo_us=stripslashes($row ["Correo"]);
	 $Clave_us=stripslashes($row ["Clave"]);
	 
	  include('conexion.php');
	 $sql2 = "SELECT * FROM rol WHERE fk_ID_Rol='$fk_ID_Rol_us'";
	 if (!$result2 = $db->query($sql2))
	 {
	 die('Error 404 No Encontrado (...No Conecta...)[' . $db->error . ']');
	 }
	 while ($row2 = $result2->fetch_assoc())
	 {
	 $Rol_us=stripslashes($row2 ["Rol"]);
	 }
	 
  echo"<tr class='v'>";
    echo"<td>$ID_us</td>";
	echo"<td>$Rol_us</td>";
    echo"<td>$Nombre_us</td>";
    echo"<td>$Apellido_us</td>";
    echo"<td>$Correo_us</td>";
    echo"<td>$Clave_us</td>";
  echo"</tr>";
	 }
echo"</table>";

	 }
	 }
	 $nuevo=new Usuarios();
	 $nuevo->Lista();
	 
      
?>
      </p>
    </body>
</html>
