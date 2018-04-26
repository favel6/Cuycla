<!DOCTYPE html>
<html><meta charset="UTF-8"> 
<head><title>Login Form</title>
<script languaje=javascript>
	function salida(){
	window.close();
	}
</script>
<link href="cuycla.css" rel="stylesheet" type="text/css"  media="screen"/>
</head>
<body>
<?php //echo $buscar ;
	echo "cateo inicial";
	if(isset ($buscar)) {echo $buscar;} else {echo "no hay ni mierda";}
?>
<div id="loginbox"><h1 align="center" >Login Form</h1>
	<form action="cuycla_a.php" method="POST" name="login">
		<div id="cajita">
				<input type="hidden" name="password" value="Cachipay1" />
				User Name<br /><input class="cajitas" type="password" name="username" selected /><br /><br />
				Criterio<br /><input class="cajitas" type="text" name="buscar" placeholder="Todos" /><br /><br />
		</div>
		<div ID="botonesb"><br /><br />		
			<input type="submit" class="envio" name="enviar" value="Enviar" />
			<input type="button" class="envio" name="salir" value="Salir" onclick="salida()" />
			<input type="button" class="envio" name="salir" value="Nasin" onclick="salida()" />
			<input type="button" class="envio" name="salir" value="Nasin" onclick="" />
		</div>
	</form>
</div>
</body>
</html>
<!--

			<input type="hidden" name="password" value="Cachipay1" />



-->