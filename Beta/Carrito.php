?<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	
	<head>
		<title>Formulario con JavaScript</title>
		
		<!--lee codigo javascript-->
		<script type="text/javascript" src="js/javascript.js"></script>
		
		<!--lee codigo css-->
		<link type="text/css" href="css/Carrito.css" rel="stylesheet" media="screen"/>
	</head>


	<body>
		<div id="todo" class="todoNo">
			<div id="menu" class="menuNo">
				
				
				<!--Producto del 1 al 9-->
				<div  name="DIVS"></div>
				<div  name="DIVS"></div>
				<div  name="DIVS"></div>
				<div  name="DIVS"></div>
				<div  name="DIVS"></div>
				<div  name="DIVS"></div>
				<div  name="DIVS"></div>
				<div  name="DIVS"></div>
				<div  name="DIVS"></div>
		
				
				<!--Botones de compra-->
				<div>
					<input type="button" id="botonTotal" value="Calcular total"/>
					<input type="button" id="botonDatos" value="Datos personales" disabled="disabled"/>
					<input type="button" id="botonPago" value="Pago" disabled="disabled"/>
					<input type="button" id="botonConfirmar" value="Confirmar pedido" disabled="disabled"/>
				 </div>

				
				<!--zona de compra, tablas, formularios, etc.-->
				<div id="divZonaCompra" class="divZonaCompraNo">

				
					<!--Carrito de la compra-->
					<div id="divTotal" class="divsNo">
						<p><b>Carrito de la compra, si quiere hacer alguna modificacion aun esta a tiempo:</b></p>
						<table id="tablaTotal"></table>
					</div>
				
				
					<!--Datos personales-->				
					<div id="divDatos" class="divsNo">
						<p><b>Introduzca sus datos personales:</b></p>

							<div id="divDatosPersonales0">
								<div id="divDatosPersonales1">
									<label>Nombre completo:</label><br/>
									<input type="text" id="nombre" value="" size="26" /><br/>
									
									
									<label>DNI:</label><br/>
									<input type="text" id="dni" value="" size="8" maxlength="9" /><br/>
									
									
									<label>Fecha de nacimiento:</label><br/>
									<select id="fechaNacimientoDia">
										<option value="">�dia�</option>
									</select>
									<select id="fechaNacimientoMes">
										<option value="">������mes</option>
										<option value="1">Enero</option>
										<option value="2">Febrero</option>
										<option value="3">Marzo</option>
										<option value="4">Abril</option>
										<option value="5">Mayo</option>
										<option value="6">Junio</option>
										<option value="7">Julio</option>
										<option value="8">Agosto</option>
										<option value="9">Septiembre</option>
										<option value="10">Octubre</option>
										<option value="11">Noviembre</option>
										<option value="12">Diciembre</option>
									</select>			
									<select id="fechaNacimientoAnio">
										<option value="">��a�o�</option>
									</select><br/>
								</div>
								
								<div id="divDatosPersonales2">
									<label>Telefono movil:</label><br/>
									<input type="text" id="movil" value="" size="8" maxlength="9"/><br/>

									<label>Email:</label><br/>
									<input type="text" id="email1" value="" size="25" /><br/>
									
									<label>Repita el email:</label><br/>
									<input type="text" id="email2" value="" size="25" />							
								</div>
							</div>

							
						<div id="divDomicilio">
							<label>Tipo de via:</label>
							<select id="tipoDeVia">
								<option value="Avenida">Avenida</option>
								<option value="Calle"selected="selected">Calle</option>
								<option value="Camino">Camino</option>
								<option value="Carretera">Carretera</option>
								<option value="Pasaje">Pasaje</option>
								<option value="Plaza">Plaza</option>
								<option value="Residencia">Residencia</option>
								<option value="Ronda">Ronda</option>
								<option value="Travesia">Travesia</option>
								<option value="Urbanizacion">Urbanizacion</option>
							</select>�����
							
							<label>Nombre via:</label>
							<input type="text" id="viaNombre" value="" size="20" /><br/>
							
							<label>N�/km:</label>
							<input type="text" id="viaNumero" value="" size="2" />��
								
							<label>Bloque:</label>
							<input type="text" id="viaBloque" value="" size="2" />���������

							<label>Escalera:</label>
							<input type="text" id="viaEscalera" value="" size="2" />��
								
							<label>Piso:</label>
							<input type="text" id="viaPiso" value="" size="2" /><br/>
							
							
							<label>Localidad:</label>
							<input type="text" id="localidad" value="" size="13"/>��
							
							<label>Codigo Postal:</label>
							<input type="text" id="codigoPostal" value="" size="5" maxlength="5"/>��
							
							<label>Provincia:</label>
							<select id="provincia">
								<option value="">����������provincia</option>
								<option value="15">A coru�a</option>
								<option value="1">�lava</option>
								<option value="2">Albacete</option>
								<option value="3">Alicante</option>
								<option value="4">Almer�a</option>
								<option value="33">Asturias</option>
								<option value="5">�vila</option>
								<option value="6">Badajoz</option>
								<option value="7">Baleares</option>
								<option value="8">Barcelona</option>
								<option value="9">Burgos</option>
								<option value="10">C�ceres</option>
								<option value="11">C�diz</option>
								<option value="39">Cantabria</option>
								<option value="12">Castell�n</option>
								<option value="51">Ceuta</option>
								<option value="13">Ciudad Real</option>
								<option value="14">C�rdoba</option>
								<option value="16">Cuenca</option>
								<option value="99">Extranjero</option>
								<option value="17">Girona</option>
								<option value="18">Granada</option>
								<option value="19">Guadalajara</option>
								<option value="20">Guip�zcoa</option>
								<option value="21">Huelva</option>
								<option value="22">Huesca</option>
								<option value="23">Ja�n</option>
								<option value="26">La rioja</option>
								<option value="35">Las palmas</option>
								<option value="24">Le�n</option>
								<option value="25">Lleida</option>
								<option value="27">Lugo</option>
								<option value="28">Madrid</option>
								<option value="29">M�laga</option>
								<option value="52">Melilla</option>
								<option value="30">Murcia</option>
								<option value="31">Navarra</option>
								<option value="32">Ourense</option>
								<option value="34">Palencia</option>
								<option value="36">Pontevedra</option>
								<option value="37">Salamanca</option>
								<option value="38">Santa cruz de tenerife</option>
								<option value="40">Segovia</option>
								<option value="41">Sevilla</option>
								<option value="42">Soria</option>
								<option value="43">Tarragona</option>
								<option value="44">Teruel</option>
								<option value="45">Toledo</option>
								<option value="46">Valencia</option>
								<option value="47">Valladolid</option>
								<option value="48">Vizcaya</option>
								<option value="49">Zamora</option>
								<option value="50">Zaragoza</option>
							</select>
						</div>								
					</div>					
					
					
					<!--Datos de pago-->
					<div id="divPago" class="divsNo">
						<p><b>Introduzca los datos de la tarjeta de credito/debito donde se cargara el cobro:</b></p>

						
						<label>Titular de la tarjeta:</label><br/>
						<input type="text" id="titular" value="" size="26" /><br/>

						
						<div id="metodosDePago">
							<label><span  id="alertTipoDeTarjeta">Tipo de tarjeta:</span></label><br/>
							<label for="visa">
								<input type="radio" id="visa" name="tarjetas" class="logoTarjetas" value="Visa">
								<img src="img/pago/visa.gif"></img>
							</label>
							  
							<label for="masterCard">
								<input type="radio" id="masterCard" name="tarjetas" class="logoTarjetas" value="MasterCard">
								<img src="img/pago/mastercard.gif"></img>
							</label>
							  
							<label for="amex">
								<input type="radio" id="amex" name="tarjetas" class="logoTarjetas" value="American Express">
								<img src="img/pago/amex.gif"></img>
							</label>
							  
							<label for="aurora">
								<input type="radio" id="aurora" name="tarjetas" class="logoTarjetas" value="Aurora">
								<img src="img/pago/aurora.gif"></img>
							</label>
					
						</div>
						
						
						<div id="divNumeroTarjeta">
							<label>N�mero tarjeta y CVC:</label><br/>
							<input type="text" id="numeroTarjeta" value="" size="15" maxlength="16" />
							<input type="text" id="cvcTarjeta" value="" size="2" maxlength="3" /><br/>
							
							
							<select id="mesTarjeta">
								<option value="">��mes�</option>
							</select>

							<select id="anioTarjeta">
								<option value="">��a�o�</option>
							</select>
						</div>
					</div>						
				</div>
			</div>	
		</div>
		<p class="pie">Imagen de fondo propiedad de <a href="http://www.appinformatica.com/" target="_black">appinformatica</a></p>
	</body>
</html>