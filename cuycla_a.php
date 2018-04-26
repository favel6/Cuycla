<!DOCTYPE html>
<meta charset="utf-8"> <html>
<head>
<title>Cuycla</title>
<link href="cuycla.css" rel="stylesheet" type="text/css"  media="screen"/>
<script language=javascript>

	function temporal(){
	var Palaviso = "Por ahora no tenemos ni mierda \n seleccionado para este boton \n Asi es que no vapasá na.";
		alert (Palaviso)
		};
	function editar() {self.location = "cuycla_d.php"};
	function salida(){window.close()};
	function regresar() {self.location = "cuycla_c.php?$buscar=$_GET['$buscar']"};
	function jalarle() {alert ("se epicho el radio")};
</script>

</head>
<body>

<?php

	echo "Ya llego a Cuycla_a <br>" ;
	$ID=0; $Name=""; $Tipo=""; $SubTipe=""; $Other=""; $Questions=""; $URL=""; $Comments=""; $DateAdd=""; $DateUpdate=""; $Keywords=""; $Username=""; $Password=""; $frase="";
	$buscar = '%'.$_POST['buscar'].'%';
	$frase = "SELECT * FROM data WHERE Name LIKE '$buscar' OR Keywords LIKE '$buscar' ORDER BY Name ";
	include("cuycla_x.php");
	$conex->query($frase);
	//echo "action: Regreso de conex <br>";
	if($conex->errno) die($conex->error);
	$recordsource = $conex->query($frase);
 ?>

 <h1 align= "center">LISTADO DE RESULTADOS </h1>
<table border="1" align="center">
<tr id="titulot"><h2><b>

	<th>Name</th> 
	<th width="200px">Keywords</th> 
	<th>User Name</th>
	<th>Password</th> 
<!--<td>ID</td>
	<td>Tipe</td>
	<td>SubTipe</td> 
	<td>Other</td> 
	<td>Questions</td> 
	<td>Answers</td> 
	<td>URL</td> 
	<td>Comments</td> 
	<td>DateAdd</td> 
	<td>DateUpdate</td> 
	<td>Pass2</td> -->
	<th>id</th> 
	<th>Sel</th> 
	<th>Accion</th> 	</b></h2>
</tr>
<?php 
foreach($recordsource as $fila) { ?> 

	<tr>
		<td><?php  echo $fila['Name'];  	?></td>
		<td><?php  echo $fila['Keywords'];	?></td>
		<td><?php  echo $fila['UserName'];	?></td>
		<td><?php  echo $fila['Password'];	?></td>
		<td><?php  echo $fila['ID'];  		?></td>
<!--	<td><?php  echo $fila['Tipe'];  	?></td>
		<td><?php  echo $fila['SubTipe'];	?></td>
		<td><?php  echo $fila['Other'];  	?></td>
		<td><?php  echo $fila['Questions'];	?></td>
		<td><?php  echo $fila['Answers'];	?></td>
		<td><?php  echo $fila['URL'];		?></td>
		<td><?php  echo $fila['Comments'];	?></td>
		<td><?php  echo $fila['DateAdd'];	?></td>
		<td><?php  echo $fila['DateUpdate'];?></td> -->
		<td><input id="elradio"type="radio" name="seleccion" onclick="jalarle()"/></td>
		<td><a href="cuycla_d.php?ID=<?php echo $fila['ID'];?>" >Editar</a> </td>
	</tr>
<?php } ?>
	</table>
<br /><br /><br />

<div id="botones">
	<input type="button" name="back" 	class="boton" value="Regresar" 	id="boton" onclick="regresar()" />
	<input type="button" name="select" 	class="boton" value="Seleccionar" id="boton" onclick="temporal()" />
	<input type="button" name="editar" 	class="boton" value="Editar" 	id="boton" onclick="editar()" />
	<input type="button" name="salir" 	class="boton" value="Salir" 	id="boton" onclick="salir()" />
</div>

<p id="letra1"></P>
<p id="letra2"></P>
<p id="letra3"></P>
<p id="letra4"></P>
</body>
</html>