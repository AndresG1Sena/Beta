<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<link rel="stylesheet" href="Css/Login.css">
<?php include 'Nav.php' ?>
<style type="text/css">
.Titulo {
font-size: 28px
}
.Subtitulo {
font-size: 22px
}
.Form {
font-size:16px
}
.Camp {
display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.428571429;
    color: #555555;
    vertical-align: middle;
    background-color: #ffffff;
    border: 1px solid #cccccc;
    border-radius: 4px;
}
.Camp1 {display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.428571429;
    color: #555555;
    vertical-align: middle;
    background-color: #ffffff;
    border: 1px solid #cccccc;
    border-radius: 4px;
}
.Camp2 {display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.428571429;
    color: #555555;
    vertical-align: middle;
    background-color: #ffffff;
    border: 1px solid #cccccc;
    border-radius: 4px;
}
.btn {
    display: inline-block;
    padding: 6px 12px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: normal;
    line-height: 1.428571429;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    cursor: pointer;
    border: 1px solid transparent;
    border-radius: 4px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    -o-user-select: none;
    user-select: none;
	}
.color{ color: #FF0000; }
</style>
</head>
<body>
<br />
<br />
<br />
<div id="Datos">
<div align="center">
  <p><img src="Images/Logo.PNG" width="253" height="133" /></p>
</div>
<div id="Datos">
 <div id="Formulario">
 <section>
 <h1 align="left" class="Titulo">Iniciar Sesi&oacute;n</h1>
 <h3 align="left" class="Subtitulo">Utilice una cuenta local para iniciar sesi&oacute;n</h3>
 <form id="Log" name="Sesion" method="post" action="Eval_Sesion.php" autocomplete='OFF'>
   <br />
   <div align="center">
   <p class="Form">
     <label></label>
   </p>
   <table width="346" border="0">
     <tr>
       <th width="87" scope="col"><p class="Form"><b>Correo Electr&oacute;nico  </b></p></th>
       <th width="249" scope="col"><span class="Form"> 
       <input class="Camp1"id="Nombre" type="text" name="Correo" required/></span></th>
     </tr>
     <tr>
       <td><span class="Form"><b>Contrase&ntilde;a  </b></span></td>
       <td><span class="Form"><input class="Camp2" type="password" id="Clave"name="Clave" required/></span></td>
     </tr>
     <tr>
       <td colspan="2"><div align="center" class="color">Correo o Contrase&ntilde;a Incorrecta </div></td>
       </tr>
   </table>
   <p><br />
     <input id="Recordarme" type="checkbox" name="Recordarme" />
&iquest;Recordarme?</p>
   <p><br />
   </p>
   <p>
     <label>
     <input class="btn" type="submit" name="Submit" value="Iniciar Sesi&oacute;n" />
     </label>
   </p>
   </div>
   </form>
 </section>
</div>
<div id="Opciones">
 <section>
 <h1 align="center" class="Titulo">Utilice otro servicio para iniciar sesi&oacute;n.</h1>
 <h3 align="center" class="Subtitulo">&nbsp;</h3>
 <p align="center" class="Form">No existen servicios de autenticaci&oacute;n externos configurados. </p>
 <p align="center" class="Form">Consulte al proveedor&nbsp;para obtener informaci&oacute;n sobre </p>
 <p align="center" class="Form">la configuraci&oacute;n de esta aplicaci&oacute;n  para admitir </p>
 <p align="center" class="Form">el inicio de sesi&oacute;n a trav&eacute;s de servicios externos</p>
 </section>
</div>
 <br />
 <br />
 <br />
 <br />
 <br />
 <br />
 <br />
 <br />
 <br />
 <br />
 <br />
 <br />
 <br />
 <br />
 <br />
 <br />
 <br />
 <br />
 <footer id="Final">
  <p align="center"> &copy; 2018 - ModRest G1 Inc. </p>
  </footer>
</div>
</body>
</html>
