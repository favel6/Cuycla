<?php 
include("cuycla_x.php");
$ID=0;$Name=""; $Tipo=""; $SubTipe=""; $Other=""; $Questions=""; $URL=""; $Comments=""; $DateAdd=""; $DateUpdate=""; 
$Keywords=""; $UserName=""; $Password="";
if(isset($_GET['ID'])){$ID=$_GET['ID'];
$frase="SELECT * FROM Data WHERE ID = '$ID'";
$recordset=($conex->query($frase));

foreach($recordset as $fila){
		$ID=$fila['ID'];
		$Name=$fila['Name'];
		$Tipe=$fila['Tipe'];
		$SubTipe=$fila['SubTipe'];
		$Other=$fila['Other'];
		$Questions=$fila['Questions'];
		$URL=$fila['URL'];
		$Comments=$fila['Comments'];
		$DateAdd=$fila['DateAdd'];
		$DateUpdate=$fila['DateUpdate'];
		$Keywords=$fila['Keywords'];
		$Username=$fila['UserName'];
		$Password=$fila['Password'];
	}
}

?>

<!DOCTYPE html>
<html>
<meta charset="UTF-8"> 
<head>
<title>PHP Testing Page</title>
<link href="cuycla.css" rel="stylesheet" type="text/css"  media="screen"/>
<script language=javascript>
	function salida(){window.close();}
	function back(){self.location = "cuycla_a.php";}
	function temporal(){
		var Palaviso = "Por ahora no tenemos ni mierda \n seleccionado para este botón \n Así e que no va a pasa ná";
		alert (Palaviso);
		}
	function regresar() {self.location = "cuycla_c.php";}
</script>
</head>
<body>
<div id="cajon">
<form  id="display" name="display" method="post" action="display.php">
	<Table>
     <tr><td colspan="2" align="center"><h1>CUYCLA</h1></td></tr>
   <tr><td colspan="2" align="center" id="nambre"><?php echo $Name; ?><br/></td></tr>
	<tr><td><label id="lbl" >User Name: </label></td><td><input type="text" name="nombre" id="nombre" class="cajitass" 	value="<?php echo $UserName; ?>" /></td></tr>
	<tr><td><label id="lbl" >Password: 	</label></td><td><input type="text" name="password" id="pass" class="cajitass" 	value="<?php echo $Password; ?>" /></td></tr>
	<tr><td><label id="lbl" >Tipo: 		</label></td><td><input type="text" name="apellido" id="apellido" class="cajitass" value="<?php echo $Tipe; ?>" /></td></tr>
	<tr><td><label id="lbl" >Sub-Tipo: 	</label></td><td><input type="text" name="subtipo" id="subtipo" class="cajitass" value="<?php echo $SubTipe; ?>" /></td></tr>
	<tr><td><label id="lbl" >Other: 	</label></td><td><Input type="text" name="address"  width="200px" id="address" class="cajitass" value="<?php echo $Other; ?>" /></td></tr>
	<tr><td><label id="lbl" >Questions: </label></td><td><Input type="text" name="phone" id="phone" class="cajitass"  value="<?php echo $Questions; ?>" /></td></tr>
	<tr><td><label id="lbl" >Answers: 	</label></td><td><Input type="text" name="name" id="area" class="cajitass"   value="<?php echo $Questions; ?>" ></td></tr>
	<tr><td><label id="lbl" >URL: 		</label></td><td><Input type="text" name="url" id="url" class="cajitass"  value="<?php echo $URL; ?>" /></td></tr>
	<tr><td><label id="lbl" >Date Add: 	</label></td><td><Input type="text" name="DateAdd" id="area" class="cajitass"  value="<?php echo $DateAdd; ?>" ></td></tr>
	<tr><td><label id="lbl" >Date Update: </label></td><td><Input type="text" name="DateUpdate" id="area" class="cajitass"  value="<?php echo $DateUpdate; ?>" ></td></tr>
	<tr><td><label id="lbl" >Keywords: 	</label></td><td><Input type="text" name="Keywords" id="area" class="cajitass"  value="<?php echo $Keywords; ?>" ></td></tr>
	<tr><td><Input type="submit" name="submit" value="ENVIAR YA !!!">
	<Input type="button" name="submit" value="salir" onclick="salida()"> </td></tr>
</table>
</form>
</div><br /><br />
<div id="botones">
	<input type="button" name="back" 	class="boton" value="Regresar" 	id="boton" onclick="back()" />
	<input type="button" name="borrar" 	class="boton" value="Borrar" 	id="boton" onclick="temporal()" />
	<input type="button" name="editar" 	class="boton" value="Editar" 	id="boton" onclick="temporal()" />
	<input type="button" name="nuevo" 	class="boton" value="Nuevo" 	id="boton" onclick="temporal()" />
	<input type="button" name="buscar" 	class="boton" value="Buscar" 	id="boton" onclick="regresar()" />
</div></body>
</html>
<!-- /* <?php /*

' INSERT INTO `data` (`ID`, `Name`, `Tipe`, `SubTipe`, `Other`, `Questions`, `Answers`, `URL`, `Comments`, `DateAdd`, `DateUpdate`, `Keywords`, `UserName`, `Password`) 
VALUES (NULL, 'Priority One Bank', 'Bank Online', 'check 6117733', 'Nosin', 'Niuna', 'Natilals por ahora', 'www.priorityonefl..org', 'Hope', '9/4/17', '9/4/17', 'Priority One Bank', 'Favel6', '*Priority*');
 
$Texto = $_POST([Password]);
alert ($Texto)
 */?> -->
 
 
 